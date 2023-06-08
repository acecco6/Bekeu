<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #1a1a1a;
            color: #fff;
        }

        body a {
            display: block;
            margin-bottom: 12px !important;
        }

        .alert {
            position: absolute;
            top: 20px;
            margin: auto !important;
        }
    </style>
</head>

<body>
    @if (session('success'))
        <div class="alert alert-success">
            <a>Se elimino la suscripción correctamente</a>
        </div>
    @endif
    <div class="container">

        <br>
        <h1 class="text-white">Suscripciones</h1>
        <a href={{ route('suscripcion.create') }}>Crear Suscripcion</a>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Estado</th>
                    <th>opciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($suscripciones as $suscripcion)
                    <tr>
                        <td>{{ $suscripcion->id }}</td>
                        <td>{{ $suscripcion->email }}</td>
                        <td>{{ $suscripcion->name }}</td>
                        <td>
                            <a href={{ route('suscripcion.show', $suscripcion->id) }}>Editar</a>
                            <form action={{ route('suscripcion.delete', $suscripcion->id) }} method="POST">
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Eliminar</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
