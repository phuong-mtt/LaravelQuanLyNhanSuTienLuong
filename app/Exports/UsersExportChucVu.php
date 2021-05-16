<?php

namespace App\Exports;
use App\Models\ThongTinNhanVien;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class UsersExportChucVu implements FromQuery
{ 
    use Exportable;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function query()
    {
        return ThongTinNhanVien::query()->where('thongtinnhanvien.machucvu', $this->name);
    }
}
