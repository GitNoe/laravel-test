@extends('layout')

@section('content')
    <h1>Contenido de Contacto</h1>

    <div>
        <h2>Ponte en contacto con nosotres</h2>
        <hr>
    </div>
    <div class="form-box">
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input class="form-control" id="name" type="text" name="Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" id="email" type="email" name="Email">
            </div>
            <div class="form-group">
                <label for="message">Mensaje</label>
                <textarea class="form-control" id="message" name="Message"></textarea>
            </div>
            <input class="btn btn-secondary" type="submit" value="Enviar" />
        </form>
    </div>

    <div>
        <h2>Puedes llamarnos o visitarnos en</h2>
        <hr>
        <h4><i class="bi bi-chevron-double-right"></i>989 35 87 12</h4>
        <h4><i class="bi bi-chevron-double-right"></i>Calle Inventada, Nº 90, 5º</h4>
    </div>
@endsection
