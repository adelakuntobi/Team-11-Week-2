@extends('layouts.admin_sidebar')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <h4 class="page-title">Departments</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="javascript:void(0);">ECX</a></li>
                <li class="breadcrumb-item active">Departments</li>
            </ol>
        </div>
    </div>
    <!-- end row -->
</div>
<!-- end page-title -->

<div class="row">

    <div class="col-md-6 col-xl-4">
        @if (Session::get('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        <div class="card">
            <div class="card-heading p-4 main_content d-flex justify-content-between">
                <form action="department" method="POST">
                    <div class="form-group">
                        <label for="department">Department Name</label>
                        <select name="faculty" id="faculty-select" class="form-control custom-select">
                            @foreach($faculty AS $faculty)
                                <option value="{{ $faculty->faculties_id }}">{{ $faculty->title }}</option>
                            @endforeach
                        </select>
                        <input type="text" name="department" class="form-control rounded-0" placeholder="Department" required>
                    </div>
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-block btn-primary">Add Department</button>
                    
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-8 table-responsive-md">
        <table id="datatable" class="ml-lg-4 table table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
            <tr>
                <th>S/N</th>
                <th>Department</th>
                <th>Faculty</th>
                <th>Action</th>
            </tr>
            </thead>
            @php
                $facultylist = array();
            @endphp
            @foreach ($faculties as $faculties)
                @php
                    $facultylist[$faculties->faculties_id] = $faculties->title
                @endphp
            @endforeach
            <tbody>
            @foreach ($department as $department)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$department->department}}</td>
                <td>Faculty of {{$facultylist[$department->faculties_id]}}</td>
            <td><form action="department/{{$department->dept_id}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Delete</button> 
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

