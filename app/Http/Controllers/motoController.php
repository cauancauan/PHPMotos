<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moto;
use Illuminate\Support\Facades\Redirect;

class motoController extends Controller
{
    public function FormularioCadastro()
    {
        return view('cadastrarMoto');
    }

    public function Editar()
    {
        return view('listarMoto');
    }

    public function SalvarBanco(Request $request){
        $dadosMoto = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' =>'string|required'
        ]);

        Moto::create($dadosMoto);

        return Redirect::route('home');
    }

    public function mostrarLista(){
        $data=Moto::all();
        return view('listarMoto',['Moto'=>$data]);
    }

    public function edit($id){
  
        $Moto = Moto::findOrFail($id);
        return view('edit', ['Moto' => $Moto]);

    }

    public function update(Request $request){
        Moto::findOrFail($request->id)->update($request->all());
        return Redirect::route('listarMoto');
    }

    public function destroy($id){
        Moto::findOrFail($id)->delete();
        return Redirect::route('listarMoto');
    }

}
