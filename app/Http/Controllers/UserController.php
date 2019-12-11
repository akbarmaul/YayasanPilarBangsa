<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Portfolio;
use Illuminate\Support\Facades\Log;
use App\Exceptions\User\WrongCredentialException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Sentinel;

class UserController extends Controller
{
    //
    public function index()
    {
        //
        return redirect()->route('admin.login');
    }

    public function login(){
        return view ('admin.login');
    }

    public function postLogin(Request $request){
        // dd($request->all());
        try{
            Sentinel::authenticate($request->all());
            if(Sentinel::check())
                return redirect()->route('admin.dashboard');
            else
                throw new WrongCredentialException("Username atau Password salah");
        } catch (WrongCredentialException $e) {
            
            return redirect()->back()->with(['error' => $e->getMessage()]);
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            
            return redirect()->back()->with(['error' => "You are banned for $delay seconds."]);
        }
    }

    public function postLogout()
    {
        Sentinel::logout();
        return redirect()->route('admin.login');
    }
}
