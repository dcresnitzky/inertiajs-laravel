<?php

namespace App\Http\FormRequests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'attachment' => 'required|file',
            'job_position_id' => 'required|exists:job_position,id'
        ];
    }

}
