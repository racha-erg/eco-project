<?php

namespace App\Http\Controllers;
use DB;
use App\Models\User;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function index(){
        $randomUserId = random_int(1,2);
        $user_comment = User::where('id', $randomUserId)->first();
        $commentaire = Commentaire::where('user_id',$randomUserId)->first();
        return view('about', compact('user_comment','commentaire'));
    }
}
