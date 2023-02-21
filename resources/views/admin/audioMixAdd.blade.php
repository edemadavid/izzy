@extends('components.adminLayout')

    @section('cssStyles')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    @endsection



    @section('contents')
    <!-- Main Content -->
    <section class="content">
        <div class="">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i>Dashboard</a></li>
                            <li class="breadcrumb-item">Add a New Mix</li>

                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>

                </div>
            </div>
            <div class="container-fluid">
            @if (count($errors) > 0)
                <div class = "alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
                <form action="{{route('audioMix.store')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="body">
                                    <div class="form-group mb-4">
                                        <label for="category_name">Audio Mix Title</label>
                                        <input type="text" class="form-control"
                                        name="title" placeholder="Enter Audio Mix title" />
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Audio Description</label>
                                        <textarea class="form-control"
                                         name="description" id="description"></textarea>
                                    </div>


                                    <div class="form-group mb-4">
                                        <label for="audio_file">File</label>
                                        <input type="file" class="form-control"
                                        name="audio_file"  />
                                    </div>

                                    <button type="submit" onclick="handleFormSubmit(event)" class="btn btn-info waves-effect m-t-20">Add</button>

                                </div>

                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @endsection


    @section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    @endsection


