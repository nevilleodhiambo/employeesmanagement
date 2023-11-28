@extends('layout.main')

@section('content')
<div class="col-sm-12 col-xl-6 p-3">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">roles List</h6>
        <table class="table table-striped">
            <a href="{{route('roles.create')}}" class="btn btn-success">Add a Role</a>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Permissions</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
        @foreach ($roles as $role)

                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$role->name}}</td>
                    {{-- <td>
                        @foreach ($role->permissions as $permission)
                        <ul>
                            <li>{{$permission->name}}</li>
                        @endforeach
                        </ul>
                    </td>--}}
                    <td>
                        <a href="{{route('roles.edit', $role->id)}}" class="btn btn-small btn-success">Edit</a>
                        <form 
                            method="POST"
                            action="{{route('roles.destroy', $role->id)}}"
                            onsubmit="confirm('Are You Sure')">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-small btn-danger"/>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
