
@extends('components.adminLayout')
    @section('contents')

    <!-- Main Content -->

    <section class="content">
        <div class="">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard')}}"><i class="zmdi zmdi-home"></i>Dashboard</a></li>

                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon zmdi-dns">
                            <div class="body">
                                <h6>Categories</h6>
                                <h2>{{$categories}}</h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon zmdi-gps-dot">
                            <div class="body">
                                <h6>Events</h6>
                                <h2>{{$events}}</h2>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon zmdi-collection-music">
                            <div class="body">
                                <h6>Audio Mix</h6>
                                <h2>{{$audio}}</h2>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon zmdi-library">
                            <div class="body">
                                <h6>Gallery</h6>
                                <h2>##</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
