@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Globus</title>


</head>

<body>
    <div class="dodaj-clanak">
        <dodaj-clanak></dodaj-clanak>
    </div>
    

</body>

</html>
@endsection