<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cursolaravel;

class ControlePessoa extends Controller{

    public function index(){
        $eventos = cursolaravel::all();
        return view('curso', ['eventos' =>$eventos]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request){
        $evento = new cursolaravel; 
        $evento -> nome = $request -> nome;
        $evento -> sobrenome = $request -> sobrenome;
        $evento -> save();
        return redirect('/curso');
    }

    public function show($id)
    {
        //
    }

    public function edit($id){
        $exibir = cursolaravel::findOrFail($id);
        return view('/edit',['eventos' =>$exibir]);
    }

    public function update(Request $request, $id){

       cursolaravel::findOrFail($request->id)->update($request->all());
       return redirect('/curso');
    }

    public function destroy($id){
        cursolaravel::findOrFail($id)->delete();
        return redirect('/curso') -> with('msg','Deletado com sucesso.');
    }

}
