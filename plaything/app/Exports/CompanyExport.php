<?php

namespace App\Exports;

use App\Models\Company;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class CompanyExport implements WithHeadings, ShouldAutoSize, WithStyles//, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return [0];
    // }

    // public function map($companies):array{
    //     return null;
    // }

    //works
    public function headings():array{
        $companies=Company::get();
        $data = array();
        foreach($companies as $company){
            array_push($data,$company->name);
        }
        return $data;
    }

    public function styles(Worksheet $sheet)
    {
            // Style the first row as bold text.
            $sheet->getStyle(1)->getFont()->setBold(true);

            // Styling a specific cell by coordinate.
            //'B2' => ['font' => ['italic' => true]],

            // Styling an entire column.
            //'C'  => ['font' => ['size' => 16]],
    }
}
