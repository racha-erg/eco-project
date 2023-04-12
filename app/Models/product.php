<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = ['name','image', 'brand', 'price','quantity','description'];

    public function getPrice(){
        $price=$this->price /100;
        return number_format($price,2,',','').'DH';
    }
}
