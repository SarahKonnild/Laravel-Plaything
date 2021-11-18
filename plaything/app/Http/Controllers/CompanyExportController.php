<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Exports\CompanyExport;
use Maatwebsite\Excel\Facades\Excel;

class CompanyExportController extends Controller{
    public function export(){
        return Excel::download(new CompanyExport, 'export.xlsx');
    }

}