@foreach ($years as $year)
<div><a href="{{ route('projects', ['years'=>$year['year'], 'type'=>$type]) }}">{{ $year['year'] }}</a></div>
@endforeach