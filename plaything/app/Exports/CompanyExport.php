<?php

namespace App\Exports;

use App\Models\Company;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class CompanyExport implements WithHeadings, ShouldAutoSize, WithStyles//, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return;
    }

    public function makeRandomDates($times):array{
        $dates = array();
        
        $first_date="2021-01-01 00:00:00";
        $second_date="2021-12-31 23:59:999";
        
        for($i = 0; $i <= $times; $i++){
            $rand_time=rand($first_date, $second_date);
            $rand_date=date('Y-m-d g:i:s', $rand_time);
            array_push($dates, $rand_date);
        }
        return $dates;
    }

    public function map($data):array{
        return array();
    }

    //works
    public function headings():array{
        $companies=Company::get();
        $data = array('Date');
        foreach($companies as $company){
            array_push($data,$company->name);
        }
        array_push($data, 'Total');
        array_push($data, 'Diff 2020');

        return $data;
    }

    public function styles(Worksheet $sheet)
    {
            // Style the first row as bold text.
            $sheet->getStyle(1)->getFont()->setBold(true);
    }
}
