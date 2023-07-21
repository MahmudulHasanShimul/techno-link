<?php

namespace App\Http\Controllers;

use App\Models\ReSeller;
use Illuminate\Http\Request;

class ReSellerController extends Controller
{
    public function index()
    {
        return view('admin.reSeller.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name'  => 'required | unique:re_sellers,company_name',
            'owner_name'    => 'required | unique:re_sellers,owner_name',
            'mobile'        => 'required | unique:re_sellers,mobile',
            'email'         => 'required | unique:re_sellers,email',
            'password'      => 'required',
        ]);

        $reSeller = ReSeller::storeReSeller($request);
        return back()->with("msg", "Re-seller created Successfully");
    }

    public function manage()
    {
        return view('admin.reSeller.manage',['reSellers'=>ReSeller::all()]);
    }

    public function details($id)
    {
        return view('admin.reSeller.details',['reSeller'=>ReSeller::find($id)]);
    }

    public function edit($id)
    {
        return view('admin.reSeller.edit',['reSeller'=>ReSeller::find($id)]);
    }

    public function update(Request $request, $id)
    {
        ReSeller::updateReSeller($request, $id);
        return redirect(route('reselller.manage'))->with('msg', 'Re-Seller information is updated successfully');
    }

    public function delete($id)
    {
        ReSeller::deleteReSeller($id);
        return back()->with('noti', 'The Re-seller information is deleted');
    }
}
