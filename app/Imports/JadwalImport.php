<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Models\PeminjamanRuangan;
use Maatwebsite\Excel\Concerns\ToModel;

class JadwalImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new PeminjamanRuangan([
            'Keperluan' => $row[5],
            'Jam_mulai' => $row[6],
            'Jam_selesai' => $row[7],
            'is_accept' => $row[8],
            'ruangan_id' => $row[11],
        ]);
    }
}
