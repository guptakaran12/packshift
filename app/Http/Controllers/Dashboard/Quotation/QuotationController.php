<?php

namespace App\Http\Controllers\Dashboard\Quotation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class QuotationController extends Controller
{
  public function quotationCreatePage()
  {
    $countries = [];
    $countries = DB::table('countries')->get();
    return view('dashboard.quotation.index',compact('countries'));
  }
}
