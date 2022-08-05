<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class SignOutController extends Controller
{
    protected function guard()
    {
        return Auth::guard('web');

    }
    public function Logout(Request $request)
    {
//        dd('here');
        $this->guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        alert()->toast('You have been successfully signing out', 'success');
        return redirect()->route('show.main.page');
//        return redirect('user/sign-in');

    }
}
