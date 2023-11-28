@extends('layout.main')

@section('content')

<div class="col-sm-18 col-xl-12 p-3">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Departments List</h6>
        <table class="table table-striped">
            <div class="d-flex">
                <a href="{{route('employees.create')}}" class="btn btn-small btn-success">Add Employee</a>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{route('employees.pdf')}}" class="btn btn-small btn-success">Save</a>
            </div>
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
                    <td><img src="{{ asset('uploads/' . $employee->image) }}"></td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->phone_number}}</td>
                    <td>{{$employee->department->name}}</td>
                    <td>{{$employee->job_title}}</td>
                    <td>{{$employee->dob}}</td>
                    <td>{{$employee->hire_date}}</td>
                    <td>{{$employee->salary}}</td>
                    <td>{{$employee->designation}}</td>
                    <td>{{$employee->email}}</td>
                    <td>
                        <a href="{{route('employees.edit', $employee->id)}}" class="btn btn-small btn-primary">Edit</a>
                        <a href="{{route('employees.show', $employee->id)}}" class="btn btn-small btn-success">Show</a>
                        <form action="{{route('employees.destroy', $employee->id)}}" method="POST" onsubmit="confirm('Are you Sure.?')">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-small btn-danger">
                        </form>
                    </td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection


    