<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function getPrice(){

        $price = $this->price *1;

        return number_format($price, 2, ',','') . 'FCFA';
    }
}
