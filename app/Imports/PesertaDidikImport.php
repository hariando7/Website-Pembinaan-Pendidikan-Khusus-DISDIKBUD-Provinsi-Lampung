<?php

namespace App\Imports;

use App\Models\PesertaDidik;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Illuminate\Support\Facades\Validator;

class PesertaDidikImport implements ToModel, WithStartRow, SkipsOnError
{
    use SkipsErrors;

    private $newDataCount = 0;

    public function model(array $row)
    {
        $jenisKetunaan = trim(preg_replace('/\s+/', ' ', $row[4]));

        $data = [
            'pemilik' => auth()->user()->id,
            'sekolah' => auth()->user()->sekolah,
            'tahun' => $row[1],
            'nama' => $row[2],
            'jenisKelamin' => $row[3],
            'jenisKetunaan' => $jenisKetunaan,
            'kelas' => $row[5],
        ];

        $validator = Validator::make($data, [
            'tahun' => 'required',
            'nama' => 'required',
            'jenisKelamin' => 'required|in:Laki-laki,Perempuan',
            'jenisKetunaan' => 'required|in:Tunanetra,Tunarungu,Tuna Laras,Tunadaksa,Tunagrahita,Down Syndrome,Autis,Hiperaktif',
            'kelas' => 'required|in:1,2,3,4,5,6,7,8,9,10,11,12',
        ]);

        if ($validator->fails()) {
            throw new \Exception('Data tidak valid: ' . implode(', ', $validator->errors()->all()));
        }

        $existing = PesertaDidik::where('pemilik', $data['pemilik'])
                                ->where('sekolah', $data['sekolah'])
                                ->where('tahun', $data['tahun'])
                                ->where('nama', $data['nama'])
                                ->where('jenisKelamin', $data['jenisKelamin'])
                                ->where('jenisKetunaan', $data['jenisKetunaan'])
                                ->where('kelas', $data['kelas'])
                                ->first();

        if (!$existing) {
            $this->newDataCount++;
            return new PesertaDidik($data);
        }

        return null; 
    }

    public function startRow(): int
    {
        return 13; 
    }

    public function getNewDataCount(): int
    {
        return $this->newDataCount;
    }
}
