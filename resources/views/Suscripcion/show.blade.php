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

        .alert {
            position: absolute;
            top: 20px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: #333;
            margin: auto
        }

        .form-control {
            background-color: #222;
            color: #fff;
        }

        form-group .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>

<body>

    <div class="container">
        @if ($errors->any())
            <div class="alert alert-warning" role="alert">
                @foreach ($errors->all() as $error)
                    <a>{{ $error }}</a>
                @endforeach
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                <a>Se actualizo la suscripción correctamente</a>
            </div>
        @endif
        <div class="card">

            <div class="card-body">
                <a href={{ route("suscripcion.index") }}>Ver Suscripciones</a>
                <h2 class="card-title text-center">Actualizar Suscripción</h2>
                <form method="POST" action={{ route('suscripcion.update') }}>
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input  type="email" class="form-control" id="email" name="email" value={{ $data->email }} required>
                        <input  hidden type="numeric" class="form-control" id="id" name="id" value={{ $data->id }} required>
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado:</label>
                        <select class="form-control" id="estado" name="estado_id" required>
                            @foreach ($states as $state)
                                @if ($state->name==$data->name)
                                    <option selected value="{{ $state->id }}">{{ $state->name }}</option>
                                @else
                                    <option  value="{{ $state->id }}">{{ $state->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
