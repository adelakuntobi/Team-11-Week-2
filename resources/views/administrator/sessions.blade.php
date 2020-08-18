@extends('layouts.admin_sidebar')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <h4 class="page-title">Sessions</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="javascript:void(0);">ECX</a></li>
                <li class="breadcrumb-item active">Sessions</li>
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
            <div class="card-heading p-4">
                <form action="sessions" method="POST">
                    <div class="form-group">
                        <label for="session">Session</label>
                        <input type="text" name="session" class="form-control rounded-0" placeholder="Session" required>
                    </div>
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-block btn-primary">Add Session</button>
                    
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-8">
        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
            <tr>
                <th>S/N</th>
                <th>Session</th>
                <th>Action</th>
            </tr>
            </thead>


            <tbody>
                @foreach ($session as $session)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$session->session}}</td>
            <td><form action="sessions/{{$session->session_id}}" method="POST">
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

