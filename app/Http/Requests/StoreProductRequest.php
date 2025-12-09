<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'        => 'required|string|max:40',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
            'sale_price'  => 'nullable|numeric|min:0|lte:price',
            'quantity'    => 'required|integer|min:0',
            'sku'         => 'required|string|unique:products,sku',
            'image'       => 'nullable|image|max:2048',
            'rating'      => 'nullable|numeric|min:0|max:5',
            'brand'       => 'nullable|string|max:100',
            'color'       => 'nullable|string|max:50',
            'size'        => 'nullable|string|max:50',
            'category_id' => 'required|exists:categories,id',
        ];
    }
}
