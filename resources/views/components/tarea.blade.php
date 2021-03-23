@extends('user.layouts.tarea')

@section('content')
<body>

    <div class="terea">
        <h3>Tarea 1</h3>
        <p class="realizar">Por realizar</p>
    </div>
    
    <div class="fechaLimite">
        <p class="text">Fecha límite:</p>
        <p class="date">22/03/2021</p>
    </div>

    <div class="descripcion">
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
    </div>

    <div class="descripcion">
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
    </div>

    <div class="descripcion">
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
        <img src="tick.svg" alt="" class="check">
    </div>

    <div class="descripcion">
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
        <img src="tick.svg" alt="" class="check">
    </div>

    <div class="descripcion">
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
        <img src="tick.svg" alt="" class="check">
    </div>

    <link rel="stylesheet" href="tareas.css">
</body>
@endsection