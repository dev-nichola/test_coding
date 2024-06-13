<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class AdminMobilCreateRequest extends FormRequest
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
            return [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'name' => 'required|string|max:255',
                'license_plate' => 'required|string|max:20|unique:mobils,license_plate',
                'rental_rate' => 'required|numeric|min:0',
                'is_available' => 'required|boolean',
                'brand_id' => 'required|exists:brands,id',
                'model_brand_id' => 'required|exists:model_brands,id',
                'description' => 'required|string|max:255',
            ];
        }
    }
