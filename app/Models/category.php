<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $fillable = ['name'];

    //banyak products di miliki oleh satu buah category

    public function products()
    {
        return $this->hasMany(Product::class,);
    }

}
