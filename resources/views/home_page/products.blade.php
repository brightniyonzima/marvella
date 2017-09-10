<div class="hero is-primary is-block " id="products">
    <div class="hero-body">
        <div class="container">
            <h3 class="title is-2 has-text-centered products-heading">Hot Land and Property this month({{ Carbon\Carbon::now()->format('M Y') }})</h3>
            <div class="products">
                {{--credity analyst--}}
                <div class="columns product content">
                    <div class="column is-6">
                        <img src="{{asset('/img/house.png')}}" alt="">
                    </div>
                    <div class="column is-6">
                        <h4 class="title">Mukono, Seeta @ 20m Ushs</h4>
                        <p>Located just 4km off the city center, come start up a home of your
                        own and go rest in a serene place after a long day. Perfect for rest
                        after a long day's rest
                        </p>
                        <!--<p>
                            A land title is availabal in a asksj ka ajhd nkaaha k ajahasn aaahs
                            hsgsjsj jahaj
                            cjaja jahah ajajah jajahs jajss hajaj hahaja jsjs orbehee gaha
                            ajaj sgshsh
                            done (faster) for much less.
                        </p>-->
                        <a href="{{url('/#')}}">Learn more...</a> 
                    </div>
                </div>

                {{--Car rental--}}
                <div class="columns product content">
                    <div class="column is-6">
                        <img src="{{asset('/img/products/Car-rental-super.png')}}" alt="">
                    </div>
                    <div class="column is-6">
                        <h4 class="title">Cars for hire</h4>
                        <p>Come hire a car with us at pocket friendly pricess. Book and appointment
                        with us now and enjoy nice convenient  transport
                        </p>
                        <!-- <p>You develop a (potentially, lengthy manual) process that your staff will adhere to in the
                            logging and resolution of issues, or you call us to install a solution that simplifies the
                            logging, resolution and automatic escalation of issues.
                        </p> -->
                        <a href="{{url('/#')}}" title="Issue Tracker Details">Book now...</a> 
                    </div>
                </div>

                {{--Kiteezi Lusanja--}}
                <div class="columns product content">
                    <div class="column is-6">
                        <img src="{{asset('/img/products/Lubowa.png')}}" alt="Pmt System">
                    </div>
                    <div class="column is-6">
                        <h4 class="title">Kiteezi, Lusanja apartments @300k per month</h4>
                        <p>Located just 2 km off the city center
                            with a quiet environment perfect for rest after a log day
                            .
                        </p>
                        <!-- <p>Suddenly, the nightmare of visiting 70+ institutions and ensuring each computer is compliant
                            with the upgrades becomes real.
                        </p>
                        <p>Alternatively, you could call on us to develop a secure web-based version of the same
                            system, deploy it and then get all institutions to login and use it.
                        </p> -->
                        <a href="{{url('/#')}}" title="PMT System">Learn more...</a>
                    </div>
                </div>

                {{--Ant Sms--}}
                <!-- <div class="columns product content">
                    <div class="column">
                        <img src="{{asset('/img/products/icon_ant_sms.png')}}" alt="">
                    </div>
                    <div class="column is-9">
                        <h4 class="title">Antsms</h4>
                        <p>Currently under development, but we're going mobile to address the needs of small
                            businesses.</p>
                    </div>
                </div> -->
            </div> 
            <button class="button prev">
                <span class="icon"><i class="fa fa-angle-left"></i></span>
            </button>
            <button class="button next ">
                <span class="icon"><i class="fa fa-angle-right"></i></span>
            </button>
        </div>
    </div>
</div>