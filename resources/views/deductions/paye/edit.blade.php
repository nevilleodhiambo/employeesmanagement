@extends('layout.main')

@section('content')
            
       
        <div class="col-sm-12 col-xl-6 p-5">
           
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Create Nssf</h6>
                <form method="POST" action="{{route('paye.update', $paye->id)}}">
                    @csrf
                <div class="form-floating mb-3"> 
                    <input type="number" class="form-control" id="floatingInput" name="low_income" value="{{$paye->low_income}}"
                        placeholder="E.g Enter Lower Earning Limit">
                    <label for="floatingInput">Lower Income</label>
                    <div>
                        @error('low_income') {{$message}}
                            
                        @enderror
                    </div>
                </div>

                <div class="form-floating mb-3"> 
                    <input type="number" class="form-control" id="floatingInput" name="high_income" value="{{$paye->high_income}}"
                        placeholder="E.g Enter Higher Earning Limit">
                    <label for="floatingInput">Higher Income </label>
                     <div>
                        @error('high_income') {{$message}}
                            
                        @enderror
                    </div>
                </div>

                <div class="form-floating mb-3"> 
                    <input type="text" class="form-control" id="floatingInput" name="rates" value="{{$paye->rates}}"
                        placeholder="E.g Enter Pension">
                    <label for="floatingInput">Rates</label>
                    <div>
                        @error('rates') {{$message}}
                            
                        @enderror
                    </div>
                </div>
            
                <button type="submit" class="btn btn-primary">Update</button>

            </form>
            </div>
           

        </div>

           
@endsection