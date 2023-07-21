<?php

namespace App\Exports;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Client::select('id', 'reSeller_owner_name', 'name', 'user_id', 'phone_number', 'connection_month', 'package', 'package_rate', 'address', 'status')->get();
    }

    public function headings(): array
    {
        return['id', 'reSeller_owner_name', 'name', 'user_id', 'phone_number', 'connection_month', 'package', 'package_rate', 'address', 'status'];
    }
}
