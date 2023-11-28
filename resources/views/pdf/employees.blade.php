<h2 style="align-items: center">Smart<span style="color: blue;font-size: 24px">Emp</span></h2>
<table border="1px solid red">
    <tr>
        <th>#</th>
        <th>Employee Name</th>
        <th>Designation</th>
        <th>salary</th>
        <th>Date Hired</th>
        <th>Email</th>
        <th>Contact</th>
    </tr>
    <tr>
        @foreach ($employees as $employee)
        <td>{{$loop->iteration}}</td>
        <td>{{$employee->name}}</td>
        <td>{{$employee->designation}}</td>
        <td>{{$employee->salary}}</td>
        <td>{{$employee->hire_date}}</td>
        <td>{{$employee->email}}</td>
        <td>{{$employee->phone_number}}</td>
    </tr>
    <hr>
        @endforeach
</table>