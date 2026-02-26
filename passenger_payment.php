<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles/alex-styles.css">
<title>Pagar Boleto</title>
</head>
<body>

<header>
    <h2>Pago Anticipado</h2>
</header>

<div class="container">
    <div class="card">
        <h3>Comprar Boleto</h3>

        <label>Ruta</label>
        <select>
            <option>Ruta 1</option>
            <option>Ruta 2</option>
        </select>

        <label>Método de Pago</label>
        <select>
            <option>Tarjeta</option>
            <option>Transferencia</option>
        </select>

        <div style="background:#7cbc9a; padding:10px; border-radius:6px;">
            ⚠ Advertencia: Pagar anticipadamente NO garantiza un lugar en el autobús.  
            El código QR no tiene fecha de caducidad.
        </div>

        <br>
        <button class="btn-primary">Generar Código QR</button>
    </div>
</div>

</body>
</html>