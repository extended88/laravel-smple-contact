<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'contact' || 'contact/thanks') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required | email',
            'subject' => 'required',
            'message' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '※名前の入力は必須です。',
            'email.required' => '※メールアドレスの入力は必須です。',
            'email.email' => '※有効なメールアドレスを入力してください。',
            'subject.required' => '※件名はの入力は必須です。',
            'message.required' => '※お問い合わせ内容を入力してください。',
        ];
    }
}
