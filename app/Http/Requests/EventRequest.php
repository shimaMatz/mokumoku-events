<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
        $validate = [];
        $validate += [
            // タイトル必須
            'title' => [
                'required',
                'max:255',
            ],
            'category_id' => [
                'required',
            ],
            'date' => [
                'required',
                'after:yesterday',
            ],
            'start_time' => [
                'required',
            ],
            'end_time' => [
                'required',
            ],
            'entry_fee' => [
                'required',
                'numeric',
                'integer',
                'min:0',
            ],
            'content' => [
                'required',
            ],
        ];

        return $validate;
    }
}
