@extends('layout.main')

@section('content')
            
       
        <div class="col-sm-12 col-xl-6 p-5">
           
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Create Role</h6>
                 <form method="POST" action="{{route('roles.store')}}">
                    @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="name"
                        placeholder="E.g Procurement Department">
                    <label for="floatingInput">E.g Employee</label>
                </div>
            
                <div>
                   
                    <h4>Permissions</h4>
                    @foreach ($permissions as $permission)
                    <label id="{{$permission->id}}">{{$permission->name}}</label> 
                        <input type="checkbox" name="permission_ids[]" value="{{$permission->id}}"><br />
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            </div>
           

        </div>

           
@endsection