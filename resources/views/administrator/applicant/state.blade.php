@extends('layouts.admin_sidebar')

@section('content')
@foreach ($applicant as $applicant)
<hr>
<div>application_number: {{ $applicant->application_number }}</div>
<div>firstname: {{ $applicant->firstname }}</div>
<div>lastname: {{ $applicant->lastname }}</div>
<div>middlename: {{ $applicant->middlename }}</div>
<div>date_of_birth: {{ $applicant->date_of_birth }}</div>
<div>phone_no: {{ $applicant->phone_no }}</div>
<div>email: {{ $applicant->email }}</div>
<div>department: {{ $applicant->department }}</div>
<div>enrollment_type: {{ $applicant->enrollment_type }}</div>
<div>jamb_no: {{ $applicant->jamb_no }}</div>
<div>jamb_score: {{ $applicant->jamb_score }}</div>
<div>gender: {{ $applicant->gender }}</div>
<div>marital_status: {{ $applicant->marital_status }}</div>
<div>state_of_origin: {{ $applicant->state_of_origin }}</div>
<div>local_government: {{ $applicant->local_government }}</div>
<div>home_town: {{ $applicant->home_town }}</div>
<div>home_address: {{ $applicant->home_address }}</div>
<div>applicant_passport: {{ $applicant->applicant_passport }}</div>
<div>course: {{ $applicant->course }}</div>
<div>religion: {{ $applicant->religion }}</div>
<div>address: {{ $applicant->address }}</div>
<div>genotype: {{ $applicant->genotype }}</div>
<div>bloodgroup: {{ $applicant->bloodgroup }}</div>
<div>session: {{ $applicant->session }}</div>
<div>admission_status: {{ $applicant->admission_status }}</div>
<div>admission_batch: {{ $applicant->admission_batch }}</div>
<div>school_id: {{ $applicant->school_id }}</div>
<div>register_status: {{ $applicant->register_status }}</div>
@endforeach
@endsection

