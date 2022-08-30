@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{auth()->user()->role}} management page

                    {{ __('You are logged in!') }}

                    
                    
                </div>
            </div>
        </div>
    </div>
    <div>
        <table class="table table-striped table-hover table-responsive">
            <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Message</th> 
                <th width="120">操作</th>              
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
                    <a href="">修改</a>
                    <a href="">删除</a>
                 </td>

                </tr>
                @endforeach        
            </tbody>
        </table>
    </div>   
</div>

@endsection
