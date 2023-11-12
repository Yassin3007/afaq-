<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OpportunityRequest extends FormRequest
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
        if ($this->isMethod('put')) {
            // When updating a resource, the field is not required.
            return [
            'company_name'=>'required',
            'title'=>'required',
            'link'=>'required',
            'description'=>'required',
            'start'=>'required|date',
            'end'=>'required|date',
            ];
        }
        return [
            'company_name'=>'required',
            'title'=>'required',
            'link'=>'required',
            'description'=>'required',
            'start'=>'required|date',
            'end'=>'required|date',
            'logo'=>'required|image',
        ];
    }
}
