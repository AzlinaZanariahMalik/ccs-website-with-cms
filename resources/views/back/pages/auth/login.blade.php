@extends('back.layouts.auth-layout')
@section('title') {{'Login'}} @endsection

@section('content')

<div class="d-flex flex-column min-vh-100 bgform"> 
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">

                        <div class="card shadow-lg">
                            <div class="card-body p-5 ">
                            @livewire('user-login-form') 
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

 
@endsection