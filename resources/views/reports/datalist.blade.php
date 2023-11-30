@extends('layouts.master')

@section('body')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Reports</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Reports</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-gray card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <h3 class="card-title">
                                </h3>
                            </h3>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>OSCA ID No.</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Birthday</th>
                                            <th>Age</th>
                                            <th>Pensioner</th>
                                            <th>Remarks</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        @php $no = 1; @endphp
                                        @foreach($citizen as $data)
                                        <tr id="tr-{{ $data->id }}" class="">
                                            <td>{{ $no++ }}</td>
                                            <td class="text-capitalize">{{ $data->osca_idnum }}</td>
                                            <td class="text-capitalize">{{ $data->lname }}, {{ $data->fname }}  {{ $data->mname }} {{ $data->ext }}</td>
                                            <td class="text-capitalize">{{ $data->gender }}</td>
                                            <td class="text-capitalize">{{ \Carbon\Carbon::parse($data->bday)->format('F j, Y') }}</td>
                                            <td class="text-capitalize">{{ $data->age }} yrs. old</td>
                                            <td class="text-capitalize">{{ $data->curr_pension }} yrs. old</td>
                                            <td class="text-capitalize"></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('control.aside')
    
</div>
        
@endsection