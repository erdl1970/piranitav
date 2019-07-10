<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{

    public static $messages = [
    'name.required' => 'Es necesario ingresar un nombre para la categoría.',
    'name.min' => 'El nombre de la categoría debe tener al menos 3 carácteres.',
    'description.max' => 'La descripción solo admite 250 carácteres.',

    ];

    public static $rules = [
    'name' => 'required|min: 3',
    'description' => 'max:250'
    ];

    protected $fillable = ['name', 'description'];

    // $category->products
    public function products()
    {

        return $this->hasMany(Product::class);

    }

    public function getFeaturedImageUrlAttribute()
    {
        if($this->image)
            return '/images/categories/'.$this->image;
        //else
        $firstProduct = $this->products()->first();
        if ($firstProduct)
            return $firstProduct->featured_image_url;

        return '/images/default.png';
    }
}
