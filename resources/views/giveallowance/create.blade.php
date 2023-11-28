@extends('layout.main')

@section('content')
            
       
        <div class="col-sm-12 col-xl-6 p-5">
           
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Assign Allowance</h6>
                <form method="POST" action="{{route('giveallowance.store')}}">
                    @csrf
                    
                    <input type="hidden" name="employee_id" value="{{$employee_id}}">

                 
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Allowance</th>
                                <th scope="col">Amount</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                    @foreach ($allowances as $allowance)
            
                               
                                <td>
                              <input type="checkbox" name="allowance[]" value="{{$allowance->id}}">

                                    <label for="">{{$allowance->name}}</label>
                                    <div>
                                        @error('allowance[]'){{$message}}
                                            
                                        @enderror
                                    </div>

                                </td>
                                <td>
                                    <label for="">Amount</label>
                                 <input type="number" name="amount[]">
                                 <div>
                                    @error('amount[]'){{$message}}
                                        
                                    @enderror
                                </div>

                                </td>
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>    
                    <input type="submit" value="Submit" class="btn btn-primary">     
            

            </form>
            </div>
           

        </div>

           
@endsection
