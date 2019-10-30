<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'slug' => 'required|unique:news,slug,'.$this->route()->parameters()['news'].',id',
            'news_category_id' => 'required|exists:news_categories,id',
            'post_date' => 'required|date',
            'content' => 'required',
            'created_user_id' => 'required|exists:users,id'
        ];
    }
}
