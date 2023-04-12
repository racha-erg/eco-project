<?php

namespace App\Models;
use App\Http\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;
    protected $fillable = ['image','user_id','commentaire'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
