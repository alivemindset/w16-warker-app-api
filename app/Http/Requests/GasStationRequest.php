<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GasStationRequest extends FormRequest
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
        switch($this->method()) {
            case "GET":
            case "DELETE":
                return [];
            case "POST":
            case "PUT":
                return [
                    'city_id' => 'numeric',
                    'tank' => 'numeric',
                    'latitude' => 'numeric',
                    'longitude' => 'numeric'
                ];
        }

    }
}
