<?php
// var_dump($_POST['p2']);
$to      = 'comercial@indesfer.com.br';
$subject = '[CONTATO] '.$_POST['p3'];
$html = "
<html>
<body>
<div style='background-color:rgba(0,0,0,0.5); padding: 20px 20px;'>
	<img src='https://orbt.com.br/indesfer/img/logo.png' width='100'>
</div>
<div style='text-align:center; margin: 50px 10px;'>
".$_POST['p1']." entrou em contato através do site: <br>".$_POST['p4']."
<br> Email para contato:".$_POST['p2']."
</div>
<div style='background-color:rgba(0,0,0,0.5); padding: 20px 20px;'>
&nbsp;
</div>
</body>
</html>";
$headers = 'From: '.$_POST['p2'].'\r\n'.
    'Content-type: text/html; charset=iso-8859-1rn'.
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $html, $headers);
?>