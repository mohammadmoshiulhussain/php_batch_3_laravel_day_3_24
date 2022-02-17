<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getAllProduct()
    {
        return [
            0 => [
                'id'          => 1,
                'name'        => 'T-Shirt',
                'price'       => '2850',
                'description' => 'Some content goes here about this product.',
                'image'       => asset('/img/a1.jpg'),
            ],
            1 => [
                'id'          => 2,
                'name'        => 'Watch',
                'price'       => '1850',
                'description' => 'Some content goes here about this product.',
                'image'       => asset('/img/a2.jpg'),
            ],
            2 => [
                'id'          => 3,
                'name'        => 'Mask',
                'price'       => '100',
                'description' => 'Some content goes here about this product.',
                'image'       => asset('/img/a3.jpg'),
            ],
        ];
    }
}
