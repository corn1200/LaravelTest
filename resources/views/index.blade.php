@extends('master')

@section('style')
    <style>
        body {
            background-color: #98ff98;
        }
    </style>
@stop

@section('content')
<p>
    {{ $greeting }} {{ $name }}. Welcome Back~

    <!-- HTML 주석으로 컴파일(내부 함수 등은 모두 실행 됨) -->
    <!-- {{ count(range(1, 10)) }} -->
</p>

{{ '@'.'foreach' }}<ul>
    @foreach($items as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>

{{ '@'.'for' }}<ul>
    @for($i = 0; $i < 5; $i++)
        <li>{{ $i }}</li>
    @endfor
</ul>

{{ '@'.'if' }}
@if($itemCount = count($items) && count($items) == 1)
    <p>There are one items !</p>
@elseif($itemCount = count($items))
    <p>There are {{ $itemCount }} items !</p>
@else
    <p>There is no item !</p>
@endif

{{ '@'.'unless' }}
@unless($itemCount = count($items))
    <p>There is no item !</p>
@elseif(count($items) == 1)
    <p>There are one items !</p>
@else
    <p>There are {{ $itemCount }} items !</p>
@endif

{{ '@'.'forelse' }}
@forelse($items as $item)
    <p>the item is {{ $item }}</p>
@empty
    <p>There is no item !</p>
@endforelse
@stop

@section('script')
    <script>
        alert("Hello Blade~ ^^/");
    </script>
@stop