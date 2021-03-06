<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Http\Exceptions\HttpResponseException;
class ProjectRequest extends FormRequest
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
    // protected function failedValidation(Validator $validator)
    //     {
    //         throw new HttpResponseException(response()->json($validator->errors(), 422));
    //     }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
         return [
            'project_name'=>'required',
            'project_description'=>'required',
            'start_date'=>'required',
            'target_end_date'=>'required',
            'end_date'=>'required'
        ];
    }
}
