<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\HousingLevy;
use App\Models\Nhif;
use App\Models\NhifRelief;
use App\Models\Nssf;
use App\Models\Paye;
use App\Models\Relief;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PayrollController extends Controller
{
    public function calculator(){
        $employees = Employee::all();
        $payes = Paye::all();
        $levy = HousingLevy::findorFail(1);
        $nssf = Nssf::findorFail(1);
        $nhifrelief = NhifRelief::findorFail(1);
        $relief = Relief::findorFail(1);
        
        
        
        $updatedsalary = [];
        foreach($employees as $employee){
             $salary=  $employee->salary;
            
             
        // $nhif = Nhif::where('low_income' , '<=', $salary)->orWhere('high_income', '>=', $salary)
        // ->orWhereNull('high_income')->first(); 
        // dd(DB::getQueryLog());

        if($salary < $nssf->lel){
            $tier1 = ($nssf->pension)/100 * $salary;
        }else{
            $tier1 = ($nssf->pension)/100 * $nssf->lel;
        }
        
        if($salary <= $nssf->lel){
            $tier2 = 0;
        }elseif($salary > $nssf->lel && $salary <= $nssf->hel){
            $bal = $salary - $nssf->lel;
            $tier2 = ($nssf->pension)/100 * $bal;
        }else{
            $bal = $nssf->hel - $nssf->lel;
            $tier2 = $bal * ($nssf->pension)/100;
        }



        $paye_amount = 0;  
        $taxable_income = $salary - $tier1 - $tier2;
        // dd($taxable_income);


            foreach($payes as $paye){
                
                if($taxable_income > $paye->high_income){
                    $deduct = $paye->high_income - $paye->low_income;
                    $paye_amount += $deduct * ($paye->rates)/100;
                }else{
                        $deduct = $taxable_income - $paye->low_income;
                        $paye_amount += $deduct * ($paye->rates)/100;

                        break;
                }

            }



        $nhif = Nhif::where('low_income' , '<=', $salary)
             ->where(function($query) use ($salary) {
                 $query->where('high_income', '>=', $salary)
                     ->orWhereNull('high_income');
             })->first();


         $newsalary = $salary;

         if($nhif){
            $rate = $nhif->rates;
            $nhifsrelief = $rate * ($nhifrelief->relief)/100;
         }

         $deductrelief = $paye_amount - $nhifsrelief - $relief->relief;

         if($deductrelief < 0){
            
         }



        //  return $rate;

        // $net = 
            $updatedsalarys[] = [
                'name' => $employee->name,
                'newsalary' => $newsalary,
                'rate' => $rate,
                'paye' => $paye_amount,
                'nhifsrelief' => $nhifsrelief,
                // 'net' => $net,
            ];
        }


        return view('display', compact('updatedsalarys'));


    }
}
