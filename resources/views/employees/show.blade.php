@extends('layout.main')

@section('content')
<div class="col-sm-12 col-xl-6 p-3">
    <h3 class="mb-4">Allowances List</h3>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <div class="d-flex">
        <a href="{{route('giveallowance.create', ['employee_id' => $employee->id])}}" class="btn btn-small btn-success">Give Allowance</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Allowance</th>
                <th scope="col">Amount</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
    @foreach ($allowances as $allowance)

                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$allowance->allowance->name}}</td>
                <td>{{$allowance->amount}}</td>
                <td>
                    <a href="{{route('giveallowance.edit', $allowance->id)}}" class="btn btn-small btn-success">Edit</a>
                    <form method="POST" onsubmit="confirm('Are You Sure')" action="{{route('giveallowance.destroy', $allowance->id)}}" class="btn btn-small">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-small btn-danger">
                    </form>
                </td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
    


   
</div>
@endsection
