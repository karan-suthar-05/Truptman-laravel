<?php

namespace App\Http\Controllers;

use App\Models\QuoteForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuoteFormController extends Controller
{
    public function __invoke(Request $request)
    {

        $attributes = $request->validate([
            'name' => ['required'],
            'email'=> ['required','email','unique:quote_forms,email'],
            'phone'=> ['required','min:10','max:10'],
            'country' => ['required'],
            'service' => ['required','in:MobileApp,Website,UI/UX,IoT,QA'],
            'budget' => ['required','in:<$5k,$5k-$10k,$10k-$20k,$20k-$30k,>$30k']
        ]);

        QuoteForm::create($attributes);
        Session::flash('success', 'Form submited successfully!');
        return redirect("/get-a-quote");
    }
}
