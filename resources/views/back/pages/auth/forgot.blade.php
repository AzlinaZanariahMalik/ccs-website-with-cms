@extends('back.layouts.auth-layout')
@section('title') {{'Forgot Password'}} @endsection

@section('content')

<div class="d-flex flex-column min-vh-100"> 
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">

                        <div class="card shadow-lg" style="">
                            <div class="card-body p-5 ">
                                @livewire('user-forgot-password-form')
                            </div>
                             <!-- 2 column grid layout -->
                            <div class="row mb-4">
                                <div class="col-md-6 d-flex justify-content-center">
                                                        
                                                        
                                </div>

                                <div class="col-md-6 d-flex justify-content-center">
                                    <!-- Simple link -->
                                    <a href="{{route('login') }}"> back to login</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection
