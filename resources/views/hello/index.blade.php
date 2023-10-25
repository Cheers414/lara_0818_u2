@extends('layouts.master')
@section('title', 'Hello')
@section('content')
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>頁籤標題</title>

</head>

<body>
    <h1>This is {{$name}}'s home.</h1>
</body>

</html>
@endsection