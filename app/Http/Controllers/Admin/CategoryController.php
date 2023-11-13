<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        // query diye datafind
        // $data =DB::table('categories')->get();
        // return response()->json($data);

        $data= Category::all();
        return view('admin.category.category.index',compact('data'));
    }

}
