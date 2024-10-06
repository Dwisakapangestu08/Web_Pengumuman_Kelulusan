<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new User([
            'kelas' => $row['kelas'],
            'no_absen' => $row['no_absen'],
            'nis' => $row['nis'],
            'nisn' => $row['nisn'],
            'nama' => $row['nama'],
            'password' => $row['nis'],
            'jenis_kelamin' => $row['jenis_kelamin'],
            'keterangan' => $row['keterangan'],
        ]);
    }
}
