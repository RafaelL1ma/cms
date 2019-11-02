<?php

namespace App\Http\Controllers;

use app\Thing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ThingController extends Controller
{
    public function index(){
        $things = Thing::All();
        return view('pages-list-thing', compact('thing'));
    }
}
