<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChefRequest extends FormRequest
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
            'name' => 'required|min:2',
            'email' => 'required|email',
            'professional' => 'required',
            'employed_at' => 'required|date'
        ];
    }

    public function attributes()
    {
        return [
            'name' => '姓名',
            'professional' => '專長',
            'employed_at' => '僱用日期'
        ];
    }
}
