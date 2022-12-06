<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription_items;
use App\Models\Subscription;

class planController extends Controller
{
    public function index()
    { 
        $plans = Subscription_items::all();

        return view('plan.allPlan',compact('plans'));
    }

    public function store(Request $request)
    {
        $table = new Subscription_items();

            //Capturando todos os dados digitados no request
        $table->subscription_id = $request->input('subscription_id');
        $table->stripe_id = $request->input('stripe_id');
        $table->stripe_price = $request->input('stripe_price');
        $table->stripe_product = $request->input('stripe_product');
        $table->quantity = $request->input('quantity');
        
        $table->save();

        return redirect()->route('planAll')->with('adicionado','O seu plano foi adicionado com sucesso.');
    }

    public function edit($id)
    {
        $plan = Subscription_items::where('id',$id)->first();
        $subscriptions=Subscription::all();

        return view('plan.editPaln',compact('subscriptions', 'plan'));
    }

    public function update(Request $request, $id)
    {
        Subscription_items::findorFail($request->id)->update($request->all());

        return redirect()->route('planAll')->with('actualizado','O seu plano foi actualizado com sucesso');
    }

    public function destroy($id)
    {
        Subscription_items::where('id', $id)->delete(); 

        return redirect()->route('planAll')->with('eliminado','O seu plano foi eliminado com sucesso!');
    }
}