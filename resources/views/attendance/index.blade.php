@extends('layout.main')

@section('content')
<div class="col-sm-12 col-xl-6 p-3">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Attendance List</h6>
        <table class="table table-striped">
            <div class="d-flex justify-content-end">
                <a href="{{route('attendance.form')}}" class="btn btn-small btn-success">New Attendance</a>
            </div>
           
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Present</th>
                    {{-- <th scope="col">Action</th> --}}
                </tr>
            </thead>
            <tbody>
                <tr>
        @foreach ($attendances as $attendance)

                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$attendance->employee->name}}</td>
                    <td>{{$attendance->date}}</td>
                    <td>
                      {{$attendance->is_present ? 'Yes' : 'No' }}
                    </td>
                    {{-- <td>
                        <a href="{{route('attendance.edit', $attendance->id)}}" class="btn btn-small btn-success">Edit</a>
                    </td> --}}
                    {{-- <td>{{$department->description}}</td> --}}
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
