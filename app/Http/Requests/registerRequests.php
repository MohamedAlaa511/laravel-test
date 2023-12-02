<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                "username" => "required|regex:/^[A-Za-z_][A-Za-z0-9_]{5,31}$/|unique:users,name" ,
                "email"    => "required|email|unique:users,email" ,
                "password" => "required|confirmed|regex:/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*\W)(?!.* ).{8,}$/" ,
                "terms_agree" => "required"
        ];
    }

    public function messages()
    {
        return [
            "username.required"     => "لم تدخل اسم المستخدم يعد" ,
            "username.regex"        => "الاسم يتكون من أحرف عربية وانجليزية وعلامة _ فقط  ",
            "username.unique"       => "اسم المستخدم غير متاح يمكن اختيار اسم أخر" ,
            "email.required"        => " لم تدخل اسم المستخدم بعد", 
            "email.unique"          => " هذا الحساب مسجل سابقا ",
            "email.email"           => " البريد اللإلكتروني غير صالح " , 
            "password.required"     => "لم تدخل كلمة المرور بعد" ,
            "password.confirmed"    => " كلمة المرور غير متطابقة" ,
            "password.regex"        => " كلمة المرور غير صالحة يرجي اتباع المعايير الموضحة  " ,
            "terms_agree.required"  => "يجب الموافقة علي قواعد وشروط الموقع" 

        ];
    }
}
