@extends('layouts.app')
@section('content')
    <section class="hero is-primary  about-us" id="about_us">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <h3 class="title is-2 has-text-centered products-heading">Admin Login</h3>
                    <form class="box column is-offset-one-third is-one-third has-text-centered" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                        <svg width="30" height="30" class="brand-logo" style="margin-left: 25%;">
                            <!-- {!! \File::get(public_path('img/trail-analytics-logo.svg')) !!} -->
                        </svg>Tral Anaytics

                        <p class="control">
                            {{Form::text('email', null, ['class'=>'input', 'placeholder'=>'Username', 'autofocus'])}}
                            @if ($errors->has('email')) 
                                <span class="help-block">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </p><br>
                        <p class="control">
                            {{Form::password('password', ['class'=>'input', 'placeholder'=>'Password'])}}
                            @if ($errors->has('password')) 
                                <span class="help-block">
                                    {{ $errors->first('password') }}
                                </span>
                            @endif
                        </p></br>
                        <p class="control">
                            <button class="button is-info" style="width: 367px;" type="submit">Log In</button>
                        </p>
                        <small>Trail Analytics Limited</small>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="hero our-team">
        
    </section>
@endsection
