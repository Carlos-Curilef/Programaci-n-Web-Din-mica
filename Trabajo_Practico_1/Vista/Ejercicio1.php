<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <div id="enunciado">
    Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
    llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
    enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
    respuesta, que permita volver a la página anterior.
    </div>

    <form action="/PWD/Trabajo_Practico_1/Vista/Accion/verNumero.php" method="POST">
        <input type="number" name="numero" id="numero">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

