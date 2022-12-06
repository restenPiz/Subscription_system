<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class subscriptionController extends Controller
{
    public function index()
    {
        $subscriptions=Subscription::all();

        return view('subscription.allSubscription',compact('subscriptions'));
    }
    
    public function store(Request $request)
    {
        $table = new Subscription();

        $table->user_id=$request->input('user_id');
        $table->name=$request->input('name');
        $table->stripe_status=$request->input('stripe_status');
        $table->stripe_price=$request->input('stripe_price');
        $table->stripe_id=$request->input('stripe_id');
        $table->quantity=$request->input('quantity');

        $table->save();

        return redirect()->route('allSubscriptions')->with('adicionado','Subscricao adicionada com sucesso');
    }

    public function edit($id)
    {
        $subscription=Subscription::where('id',$id)->first();

        return view('subscription.editSubscription',['subscription'=>$subscription]);
    }

    public function update(Request $request, $id)
    {
        $table = new Subscription();

        $table->id=$request->input('id');
        $table->name=$request->input('name');
        $table->user_id=$request->input('user_id');
        $table->stripe_price=$request->input('stripe_price');
        $table->stripe_id=$request->input('stripe_id');
        $table->stripe_status=$request->input('stripe_status');

        $subscription=Subscription::find($table->input('id'));
        $subscription->update($request->all());
        
        return view('subscription.allSubscription')->with('actualizado','A subscricao foi atualizada com sucesso!');

    }

    public function destroy($id)
    {
        Subscription::where('id',$id)->delete();

        return redirect()->route('allSubscriptions')->with('eliminado','A sua subscricao foi eliminada com sucesso');
    }
}