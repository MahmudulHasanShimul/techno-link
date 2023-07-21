<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\Client;
use App\Models\ReSeller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Session;

class ClientController extends Controller
{
    private $client;
    public function create()
    {
        return view('client.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'unique:clients,user_id',
        ]);
      
       Client::storeClient($request, Session::get('reSeller_id'), Session::get('reSeller_owner_name'));
       return back()->with('msg', 'Your information is submitted successfully');
    }

    public function manage()
    {
        return view('admin.client.manage',['clients' => Client::all()]);
    }

    public function details($id)
    {
        return view('admin.client.details',['client' => Client::find($id)]);
    }

    public function edit($id)
    {
        return view('admin.client.edit',['client' => Client::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Client::updateClient($request, $id);
        return redirect(route('client.manage'))->with('msg', 'Client information is updated successfully');
    }

    public function delete($id)
    {
        Client::deleteClient($id);
        return back()->with('noti', 'The Client information is deleted');
    }

    public function clientList()
    {
        $this->client = Client::where('reSeller_id', Session::get('reSeller_id'))->get();
        return view('client.list',['clients'=>$this->client]);
    }

    public function clientInformation($id)
    {
        return view('client.details',['client'=>Client::find($id)]);
    }

    public function resellerWiseClientList($id)
    {
        $this->client = Client::where('reSeller_id', $id)->get();
        return view('admin.reSeller.client-list',[
            'clients'=>$this->client,
            'reSellers' => ReSeller::find($id),
        ]);
    }
    

    public function resellerWiseClientDetails($id)
    {
        return view('admin.reSeller.client-details',['client'=>Client::find($id)]);
    }

    public function export()
    {
        return Excel::download(new UsersExport, "ClientsList_".date('Y-m-d')."."."xlsx");
    }

}
