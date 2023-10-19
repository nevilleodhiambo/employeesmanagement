@extends('layout.main')

@section('content')
            
       
        <div class="col-sm-12 col-xl-6 p-5">
           
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Create Allowance</h6>
                <form method="POST" action="{{route('allowance.update', $allowance->id)}}">
                    @method('PUT')
                    @csrf
                <div class="form-floating mb-3"> 
                    <input type="text" class="form-control @error('relief') border-red                     
                    @enderror" id="floatingInput" name="name" value="{{$allowance->name}}"
                        placeholder="E.g Enter relief">
                    <label for="floatingInput">Type of allowance</label>
                    <div class="text-red">
                        @error('name') {{$message}}
                            
                        @enderror
                    </div>
                </div>

                    <div class="form-floating mb-3"> 
                        <input type="text" class="form-control @error('relief') border-red                     
                        @enderror" id="floatingInput" name="amount" value="{{$allowance->amount}}"
                            placeholder="E.g Enter relief">
                        <label for="floatingInput">Allowance Amount</label>
                        <div class="text-red">
                            @error('amount') {{$message}}
                                
                            @enderror
                        </div>
                </div>
            
                <button type="submit" class="btn btn-primary">Update</button>

            </form>
            </div>
           

        </div>

           
@endsection