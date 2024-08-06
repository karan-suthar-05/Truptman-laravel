<?php

namespace App\Http\Controllers;

use App\Models\CareerForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\ValidationException;

use function PHPUnit\Framework\isNull;

class CareerFormController extends Controller
{
    public function __invoke(Request $request)
    {
        $attributes = $request->validate([
            'name'          => ['required','min:2'],
            'email'         => ['required','email','unique:career_forms,email'],
            'phone'         => ['required','min:10','max:10'],
            'current_comp'  => ['required'],
            'ctc'           => ['required'],
            'job'           => ['required'],
            'experiance'    => ['required'],
            'filepath'      => ['required',File::types('jpg','png','webp')]
        ]);

        if(!isset($request->all()['filepath']))
        {
            throw ValidationException::withMessages([
                'file' => 'Please select file!!'
            ]);
        }

        $path = $request->filepath->store('logos','public');
        $attributes['filepath'] = $path;
        CareerForm::create($attributes);
        Session::flash("success","Form submited successfully!!");
        return redirect('/');
    }
}
