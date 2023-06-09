{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'School List')

@section('content_header')
    <h1>School List</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    
                    {{-- Include error alert template--}}
                    @include('errors.error-message')
                    
                    <table id="table-1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>S No.</th>
                                <th>School Name</th>
                                <th>School Email</th>
                                <th>School Start Date</th>
                                <th>Create at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($schoolAffiliations as $schoolAffiliation)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $schoolAffiliation->school_name }}</td>
                                    <td>{{ $schoolAffiliation->school_email_id }}</td>
                                    <td>{{ $schoolAffiliation->school_est_year }}</td>
                                    <td>{{ $schoolAffiliation->cdate }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('showSchool' , ['id' => $schoolAffiliation->school_affiliation_id ] ) }}" type="button" class="btn btn-default"  title="View">
                                              <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('mergePdf', ['id' => $schoolAffiliation->school_affiliation_id]) }}" type="button" class="btn btn-danger" title="Download Pdf">
                                              <i class="fas fa-file-pdf"></i>
                                            </a>
                                          </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/custom.css') }}">
@stop

@section('js')
    <script src="{{ asset('asset/js/custom.js') }}"></script>
    <script>
        $(function() {
            $('#table-1').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@stop
