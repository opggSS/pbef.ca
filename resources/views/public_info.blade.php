@extends('layout.layout')

@section('content')
<div id="fullpage" class="publicinfopage">

    <div class="section">
        <div>
            <div class="row">
                <div class="offset-md-2">
                    <h5>Basic Values</h5>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-2 col-md-2 donate-card-container">
                    <div class="donate-card">
                        <div class="donate-number">3,0121</div>
                        <div class="donate-type">People Donated</div>
                    </div>
                </div>
                <div class="col-md-2 donate-card-container">
                    <div class="donate-card">
                        <div class="donate-number">3,0121</div>
                        <div class="donate-type">Joined Us</div>
                    </div>
                </div>
                <div class="col-md-2 donate-card-container">
                    <div class="donate-card">
                        <div class="donate-number">3,0121</div>
                        <div class="donate-type">People Donated</div>
                    </div>
                </div>
                <div class="col-md-2 donate-card-container">
                    <div class="donate-card">
                        <div class="donate-number">3,0121</div>
                        <div class="donate-type">People Donated</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-2">
                    <h5>Total Values</h5>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-2 total-donate-data">
                    <h4>3,121 <span>People Donated</span> &nbsp;&nbsp;~&nbsp;&nbsp; 2018-2019 <span>1 year 2 month 21days</span></h4>
                </div>
            </div>
            <div class="row final-donate-data">
                <div class="offset-md-2 col-md-5">
                    <h4>Total Amount: &nbsp;&nbsp;&nbsp;<span>30,212.31</span> &nbsp;<span id="money-unit">CAD</span></h4>
                </div>
                <div class="col-md-2"><a href="">DOWNLOAD PDF</a></div>
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