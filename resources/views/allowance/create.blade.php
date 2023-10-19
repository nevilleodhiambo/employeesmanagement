@extends('layout.main')

@section('content')
            
       
        <div class="col-sm-12 col-xl-6 p-5">
           
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Create Allowance</h6>
                <form method="POST" action="{{route('allowance.store')}}">
                    @csrf
                <div class="form-floating mb-3"> 
                    <input type="text" class="form-control @error('name') border-red                     
                    @enderror" id="floatingInput" name="name" value="{{old('name')}}"
                        placeholder="E.g Enter relief">
                    <label for="floatingInput">Type of allowance</label>
                    <div class="text-red">
                        @error('name') {{$message}}
                            
                        @enderror
                    </div>
                </div>

                    <div class="form-floating mb-3"> 
                        <input type="number" class="form-control @error('amount') border-red                     
                        @enderror" id="floatingInput" name="amount" value="{{old('amount')}}"
                            placeholder="E.g Enter Amount">
                        <label for="floatingInput">Allowance Amount</label>
                        <div class="text-red">
                            @error('amount') {{$message}}
                                
                            @enderror
                        </div>
                </div>
            
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            </div>
           

        </div>

           
@endsection