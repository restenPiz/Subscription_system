<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class customersController extends Controller
{
    public function index()
    {
        $customers=User::all();

        return view('client.allClient',compact('customers'));
    }
    
    public function store(Request $request)
    {
        //Instanciando a tabela
        $table=new User();

        //Capturando os dados digitados pelo usuario
        $table->name=$request->input('name');
        $table->email=$request->input('email');
        $table->password=$request->input('password');

        $table->save();

        return redirect()->route('allCustomers')->with('adicionado','O cliente foi adicionado com sucesso');;
    }

    public function edit($id)
    {
        $customer=User::where('id',$id)->first();

        return view('client.editClient', ['customer'=>$customer]);
    }
    
    public function update(Request $request)
    {
        $table=new User();

        $table->name = $request->input('name');
        $table->email = $request->input('email');
        $table->password = $request->input('password');

        $customers=User::find($request->input('id'));
        $customers->update($request->all());

        return redirect()->route('allCustomers')->with('atualizado','O cliente foi atualizado com sucesso');
    }
    
    public function destroy($id){

        User::where('id',$id)->delete();

        return redirect()->route('allCustomers')->with('eliminado','O cliente foi eliminado com sucesso');
    }
}