<?php

namespace App\Exports;

use App\Models\PeminjamanRuangan;
use Maatwebsite\Excel\Concerns\FromCollection;

class PegawaiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PeminjamanRuangan::all();
    }
}
