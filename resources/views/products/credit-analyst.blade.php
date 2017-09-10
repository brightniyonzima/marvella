@extends('layouts.app')
@section('content')
    <section class="hero is-product is-medium" id="Products">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-2-tablet">
                        <img src="{{asset('/img/products/icon_credit_analyst.png')}}" alt="">
                    </div>
                    <div class="column ">
                        <h1 class="title is-2">Credit Analyst</h1>
                        <p>When you’re a bank, and your regulator asks you to change your banking system to supply data
                            you haven’t been collecting, what do you do?
                        </p>
                        <p>
                            You comply, spend a couple of months, thousands (in some cases, millions) of dollars and
                            change your banking system or you call us to develop a parallel system that gets the job
                            done (faster) for much less.
                        </p>
                    </div>
                    <div class="column is-3-tablet">
                        <h4 class="title">Key Features</h4>
                        <ul>
                            <li><a href="{{url('products/credit-analyst/#Authentication')}}">User Authentication</a>
                            </li>
                            <li><a href="{{url('products/credit-analyst/#dashboard')}}">Dashboard</a></li>
                            <li><a href="{{url('products/credit-analyst/#Management')}}">Customer Management</a></li>
                            <li><a href="{{url('products/credit-analyst/#Reports')}}">Report Generation</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section product-features">
        <div class="container">
            {{--dashboard--}}
            <h3 class="title stripe is-red is-left" id="dashboard"><span>Dashboard</span></h3>
            <div class="columns level">
                <div class="column is-6">
                    <img src="{{asset('img/products/credit_analyst/dashboard.png')}}"
                         alt="Dashboard"
                         class="is-image">
                </div>
                <div class="column content is-5">
                    <p>Layout is everything. Credit Analyst offers a simple clean interface to aid with navigation.
                        We have gone further to orient our layout in accordance with the principle documents defined by
                        the regulators.</p>
                </div>
            </div>

            {{--User Authentication--}}
            <h3 class="title stripe is-red is-left" id="Authentication"><span> User Authentication</span></h3>
            <div class="columns level">
                <div class="column is-6">
                    <img src="{{asset('img/products/credit_analyst/login.png')}}"
                         alt="Dashboard"
                         class="is-image">
                </div>
                <div class="column content is-5">
                    <p>We are sensitive to the reality that most banks operate multiple systems, so staff have to
                        remember several passwords to get by.
                    </p>
                    <p>
                        Credit Analyst integrates with the network domain manager to grant you single sign-on access.
                        One less password to remember may not be much, but it sure does make access alot easier.
                    </p>
                </div>
            </div>


            {{--Customer Management --}}
            <h3 class="title stripe is-red is-left" id="Management"><span> Customer Management</span></h3>
            <div class="columns level">
                <div class="column is-6">
                    <img src="{{asset('img/products/credit_analyst/customer_management.png')}}"
                         alt="Customer Management"
                         class="is-image">
                </div>
                <div class="column content is-5">
                    <p>Years of interaction with our clients has taught us that the customer search is where it all
                        begins. We’ve made this intuitive, easy to access and above all, faster!
                    </p>
                </div>
            </div>


            {{--Report Generation--}}
            <h3 class="title stripe is-red is-left" id="Reports"><span> Report Generation</span></h3>
            <div class="columns level">
                <div class="column is-6">
                    <img src="{{asset('img/products/credit_analyst/reports.png')}}"
                         alt="Reports Interface"
                         class="is-image">
                </div>
                <div class="column content is-5">
                    <p>The need to quickly access features specific to a single customer prompted us to introduce this
                        customer’s dashboard.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="hero is-warning is-bold">
        <div class="hero-body">
            <div class="container has-text-centered">
                <a href="{{url('/contact-us')}}" class="button is-primary is-medium">Request for a Quote</a>

                <p class="small-quote">"Simplicity is critical, but the ability to respond to a client's
                        changing needs is paramount"</p>
            </div>
        </div>
    </section>
@endsection