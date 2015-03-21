<html>
    <head>
    	<meta charset="utf-8">
    	<title>Formulario de Captura de Datos</title>
    </head>
    <body>
    	<form action="manejadorAlumno.php"method="post">
    		<tr>
    			<td>
    				Carnet:
    			</td><br>
    			<td>
    				<input type="text" name="carnet">
    			</td><br>
    		</tr>
    		<tr>
    			<td>
    				Nombre:
    			</td>
    			<td>
    				<input type="text" name="nombre">
    			</td><br>
    		</tr>
    		<tr>
    			<td>
    				Apellido:
    			</td>
    			<td>
    				<input type="text" name="apellido">
    			</td><br>
    		</tr>
    		<tr>
    			<td>
    				Fecha de Nacimiento:
    			</td>
    			<td>
    				<input type="text" name="fecha de nacimiento">
    			</td><br>
    		</tr>
    		<tr>
    			<td>
    				Direccion:
    			</td>
    			<td>
    				<input type="text" name="direccion">
    			</td><br>
    		</tr>
    		<tr>
    			<td>
    				Seccion
    			</td>
    			     <select name'seccion'>
    			     	<option value=""></option>
    			     	<option value="sitema">Sistemas</option>
    			     	<option value="manto">Mantenimiento</option>
    			     </select>
    			 </td>
    		</tr>
    		<tr>
    			<td colspan="2">
    				<input type="submit" name='bot' value='Enviar'>
    			</td>
    		</tr>

    	</form>
    </body>
</html>