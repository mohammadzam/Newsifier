<?php

namespace Modules\Article\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Modules\Article\Entities\Article;

class ArticleController extends Controller
{
    public function showCreateForm()
    {
        $page_name = 'Newsifier | Create Article';
        return view('article::layouts.createArticleForm',compact('page_name'));
    }
    public function storeArticle()
    {
//        convert json decode array to array
        $data = array_values(json_decode(request()->article,true));
//        check if article contains 2 parameter (1 GIF And 1 Title )
        if (count($data[1]) == 2){
            $array = [];
//         merged data requirement to new array
            $array_of_data = array_merge($array,$data[1][0]['data'], $data[1][1]['data']);
//            check if article GIF
            if(array_key_exists('url', $array_of_data)){
//            check if article Title
                if(array_key_exists('text', $array_of_data)){
//           Start Store Function
                    Article::create([
                        'user_id'=>auth()->user()->id,
                        'title'=>$array_of_data['text'],
                        'image'=>$array_of_data['url'],
                    ]);
                    alert()->toast('The article have been successfully created', 'success');
                    return redirect()->route('show.main.page');
                }else{
                    alert()->toast('The Title Is Required', 'error');
                    return redirect()->route('user.show.create.article.form');
                }
            }else{
                alert()->toast('The GIF image Is Required', 'error');
                return redirect()->route('user.show.create.article.form');
            }
        }else{
            alert()->toast('The article must contain an One GIF image and One title', 'error');
            return redirect()->route('user.show.create.article.form');
        }

    }
}
