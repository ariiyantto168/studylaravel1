<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Items;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('admin');
    }

    public function index()
    {
        $contents = [
            // ini buat apa ya
            'items' => Items::with('users','categories')->get()
        ];

        // return $contents;
        // dd($contents);
        $pagecontent = view('items.index',$contents);

        // masterpage
        $pagemain = array(
            'title' => 'Master Items',
            'menu' => 'master',
            'submenu' => 'items',
            'pagecontent' => $pagecontent
        );

        return view('masterpage', $pagemain);
    }

    public function create_page()
    {
        $contents = [
            'categories' => Categories::all(),
        ];

        $pagecontent = view('items.create',$contents);

        // masterpage
        $pagemain = array(
            'title' => 'Master Items',
            'menu' => 'master',
            'submenu' => 'items',
            'pagecontent' => $pagecontent
        );

        return view('masterpage', $pagemain);
    }
}
