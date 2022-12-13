<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'title' => 'string|max:255',
            'description' => 'string|max:255',
        ];
    }
}
