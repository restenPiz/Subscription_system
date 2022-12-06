<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subscription;

class viewController extends Controller
{
    //inicio dos metodos que vao retornar as views de adicao do sistema
    public function addSubscription()
    {
        $subscriptions=User::all();
        return view('subscription.addSubscription',compact('subscriptions'));
    }
    public function addClient()
    {
        return view('client.addClient');
    }
    public function addPlan()
    {
        $subscriptions=Subscription::all();
        $users=User::all();

        return view('plan.addPlan',compact('subscriptions','users'));
    }
    public function error()
    {
        return view('Error-pages.Error');
    }
}