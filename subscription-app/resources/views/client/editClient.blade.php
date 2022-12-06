@extends('Layout.Principal')
@section('content')

    {{---Inicio do conteudo do sistema---}}<div class="content-wrapper">
        
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Customer</h4>
                        <form class="forms-sample" action="{{route('updateCustomers',['id'=>$customer->id])}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Name</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" value="{{$customer->name}}" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" value="{{$customer->email}}" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" value="{{$customer->password}} "name="password" required>
                            </div>
                            {{---Inicio do id contendo o valor de id--}}
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="exampleInputPassword1" value="{{$customer->id}} "name="id" required>
                            </div>
                            {{--Fim do input contendo o id--}}
                            <button type="submit" name="submit" class="btn mr-2" style="background-color:#291C5B;border:0;border-radius:0;color:white">Update</button>
                            <a class="btn" style="background-color:red;border:0;border-radius:0;text-decoration: none;color:white" href="{{route('index')}}">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{---Fim da parte contendo o conteudo do sistema---}}

@endsection