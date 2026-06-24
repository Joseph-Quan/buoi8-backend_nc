<?php

namespace App\Models;

use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    /** @use HasFactory<PostFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'excerpt',
        'category_id',
        'user_id',
        'published_at',
        'status',
        'view_count',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'view_count'   => 'integer',
    ];

    protected $appends = ['reading_time'];

    // ── Local Scopes ────────────────────────────────────────────

    /** Chỉ lấy bài đã published */
    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    /** Sắp xếp theo phổ biến nhất */
    public function scopePopular(Builder $query): Builder
    {
        return $query->orderByDesc('view_count');
    }

    /** Bài viết gần đây (mặc định 7 ngày) */
    public function scopeRecent(Builder $query, int $days = 7): Builder
    {
        return $query->where('published_at', '>=', now()->subDays($days));
    }

    /** Lọc theo danh mục */
    public function scopeOfCategory(Builder $query, int $categoryId): Builder
    {
        return $query->where('category_id', $categoryId);
    }

    // ── Accessor ─────────────────────────────────────────────────

    /** Thời gian đọc ước tính (200 từ/phút) */
    protected function readingTime(): Attribute
    {
        return Attribute::make(
            get: fn () => max(1, (int) ceil(str_word_count(strip_tags($this->content)) / 200)) . ' phút đọc',
        );
    }

    // ── Relationships ─────────────────────────────────────────────

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function approvedComments(): HasMany
    {
        return $this->hasMany(Comment::class)->where('is_approved', true);
    }
}
