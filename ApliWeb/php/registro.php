<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/registro.css">
</head>
<body>
<div class="Table">

    <div class="Title">
        <p>Esta es la tabla</p>
    </div>

<div class="Heading">
    <div class="Cell">
        <p>TITULO DE LA TABLA</p>
    </div>
</div>


<div class="Row">

    <div class="Cell">
         <p>Nombre</p>
    </div>

    <div class="Cell">
        
    </div>

    <div class="Cell">
        <p>Tú Imágen</p>
    </div>

</div>

<div class="Row">

    <div class="Cell">
        <p>Edad</p>
    </div>

    <div class="Cell">
    <input type="number" name="edad" id="edad">
    </div>

    <div class="Cell">
        <p>Imágen de niño, joven, adulto</p>
    </div>
    
</div>


<div class="Row">

    <div class="Cell">
        <p>Género</p>
    </div>

    <div class="Cell">
        <input type="radio" name="F" id="F"> <label for="contactChoice2">F</label>
        <input type="radio" name="M" id="M"> <label for="contactChoice2">M</label>
        <input type="radio" name="O" id="O"> <label for="contactChoice2">Otro</label>
    </div>

    <div class="Cell">
        <p>Imágen Género</p>
    </div>
    
</div>


<div class="Row">

    <div class="Cell">
         <p>Grupo</p>
    </div>

    <div class="Cell">
        <select name="Grupo" id="Grupo">
            <option value="PV">5PV</option>
            <option value="PV">3PV</option>
            <option value="PV">1PV</option>
            <option value="ARH">5ARH</option>
            <option value="ARH">5ARH</option>
            <option value="ARH">5ARH</option>
            <option value="ARH">5ARH</option>
        </select>
    </div>

    <div class="Cell">
        <p>Imágen Grupo</p>
    </div>

</div>

</div>
</form>
</body>
</html>