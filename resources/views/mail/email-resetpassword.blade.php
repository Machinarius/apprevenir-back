<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Apprevenir</title>
</head>		

<body>
<div style="padding-top: 25px;  padding-bottom: 25px">	
	<table style="margin-left:auto; margin-right:auto; background:#fff; border-radius: 8px; border-collapse: collapse; max-width:480px; min-width:320px; box-shadow: 0 2px 4px 0 rgba(0,0,0,0.3); border-bottom: solid 6px #68E57E; font-family: 'Fira Sans', 'Roboto', 'Open Sans', 'Myriad Pro', 'sans-serif'; color: #212121" border="0" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td style="padding:25px;">
					<img src="{{ asset('storage/images/logo-apprevenir.png') }}" alt="Logo Apprevenir" style="max-width:200px;"/>					
				</td>
			</tr>
			<tr>
				<td style="padding:10px 25px; font-size: 24px; color:#3E6472 ">
					<b>Restablecimiento de contraseña</b>					
				</td>
			</tr>
			<tr>
				<td style="padding:10px 25px; font-size:15px; color: #3E6472">
				    <p>Hemos recibido una petición para restablecer la contraseña de tu cuenta.
					Si hiciste esta petición, haz clic en el siguiente enlace, si no hiciste esta petición puedes ignorar este correo.</p>

			</td>
			</tr>			
			<tr>
				<td style="padding:10px 25px; text-align: center">
					<a href="{{ $url }}" style="padding:10px 20px; background:#009e9e; color:#fff; text-decoration: none; border-radius:500px; display:inline-block;" target="_blank">Restablecer contraseña</a>
				</td>				
			</tr>
			<tr>
				<td style="padding:20px; font-size:12px; color: #3E6472">
				    <p>Recuerda que la clave es totalmente secreta y solo conocida por el destinatario de este correo, de tal manera que en caso de pérdida o compromiso de la misma, deberá ser cambiada nuevamente.</p>
					<p>Este email no se considera spam pues es en respuesta a una petición expresa por parte del usuario para que se le envié su clave de acceso a las herramientas digitales de Apprevenir. Si por error ha recibido este email en forma no solicitada por favor infórmelo cuanto antes al remitente del mismo.</p>
				</td>
			</tr>
		</tbody>
	</table>
	<table border="0" cellspacing="0" cellpadding="0" style="margin-left:auto; margin-right:auto; border-collapse: collapse; max-width:480px; min-width:320px; color: #212121; font-size: 12px; text-align: center; font-family: 'Fira Sans', 'Roboto', 'Open Sans', 'Myriad Pro', 'sans-serif';">
	  <tbody>
		<tr>
			<td style="padding-top: 12px; color: #3E6472">
			Estás recibiendo este email porque autorisaste el recibo de correos de <strong>Apprevenir.</strong><br>
			Consulta nuestras <a href="https:apprevenir.com/politica-de-tratamiento-de-datos-personales/" target="_blank" style="color:#3D9E9E">políticas de tratamiento de datos personales</a>
			</td>			
		</tr>
		 <tr>
		 	<td style="padding-top: 25px;">
				<img src="{{ asset('storage/images/logo-luis-amigo.png') }}" alt="Logo Universidad Católica Luis Amigó" style="max-width:150px; display:inline-block; margin:0 5px;"/>
			</td>
		 </tr>
	  </tbody>
	</table>
</div>
</body>
</html>