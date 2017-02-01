<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'first_name' => 'required|alpha',
                    'last_name' => 'required|alpha',
                    'email' => 'email|required|confirmed|unique:teladent_patient,email',
                    'email_confirmation' => 'email|required',
                    'password' => 'required|confirmed|min:6',
                    'password_confirmation' => 'required|min:6',
                    'patient_id' => 'required|unique:teladent_patient,patient_id',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'first_name' => 'required|alpha',
                    'last_name' => 'required|alpha',
                    'email' => 'email|required',
                ];
            }
            default:
                break;
        }
    }
}
