@extends('Layout.Principal')
@section('content')
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Plans</h4>
                        <form class="forms-sample" action="{{ route('updatePlan',['id'=>$plan->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            {{-- Inicio da parte que contem o id do usuario --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Subscription_id</label>
                                        <select class="js-example-basic-single" name="subscription_id" style="width:100%">
                                            <option activated>{{$plan->subscription_id}}</option>
                                            @foreach ($subscriptions as $subscription)                                
                                            <option value="{{$subscription->id}}">{{$subscription->id}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{-- Fim da parte que contem o id do usuario --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Stripe_id</label>
                                        <select class="js-example-basic-single" name="stripe_id" style="width:100%">
                                            <option activated>{{$plan->stripe_id}}</option>
                                            @foreach ($subscriptions as $subscription)                                
                                            <option value="{{$subscription->stripe_id}}">{{$subscription->stripe_id}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Stripe_product</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" value="{{$plan->stripe_product}}"name="stripe_product" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Stripe_price</label>
                                        <select class="js-example-basic-single" name="stripe_price" style="width:100%">
                                            <option value="{{$plan->stripe_price}}" activated>{{$plan->stripe_price}}</option>
                                            @foreach ($subscriptions as $subscription)                                
                                            <option value="{{$subscription->stripe_price}}">{{$subscription->stripe_price}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Quantity</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" value="{{$plan->quantity}}"name="quantity" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="exampleInputUsername1" value="{{$plan->id}}" name="id" required>
                                    </div>
                                </div>
                            </div>
                            <div class="butoes">
                                <button type="submit" name="submit" class="btn mr-2"
                                style="background-color:#291C5B;border:0;border-radius:0;color:white">Update</button>
                            <a class="btn" style="background-color:red;border:0;border-radius:0;text-decoration: none;color:white"
                                href="{{ route('index') }}">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
