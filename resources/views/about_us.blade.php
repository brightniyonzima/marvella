@extends('layouts.app')
@section('content')
    <section class="hero is-primary  about-us" id="about_us">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <img src="{{asset('/img/trail_banner.png')}}" alt="Marvella Banner">
                    </div>
                    <div class="column content is-7">
                        <h1 class="title">About Us</h1>
                        <p>Marvella Consultants Uganda (MCU) was founded by experienced consultants, who have been able to forge a strong and talented team of professionals that constantly strive for innovative and valuable approaches to give our clients a competitive edge. Each consultant specializes in a particular discipline, including; Real estate Management, finance, sales and marketing, Information technology, and Business Management. We provide tailor-made solutions as a result of a blend of advanced skills, professional consultancy and international expertise.
                        </p>
                        <p> MCU focuses on both start-up businesses preferably in the earlier stages of operation as well as existing business that have stood tastes of time with some operational challenges. Small and mid-sized businesses make up a sizable majority of Uganda and international markets. It is for this reason that Marvella consultancy prefers to establish a relationship with a younger and midsized operations so as to continue nurturing that relationship over the long term. 
                        </p>
                        <p>Marvella Consultants Uganda Ltd is a fully registered by URSB under reg no: 800200000252719 to support its activities.</p>

                        <p><!-- Marvella Consultants Uganda Ltd believes that continuously striving to excel at the following core set of values will lead to long-term profitability, growth and enhanced ability to serve our clients. --></p>
                        <br>
                        <p><a href="/profile">
                                <span class="icon"><i class="fa fa-file-pdf-o"></i></span>
                                <span>Company Profile</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero our-team">
        <div class="hero-body">
            <div class="container has-text-centered is-700-desktop">
                <h2 class="title is-3 is-heading">Meet Our Team</h2>
                <h4 class="title stripe"><span>MANAGEMENT</span></h4>
                <div class="columns ">
                    <div class="column is-4-tablet is-offset-1-tablet ">
                        <img src="{{asset('/img/team/vicent.jpg')}}" alt="S">
                        <h5>Vincent Tumukugize</h5>
                        <p>Project Director</p>
                    </div>
                    <div class="column is-4-tablet is-offset-2-tablet">
                        <img src="{{asset('/img/team/place_holder.jpg')}}" alt="S">
                        <h5>Joachim Kabaisera</h5>
                        <p>Financial Analyst and Advisor</p>
                    </div>
                </div>
                <h4 class="title stripe"><span>TECHNICAL</span></h4>
                <div class="columns ">
                    <div class="column">
                        <img src="{{asset('/img/team/place_holder.jpg')}}" alt="R">
                        <h5>Eddie Nsubuga</h5>
                        <p>Procurement Officer</p>
                    </div>
                    <div class="column">
                        <img src="{{asset('/img/team/place_holder.jpg')}}" alt="j">
                        <h5>Racheal Mpora</h5>
                        <p>Human Resource</p>
                    </div>
                    <div class="column">
                        <img src="{{asset('/img/team/place_holder.jpg')}}" alt="j">
                        <h5>Racheal Mpora</h5>
                        <p>Human Resource</p>
                    </div>
                </div><!-- 
                <h4 class="title stripe"><span>ADMINISTRATION</span></h4>
                <div class="columns">
                    <div class="column is-4 is-offset-4-tablet">
                        <img src="{{asset('/img/team/place_holder.jpg')}}" alt="K">
                        <h5>Ronnie Nsubuga</h5>
                        <p>IT Advisor</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-4 is-offset-4-tablet">
                        <img src="{{asset('/img/team/place_holder.jpg')}}" alt="K">
                        <h5>Ronnie Nsubuga</h5>
                        <p>IT Advisor</p>
                    </div>
                </div> -->

                <h4 class="title stripe"><span>CONSULTANTS</span></h4>
                <div class="columns">
                    <div class="column is-3">
                        <img src="{{asset('/img/team/place_holder.jpg')}}" alt="K">
                        <h5>Andrew Wambi</h5>
                        <p>Project Legal Advisor</p>
                    </div>
                    <div class="column is-3">
                        <img src="{{asset('/img/team/place_holder.jpg')}}">
                        <h5>Bill Nkeeto</h5>
                        <p>Consultant</p>
                    </div>
                    <div class="column is-3">
                        <img src="{{asset('/img/team/place_holder.jpg')}}">
                        <h5>Bill Nkeeto</h5>
                        <p>Consultant</p>
                    </div>
                    <div class="column is-3">
                        <img src="{{asset('/img/team/place_holder.jpg')}}">
                        <h5>Bill Nkeeto</h5>
                        <p>Consultant</p>
                    </div>

                    <!-- <div class="column is-3">
                        <img src="{{asset('/img/team/place_holder.jpg')}}">
                        <h5>Patrick J Okui</h5>
                        <p>Information Systems</p>
                    </div>
                    <div class="column is-3">
                        <img src="{{asset('/img/team/place_holder.jpg')}}">
                        <h5>Joseph Kimaili</h5>
                        <p>Network Management</p>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    @include('sweet::alert')
@endsection