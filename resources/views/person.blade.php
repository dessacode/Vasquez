<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>style="color: {{ $color }}">Person</h1>
    <p>This is the person view.
    <hr>
    <p><b>Name:</b> {{ $name }}</p>
    <p><b>Age:</b>{{ $age }}</p>
    <p><b>Address:</b>{{ $address }}</p>
    <p><b>Siblings:</b>{{ $siblings }}</p>

    <hr>
    @if($age <18)
        <p style="color: red">cannot vote</p>
    @else
        <p style="color: green">can vote</p> 
    @endif

    <hr>
    <h3>Siblings</h3>
    <ol>
        @foreach($siblings as $siblings)
        <tr></tr>
    </ol>


</body>
</html>