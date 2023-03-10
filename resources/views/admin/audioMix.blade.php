@extends('components.adminLayout')


@section('contents')
<section class="content">
    <div class="">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Dashboard</h2>
                    <ul class="breadcrumb mt-2">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i>Dashboard</a></li>
                        <li class="breadcrumb-item">Audio Mix</li>

                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>

            </div>
        </div>
        <!-- Hover Rows -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header ml-1">
                        <h2 class=""> <strong>List of all Audio Mix</strong> </h2>

                    </div>
                    <div class="body">

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Audio File</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1
                                    @endphp
                                    @foreach ($audioMixes as $audioMix)
                                    <tr>
                                        <th>
                                            <a href="{{route('audioMix.edit', $audioMix->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>
                                            </a>
                                        </th>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{$audioMix->title}}</td>
                                        <th>
                                            <audio controls>
                                                <source src="{{asset('Audio/'.$audioMix->audio_file)}}" >
                                                Your browser does not support the audio element.
                                            </audio>
                                        </th>
                                        <td>{{$audioMix->description}}</td>
                                        <td>
                                            <a onclick="return confirm('Are you sure you want to delete this Audio Mix?');" href="{{ route('audioMix.delete', $audioMix->id ) }}">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Hover Rows -->
    </div>
</section>
@endsection
