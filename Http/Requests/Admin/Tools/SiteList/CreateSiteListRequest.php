<?php

namespace Modules\RRHH\Http\Requests\Admin\Tools\SiteList;

use Illuminate\Foundation\Http\FormRequest;

class CreateSiteListRequest extends FormRequest
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
            'name' => 'required',
            'identifier' => 'required',
        ];
    }
}
