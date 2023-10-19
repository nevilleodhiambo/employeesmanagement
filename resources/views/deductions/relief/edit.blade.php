@extends('layout.main')

@section('content')
            
       
        <div class="col-sm-12 col-xl-6 p-5">
           
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Create Personal Relief</h6>
                <form method="POST" action="{{route('relief.update', $relief->id)}}">
                    @csrf
                <div class="form-floating mb-3"> 
                    <input type="text" class="form-control @error('relief') border-red                     
                    @enderror" id="floatingInput" name="relief" value="{{old('relief')}}"
                        placeholder="E.g Enter relief">
                    <label for="floatingInput">Personal Relief</label>
                    <div class="text-red">
                        @error('relief') {{$message}}
                            
                        @enderror
                    </div>
                </div>
            
                <button type="submit" class="btn btn-primary">Update</button>

            </form>
            </div>
           

        </div>

           
@endsection