<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    /**
     * @param array $withCount
     */
    public function details()
    {
        return $this->hasMany(CartDetail::class);

    }
}
