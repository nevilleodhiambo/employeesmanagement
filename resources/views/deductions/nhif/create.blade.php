@extends('layout.main')

@section('content')
            
       
        <div class="col-sm-12 col-xl-6 p-5">
           
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Create Department</h6>
                <form method="POST" action="{{route('nhif.store')}}">
                    @csrf
                <div class="form-floating mb-3"> 
                    <input type="number" class="form-control" id="floatingInput" name="low_income" value="{{old('lower_income')}}"
                        placeholder="E.g Enter Lower Income">
                    <label for="floatingInput">Lower Income</label>
                </div>

                <div class="form-floating mb-3"> 
                    <input type="number" class="form-control" id="floatingInput" name="high_income" value="{{old('higher_income')}}"
                        placeholder="E.g Enter Higher Income">
                    <label for="floatingInput">Higher Income</label>
                </div>

                <div class="form-floating mb-3"> 
                    <input type="number" class="form-control" id="floatingInput" name="rates" value="{{old('rates')}}"
                        placeholder="E.g Enter rate">
                    <label for="floatingInput">Rate</label>
                </div>
            
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            </div>
           

        </div>

           
@endsection