@extends('layouts.app')
@section('content')
    <section class="hero is-product is-medium" id="Products">
        <div class="hero-body">
            <div class="container">
                <div class="columns content">
                    <div class="column is-2-tablet">
                        <img src="{{asset('/img/products/icon_pmt_system.png')}}" alt="PMT System">
                    </div>
                    <div class="column ">
                        <h1 class="title is-2">PMT System</h1>
                        <h5>Performance Monitoring Tool</h5>
                        <p>When you install a desktop based system for over 70 of your member institutions, then ask
                            them to use it to collect and send you data, it might seem like a good idea, until you try
                            upgrading the system.
                        </p>
                        <p>Suddenly, the nightmare of visiting 70+ institutions and ensuring each computer is compliant
                            with the upgrades becomes real.
                        </p>
                        <p>Alternatively, you could call on us to develop a secure web-based version of the same
                            system, deploy it and then get all institutions to login and use it.
                        </p>
                    </div>
                    <div class="column is-3-tablet">
                        <h4 class="title">Key Features</h4>
                        <ul style="list-style: none">
                            <li><a href="{{url('products/pmt/#Authentication')}}">User Authentication</a>
                            </li>
                            <li><a href="{{url('products/pmt/#dashboard')}}">Dashboard</a></li>
                          
                            <li><a href="{{url('products/pmt/#Form')}}">Form management
                                </a></li>
                            <li><a href="{{url('products/pmt/#Reports')}}">Report Generation</a></li>
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
                    <img src="{{asset('img/products/pmt/dashboard.png')}}"
                         alt="Dashboard"
                         class="is-image">
                </div>
                <div class="column content is-5">
                    <p>Desktop applications lack some fundamental features such as the ability to tell which of the 70+
                        institutions has executed given tasks on the system. </p>
                    <p>With the new online system, such functionality becomes a reality through an administrative
                        dashboard.</p>
                </div>
            </div>


            {{--Activity Log--}}
            <h3 class="title stripe is-red is-left" id="Activity Log"><span>User Activity Logging</span></h3>
            <div class="columns level">
                <div class="column is-6">
                    <img src="{{asset('img/products/pmt/activity_log.png')}}"
                         alt="Activity Logging Interface"
                         class="is-image">
                </div>
                <div class="column content is-5">
                    <p>We take it a notch further to ensure the administrator can exhaustively audit the activities on
                        the new system. </p>
                    <p>We are passionate about providing 360 visibility of activities on our systems.</p>
                </div>
            </div>


            {{--Institution Form Managment--}}
            <h3 class="title stripe is-red is-left" id="Form"><span>Institution Form Management</span>
            </h3>
            <div class="columns level">
                <div class="column is-6">
                    <img src="{{asset('img/products/pmt/institution_form.png')}}"
                         alt="Contract Management"
                         class="is-image">
                </div>
                <div class="column content is-5">
                    <p>We've prioritized the collection and input of data within the new interfaces to not only improve convenience but responsiveness of the new system.
                    </p>
                </div>
            </div>


            {{--Report Generation--}}
            <h3 class="title stripe is-red is-left" id="Reports"><span>Report Generation</span></h3>
            <div class="columns level">
                <div class="column is-6">
                    <img src="{{asset('img/products/pmt/reports-shoot-1.png')}}"
                         alt="Reports Interface"
                         class="is-image">
                    <img src="{{asset('img/products/pmt/reports-shoot-2.png')}}"
                         alt="Reports Interface"
                         class="is-image is-hidden-mobile">
                    <img src="{{asset('img/products/pmt/reports-shoot-3.png')}}"
                         alt="Reports Interface"
                         class="is-image is-hidden-mobile">
                </div>
                <div class="column content is-5">
                    <p>An array of reports and data mining features are available from which the user may access the
                        report of their choice.
                    </p>
                    <p> Additional reports may be incorporated upon request.</p>
                </div>
            </div>
        </div>
    </section>

    {{--Request for a quote--}}
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