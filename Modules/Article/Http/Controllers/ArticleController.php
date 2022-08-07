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
}
