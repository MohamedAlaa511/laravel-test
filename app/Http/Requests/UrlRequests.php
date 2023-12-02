<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class UrlRequests extends FormRequest
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
            "SHORT_LINK_CODE"   => "required|min:6" , 
            "SHORT_LINK"        => [ "required" , "unique:links,short_link" ],
            "VISIT_SOURCE_LINK" => [ "required" , "unique:links,source"] ,
            "LINK_POINTS"       => "required|integer" ,
            "LINK_ALIAS"        => "regex:/[A-Za-z0-10@#_-]/|min:4"

        ];
    }

    public function messages()
    {
        return [
            "SHORT_LINK_CODE.required"        => "لم يتم إدخال كود للرابط" ,
            "SHORT_LINK_CODE.regex"           => "صيغة الكود غير صحيحة يرجي المحاولة مرة أخرى",
            "SHORT_LINK.required"             => " برجاء عدم ترك خانة الرابط المختصر فارغة ",
            "SHORT_LINK.regex"                  => " هذا الرابط غير صالح يرجي التأكد من صحة الرابط ",
            "SHORT_LINK.unique"               => " هذا الرابط تم إضافته سابقا ",
            "VISIT_SOURCE_LINK.required"      => " برجاء عدم ترك خانة رابط تغيير المصدر فارغة ",
            "VISIT_SOURCE_LINK.regex"           => " هذا الرابط غير صالح يرجي التأكد من صحة الرابط ",
            "VISIT_SOURCE_LINK.unique"        => " هذا الرابط تم إضافته سابقا ",
            "LINK_POINTS.required"            => " يرجاء عدم ترك خانة نقاط الرابط فارغة ",
            "LINK_POINTS.integer"             => " يوجد خطاء في صيغة النقاط المدخلة ",
            "LINK_ALIAS.regex"                => " لا يمكن إستخدام هذا الإسم برجاء إختير إسم أخر ",
        ];
    }
}
