<html>
<head>
    <title>test</title>
</head>
<body>
    <h1>Паціент</h1>
    <p>Ім'я: {{$patient["name"]}}</p>
    <p>Прізвище: {{$patient["surname"]}}</p>
    <p>Вік: {{$patient["age"]}} років</p>
    
    @if ($doctors)
        <h2>Лікарі:</h2>
    @foreach($doctors as $doctor)
        <li><a href="{{ url('test/doctor/'.$doctor['id']) }}">{{ $doctor["name"] }} {{ $doctor["surname"]}} {{$doctor["certification"]}}</a></li>
    @endforeach
    @else
        <h2>У цього пацієнта немає лікаря</h2>
    @endif
    
</body>
</html>
