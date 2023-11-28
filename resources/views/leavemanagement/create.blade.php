@extends('layout.main')

@section('content')
            
       
        <div class="col-sm-12 col-xl-6 p-5">
           
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Create Department</h6>
                <form method="POST" action="{{route('leave.store')}}">
                    @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="name" autocomplete="off"
                        placeholder="E.g John Doe">
                    <label for="floatingInput">Your Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="email" autocomplete="off"
                        placeholder="E.g Johndoe@gmail.com">
                    <label for="floatingInput">Your Email</label>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Start Date</label>
                    <input class="form-control" type="date" id="formFile" name="start_date">
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">End Date</label>
                    <input class="form-control" type="date" id="formFile" name="end_date">
                </div>
            
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Short Description" name="description"
                        id="floatingTextarea" style="height: 150px;"></textarea>
                    <label for="floatingTextarea">Reason For Leave</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            </div>
           

        </div>

           
@endsection