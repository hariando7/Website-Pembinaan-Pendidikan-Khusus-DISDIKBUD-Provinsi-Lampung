<?php

namespace App\Imports;

use App\Models\KebutuhanGuru;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Illuminate\Support\Facades\Validator;

class KebutuhanGuruImport implements ToModel, WithStartRow, SkipsOnError
{
    use SkipsErrors;

    private $newDataCount = 0;

    public function model(array $row)
    {
        $data = [
            'pemilik' => auth()->user()->id,
            'sekolah' => auth()->user()->sekolah,
            'tahun' => $row[1],
            'mataPelajaran' => $row[2],
            'jumlahDibutuhkan' => $row[3],
            'jumlahSaatIni' => $row[4],
            'lebihKurang' => $row[5],
            'keterangan' => $row[6],
        ];

        $validator = Validator::make($data, [
            'tahun' => 'required',
            'mataPelajaran' => 'required',
            'jumlahDibutuhkan' => 'required',
            'jumlahSaatIni' => 'required',
            'lebihKurang' => 'required',
            'keterangan' => 'required',
        ]);

        if ($validator->fails()) {
            throw new \Exception('Data tidak valid: ' . implode(', ', $validator->errors()->all()));
        }

        $existing = KebutuhanGuru::where('pemilik', $data['pemilik'])
                                ->where('sekolah', $data['sekolah'])
                                ->where('tahun', $data['tahun'])
                                ->where('mataPelajaran', $data['mataPelajaran'])
                                ->where('jumlahDibutuhkan', $data['jumlahDibutuhkan'])
                                ->where('jumlahSaatIni', $data['jumlahSaatIni'])
                                ->where('lebihKurang', $data['lebihKurang'])
                                ->where('keterangan', $data['keterangan'])
                                ->first();

        if (!$existing) {
            $this->newDataCount++;
            return new KebutuhanGuru($data);
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
