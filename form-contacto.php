<?php
/*
Template Name: Enviar Contacto
*/

// Validacion y Envio de Formulario de Contacto
if(isset($_POST['enviado']))
{
	$nombre  = $_POST['nombre'];
	$email   = $_POST['email'];
	
	$enviarA = 'info@ixiimrestaurant.com, reservaciones@chableresort.com';//get_option('admin_email');
	
	$subject = 'Contacto de: ' . $nombre;

	$body .= '<html><body>
			<table style=" border-collapse:collapse; width: 100%; background-color: #f2f2f2; "><tr><td style="padding: 40px 0; ">
			<table style="border-collapse:collapse; width: 520px; background-color: #fff; " align="center">
				<tr style="background-color:#777; height: 75px; ">
					<td style="padding: 0 24px;">
						<img src="http://ixiimrestaurant.com/assets/img/logo.png" width="40" height="49">
					</td>
					<td style="font-weight: bold;  padding: 20px 24px; text-align: right; color: #FFF; font-size: 12px;">
						NEWSLETTER
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<table style="width: 100%; padding: 0 24px;">
							<tr style="padding: 20px 0; height: 75px; ">
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2; font-weight: 700; color:#3c3c3b;">
									NOMBRE:
								</td>
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2; color:#3c3c3b;">
									'.$nombre.'
								</td>
							</tr>

							<tr style="padding: 20px 0; height: 75px; border-bottom: 2px solid #f2f2f2; ">
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2; font-weight: 700; color:#3c3c3b;">
									EMAIL:
								</td>
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2; color:#3c3c3b;">
									'.$email.'
								</td>
							</tr>
					</td>
				</tr>
			</table>
		</table>
	</body></html>';

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	$headers .= 'From: IXIIM <'.$enviarA.'>' . "\r\n";
	
	mail($enviarA, $subject, $body, $headers);
	
	
	$confirmacion .= '<html><body>
			<table style=" border-collapse:collapse; width: 100%; background-color: #f2f2f2; "><tr><td style="padding: 40px 0; ">
			<table style="border-collapse:collapse; width: 520px; background-color: #fff; " align="center">
				<tr style="background-color:#777; height: 75px; ">
					<td style="padding: 0 24px;">
						<img src="http://ixiimrestaurant.com/assets/img/logo.png" width="40" height="49">
					</td>
					<td style="padding: 20px 24px; font-weight: bold; text-align: right; color: #FFF; font-size: 12px;">
						CONTACTO
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<table style="width: 100%; padding: 0 24px;">
							<tr style="padding: 20px 0; height: 75px; ">
								<td style="text-align: center; font-weight: bold; font-size: 12px; color:#3c3c3b;">
									Muchas gracias, '.$nombre.'. <br>En breve nos pondremos en contacto contigo.
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</table>
	</body></html>';
	
	$confirm = mail($email, $subject, $confirmacion, $headers);
	$mensajeEnviado = true;
	
} // if(isset($_POST['enviado']))

	$mensaje = ($mensajeEnviado) ? 'Muchas gracias. <br>En breve nos pondremos en contacto contigo.' : 'Hubo un error. Favor de intentarlo más tarde.';
	echo '<div class="confirmacion">' . $mensaje . '</div> <!-- /confirmacion -->';
	
?>