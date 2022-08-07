<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class employeeRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return  [
            'name' => 'required|unique:users|max:50',
            'email' => 'required|email|unique:users,email|max:50',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required|min:8',
            'description' => 'required',
            'department_id' => 'required',
            'role' => 'required|in:1,2,3',
            // 'user_id'=>'required'
        ];
    }
    public function messages()
    {


        if (App::getLocale() == 'en') {
            return [
                'name.required' => 'الاسم مطلوب',
                'name.unique' => 'يجب أن لا يتكرر الاسم أكثر من مرة',
                'email.required' => 'الايميل مطلوب',
                'email.email' => 'يجب أن يكون البريد الالكتروني بصيغة بريد التكروني',
                'email.unique' => 'يجب أن لا يتكرر الايميل أكثر من مرة',
                'password.min' => 'يجب ان تكون طول كلمة السر على الاقل 8 محارف',
                'password.required' => 'كلمة السر مطلوبة',
                'role.required' => 'role is required',
                'role.in' => 'role must be 1 or 2 or 3',
                'phone.required' => 'رقم الهاتف مطلوب',
                'isAdmin.in' => 'isAdmin must be 0 or 1',
                'description,required' => 'description is required',
                'department_id.required' => 'department_id is required',
            ];
        }
    }
}
