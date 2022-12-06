@extends('Layout.Principal')
@section('content')
    <!---Inicio do conteudo do sistema--->

    <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
            <div class="mdc-layout-grid">

                {{-- Inicio da parte contendo as mensagens de alertas --}}
                @if (session('adicionado'))
                    <div class="alert alert-success" style="border-radius: 0" role="alert">
                        {{ session('adicionado') }}
                    </div>
                @endif

                @if (session('eliminado'))
                    <div class="alert alert-success" style="border-radius: 0" role="alert">
                        {{ session('eliminado') }}
                    </div>
                @endif

                @if (session('actualizado'))
                    <div class="alert alert-success" style="border-radius: 0" role="alert">
                        {{ session('actualizado') }}
                    </div>
                @endif
                {{-- Fim da div contendo os alertas --}}

                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <div class="mdc-card p-0">
                            <h6 class="card-title card-padding pb-0">All Subscrições</h6>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Id</th>
                                            <th>Name</th>
                                            <th>User_id</th>
                                            <th>Stripe_status</th>
                                            <th>Stripe_price</th>
                                            <th>Stripe_id</th>
                                            <th>Created_at</th>
                                            <th>Update_at</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($subscriptions as $subscription)
                                            <tr>
                                                <td class="text-left">{{$subscription->id}}</td>
                                                <td>{{$subscription->name}}</td>
                                                <td>{{$subscription->user_id}}</td>
                                                <td>{{$subscription->stripe_status}}</td>
                                                <td>{{$subscription->stripe_price}}</td>
                                                <td>{{$subscription->stripe_id}}</td>
                                                <td>{{$subscription->created_at}}</td>
                                                <td>{{$subscription->updated_at}}</td>
                                                <td>
                                                    {{-- Inicio do icone que realiza a condicao de editar e eliminar os dados --}}
                                                    <div class="menu-button-container">
                                                        <a style="background-color:rgba(255, 255, 255, 0);border:0"
                                                            class="mdc-button mdc-menu-button tx-12 text-dark font-weight-light">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </a>
                                                        <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                                                            <ul class="mdc-list" role="menu" aria-hidden="true"
                                                                aria-orientation="vertical">
                                                                <li class="mdc-list-item" role="menuitem">
                                                                    <a href="{{ route('editSubscriptions', ['id' => $subscription->id]) }}"
                                                                        style="color:black;text-decoration:none">Edit</a>
                                                                </li>
                                                                <form
                                                                    action="{{ route('deleteSubscriptions', $subscription->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <li class="mdc-list-item" role="menuitem">
                                                                        <input style="background-color:white;border:0"
                                                                            type="submit" name="submit" value="Delete">
                                                                    </li>
                                                                </form>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    {{-- Fim da div para que realiza a condicao de eliminar e editar --}}
                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!--Fim do conteudo do sistema-->
@endsection
