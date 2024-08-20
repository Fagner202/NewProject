<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            
            <div class="card-header">
                <div class="row">
                    <div class="col-xl-6 col-sm-6">
                        <h4><i class="mdi mdi-account-cowboy-hat me-2"></i>USUÁRIO</h4>
                    </div>
                    <div class="col-xl-6">
                        <div class="mt-4 mt-sm-0 d-flex align-items-center justify-content-sm-end">
                            <div class="mb-2 me-2">
                                <button type="button" class="btn btn-danger waves-effect btn-label waves-light w-sm ms-auto" onclick="desconectar()"><i class="bx bx-unlink label-icon"></i>&nbsp; Desconectar Todos</button>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-success w-xs"><i class="bx bx-user label-icon me-2"></i>100</button>
                                    <button type="button" class="btn btn-primary waves-effect btn-label w-xs"><i class="bx bx-user label-icon me-2"></i>100</button>
                                </div>
                            </div>                                                                                                   
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                
                <div class="row mb-2">
                    <div class="col-lg-3 col-sm-6">
                        <div class="mb-2 me-2">
                            <div class="email-search">
                                <div class="position-relative">
                                    <input id="pesquisar" type="text" class="form-control bg-light rounded" placeholder="Pesquisar..." value="">
                                    <span id="search" onclick="search()" style="cursor: pointer;" class="bx bx-search font-size-18"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-6">
                        <div class="mt-4 mt-sm-0 d-flex align-items-center justify-content-sm-end">
                            <div class="mb-2 me-2">
                                <button class="btn btn-primary bg-gradient waves-effect waves-light" type="button" id="btnAdicionar" data-bs-toggle="tooltip" data-bs-placement="top" title="">
                                    
                                </button>
                                
                            </div>                                                                                                   
                        </div>
                    </div>
                    
                </div>
                <div class="col-xl-12">
                    <div class="table-responsive rounded">
                        <table class="table align-middle table-bordered">

                            <thead class="table-light">
                                <tr>
                                    <th>Nome</th>
                                    <th>CPF / N&deg; de passaporte</th>
                                    <th>Empresa</th>
                                    <th>Empresa Manual</th>
                                    <th>Setor</th>
                                    <th>Especialidade</th>
                                    <th>Status</th>
                                    <th>#</th>
                                </tr>
                            </thead>

                            <tbody>
                              
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
