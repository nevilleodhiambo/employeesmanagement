@extends('layout.main')

@section('content')
            
       
        <div class="col-sm-12 col-xl-6 p-5">
           
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Create Department</h6>
                <form method="POST" action="{{route('department.store')}}">
                    @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="name"
                        placeholder="E.g Procurement Department">
                    <label for="floatingInput">E.g Procurement Department</label>
                </div>
            
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Short Description" name="description"
                        id="floatingTextarea" style="height: 150px;"></textarea>
                    <label for="floatingTextarea">Description</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            </div>
           

        </div>

           
@endsection