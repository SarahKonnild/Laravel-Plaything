@extends('layouts.app')

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

                    {{ __('Welcome, please feel free to download this totally not-shady excel file!') }}
                    <a href="{{ url('/export')}}">Click here to download</a>.
                    {{__('I promise, it is just an excel file with random data...')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
