@extends('layout.main')

@section('content')
            
       
        <div class="col-sm-12 col-xl-6 p-5">
           
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Create Department</h6>
                <form method="POST" action="{{route('levy.update', $levy->id)}}">
                    @csrf
                    @method('put')
                <div class="form-floating mb-3"> 
                    <input type="text" class="form-control" id="floatingInput" name="levy" value="{{$levy->levy}}"
                        placeholder="E.g Enter a Percantage">
                    <label for="floatingInput">Housing Levy</label>
                </div>
            
                <button type="submit" class="btn btn-primary">Update</button>

            </form>
            </div>
           

        </div>

           
@endsection