@extends('layouts.app')

@section('content')

    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Join the Community</h1>

                    <form action="{{route('register')}}" method="POST" role="form">
                        {{csrf_field()}}

                        <div class="field">
                            <label for="name" class="label">Name</label>
                            <div class="control">
                                <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" type="text" name="name" id="name" placeholder="XXX" value="{{old('name')}}">
                            </div>
                            @if ($errors->has('name'))
                                <div class="help is-danger">
                                    {{$errors->first('name')}}
                                </div>
                            @endif
                        </div>

                        <div class="field">
                            <label for="email" class="label">Email Address</label>
                            <div class="control">
                                <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}">
                            </div>
                            @if ($errors->has('email'))
                                <div class="help is-danger">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>

                        <div class="columns">
                            <div class="column">
                                <div class="field">
                                    <label for="password" class="label">Password</label>
                                    <div class="control">
                                        <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" name="password" id="password">
                                    </div>
                                    @if ($errors->has('password'))
                                        <div class="help is-danger">
                                            {{$errors->first('password')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="column">
                                <div class="field">
                                    <label for="password_confirmation" class="label">Confirm Password</label>
                                    <div class="control">
                                        <input required class="input {{ $errors->has('password_confirmation') ? 'is-danger' : '' }}" type="password" name="password_confirmation" id="password_confirmation">
                                    </div>
                                    @if ($errors->has('password_confirmation'))
                                        <div class="help is-danger">
                                            {{$errors->first('password_confirmation')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <button class="button is-success is-outlined is-fullwidth m-t-30">Register</button>
                    </form>
                </div><!-- end of .card-content -->
            </div><!-- end of .card -->
            <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Already have an Account?</a></h5>
        </div>
    </div>
@endsection
