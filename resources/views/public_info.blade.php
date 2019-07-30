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
                                <div class="donate-number">{{$pc['people_donated']}}</div>
                                <div class="donate-type">People Donated</div>
                            </div>
                        </div>
                        <div class="col col-2 donate-card-container">
                            <div class="donate-card">
                                <div class="donate-number">{{$pc['joined_us']}}</div>
                                <div class="donate-type">Joined Us</div>
                            </div>
                        </div>
                        <div class="col col-2 donate-card-container">
                            <div class="donate-card">
                                <div class="donate-number">{{$pc['people_donated']}}</div>
                                <div class="donate-type">People Donated</div>
                            </div>
                        </div>
                        <div class="col col-2 donate-card-container">
                            <div class="donate-card">
                                <div class="donate-number">{{$pc['joined_us']}}</div>
                                <div class="donate-type">Joined Us</div>
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
                        <p class="total-val">{{$pc['total_values']}}</p >
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="offset-1 offset-md-2">
                        <h5>Total Amount</h5>
                    </div>
                </div>
                
                <div class="row final-donate-data">
                    <div class="offset-1 offset-md-2 col-3 col-md-2">
                        <span>{{$pc['total_amount']}}</span> &nbsp;<span id="money-unit">CAD</span>
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