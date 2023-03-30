@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>List Products</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            id</th>
                                        <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Nombredddddd</th>
                                        <th class="align-middle text-center text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Precio</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        //$lisst = "hola";
                                        //echo var_dump($listProducts);
                                        //dd($lisst);
                                    @endphp
                                    
                                   
                                        <tr>
                                            
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">id</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">nombre</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">precio</span>
                                            </td>
                                            
                                        </tr>
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth.footer')
    </div>
@endsection
