<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends Request {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'city' => 'min:3|max:30',
            'country' => 'max:30',
            'phone' => 'max:30',
            'twitter' => 'max:30',
            'facebook' => 'max:30'
        ];
    }

}