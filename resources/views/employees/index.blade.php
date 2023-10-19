@extends('layout.main')

@section('content')

<div class="col-sm-18 col-xl-12 p-3">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Departments List</h6>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Department</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">Date Of Birth</th>
                    <th scope="col">Date Employed</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
        @foreach ($employees as $employee)

                    <th scope="row">{{$loop->iteration}}</th>
                    <td><img src="{{ asset('storage/' . $employee->image) }}"></td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->phone_number}}</td>
                    <td>{{$employee->department_id}}</td>
                    <td>{{$employee->job_title}}</td>
                    <td>{{$employee->dob}}</td>
                    <td>{{$employee->hire_date}}</td>
                    <td>{{$employee->salary}}</td>
                    <td>{{$employee->designation}}</td>
                    <td>{{$employee->email}}</td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection


    