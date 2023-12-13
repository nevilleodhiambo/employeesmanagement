{{-- <label for="cars">Choose a car:</label>

<select name="attendance[]" id="cars" multiple>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select> --}}

@extends('layout.main')

@section('content')
      <form action="{{route('attendance.store')}}" method="post">
        @csrf
        @foreach ($employees as $employee)
            
        <label> {{$employee->name}}
        </label>
        <input type="checkbox" name="emp_ids[]" value="{{ $employee->id}}">

         <br>
        @endforeach
        <button type="submit">Mark Attendance</button>

      </form>

@endsection