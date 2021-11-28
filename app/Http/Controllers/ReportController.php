<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function store(Request $request)
    {
        Report::create([
            'phone_id' => $request->phone_id,
            'comment' => $request->comment,
            'informer' => $request->informer
        ]);

        return redirect()->back();
    }

}
