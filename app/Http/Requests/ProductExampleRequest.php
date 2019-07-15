<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductExampleRequest extends FormRequest
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
            'Name' => 'required|min:2',
            'Color' => 'required',
            'Quantity'=>'required|numeric|min:0',
            'Price'=>'required|numeric|min:0',
            'Image'=>'required|image',
            'Network'=>'required',
            'Sim'=>'required',
            'Memory'=>'required',
            'Os'=>'required',
            'CPU'=>'required',
            'Camera'=>'required',
            'SDcard'=>'required',
            'Battery'=>'required',
            'Bluetooth'=>'required',
        ];
    }
    public function messages()
    {
        $messages = [
            'Name.required' => 'Bạn thiếu tên sản phẩm!',
            'Name.min' => 'Tên sản phẩm ít nhất 2 ký tự!',
            'Color.required' => 'Bạn thiếu màu sản phẩm!',
            'Quantity.required' => 'bạn thiếu số lượng sản phẩm!',
            'Quantity.numeric' => 'Số lượng sản phẩm phải là kiểu số!',
            'Quantity.min' => 'Số lượng sản phẩm không được nhỏ hơn 0!',
            'Price.required' => 'Giá sản phẩm không được bỏ trống!',
            'Price.numeric' => 'Giá sản phẩm phải là kiểu số!',
            'Price.min' => 'Giá sản phẩm không được nhỏ hơn 0!',
            'Image.required' => 'Image không được bỏ trống!',
            'Image.image' => 'sai định dạng!',
            'Network.required' => 'không thể bỏ trống!',
            'Sim.required' => 'không thể bỏ trống!',
            'Memory.required' => 'không thể bỏ trống!',
            'Os.required' => 'không thể bỏ trống!',
            'CPU.required' => 'không thể bỏ trống!',
            'Camera.required' => 'không thể bỏ trống!',
            'SDcard.required' => 'không thể bỏ trống!',
            'Battery.required' => 'không thể bỏ trống!',
            'Bluetooth.required' => 'không thể bỏ trống!',
        ];

        return $messages;
    }
}
