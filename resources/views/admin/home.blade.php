@extends('layouts.app')
@section('content')
    <section class="hero is-primary  about-us" id="about_us">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <!-- <img src="{{asset('/img/trail_banner.png')}}" alt="Trail Banner"> -->
                    </div>
                    <div class="column content is-7">
                    <h3 class="title is-2 has-text-centered products-heading">Page Visits</h3>
                        <div style="transition: all 200ms ease-out; transform: translate3d(0px, 0px, 0px);">
                            <table class="table" style="background-color: inherit">
                                {{--table header--}}
                                <thead>
                                <tr>
                                    <th>Day</th>
                                    <th>Page</th>
                                    <th>Number of hits</th>
                                </tr>
                                </thead>
                                @foreach($pagehits as $pagehit)
                                {{--table body--}}
                                <tbody>
                                <tr>
                                    <td>{{ $pagehit->day }} {{ $pagehit->monthdate }},{{ $pagehit->month }} {{ $pagehit->year }}</td>
                                    <td>{{ $pagehit->page }}</td>
                                    <td>{{ $pagehit->stat }}</td>
                                </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>  
                    </div>
                    <div class="column content is-2">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero our-team">
        <div class="hero-body">
            
        </div>
    </section>
@endsection


