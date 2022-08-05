<?php

namespace Modules\PanelCore\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PanelCoreController extends Controller
{

    public function index()
    {
        return view('panelcore::layouts.master');
    }

}
