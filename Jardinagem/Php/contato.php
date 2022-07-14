<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Jardinaria & Construção</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="../Layout/jardim.js"></script>
	<link rel="stylesheet" type="text/css" href="../CSS/jardim.css"> 
	
</head>	
<body bgcolor = "#FFFFFF">
	<center><img src="../Imagens/logo.png" VSpace="20px" width="28%">
	<br>
    <table>
        	<td><form method="get" action="Index.php"> <button type="submit" name="home" value="0" class="css3button">HOME</button></form></td>
            <td><form method="get" action="Produtoss.php"> <button type="submit" name="home" value="0" class="css3button">PRODUTOS</button></form></td>  
            <td><form method="get" action="contato.php"> <button type="submit" name="home" value="0" class="css3button">CONTATO</button></form></td> 
    </table>
<form action="metodo_post.php?xget=50" method="POST">

    <fieldset>
        <legend>Entre em contato conosco</legend>

    <tr>
            <td align="left"<label>Nome: </label></td>
            <td><input type="text" name="nome" id="nome" size="60" maxlength="30"/></td></tr>
            <tr><br><br><br><br>
            <td align="left"<label>Telefone: </label></td>
            <td><input type="text" name="telefone" id="telefone" size="60" maxlength="30"/></td></tr><br><br><br><br>
            <tr>
            <td align="left"<label>Cidade: </label></td>
            <td><input type="text" name="cidade" id="cidade" size="60" maxlength="30"/></td></tr><br><br><br><br>

    </fieldset>

    <p>
        <input type="submit" value="Enviar" id="enviar">
    </p>
</form>
<br>
<br>
<br>
<br>
<br>
<footer class="footer">
  <img src="../Imagens/logob.png" VSpace="20px" width="10%"><p class="texto2"> Av. Antônio Frederico Ozanan, 488
Telefone: 4001-0100 </p>
</footer>

