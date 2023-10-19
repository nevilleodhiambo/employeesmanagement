@extends('layout.main')

@section('content')
            
       
        <div class="col-sm-12 col-xl-6 p-5">
           
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Create Nssf</h6>
                <form method="POST" action="{{route('nssf.update', $nssf->id)}}">
                    @csrf
                    @method('PUT')
                <div class="form-floating mb-3"> 
                    <input type="number" class="form-control" id="floatingInput" name="lel" value="{{$nssf->lel}}"
                        placeholder="E.g Enter Lower Earning Limit">
                    <label for="floatingInput">Lower Earning Limit</label>
                </div>

                <div class="form-floating mb-3"> 
                    <input type="number" class="form-control" id="floatingInput" name="hel" value="{{$nssf->hel}}"
                        placeholder="E.g Enter Higher Earning Limit">
                    <label for="floatingInput">Higher Earning Limit</label>
                </div>

                <div class="form-floating mb-3"> 
                    <input type="number" class="form-control" id="floatingInput" name="pension" value="{{$nssf->pension}}"
                        placeholder="E.g Enter Pension">
                    <label for="floatingInput">Pension Contribution</label>
                </div>
            
                <button type="submit" class="btn btn-primary">Update</button>

            </form>
            </div>
           

        </div>

           
@endsection