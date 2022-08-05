<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\User\Http\Requests\SignInRequest;

class SignInController extends Controller
{
    public function showSignInPage()
    {
        $page_name = 'Newsifier | User - Sign In';
        return view('user::layouts.sign-in',compact('page_name'));
    }
    public function signingIn(SignInRequest $request)
    {
        $validated = $request->validated();
//        dd($validated);
        if (Auth::attempt(['phone' => $validated['phone'], 'password' =>$validated['password']])) {
            dd(' successfully signed in ');
            return redirect()->route('show.dashboard.page');
        }
        else {
            return redirect()->back()->with(['error' => 'The phone number or password is incorrect']);
        }
    }
}
