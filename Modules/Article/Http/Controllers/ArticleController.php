<?php

namespace Modules\Article\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ArticleController extends Controller
{
    public function showCreateForm(){
        $page_name ='Newsifier | Create Article';
        return view('article::layouts.createArticleForm');
    }
//    public function {
//        window.location =
//            'https://tenor.googleapis.com/v2/search?q=excited&key=AIzaSyCKWuKxlqRJHJStEemHs_ToTLKum2fXi4w&client_key=zam-pro&limit=8';
//
//    }
    public function getData(Request  $request){
        dd($request);
    }


}
