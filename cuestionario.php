
<!DOCTYPE html>
<html>

<head>
    <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
	<title>Cuestionario</title>
</script>
</head>

<body>
    <?php  
$cliente = $_GET['cliente'];
$a = $cliente;
?>
<form><img src="imagenes\tech.jpg"  class="logo"></form>
<br>
<br>
<br>
<br>
<form name ="form1" method ="post" action ="validacion.php" class="cuestions">

    <div>
	<p>Nombre de Contacto: <input type="text" name="contacto" required  size="55"/ class="nomcontacto"></p>
    <textarea name="cliente" style="visibility:hidden;"><?php echo $a;?> </textarea>
	<br>
    <fieldset>
        <legend>1.Califique el trato y la atención que recibió por parte de los Ejecutivos de Tech for Data durante la implementación de su proyecto:</legend>
        <label>
            <input type="radio" required name="Uno" value="Excelente" method="post"> Excelente
        </label> <br>
        <label>
            <input type="radio" name="Uno" value="Muy Buena" method="post"> Muy Buena
        </label><br>
        <label>
            <input type="radio" name="Uno" value="Buena" method="post"> Buena
        </label><br>
        <label>
            <input type="radio" name="Uno" value="Regular" method="post"> Regular
        </label><br>
        <label>
            <input type="radio" name="Uno" value="Mala" method="post"> Mala
        </label>
    </fieldset>
    <br>
    <fieldset>
        <legend>2.Califique nuestro nivel de comprensión de sus necesidades empresariales. </legend>
               <label>
            <input type="radio" required name="Dos" value="Excelente" method="post"> Excelente
        </label> <br>
        <label>
            <input type="radio" name="Dos" value="Muy Buena" method="post"> Muy Buena
        </label><br>
        <label>
            <input type="radio" name="Dos" value="Buena" method="post"> Buena
        </label><br>
        <label>
            <input type="radio" name="Dos" value="Regular" method="post"> Regular
        </label><br>
        <label>
            <input type="radio" name="Dos" value="Mala" method="post"> Mala
        </label>
        </label>
    </fieldset>
    <br>

    <fieldset>
        <legend>3.El servicio ha solucionado satisfactoriamente sus necesidades? Como lo califica:</legend>
                <label>
            <input type="radio" required name="Tres" value="Excelente" method="post"> Excelente
        </label> <br>
        <label>
            <input type="radio" name="Tres" value="Muy Buena" method="post"> Muy Buena
        </label><br>
        <label>
            <input type="radio" name="Tres" value="Buena" method="post"> Buena
        </label><br>
        <label>
            <input type="radio" name="Tres" value="Regular" method="post"> Regular
        </label><br>
        <label>
            <input type="radio" name="Tres" value="Mala" method="post"> Mala
        </label>
    </fieldset>
    <br>

    <fieldset>
        <legend>4.¿El Servicio da respuesta en los tiempos establecidos, de acuerdo a las necesidades y problemas de los usuarios?</legend>
        <label>
            <input type="radio" required name="Cuatro" value="Muy Satisfecho"> Muy Satisfecho
        </label><br>
        <label>
            <input type="radio" name="Cuatro" value="Satisfecho"> Satisfecho
        </label><br>
        <label>
            <input type="radio" name="Cuatro" value="Poco Satisfecho"> Poco Satisfecho
        </label><br>
        <label>
            <input type="radio" name="Cuatro" value="Nada Satisfecho"> Nada Satisfecho
        </label>
    </fieldset>
    <br>

    <fieldset>
        <legend>5.Cuál es el grado de satisfacción con el servicio?</legend>
        <label>
            <input type="radio" required name="Cinco" value="Muy Satisfecho"> Muy Satisfecho
        </label><br>
        <label>
            <input type="radio" name="Cinco" value="Satisfecho"> Satisfecho
        </label><br>
        <label>
            <input type="radio" name="Cinco" value="Poco Satisfecho"> Poco Satisfecho
        </label><br>
        <label>
            <input type="radio" name="Cinco" value="Nada Satisfecho"> Nada Satisfecho
        </label>
    </fieldset>
    <br>

    <fieldset>
        <legend>6.¿Cuál es tu valoración del contenido del portal de reporteo? (acorde a lo establecido)</legend>
        <label>
            <input type="radio" required name="Seis" value="Excelente"> Excelente
        </label> <br>
        <label>
            <input type="radio" name="Seis" value="Muy Buena"> Muy Buena
        </label><br>
        <label>
            <input type="radio" name="Seis" value="Buena"> Buena
        </label><br>
        <label>
            <input type="radio" name="Seis" value="Regular"> Regular
        </label><br>
        <label>
            <input type="radio" name="Seis" value="Mala"> Mala
        </label>
    </fieldset>
    <br>
    <fieldset>
        <legend>7.	Cómo está usted satisfecho con el rendimiento de nuestro software?</legend>
        <label>
            <input type="radio" required name="Siete" value="Muy Satisfecho"> Muy Satisfecho
        </label><br>
        <label>
            <input type="radio" name="Siete" value="Satisfecho"> Satisfecho
        </label><br>
        <label>
            <input type="radio" name="Siete" value="Poco Satisfecho"> Poco Satisfecho
        </label><br>
        <label>
            <input type="radio" name="Siete" value="Nada Satisfecho"> Nada Satisfecho
        </label>
    </fieldset>
    <br>

    <fieldset>
        <legend>8.La información que proporciona el portal de reporteo, ¿le ayuda en su toma de decisiones?</legend>
        <label>
            <input type="radio" required name="Ocho" value="Si"> Si
        </label><br>
        <label>
            <input type="radio" name="Ocho" value="No"> No
        </label>
    </fieldset>
    <br>
    <fieldset>
        <legend>9.	Está conforme con el servicio actualmente proporcionado?</legend>
        <label>
            <input type="radio" required name="Nueve" value="Muy Satisfecho"> Muy Satisfecho
        </label><br>
        <label>
            <input type="radio" name="Nueve" value="Satisfecho"> Satisfecho
        </label><br>
        <label>
            <input type="radio" name="Nueve" value="Poco Satisfecho"> Poco Satisfecho
        </label><br>
        <label>
            <input type="radio" name="Nueve" value="Nada Satisfecho"> Nada Satisfecho
        </label>
    </fieldset>
    <br>

    <fieldset>
        <legend>10.	¿Cuáles son las probabilidades de que nos recomiende a otras personas?</legend>
        <label>
            <input type="radio" required name="Diez" value="Muy Probable"> Muy Probable
        </label><br>
        <label>
            <input type="radio" name="Diez" value="Probable"> Probable
        </label><br>
        <label>
            <input type="radio" name="Diez" value="Un poco Probable"> Un poco Probable
        </label><br>
        <label>
            <input type="radio" name="Diez" value="Ligeramente Probable"> Ligeramente Probable
        </label><br>
         <label>
            <input type="radio" name="Diez" value="Nada Probable"> Nada Probable
        </label>
    </fieldset>
    <br>
    <fieldset>
        <legend>Comentarios adicionales / recomendaciones / mejoras: </legend>
        <textarea name="Comentarios" id="textarea" class="txta"></textarea>

    </fieldset>
    <br>
<center><input type="submit" class="boton_personalizado" name="submit" value="Enviar" /> &nbsp; &nbsp; &nbsp; <input type="reset"  class="boton_personalizado" value="Borrar"></center>
</div>
</form>
</body>
</html>