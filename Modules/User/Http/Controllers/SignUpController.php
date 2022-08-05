<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\User\Entities\User;
use Modules\User\Http\Requests\RegistrationRequest;

class SignUpController extends Controller
{
    protected function guard()
    {
        return Auth::guard('web');
    }

    public function showSignUpPage()
    {
        $page_name = 'Newsifier | User - Sign Up';
        return view('user::layouts.sign-up', compact('page_name'));
    }
    public function signingUp(RegistrationRequest $request){
        $validated = $request->validated();
//        dd($validated);
         $user = User::create([
            'name' => $validated['name'],
            'phone' =>$validated['phone'] ,
            'password' => Hash::make($validated['password']),

        ]);
        $this->guard()->login($user);
        alert()->toast('You have been successfully signing up', 'success');
        return redirect()->route('show.main.page');
    }
}
