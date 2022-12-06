@extends('Layout.Principal')
@section('content')
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Subscription</h4>
                        <form class="forms-sample" action="{{ route('subAdd') }}" method="POST">
                            @csrf
                            {{-- Inicio da parte que contem o id do usuario --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>User Id</label>
                                        <select class="js-example-basic-single" name="user_id" style="width:100%">
                                            <option selected>Selecione o usuario</option>
                                            @foreach ($subscriptions as $subscription)
                                                <option value="{{ $subscription->id }}">{{ $subscription->id }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{-- Fim da parte que contem o id do usuario --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Stripe_status</label>
                                        <select class="js-example-basic-single" name="stripe_status" style="width:100%">
                                            <option selected>Select the stripe_status</option>
                                            <option value="Activo">Activo</option>
                                            <option value="Inaptivo">Inaptivo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Name</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Stripe_price</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="stripe_price" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Stripe_id</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="stripe_id"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Quantity</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="quantity"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="butoes">
                                <button type="submit" name="submit" class="btn mr-2"
                                style="background-color:#291C5B;border:0;border-radius:0;color:white">Add</button>
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
