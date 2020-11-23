@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are now logged in as Admin!') }}
<br>
                <p style="color: blue"> {{ Auth::user()->name }} </p>
                <p style="color: blue">  {{ Auth::user()->email }} </p>

        
            </div>
        </div>
    </div>
</div>
@endsection
