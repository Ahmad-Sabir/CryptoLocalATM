<?php

namespace App\Exports;

use App\CodesData;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProjectExport implements WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
{
return [
        'name',
        'voucher',
        'qr_code',
];
}
    public function map($code): array
    {
       return [
           $code->id,
           $code->created_at,
           $code->updated_at,

       ];
    }
}
