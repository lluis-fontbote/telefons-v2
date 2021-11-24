<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;
use MadeITBelgium\Spintax\SpintaxFacade as Spintax;

class PhoneController extends Controller
{
    public function index()
    {
        $topReported = Phone::with('reports')->withCount('reports')->orderByDesc('reports_count')->limit(3);
        $lastReported = Phone::with('reports')->orderByDesc('created_at')->limit(3);
        return view('front.index', compact('topReported', 'lastReported'));
    }

    public function show($id) 
    {
        $phone = Phone::with('reports')->where('id', $id)->get();
        $title = SpinTax::parse('{Qui truca des del | Què és | Qui molesta des del | Què volen del | Qui et truca des del} '.$phone->numero.' ?')->generate();
        return $title;
    }
}
