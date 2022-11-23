<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInpatient extends FormRequest {

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
            'name'       => 'required|max:200',
            'address'    => 'required',
            'phone'      => 'required',
            'skills'     => '',
            'admit_type' => '',
            'admit_time' => 'required',
            'medicine'   => 'required',
            'ward_no'    => '',
            'room_no'    => '',
            'doctor_id'  => 'required',
            'staff_id'   => 'required',
        ];
    }

    /**
     * @return array
     */
    public function data()
    {
        $wardnum="0";
        $roomnum="0";
        $data = [
            'name'       => $this->get('name'),
            'address'    => $this->get('address'),
            'phone'      => $this->get('phone'),
            'skills'     => $this->get('skills'),
            'admit_type' => $this->get('admit_type'),
            'admit_time' => $this->get('admit_time'),
            'medicine'   => $this->get('medicine'),
            'ward_no'    =>$wardnum,
            'room_no'    =>$wardnum,
            'doctor_id'  => $this->get('doctor_id'),
            'staff_id'   => $this->get('staff_id'),
        ];

        return $data;
    }
}