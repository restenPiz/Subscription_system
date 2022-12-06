@extends('Layout.Principal')
@section('content')
    <!---Inicio da parte de conteudo do sistema--->
    <div class="content-wrapper">
        
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Customer</h4>
                        <form class="forms-sample" action="{{route('customerAdd')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Name</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                            </div>
                            <button type="submit" name="submit" class="btn mr-2" style="background-color:#291C5B;border:0;border-radius:0;color:white">Add</button>
                            <a class="btn" style="background-color:red;border:0;border-radius:0;text-decoration: none;color:white" href="{{route('allCustomers')}}">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
