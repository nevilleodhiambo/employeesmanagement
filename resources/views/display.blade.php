

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
</table>