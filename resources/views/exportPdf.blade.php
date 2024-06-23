

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte de avistamientos</title>
    <style>
        /* Aquí puedes agregar los estilos CSS que desees */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f7f7f7;
        }
    </style>
</head>
<body>
    <h1>Reporte de avistamientos</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre común del ave</th>
                <th>Nombre científico del ave</th>
                <th>Nombre del área</th>
                <th>Fecha</th>
                <th>Número de avistamientos</th>
                <th>Nombre del usuario</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($avistamientos as $avistamiento)
                <tr>
                    <td>{{ $avistamiento->ave->nombre_comun }}</td>
                    <td>{{ $avistamiento->ave->nombre_cientifico }}</td>
                    <td>{{ $avistamiento->area->nombre }}</td>
                    <td>{{ $avistamiento->fecha }}</td>
                    <td>{{ $avistamiento->numero_avistamiento }}</td>
                    <td>{{ $avistamiento->nombre_usuario }} {{ $avistamiento->apellido_usuario }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

                        
   



