<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function employees(){
        $employees = Employee::all();
        $pdf = Pdf::loadView('pdf.employees', compact('employees'));
        return $pdf->download('invoice.pdf');
        // return view('pdf/employees', compact('employees'));
    }
    public function payslip(){
        $pdf = Pdf::loadView('pdf.payslip');
        return $pdf->download('payslip.pdf');
    }
}
