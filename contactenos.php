<?php 
$destinatario = "daniel.ramirez@inprovicom.com,inprovicom@hotmail.com,inprovicom@terra.com,inprovicom@gmail.com"; 
$asunto = "Contacto Pagina Web"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Prueba de correo</title> 
</head> 
<body> 
<p> 
<b><table align="center">
							<form action="contactenos.php" method="post" name="Contactenos"></form>
                            <tbody><tr>
								<td>Nombre:<span class="Estilo1"> *</span></td>
                                <td>'.$_POST['nombre'].'</td>
							</tr>
							<tr>
                            	<td>Correo Electronico:<span class="Estilo1">*</span></td>
                                <td>'.$_POST['email'].'</td>
							</tr>
							<tr>
                            	<td>Teléfono:</td>
                                <td>'.$_POST['telefono'].'</td>
							</tr>
							<tr>
                            	<td>Asunto:<span class="Estilo1">*</span></td>
                                <td>'.$_POST['asunto'].'</td>
							</tr>
						</tbody></table></p> 
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: info<info@inprovicom.com>\r\n"; 


mail($destinatario,$asunto,$cuerpo,$headers);

//echo "Hemos recibido tu solicitud, muy pronto nos contactaremos contigo";
header("Location:index.html");

?>