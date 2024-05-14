<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ContactanosController extends Controller
{
    public function index(){
        return view('admin.contactanos.index');
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'correo'=>'required|email',
            'mensaje'=>'required'
        ]);

        /* $correo = new ContactanosMailable($request->all());
        Mail::to('kevinhipolito93@gmail.com')->send($correo);

        return redirect()->route('contactanos.index')->with('info', 'Mensaje Enviado');  */
    }
}
