@extends('layouts.app')

@section('content')
    <div class="row ">
        <div class="bg"
            style="background-image: url('{{ asset('assets/images/bg/netherland.jpg') }}'); 
                            background-size: cover; 
                            background-position: center; 
                            height: 100vh;
                            border-radius: 8px;">
            <div
                class="d-flex flex-column justify-content-center 
                                    align-items-center h-100 text-center text-white">

                <h3>
                    Welcome,
                    @auth
                        {{ auth()->user()->name }}
                    @endauth

                    @guest
                        Guest! Silakan Login! <a class="btn btn-outline-primary btn-sm" href="{{ route('login') }}">login</a>
                    @endguest
                </h3>
                <p>Aplikasi Inventory Managemen.</p>
            </div>
        </div>
    </div><!--end row-->
@endsection
