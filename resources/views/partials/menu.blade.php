<ul>
<li><a href="{{ route('home') }}">Home</a></li>
    <li>Products</li>
    @for ($i = 1; $i <= 10; $i++)
<li><a href="{{ route('hallo', ['name' => $i]) }}">Hallo {{ $i }}</a></li>
    @endfor
<li><a href="{{ route('hallo', ['name' => 'Dia', 'age' => '17']) }}">Hallo Dia</a></li>
</ul>