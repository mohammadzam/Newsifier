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

    public function ShowRegistrationPage()
    {
        $page_name = 'Newsifier | User - Sign Up';
        return view('sick::layouts.sick.registration', compact('page_name'));
    }
    public function registration(RegistrationRequest $request){
        $validated = $request->validated();
         $user = User::create([
            'name' => $validated['name'],
            'phone' =>$validated['phone'] ,
            'password' => Hash::make($validated['password']),

        ]);
        $this->guard()->login($user);
        alert()->toast('You have been successfully signing up', 'success');
        dd('successfully signing up');

    }
}
