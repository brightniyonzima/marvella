@extends('layouts.app')
@section('content')
    <section class="hero is-primary is-medium  contact-us" id="ContactUs">
        <div class="hero-body">
            <div class="container">
                <div class="columns level">
                    <!-- <div class="column">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6047.326036116285!2d32.609539534441154!3d0.34129632806672366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1498559653000"
                                width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div> -->
                    <!-- <div class="column content is-5">
                        <h2 class="title">Trail Analytics Ltd</h2>
                        <p><span class="icon"><i class="fa fa-map-marker"></i></span>
                            <span>   Bwindi Trust House, Apt B6,     Naguru, Kampala, Uganda
                            </span>
                        </p>
                        <p><span class="icon"><i class="fa fa-phone"></i></span>
                            <span> (256) 392 001576</span>
                        </p>
                        <p><span class="icon"><i class="fa fa-envelope-o"></i></span>
                            <span>info@trailanalytics.com</span>
                        </p>
                    </div> -->
                    <h2 class="title">I need a thought partner, here is my challenge </h2>
                </div>
            </div>
        </div>
    </section>


    <section class="hero  is-medium " id="ContactUs">
        <div class="hero-body">
            <div class="container is-700-desktop" >
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ol>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ol>
                    </div><br>
                @endif
                <h4 class="is-bold title has-text-centered is-3">Send us an email</h4>
                <form action="/quotation/email">
                    <div class="field">
                        <p class="control">
                            <input type="email" name="email" id="email" placeholder="Email" class="input">
                        </p>
                    </div>
                    <div class="field">
                        <p class="control">
                            <textarea name="message" id="message" cols="30" rows="10" class="textarea" placeholder="Details"></textarea>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control">
                            <button type="submit" class="button is-primary is-fullwidth">Send</button></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
@stop