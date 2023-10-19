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
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Lower Earning Limit</th>
                    <th scope="col">Higher Earning Limit</th>
                    {{-- <th scope="col">Description</th> --}}
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
        @foreach ($nssfs as $nssf)

                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$nssf->lel}}</td>
                    <td>{{$nssf->hel}}</td>
                    <td>{{$nssf->pension}} <span>%</span></td>
                    <td>
                        <a href="{{route('nssf.edit', $nssf->id)}}" class="btn btn-small btn-primary">Edit</a>
                    </td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
