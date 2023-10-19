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
            <a href="{{route('paye.create')}}" class="btn btn-small btn-primary">Create</a>
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
        @foreach ($payes as $paye)

                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$paye->low_income}}</td>
                    <td>{{$paye->high_income}}</td>
                    <td>{{$paye->rates}}</td>
                    <td>
                        <a href="{{route('paye.edit', $paye->id)}}" class="btn btn-small btn-success">Edit</a>
                    </td>
                    {{-- <td>{{$department->description}}</td> --}}
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
