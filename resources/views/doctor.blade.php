<html>
<head>
    <title>test</title>
</head>
<body>
    <h1>Доктор</h1>
    <p>Ім'я: {{$doctor["name"]}}</p>
    <p>Прізвище: {{$doctor["surname"]}}</p>
    <p>Спеціалізація: {{$doctor["certification"]}}</p>
    
    @if ($diploms)
        <p>Наявні дипломи:</p>
    @foreach($diploms as $diplom)
        <li>{{ $diplom["name"] }}</li>
    @endforeach
    @else
        <h2>Даних про дипломи немає</h2>
    @endif

     
    @if ($patients)
        <p>Пацієнти:</p>
    @foreach($patients as $patient)
        <li><a href="{{ url('test/patient/'.$patient['id']) }}">{{ $patient["name"] }} {{ $patient["surname"]}} {{$patient["age"]}}</a></li>
    @endforeach
    @else
        <h2>У цього лікаря немає пацієнтів</h2>
    @endif
    
</body>
</html>
