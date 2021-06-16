<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>details</title>
</head>
<body>
    <table>
        <tr>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Telephone No</th>
        <th>NIC</th>
        <th>Gender</th>
    </tr>
    @foreach ($data as $x )
    <tr>
        <td>{{$x[name]}}</td>
        <td>{{$x[dob]}}</td>
        <td>{{$x[phone]}}</td>
        <td>{{$x[NIC]}}</td>
        <td>{{$x[gender]}}</td>
    </tr>
        
    @endforeach
    </table>
    
</body>
</html>