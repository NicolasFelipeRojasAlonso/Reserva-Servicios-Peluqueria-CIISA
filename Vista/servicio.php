
<html>

<script>
    function soloNumeros(e) {
        var key = e.charCode;
        console.log(key);
        return key >= 48 && key <= 57;
    }
</script>

<head>
    <title>SERVICIOS</title>
</head>

<body>
    <h1>SERVICIOS</h1>

    <h3>Ingrese los siguientes datos</h3>
    <form action="../Controller/ControllerServicio.php" method="POST">
        <tr>
            <th> <label for="rut">RUT:</label> </th>
            <th> <input type="text" id="rut" name="rut" onkeypress="return soloNumeros(event)"> </th>
        </tr>
        <br>
        <br>
        <tr>
            <th><label for="name">Nombre</label></th>
            <th><input type="text" name="name" id="name" placeholder="Nicolas Rojas"></th>
        </tr>
        <br>
        <br>
        <tr>
            <th> <label for="sexo">Sexo: </label> </th>
            <th> <select name="sexo" id="sexo">
                    <option></option>
                    <option value="hombre">Hombre</option>
                    <option value="mujer">Mujer</option>
                </select> </th>
        </tr>
        <br>
        <br>
        <tr>
            <th> <label for="servicios">Servicios: </label></th>
        </tr>
        <tr>
            <td>
                <input type="checkbox" id="corteCabello" name="servicios[]" value="Corte de cabello" />
                <label for="corteCabello">Corte de cabello</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" id="corteCero" name="servicios[]" value="Corte al cero" />
                <label for="corteCabello">Corte al cero</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" id="afeitado" name="servicios[]" value="Afeitado" />
                <label for="afeitado">Afeitado</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" id="masajeCapilar" name="servicios[]" value="Masaje capilar" />
                <label for="masajeCapilar">Masaje capilar</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" id="tenido" name="servicios[]" value="Teñido" />
                <label for="tenido">Teñido</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" id="peinado" name="servicios[]" value="Peinado" />
                <label for="peinado">Peinado</label>
            </td>
        </tr>
        <br>
        <br>
        <tr>
            <td>
                <button type="submit">Reservar</button>
            </td>
        </tr>
    </form>
</body>

</html>