
id &emsp; &emsp;name&emsp;&emsp; email&emsp;&emsp;<br/>
@foreach($data as $val)
    {{$val->id}}&emsp;&emsp;{{$val->name}}&emsp;&emsp;{{$val->email}}
    <br/>
@endforeach