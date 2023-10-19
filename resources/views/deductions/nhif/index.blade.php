@extends('layout.main')

@section('content')
<div class="col-sm-12 col-xl-6 p-3">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Departments List</h6>
        <table class="table table-striped">
            <div class="d-flex justify-content-end">
            <a href="{{route('nhif.create')}}" class="btn btn-small btn-primary">Create</a>
            </div>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Lower Income</th>
                    <th scope="col">Higher Income</th>
                    <th scope="col">Rates</th>
                    {{-- <th scope="col">Description</th> --}}
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
        @foreach ($nhifs as $nhif)

                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$nhif->low_income}}</td>
                    <td>{{$nhif->high_income}}</td>
                    <td>{{$nhif->rates}}</td>
                    <td>
                        <a href="{{route('nhif.edit', $nhif->id)}}" class="btn btn-small btn-success">Edit</a>
                    </td>
                    {{-- <td>{{$department->description}}</td> --}}
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
