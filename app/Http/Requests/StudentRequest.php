<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use App\Rules\ValidMobile;
use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'fname' => [new Uppercase],
            'email' => 'required|email',
            'password' => 'required|min:6|max:10',
            'phone' => ['required', new ValidMobile],
            'state' => 'required|in:mirpur-1,mirpur-2,mirpur-10',
            'terms' => 'accepted',
        ];


    }

    public function messages(){
        return[
            'email.required' => 'Your Email is required',
            'email.email' => 'Your Email is invalid',
            'phone.required' => 'Your Phone Number is required',

        ];
    }
}
