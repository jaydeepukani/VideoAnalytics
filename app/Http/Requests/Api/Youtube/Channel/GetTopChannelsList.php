<?php

namespace App\Http\Requests\Api\YouTube\Channel;

use Illuminate\Foundation\Http\FormRequest;

class GetTopChannelsList extends FormRequest
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
            'maxResults' => ['sometimes', 'numeric', 'min:3'],
            'order' => ['sometimes', 'string'],
        ];
    }
}
