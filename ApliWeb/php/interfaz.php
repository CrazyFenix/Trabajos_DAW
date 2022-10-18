<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleint.css">
    <title>Interfaz</title>
</head>
<body>
                    <h1>Productos del Bazar</h1>

    <table>

        <tr>
            <td> ID </td>
            <td><input type="text" name="codigo" id="codigo" required minlength="5" maxlength="10" size="10"> </td>
        </tr>

        <tr>
            <td>Nombre</td>
            <td><input type="text" name="name" id="name" required size="35" maxlength="35"></td>
        </tr>

        <tr>
            <td>Cantidad</td>
            <td><input type="text" name="cantidad" id="cantidad" required minlenght="1" maxlength="2" size="4"></td>
        </tr>

        <tr>
            <td>Marca</td>
            <td>
                <select name="Lista" id="lista">
                    <option value="">Adidas</option>
                    <option value="">Nike</option>
                    <option value="">Puma</option>
                    <option value="">Pirma</option>
                    <option value="">Patito</option>
                </select>
            </td>
            
        </tr>

        <tr>
            <td>
                <button>Enviar</button>
            </td>
        </tr>


    </table>
</body>
</html>