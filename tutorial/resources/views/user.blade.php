<h1>{{$name}}</h1>

@if($name == $users[0])
<h2>This is {{$name}}</h2>
@elseif($name == $users[1])
<h2>This is {{$name}}</h2>
@else
<h2>This is just Akhter</h2>
@endif

@foreach($users as $user)
<h2>{{$user}}</h2>
@endforeach

@for($i=0;$i<=10;$i++)
<h4>{{$i}}</h4>
@endfor
