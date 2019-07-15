<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|min:2',
            'color' => 'required',
            'quantity'=>'required|numeric|min:0',
            'price'=>'required|numeric|min:0',
            'image'=>'required|image',
            'network'=>'required',
            'sim'=>'required',
            'memory'=>'required',
            'os'=>'required',
            'cpu'=>'required',
            'camera'=>'required',
            'sdcard'=>'required',
            'battery'=>'required',
            'bluetooth'=>'required',
        ];
    }
    public function messages()
    {
        $messages = [
            'name.required' => 'Bạn thiếu tên sản phẩm!',
            'name.min' => 'Tên sản phẩm ít nhất 2 ký tự!',
            'color.required' => 'Bạn thiếu màu sản phẩm!',
            'quantity.required' => 'bạn thiếu số lượng sản phẩm!',
            'quantity.numeric' => 'Số lượng sản phẩm phải là kiểu số!',
            'quantity.min' => 'Số lượng sản phẩm không được nhỏ hơn 0!',
            'price.required' => 'Giá sản phẩm không được bỏ trống!',
            'price.numeric' => 'Giá sản phẩm phải là kiểu số!',
            'price.min' => 'Giá sản phẩm không được nhỏ hơn 0!',
            'image.required' => 'Image không được bỏ trống!',
            'image.image' => 'sai định dạng!',
            'network.required' => 'không thể bỏ trống!',
            'sim.required' => 'không thể bỏ trống!',
            'memory.required' => 'không thể bỏ trống!',
            'os.required' => 'không thể bỏ trống!',
            'cpu.required' => 'không thể bỏ trống!',
            'camera.required' => 'không thể bỏ trống!',
            'sdcard.required' => 'không thể bỏ trống!',
            'battery.required' => 'không thể bỏ trống!',
            'bluetooth.required' => 'không thể bỏ trống!',
        ];
        return $messages;
    }
}
