<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
class CompanyRequest extends FormRequest
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
        $formRules = [
            "name" => [
                "required",
                // Rule::unique('UserRecruitment')->ignore( Auth::user()->id)
            ],
            "avatar" => [               
                "mimes:jpg,png,jepg"
            ],
            "image" => [              
                "mimes:jpg,png,jepg"
            ],
            "banner" => [             
                "mimes:jpg,png,jepg"
            ],
            "company_size" => [
                "required"
            ],
            "phone" => [
                "required",
                "max:12"
            ],
            "tax_code" => [
                "required",
                "integer"
            ],
            "intro" => [
                "required",
            ],
            "detail" => [
                "required"
            ],
            "address" => [
                "required"
            ],
            "map" => [
                "required"
            ],
            "slug" => [
                "required",
                "max:100"
               
            ]

            ];
        
       
        return $formRules;
    }
    public function messages()
    {
        return [
            "name.required" => "Bạn hãy nhập name",
            'name.unique' => "Tên này đã tồn tại.Xin mời nhập tên khác",
            "avatar.mimes" => "Bạn hãy nhập avatar đúng định dạng",
            "image.mimes" => "Bạn hãy nhập image đúng định dạng",
            "banner.mimes" => "Bạn hãy nhập banner đúng định dạng",
            "company_size.required" => "Bạn hãy nhập company_size",
            "phone.required" => "Bạn hãy nhập phone",
            "phone.max" => "Bạn hãy nhập phone không quá 12",
            "tax_code.required" => "Bạn hãy nhập tax_code",
            "intro.required" => "Bạn hãy nhập intro",
            "detail.required" => "Bạn hãy nhập detail",
            "address.required" => "Bạn hãy nhập address",
            "map.required" => "Bạn hãy nhập map",
            "slug.required" => "Bạn hãy nhập slug",
            "slug.max" => "Bạn hãy nhập slug không quá 100",
            "integer" => ":attributes Trường này phải là số dương!",
        ];
    }
}
