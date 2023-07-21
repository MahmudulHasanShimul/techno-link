<?php

namespace App\Http\Controllers;

use App\Models\ReSeller;
use Illuminate\Http\Request;
use Session;

class ReSellerAuthController extends Controller
{
    private $reSeller;

    public function index()
    {
        return view('reSeller.index');
    }

    public function login(Request $request)
    {
        $this->reSeller = ReSeller::where('email', $request->email)->first();
        if($this->reSeller)
        {
            if(password_verify($request->password, $this->reSeller->password))
            {
                Session::put('reSeller_id', $this->reSeller->id);
                Session::put('reSeller_owner_name', $this->reSeller->owner_name);
                return redirect(route('reseller.dashboard',['id' => Session::get('reSeller_id')]));
            }
            else
            {
                return back()->with('msg', 'Wrong Password');

            }
        }
        else{
            return back()->with('msg', 'Invalid Email Address');
        }
    }

    public function logout()
    {
        Session::forget('reSeller_id');
        Session::forget('reSeller_owner_name');

        return redirect('/');
    }

    public function dashboard($id)
    {
        return view('reSeller.dashboard',['reSeller' => ReSeller::find($id)]);
    }
}
