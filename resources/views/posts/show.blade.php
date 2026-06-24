
{{-- resources/views/posts/show.blade.php --}}
@extends('layouts.app')
@section('title', $post->title)

@section('content')
<div style="max-width: 760px; margin: 0 auto;">

    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('posts.index') }}">Danh sach bai viet</a>
            </li>
            <li class="breadcrumb-item active">
                {{ Str::limit($post->title, 40) }}
            </li>
        </ol>
    </nav>

    <article class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center py-3"
             style="background:#1B2A4A;">
            <h4 class="mb-0 text-white">{{ $post->title }}</h4>
            <div class="d-flex gap-2">
                <a href="{{ route('posts.edit', $post) }}"
                   class="btn btn-sm btn-light">Sua</a>
                <form method="POST" action="{{ route('posts.destroy', $post) }}"
                      onsubmit="return confirmDelete('{{ $post->title }}')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Xoa</button>
                </form>
            </div>
        </div>
        <div class="card-body p-4">
            <p class="text-muted small mb-4">
                Tao luc {{ $post->created_at->format('d/m/Y H:i') }}
                @if ($post->updated_at != $post->created_at)
                    - Cap nhat {{ $post->updated_at->diffForHumans() }}
                @endif
            </p>
            <div style="line-height:1.8; white-space:pre-wrap;">
                {{ $post->content }}
            </div>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('posts.index') }}" class="text-muted">
                Quay lai danh sach
            </a>
        </div>
    </article>

    <div class="mt-4">
        <h3>Bình luận ({{ $post->comments_count ?? $post->comments()->count() }})</h3>
        @foreach($post->approvedComments as $comment)
            <div class="card mb-2">
                <div class="card-body">
                    <strong>{{ optional($comment->user)->name ?? 'Ẩn danh' }}</strong>
                    <p class="mb-1">{{ $comment->body }}</p>
                    <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@push('scripts')
<script>
    function confirmDelete(title) {
        return confirm('Xoa bai viet: ' + title + '?');
    }
</script>
@endpush
