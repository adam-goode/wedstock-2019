<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryCustomer;
use App\Mail\EnquiryInternal;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        Mail::to('adam-goode@hotmail.co.uk')->send(new EnquiryInternal($request));
        Mail::to('adam@clevercherry.com')->send(new EnquiryInternal($request));
        return redirect()->back()->with('success', "Thank you for responding to Wedstock 2019.");
    }
}