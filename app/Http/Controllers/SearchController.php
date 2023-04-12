<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
{
    $query = $request->input('query');

    $results = DB::table('products')
                ->where('name', 'LIKE', '%' . $query . '%')
                ->get();

    return view('search', ['results' => $results]);
}

}
