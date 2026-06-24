<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    /**
     * Ai được phép gửi request này?
     * true = tất cả (lab demo)
     * Buổi 10 sẽ thay bằng: return auth() -> check();
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:5', 'max:255'],
            'content'=>['required', 'string', 'min:10'],
        ];
    }
    // Thông báo lỗi tùy chỉnh (tiếng Việt)
    public function messages(): array {
        return[
            'title.required' =>'Tiêu đề bài viết không được để trống.',
            'title.min'      =>'Tiêu đề phải có ít nhất :min kí tự.',
            'title.max'      =>'Tiêu đề không được vượt quá :max ký tự.',
            'content.required' => 'Nội dung bài viết không được để trống.',
            'content.min'    => 'Nội dung phải có ít nhất :min kí tự.',
        ];
    
    }

    /**
     * Tên hiển thị của field trong lỗi mặc định
     * (khi không có custom message cho rule đó)
     */
    public function attributes(): array {
        return[
            'title' => 'tiêu đề',
            'content'=>'nội dung',
        ];
    }
}
