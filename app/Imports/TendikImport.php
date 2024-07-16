<?php

namespace App\Imports;

use App\Models\TenagaPendidik;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Illuminate\Support\Facades\Validator;

class TendikImport implements ToModel, WithStartRow, SkipsOnError
{
    use SkipsErrors;

    private $newDataCount = 0;

    public function model(array $row)
    {
        $statusPNS = trim(preg_replace('/\s+/', ' ', $row[5]));
        $bidangPekerjaan = trim(preg_replace('/\s+/', ' ', $row[6]));

        $data = [
            'pemilik' => auth()->user()->id,
            'sekolah' => auth()->user()->sekolah,
            'tahun' => $row[1],
            'nama' => $row[2],
            'jenisKelamin' => $row[3],
            'nip' => $row[4],
            'statusPNS' => $statusPNS,
            'bidangPekerjaan' => $bidangPekerjaan,
        ];

        $validator = Validator::make($data, [
            'tahun' => 'required',
            'nama' => 'required',
            'jenisKelamin' => 'required|in:Laki-Laki,Perempuan',
            'nip' => 'required',
            'statusPNS' => 'required|in:PNS,Non PNS',
            'bidangPekerjaan' => 'required',
        ]);

        if ($validator->fails()) {
            throw new \Exception('Data tidak valid: ' . implode(', ', $validator->errors()->all()));
        }

        $existing = TenagaPendidik::where('pemilik', $data['pemilik'])
                                ->where('sekolah', $data['sekolah'])
                                ->where('tahun', $data['tahun'])
                                ->where('nama', $data['nama'])
                                ->where('jenisKelamin', $data['jenisKelamin'])
                                ->where('nip', $data['nip'])
                                ->where('statusPNS', $data['statusPNS'])
                                ->where('bidangPekerjaan', $data['bidangPekerjaan'])
                                ->first();

        if (!$existing) {
            $this->newDataCount++;
            return new TenagaPendidik($data);
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
