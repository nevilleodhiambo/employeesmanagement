@extends('layout.main')

@section('content')
<div class="col-sm-12 col-xl-6 p-3">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Departments List</h6>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
        @foreach ($departments as $department)

                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$department->name}}</td>
                    <td>{{$department->description}}</td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
