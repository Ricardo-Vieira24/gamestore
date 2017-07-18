<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Product;
use App\Http\Requests\Request;

class ProductPhotoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Product::where([
            'id'  => $this->id,
        ])->exists();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // Validate the photo.
            'photo' => 'required|mimes:jpeg,jpg,png,bmp',
        ];
    }
}
