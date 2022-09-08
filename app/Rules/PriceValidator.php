<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PriceValidator implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
       $price = request()->get('price');
       $name  = request()->get('name');
       $slug = request()->get('slug');

       if($price <= 0){
        return false;
       }else{
        return true;
       }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute should be positive number.';
    }
}
