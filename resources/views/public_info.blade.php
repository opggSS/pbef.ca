@extends('layout.layout')
@section('title', 'Public Info')
@section('content')
    <div id="fullpage" class="publicinfopage">

        <div class="section">
            <div>
                <div class="row">
                    <div class="offset-1 offset-md-2">
                        <h5>Basic Values</h5>
                    </div>
                </div>
                <div class="horizontal-slider">
                    <div class="row pb-5">
                        <div class="col offset-1 offset-md-2 col-2 donate-card-container">
                            <div class="donate-card">
                                <div class="donate-number">3,0121</div>
                                <div class="donate-type">People Donated</div>
                            </div>
                        </div>
                        <div class="col col-2 donate-card-container">
                            <div class="donate-card">
                                <div class="donate-number">3,0121</div>
                                <div class="donate-type">Joined Us</div>
                            </div>
                        </div>
                        <div class="col col-2 donate-card-container">
                            <div class="donate-card">
                                <div class="donate-number">3,0121</div>
                                <div class="donate-type">People Donated</div>
                            </div>
                        </div>
                        <div class="col col-2 donate-card-container">
                            <div class="donate-card">
                                <div class="donate-number">3,0121</div>
                                <div class="donate-type">People Donated</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-0">
                    <div class="offset-1 offset-md-2">
                        <h5>Total Values</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-1 offset-md-2 col-10 col-md-8 total-donate-data pl-0">
                        <!-- <h4>3,121 <span>People Donated</span> &nbsp;&nbsp;~&nbsp;&nbsp; 2018-2019 <span>1 year 2 month 21days</span></h4> -->
                        <p class="total-val">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.
                            Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique.
                            Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus.
                            Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p >
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="offset-1 offset-md-2">
                        <h5>Total Amount</h5>
                    </div>
                </div>
                <div class="row final-donate-data">
                    <div class="offset-1 offset-md-2 col-3 col-md-2">
                        <span>30,212.31</span> &nbsp;<span id="money-unit">CAD</span>
                    </div>
                    <div class="offset-3 offset-md-3 col-4 col-md-3"><a class="d-inline-block" href="">DOWNLOAD PDF</a></div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            //options here
            anchors: ['firstPage', 'secondPage'],
            lazyLoading: true,
            dragAndMove: true,
            licenseKey: '6A79080F-89914B95-AD134155-6E2D191F'
        });

        //methods
        $.fn.fullpage.setAllowScrolling(true);
    });
</script>
@stop