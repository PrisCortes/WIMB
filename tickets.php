<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles/alex-styles.css">
<title>Historial de Tickets</title>
</head>
<body>

<header>
    <h2>Mis Tickets</h2>
</header>

<div class="container">

    <div class="card">
        <h3>Vigentes</h3>
        <table class="table">
            <tr>
                <th>QR</th>
                <th>Ruta</th>
                <th>Estado</th>
            </tr>
            <tr>
                <td>QR12345</td>
                <td>Ruta 1</td>
                <td style="color:green;">Vigente</td>
            </tr>
        </table>
    </div>

    <div class="card">
        <h3>Vencidos</h3>
        <table class="table">
            <tr>
                <th>QR</th>
                <th>Ruta</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
            <tr>
                <td>QR54321</td>
                <td>Ruta 2</td>
                <td style="color:red;">Vencido</td>
                <td><button class="btn-danger">Eliminar</button></td>
            </tr>
        </table>
    </div>

</div>

</body>
</html>