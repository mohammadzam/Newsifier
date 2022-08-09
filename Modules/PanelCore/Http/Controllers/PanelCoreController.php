<?php

namespace Modules\PanelCore\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Article\Entities\Article;

class PanelCoreController extends Controller
{

    public function index()
    {
        $page_name =' Newsifier | Main';
        $data = Article::withoutTrashed()->with('user')->get();
//        dd($data);
        return view('panelcore::layouts.master',compact('page_name','data'));
    }

}
