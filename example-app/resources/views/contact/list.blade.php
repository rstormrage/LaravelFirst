<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->

@extends('layouts.app')


@section('list')
    <div>
        <table class="table table-striped table-hover table-responsive">
            <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Message</th> 
                <th width="120">Operation</th>              
                </tr>
            </thead>
            <tbody>
                @foreach($data as $val)
                <tr>
                <th scope="row">{{ $val->id }}</th>
                <td>{{ $val->name }}</td>
                <td>{{ $val->email }}</td>
                <td>{{ $val->message }}</td>    
                <td>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                 </td>

                </tr>
                @endforeach        
            </tbody>
        </table>
    </div>   
    @endsection
<!-- </body>
</html> -->