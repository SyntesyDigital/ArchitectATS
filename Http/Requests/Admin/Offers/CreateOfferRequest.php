<?php

namespace Modules\RRHH\Http\Requests\Admin\Offers;

use Config;
use Illuminate\Foundation\Http\FormRequest;

class CreateOfferRequest extends FormRequest
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
        return Config::get('offers.rules');
    }

    public function messages()
    {
        return Config::get('offers.messages');
    }
}
