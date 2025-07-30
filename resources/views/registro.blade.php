
<!DOCTYPE html>
<html>
    @extends('plantillaPag.plantilla')

    @section('title','registro')

    @section('contenido')
<head>
    <title>Registro de Viaje</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      align-content: center
    }

    .formulario {
      background-color: #fff;
      max-width: 500px;
      margin: 50px auto;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 10px;
    }

    input, select {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
      justify-content: center;
    }

    button {
      background-color: #28a745;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>
    
    <h1>Formulario de Registro</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <div class="formulario">
    <form action="{{ route('registro.store') }}" method="POST">
        @csrf
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Apellidos:</label><br>
        <input type="text" name="apellido" required><br><br>

        Elige tu destino: <br>
            <select name="destino">
                <option value="cancun">cancun</option>
                <option value="puerto vallarta">puerto vallarta</option>
                <option value="oaxaca">oaxaca</option>
                <option value="acapulco">acapulco</option>
                <option value="veracruz">veracruz</option>
            </select><br>

        <label>Número de boletos:</label><br>
        <input type="number" name="numero_boletos" required><br><br>

        <label>Correo electrónico:</label><br>
        <input type="email" name="correo_electronico" required><br><br>

        <button type="submit">Registrar</button>
    </form>
    </div>
</body>
@endsection
</html>
