@extends('layout.main')

@section('content')
            
       
        <div class="col-sm-12 col-xl-6 p-5">
           
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Create Nssf</h6>
                <form method="POST" action="{{route('nssf.store')}}">
                    @csrf
                <div class="form-floating mb-3"> 
                    <input type="number" class="form-control" id="floatingInput" name="lel" value="{{old('lel')}}"
                        placeholder="E.g Enter Lower Earning Limit">
                    <label for="floatingInput">Lower Earning Limit</label>
                    <div>
                        @error('lel') {{$message}}
                            
                        @enderror
                    </div>
                </div>

                <div class="form-floating mb-3"> 
                    <input type="number" class="form-control" id="floatingInput" name="hel" value="{{old('hel')}}"
                        placeholder="E.g Enter Higher Earning Limit">
                    <label for="floatingInput">Higher Earning Limit</label>
                     <div>
                        @error('hel') {{$message}}
                            
                        @enderror
                    </div>
                </div>

                <div class="form-floating mb-3"> 
                    <input type="number" class="form-control" id="floatingInput" name="pension" value="{{old('pension')}}"
                        placeholder="E.g Enter Pension">
                    <label for="floatingInput">Pension Contribution</label>
                    <div>
                        @error('pension') {{$message}}
                            
                        @enderror
                    </div>
                </div>
            
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            </div>
           

        </div>

           
@endsection