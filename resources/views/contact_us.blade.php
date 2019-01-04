@extends('layouts.header')

@section('content')
    <hr class="my-5">

    <section id="contactUs">

        <h2 class="mb-5 font-weight-bold text-center">Contact US</h2>

        {{-- <form class="p-5" method="POST" action="/message"> --}}
        {!! Form::open(['url' => '/message', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="md-form form-sm"> <i class="fa fa-user prefix grey-text"></i>
            <input type="text" name="name" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} form-control-sm" value="{{ old('name') }}" required>
            <label for="name">Name</label>

            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="md-form form-sm"> <i class="fa fa-at prefix grey-text"></i>
            <input type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-sm" value="{{ old('email') }}" required>
            <label for="email">Your Email</label>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="md-form form-sm"> <i class="fa fa-key prefix grey-text"></i>
            <input type="text" name="message" id="message" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }} form-control-sm" required>
            <label for="msg">Message</label>

            @if ($errors->has('message'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
            @endif
        </div>


        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">{{ __('Submit') }} <i class="fa fa-user-plus ml-1"></i></button>
        </div>

        <!-- Form contact -->
        {!! Form::close() !!}


    </section>

@endsection
