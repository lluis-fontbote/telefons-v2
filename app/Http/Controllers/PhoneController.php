<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;
use MadeITBelgium\Spintax\SpintaxFacade as Spintax;

class PhoneController extends Controller
{
    public function index()
    {
        $topReported = Phone::with(['reports' => function($q) {
            $q->orderByDesc('created_at');
        }])->withCount('reports')
        ->orderByDesc('reports_count')->limit(6)->get();

        $lastReported = Phone::with(['reports' => function($q) {
            $q->orderByDesc('created_at');
        }])->orderByDesc('created_at')->limit(6)->get();
        
        return view('front.index', compact('topReported', 'lastReported'));
    }

    public function show($id) 
    {
        $phone = Phone::with('reports')->where('id', $id)->withCount('reports')->first();
        $title = SpinTax::parse('{Qui truca des del | Què és | Qui molesta des del | Què volen del | Qui et truca des del} '.$phone->number.' ?')->generate();
        return view('front.show', compact('phone', 'title'));
    }

    public function search(Request $request)
    {
        $phone = Phone::where('number', $request->number)->first();
        if ($phone != null) {
            return redirect()->route('phone.show', $phone->id);
        } else {
            $number = $request->number;
            return view('front.showNotFound', compact('number'));
        }
    }

    public function store(Request $request)
    {
        $phone = Phone::create([
            'number' => $request->number,
            'country' => 'Espanya',
            'province' => 'Tarragona'
        ]);

        $phone->reports()->create([
            'phone_id' => $phone->id,
            'comment' => $request->comment,
            'informer' => $request->informer
        ]);

        return redirect()->route('phone.show', $phone->id);
    }
}
