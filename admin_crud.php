<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles/alex-styles.css">
<title>Administración</title>
</head>
<body>

<header>
    <h2>Administrar Choferes</h2>
</header>

<div class="container">

    <div class="card">
        <h3>Registrar Nuevo Chofer</h3>

        <input type="text" placeholder="Nombre">
        <input type="text" placeholder="Usuario">
        <input type="text" placeholder="Placa Autobús">

        <button class="btn-primary">Guardar</button>
    </div>

    <div class="card">
        <h3>Lista de Choferes</h3>

        <table class="table">
            <tr>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Acciones</th>
            </tr>
            <tr>
                <td>Juan Pérez</td>
                <td>juan123</td>
                <td>
                    <button class="btn-secondary">Editar</button>
                    <button class="btn-danger">Eliminar</button>
                </td>
            </tr>
        </table>
    </div>

</div>

</body>
</html>