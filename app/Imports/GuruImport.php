<?php

namespace App\Imports;

use App\Models\Guru;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Illuminate\Support\Facades\Validator;

class GuruImport implements ToModel, WithStartRow, SkipsOnError
{
    use SkipsErrors;

    private $newDataCount = 0;

    public function model(array $row)
    {
        $statusPNS = trim(preg_replace('/\s+/', ' ', $row[5]));
        $sertifikasi = trim(preg_replace('/\s+/', ' ', $row[6]));
        $bidangStudi = trim(preg_replace('/\s+/', ' ', $row[7]));

        $data = [
            'pemilik' => auth()->user()->id,
            'sekolah' => auth()->user()->sekolah,
            'tahun' => $row[1],
            'nama' => $row[2],
            'jenisKelamin' => $row[3],
            'nip' => $row[4],
            'statusPNS' => $statusPNS,
            'sertifikasi' => $sertifikasi,
            'bidangStudi' => $bidangStudi,
        ];

        $validator = Validator::make($data, [
            'tahun' => 'required',
            'nama' => 'required',
            'jenisKelamin' => 'required|in:Laki-laki,Perempuan',
            'nip' => 'required',
            'statusPNS' => 'required|in:PNS,Non PNS',
            'sertifikasi' => 'required|in:Sertifikasi,Non Sertifikasi',
            'bidangStudi' => 'required',
        ]);

        if ($validator->fails()) {
            throw new \Exception('Data tidak valid: ' . implode(', ', $validator->errors()->all()));
        }

        $existing = Guru::where('pemilik', $data['pemilik'])
                                ->where('sekolah', $data['sekolah'])
                                ->where('tahun', $data['tahun'])
                                ->where('nama', $data['nama'])
                                ->where('jenisKelamin', $data['jenisKelamin'])
                                ->where('nip', $data['nip'])
                                ->where('statusPNS', $data['statusPNS'])
                                ->where('sertifikasi', $data['sertifikasi'])
                                ->where('bidangStudi', $data['bidangStudi'])
                                ->first();

        if (!$existing) {
            $this->newDataCount++;
            return new Guru($data);
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
