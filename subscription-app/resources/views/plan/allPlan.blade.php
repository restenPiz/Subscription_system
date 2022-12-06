@extends('Layout.Principal')
@section('content')

    <!---Inicio da parte de conteudo do sistema--->
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
                            <h6 class="card-title card-padding pb-0">Todos Planos</h6>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Id</th>
                                            <th>Subscription_id</th>
                                            <th>Stripe_id</th>
                                            <th>Stripe_product</th>
                                            <th>Stripe_price</th>
                                            <th>Created_at</th>
                                            <th>Update_at</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($plans as $plan)
                                            <tr>
                                                <td class="text-left">{{$plan->id}}</td>
                                                <td>{{$plan->subscription_id}}</td>
                                                <td>{{$plan->stripe_id}}</td>
                                                <td>{{$plan->stripe_product}}</td>
                                                <td>{{$plan->stripe_price}}</td>
                                                <td>{{$plan->created_at}}</td>
                                                <td>{{$plan->updated_at}}</td>
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
                                                                {{--Inicio da parte do edit no sistema--}}
                                                                <li class="mdc-list-item" role="menuitem">
                                                                    <a href="{{ route('editPlan', ['id' => $plan->id]) }}"
                                                                        style="color:black;text-decoration:none">Edit</a>
                                                                </li>
                                                                {{--Fim da parte do edit--}}
                                                                <form
                                                                    action="{{ route('deletePlan', $plan->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    {{--Inicio da parte de Eliminar--}}
                                                                    <li class="mdc-list-item" role="menuitem">
                                                                        <input style="background-color:white;border:0"
                                                                            type="submit" name="submit" value="Delete">
                                                                    </li>
                                                                    {{--Fim da parte do delete--}}
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
    <!---Fim da parte de conteudo--->

@endsection