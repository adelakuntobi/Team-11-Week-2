@extends('layouts.admin_sidebar')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <h4 class="page-title">Applicants</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="javascript:void(0);">ECX</a></li>
                <li class="breadcrumb-item active">Applicants</li>
            </ol>
        </div>
    </div>
    <!-- end row -->
</div>
<!-- end page-title -->
<div class="row">
    <div class="col-md-12">
    <form action="{{route('applicantionbyyear')}}" method="GET">
        <div class="form-inline">
            <label for="">Year</label>
            <select name="session" class="form-control" required>
                <option value="">--Select Year--</option>
                @foreach($session as $session)
                    <option value="{{$session->session_id}}">{{$session->session}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-success">Search</button>
        </div>
    </form>
    </div>
</div>
<div class="row">

        @if (Session::get('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif

    <div class="col-md-12 col-xl-12">
        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
            <tr>
                <th>S/N</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
                @foreach ($applicant as $applicant)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$applicant->firstname}}</td>
                <td>{{$applicant->lastname}}</td>
                <th>{{$applicant->admission_status}}</th>
                <td><form action="applicant/{{$applicant->applicant_id}}" method="GET">
                        <button type="submit" class="btn btn-success">View</button> 
                    </form>
                </td>
            </tr>                                      
            @endforeach
        </tbody>
    </table>
    </div>
    
        <!-- END ROW -->

</div>
@endsection

