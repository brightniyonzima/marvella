@extends('layouts.app')
@section('content')
    <section class="hero is-product is-medium" id="Products">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-2-tablet">
                        <img src="{{asset('/img/products/icon_issue_tracker.jpg')}}" alt="Issue Tracker Icon">
                    </div>
                    <div class="column ">
                        <h1 class="title is-2">Issue Tracker</h1>
                        <p>When you an institution with multiple retail outlets and often lose track of issues raised by
                            your outlets e.g broken plumbing, failing air-conditioning, what do you do?
                        </p>
                        <br>
                        <p>You develop a (potentially, lengthy manual) process that your staff will adhere to in the
                            logging and resolution of issues, or you call us to install a solution that simplifies the
                            logging, resolution and automatic escalation of issues.
                        </p>
                    </div>
                    <div class="column is-3-tablet">
                        <h4 class="title">Key Features</h4>
                        <ul>
                            <li><a href="{{url('products/issue-tracker/#dashboard')}}">Dashboard</a></li>
                            <li><a href="{{url('products/issue-tracker/#ContractManagement')}}">Contract Management</a>
                            </li>
                            <li><a href="{{url('products/issue-tracker/#IssueLogging')}}">Issue Logging</a></li>
                            <li><a href="{{url('products/issue-tracker/#Reports')}}">Report Generation</a></li>
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
                    <img src="{{asset('img/products/issue_tracker/dashboard@2x.png')}}"
                         alt="Dashboard"
                         class="is-image">
                </div>
                <div class="column content is-5">
                    <p>Issue Tracker spots an equally simple clean interface to aid with navigation.</p>
                    <p>The interface may change subject to the type of user logged in, to ensure access to the most
                        commonly used features is guaranteed.</p>
                </div>
            </div>

            {{--Issue Logging--}}
            <h3 class="title stripe is-red is-left" id="IssueLogging"><span>Issue Logging</span></h3>
            <div class="columns level">
                <div class="column is-6">
                    <img src="{{asset('img/products/issue_tracker/issue_logging.png')}}"
                         alt="Issue Logging"
                         class="is-image">
                </div>
                <div class="column content is-5">
                    <p>Given the vast range of issues users may wish to log, the interface is designed to grant
                        flexibility to the users. This includes the upload of attachments to support the clarification
                        of issues, and aid in resolution.
                    </p>
                </div>
            </div>


            {{--Contract Management--}}
            <h3 class="title stripe is-red is-left" id="ContractManagement"><span>Contract Management</span></h3>
            <div class="columns level">
                <div class="column is-6">
                    <img src="{{asset('img/products/issue_tracker/contract_management.png')}}"
                         alt="Contract Management"
                         class="is-image">
                </div>
                <div class="column content is-5">
                    <p>Issue Tracker ships with a contracts management module (activated upon request).</p>
                    <p>
                        Contracts management provides features such as automated reminders for supplier contracts due to
                        expire or in need of review.
                    </p>
                </div>
            </div>


            {{--Report Generation--}}
            <h3 class="title stripe is-red is-left" id="Reports"><span>Report Generation</span></h3>
            <div class="columns level">
                <div class="column is-6">
                    <img src="{{asset('img/products/issue_tracker/reports@2x.png')}}"
                         alt="Reports Interface"
                         class="is-image">
                </div>
                <div class="column content is-5">
                    <p>An array of reports and data mining features are available from which the user may access the
                        report of their choice.
                    </p>
                    <p>
                        Additional reports may be incorporated upon request.
                    </p>
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