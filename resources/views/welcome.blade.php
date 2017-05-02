@extends('layouts.master')

@section('title')
    People Talk - Welcome
@stop

@section('content')
    
    @include('includes.message-block')

    <div class="row">
        <div class="col-md-6">
            <h2>Sign Up</h2>
            <hr />

            <form method="post" action="{{ route('signup') }}">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" />
                </div>
                <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" value="{{ old('first_name') }}" />
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="pasword">Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}" />
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div><!-- close div .col-md-6 -->

        <div class="col-md-6">
            <h2>Sign In</h2>
            <hr />
            <form method="post" action="{{ route('signin') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}"/>
                </div>
                <div class="form-group">
                    <label for="pasword">Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}" />
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
        </div><!-- close div .col-md-6 -->
    </div><!-- close div .row -->
@stop