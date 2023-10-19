@extends('layout.main')


@section('content')
<div class="col-sm-12 col-xl-6 p-3">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Create Employee</h6>
        <form method="POST" action="{{route('employees.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="form-floating mb-3">
    
    <input type="text" name="name" class="form-control" id="floatingInput" value="{{old('name')}}" placeholder="John Doe">
    <label for="floatingInput">Employee Name</label>
                <div>@error('name') {{$message}}
                    
                @enderror </div>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" value="{{old('email')}}"
                    placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                <div>@error('email') {{$message}}
                        
                    @enderror </div>
            </div>

            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingPassword" name="phone_number" value="{{old('phone_number')}}"
                    placeholder="0712345678">
                <label for="floatingPassword">Phone Number</label>
                <div>@error('phone_number') {{$message}}
                        
                    @enderror </div>
            </div>
    <div class="mb-3">
            <label for="formFile" class="form-label">Image</label> 
            <input class="form-control" type="file" id="formFile" name="image" value="{{old('image')}}">
            <div>@error('image') {{$message}}
                    
                @enderror </div>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Job Title</label> 
            <input class="form-control" type="text" id="formFile" name="job_title" value="{{old('image')}}">
            <div>@error('image') {{$message}}
                    
                @enderror </div>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPassword" name="designation" value="{{old('designation')}}"
                placeholder="Bachelors">
            <label for="floatingPassword">Designation</label>
            <div>@error('designation') {{$message}}
                    
                @enderror </div>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Salary</label>
            <input class="form-control" type="number" id="formFile" name="salary" value="{{old('salary')}}">
            <div>@error('salary') {{$message}}
                    
                @enderror </div>
        </div>

    <div class="mb-3">
            <label for="formFile" class="form-label">Date Of Birth</label>
            <input class="form-control" type="date" id="formFile" name="dob" value="{{old('dob')}}">
            <div>@error('dob') {{$message}}
                    
                @enderror </div>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Date Employeed</label>
            <input class="form-control" type="date" id="formFile" name="hire_date" value="{{old('hire_date')}}">
        </div>

        <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" name="department_id"
                aria-label="Floating label select example">
                {{-- <option selected>Choose Department</option> --}}
                 @foreach ($departments as $department)
                 <option value="{{$department->id}}">{{$department->name}}</option>
                @endforeach
                
            </select>
            <label for="floatingSelect">Departments</label>
            <div>@error('department_id') {{$message}}
                    
                @enderror </div>
        </div>

    <input type="submit" value="submit">

</form>

@endsection