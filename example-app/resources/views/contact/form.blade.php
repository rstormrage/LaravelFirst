<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit form</title>
</head>
<body> -->
@extends('layouts.app')


@section('form')
<div style="padding: 20px">
    <h1>Create Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif


    <div>
        <form action="/post" method="POST">
            <p>Name: <input type="text" name="name" value="{{ old('name') }}"></p>
            <p>E-mail: <input type="text" name="email" value="{{ old('email') }}"></p>
            <p>Message: <input type="text" name="message" value="{{ old('message') }}"></p>
            {{csrf_field()}}
            <input type="submit" value="submit">
        </form>
    </div>
</div>
@endsection
<!-- </body>
</html> -->