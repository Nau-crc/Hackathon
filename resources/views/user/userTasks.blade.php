@extends('user.layouts.user')

@section('content')
<body>
    <x-userHeader/>

    <ul>
        <li>
            <h1>Tarea 1</h1>
            <p>Por realizar</p>
            <p>Inicio: 22/03/2021</p>
        </li>
        <li>
            <h1>Tarea 2</h1>
            <p>Por realizar</p>
            <p>Inicio: 22/03/2021</p>
        </li>
        <li>
            <h1>Tarea 3</h1>
            <p>Terminada</p>
            <p> <i src="./assets/check.svg"></i> Excelente</p>
            <i src="./assets/present.svg"></i>
        </li>
        <li>
            <h1>Tarea 4</h1>
            <p>Terminada</p>
            <p> <i src="./assets/check.svg"></i> Excelente</p>
            <i src="./assets/present.svg"></i>
        </li>
        <li>
            <h1>Tarea 5</h1>
            <p>Terminada</p>
            <p> <i src="./assets/check.svg"></i> Excelente</p>
            <i src="./assets/present.svg"></i>
        </li>
        <li>
            <h1>Tarea 6</h1>
            <p>Terminada</p>
            <p> <i src="./assets/check.svg"></i> Excelente</p>
            <i src="./assets/present.svg"></i>
        </li>
    </ul>

    <x-userFooter/>
</body>
@endsection