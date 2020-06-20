@extends('admin.layouts.master')

@section('content')

    <p style="font-size: 24px; padding-top: 10px; font-family: Verdana, SolaimanLipi; color:green;">{{ trans('quickadmin::admin.dashboard-title') }} </p>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<section class="main-content">
        <div class="row">
            <div class="col-md-4 first">
                <div class="dash-box dash-box-color-1">
                    <div class="dash-box-icon">
                        <i style="font-size: 28px;padding-top: 10px" class="fa fa-book"></i>
                    </div>
                    <div class="dash-box-body ei">
                        <span style="font-weight:bold" class="dash-box-count"><a style="font-size: 24px; color:white" href="#">{{ $bibaho }}</a></span>
                        <span style="font-size:18px;" class="dash-box-title"><a style="font-size: 18px; color:white" href="#">মোট (বিবাহ) আপলোড</a></span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 sec">
                <div class="dash-box dash-box-color-2">
                    <div class="dash-box-icon">
                        <i style="font-size: 28px;padding-top: 10px" class="fa fa-folder"></i>
                    </div>
                    <div class="dash-box-body eii">
                        <span style="font-weight:bold" class="dash-box-count"><a style="font-size: 18px; color:white" href="#">{{ $salat }}</a></span>
                        <span style="font-size:18px" class="dash-box-title"><a style="font-size: 18px; color:white" href="#">মোট (সালাত) আপলোড</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 third">
                <div class="dash-box dash-box-color-3">
                    <div class="dash-box-icon">
                        <i style="font-size: 28px;padding-top: 10px" class="fa fa-book"></i>
                    </div>
                    <div class="dash-box-body eiii">
                        <span style="font-weight:bold" class="dash-box-count"><a style="font-size: 24px; color:white" href="#">{{ $sium }}</a></span>
                        <span style="font-size:18px" class="dash-box-title"><a style="font-size: 18px; color:white" href="#">মোট (সিয়াম) আপলোড </a></span>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4 first">
                <div class="dash-box dash-box-color-1">
                    <div class="dash-box-icon">
                        <i style="font-size: 28px;padding-top: 10px" class="fa fa-book"></i>
                    </div>
                    <div class="dash-box-body ei">
                        <span style="font-weight:bold" class="dash-box-count"><a style="font-size: 18px; color:white" href="#">{{ $jakat }}</a></span>
                        <span style="font-size:18px;" class="dash-box-title"><a style="font-size: 18px; color:white" href="#">মোট (যাকাত) আপলোড</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 sec">
                <div class="dash-box dash-box-color-2">
                    <div class="dash-box-icon">
                        <i style="font-size: 28px;padding-top: 10px" class="fa fa-folder"></i>
                    </div>
                    <div class="dash-box-body eii">
                        <span style="font-weight:bold" class="dash-box-count"><a style="font-size: 18px; color:white" href="#">{{ $jihad }}</a></span>
                        <span style="font-size:18px" class="dash-box-title"><a style="font-size: 18px; color:white" href="#">মোট (জিহাদ) আপলোড</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 third">
                <div class="dash-box dash-box-color-3">
                    <div class="dash-box-icon">
                        <i style="font-size: 28px;padding-top: 10px" class="fa fa-book"></i>
                    </div>
                    <div class="dash-box-body eiii">
                        <span style="font-weight:bold" class="dash-box-count"><a style="font-size: 24px; color:white" href="#">{{ $hazz }}</a></span>
                        <span style="font-size:18px" class="dash-box-title"><a style="font-size: 18px; color:white" href="#"> মোট (হাজ্জ) আপলোড </a></span>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4 first">
                <div class="dash-box dash-box-color-1">
                    <div class="dash-box-icon">
                        <i style="font-size: 28px;padding-top: 10px" class="fa fa-book"></i>
                    </div>
                    <div class="dash-box-body ei">
                        <span style="font-weight:bold" class="dash-box-count"><a style="font-size: 18px; color:white" href="#">{{ $hazz }}</a></span>
                        <span style="font-size:18px;" class="dash-box-title"><a style="font-size: 18px; color:white" href="#">মোট (দু'আ) আপলোড </a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 sec">
                <div class="dash-box dash-box-color-2">
                    <div class="dash-box-icon">
                        <i style="font-size: 28px;padding-top: 10px" class="fa fa-folder"></i>
                    </div>
                    <div class="dash-box-body eii">
                        <span style="font-weight:bold" class="dash-box-count"><a style="font-size: 18px; color:white" href="#">{{ $sirk }}</a></span>
                        <span style="font-size:18px" class="dash-box-title"><a style="font-size: 18px; color:white" href="#">মোট (শিরক/তাওহীদ) আপলোড </a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 third">
                <div class="dash-box dash-box-color-3">
                    <div class="dash-box-icon">
                        <i style="font-size: 28px;padding-top: 10px" class="fa fa-book"></i>
                    </div>
                    <div class="dash-box-body eiii">
                        <span style="font-weight:bold" class="dash-box-count"><a style="font-size: 24px; color:white" href="#">0</a></span>
                        <span style="font-size:18px" class="dash-box-title"><a style="font-size: 18px; color:white" href="#">মোট (জাল ও দুর্বল হাদীস) আপলোড </a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 first">
                <div class="dash-box dash-box-color-1">
                    <div class="dash-box-icon">
                        <i style="font-size: 28px;padding-top: 10px" class="fa fa-book"></i>
                    </div>
                    <div class="dash-box-body ei">
                        <span style="font-weight:bold" class="dash-box-count"><a style="font-size: 24px; color:white" href="#">{{ $akida }}</a></span>
                        <span style="font-size:18px;" class="dash-box-title"><a style="font-size: 18px; color:white" href="#">মোট (আক্বীদা) আপলোড</a></span>
                    </div>
                </div>
            </div>

        </div>
</section>

<style>
    .dashboard-stat .visual {
        height: 132px;
    }

    .dash-box {
        position: relative;
        background: rgb(255, 86, 65);
        background: -moz-linear-gradient(top, rgba(255, 86, 65, 1) 0%, rgba(253, 50, 97, 1) 100%);
        background: -webkit-linear-gradient(top, rgba(255, 86, 65, 1) 0%, rgba(253, 50, 97, 1) 100%);
        background: linear-gradient(to bottom, rgba(255, 86, 65, 1) 0%, rgba(253, 50, 97, 1) 100%);
        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#ff5641', endColorstr='#fd3261', GradientType=0);
        border-radius: 4px;
        text-align: center;
        margin: 60px 0 50px;
    }
    .dash-box-icon {
        position: absolute;
        transform: translateY(-50%) translateX(-50%);
        left: 50%;
    }
    .dash-box-action {
        transform: translateY(-50%) translateX(-50%);
        position: absolute;
        left: 50%;
    }
    .dash-box-body {
        padding: 50px 20px;
    }
    .dash-box-icon:after {
        width: 60px;
        height: 60px;
        position: absolute;
        background: rgba(247, 148, 137, 0.91);
        content: '';
        border-radius: 50%;
        left: -10px;
        top: -10px;
        z-index: -1;
    }
    .dash-box-icon > i {
        background: #ff5444;
        border-radius: 50%;
        line-height: 40px;
        color: #FFF;
        width: 40px;
        height: 40px;
        font-size:22px;
    }
    .dash-box-icon:before {
        width: 75px;
        height: 75px;
        position: absolute;
        background: rgba(253, 162, 153, 0.34);
        content: '';
        border-radius: 50%;
        left: -17px;
        top: -17px;
        z-index: -2;
    }
    .dash-box-action > button {
        border: none;
        background: #FFF;
        border-radius: 19px;
        padding: 7px 16px;
        text-transform: uppercase;
        font-weight: 500;
        font-size: 11px;
        letter-spacing: .5px;
        color: #003e85;
        box-shadow: 0 3px 5px #d4d4d4;
    }
    .dash-box-body > .dash-box-count {
        display: block;
        font-size: 30px;
        color: #FFF;
        font-weight: 300;
    }
    .dash-box-body > .dash-box-title {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.81);
    }

    .dash-box.dash-box-color-2 {
        background: rgb(252, 190, 27);
        background: -moz-linear-gradient(top, rgba(252, 190, 27, 1) 1%, rgba(248, 86, 72, 1) 99%);
        background: -webkit-linear-gradient(top, rgba(252, 190, 27, 1) 1%, rgba(248, 86, 72, 1) 99%);
        background: linear-gradient(to bottom, rgba(252, 190, 27, 1) 1%, rgba(248, 86, 72, 1) 99%);
        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#fcbe1b', endColorstr='#f85648', GradientType=0);
    }
    .dash-box-color-2 .dash-box-icon:after {
        background: rgba(254, 224, 54, 0.81);
    }
    .dash-box-color-2 .dash-box-icon:before {
        background: rgba(254, 224, 54, 0.64);
    }
    .dash-box-color-2 .dash-box-icon > i {
        background: #fb9f28;
    }

    .dash-box.dash-box-color-3 {
        background: rgb(183,71,247);
        background: -moz-linear-gradient(top, rgba(183,71,247,1) 0%, rgba(108,83,220,1) 100%);
        background: -webkit-linear-gradient(top, rgba(183,71,247,1) 0%,rgba(108,83,220,1) 100%);
        background: linear-gradient(to bottom, rgba(183,71,247,1) 0%,rgba(108,83,220,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b747f7', endColorstr='#6c53dc',GradientType=0 );
    }
    .dash-box-color-3 .dash-box-icon:after {
        background: rgba(180, 70, 245, 0.76);
    }
    .dash-box-color-3 .dash-box-icon:before {
        background: rgba(226, 132, 255, 0.66);
    }
    .dash-box-color-3 .dash-box-icon > i {
        background: #8150e4;
    }

    .first{
        width: 340px;
    }
    .sec{
        width: 340px;
    }
    .third{
        width: 340px;
    }
    .ei{
        height:200px;
    }
    .eii{
        height:200px;
    }
    .eiii{
        height:200px;
    }
</style>

@endsection