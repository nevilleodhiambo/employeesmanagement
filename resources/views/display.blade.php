{{-- 

<table>
    <tr>
        <th>Name</th>
        <th>Salary</th>
        <th>Nhif</th>
        <th>Nhif Relief</th>
        <th>Paye</th>
    </tr>
    <tr>

        @foreach ($updatedsalarys as $row)
        <td>{{$row['name']}}</td>
    <td>{{$row['newsalary']}}</td>
    <td>{{$row['rate']}}</td>
    <td>{{$row['nhifsrelief']}}</td>
    <td>{{$row['paye']}}</td>
    </tr>

@endforeach
</table> --}}
@extends('layout.main')

@section('content')
<div class="col-sm-12 col-xl-12 p-3">
   
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Peronal Relief</h6>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th scope="col">name</th>
                    <th scope="col">Gross Salary</th>
                    <th scope="col">Nhif Relief</th>
                    <th scope="col">Nssf Tier 1</th>
                    <th scope="col">Nssf Tier 2</th>
                    <th scope="col">Paye</th>
                    <th scope="col">Housing Levy</th>
                    <th scope="col">Net Salary</th>
                    {{-- <th scope="col">Description</th> --}}
                    {{-- <th scope="col">Action</th> --}}
                </tr>
            </thead>
            <tbody>
                <tr>
        @foreach ($updatedsalarys as $row)

                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$row['name']}}</td>
                    <td>{{$row['newsalary']}}</td>
                    <td>{{$row['rate']}}</td>
                    <td>{{$row['tier1']}}</td>
                    <td>{{$row['tier2']}}</td>
                    <td>{{$row['paye']}}</td>
                    <td>{{$row['hselevy']}}</td>
                    <td>{{$row['net']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

