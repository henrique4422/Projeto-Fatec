<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Jardinaria & Construção</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="../JavaScript/cod.js"></script>
	<link rel="stylesheet" type="text/css" href="../CSS/jardim.css"> 
	
</head>	
<body bgcolor = "#FFFFFF">

	<center><img src="../Imagens/logo.png" VSpace="20px" width="28%">
	<br>
  <table>
  <tr>	
    <td><form method="get" action="Index.php"> <button type="submit" name="home" value="0" class=" css3button">HOME</button></form> </td>
  <td><form method="get" action="Produtoss.php"> <button type="submit" name="produtos" value="0" class="css3button">PRODUTOS</button></form></td>
  <td><form method="get" action="contato.php"> <button type="submit" name="contato" value="0" class="css3button">CONTATO</button></form> </td>
</tr>
  </table>
 <br><br><br>  
    <form method = "POST" action="#" onsubmit="return enviar(this)">
		<table style="width:100%">
  <tr>
  </tr>
  <tr>
    <td><div id = "cortador"> <img class = "cortador" src="../Imagens/cortador.jpg"><br>
    	<p class="texto"> CORTADOR DE GRAMA  R$99,99 Unidade</p> Selecione a quantidade desejada <input type="text" name="qtde_Corta" id="cort1" size="4" maxlength="4"/><br></div></td>
    <td><div id = "grama"> <img class = "grama" src="../Imagens/grama.jpg">
      <p class="texto"> TAPETE DE GRAMA (METRO) R$29,99 O Metro</p>Selecione a quantidade desejada <input type="text" name="qtde_Grama" id="tapete1" size="4" maxlength="4"/><br></div></td> 
    <td><div id = "tesoura"> <img class = "tesoura" src="../Imagens/tesoura.jpg"> 
      <p class="texto"> TESOURA APARADORA R$149,49 Unidade</p>Selecione a quantidade desejada <input type="text" name="qtde_Tes" id="teso1" size="4" maxlength="4"/><br></div></td> 
    <td><div id = "kit"> <img class = "kit" src="../Imagens/kit.jpg"> 
      <p class="texto"> KIT FERRAMENTAS JARDINAGEM R$200,90 </p>Selecione a quantidade desejada <input type="text" name="qtde_Kit" id="kit1" size="4" maxlength="4"/><br></div></td> 
  </tr>
  <tr>
     <td><div id = "pedra"> <img class = "pedra" src="../Imagens/pedra.jpg">
       <p class="texto"> PEDRA ENSACADA (KILO) R$30,50 O Kilo</p>Selecione a quantidade desejada <input type="text" name="qtde_Pedra" id="pedra1" size="4" maxlength="4"/><br></div></td> 
     <td><div id = "cimento"> <img class = "cimento" src="../Imagens/cimento.jpg">
       <p class="texto"> CIMENTO (KILO) R$30,50 O Kilo</p>Selecione a quantidade desejada <input type="text" name="qtde_Cimento" id="cimento1" size="4" maxlength="4"/><br></div></td> 
     <td><div id = "mangueira"><img class ="mangueira" src="../Imagens/mangueira.jpg">
       <p class="texto"> MANGUEIRA (METRO) R$60,50 O Metro</p>Selecione a quantidade desejada <input type="text" name="qtde_Mang" id="mang1" size="4" maxlength="4"/><br></div></td> 
     <td><div id = "regador"> <img class = "regador" src="../Imagens/regador.jpg">
       <p class="texto"> REGADOR R$40,50 Unidade </p>Selecione a quantidade desejada <input type="text" name="qtde_Rega" id="rega1" size="4" maxlength="4"/><br></div></td> 
  </tr>
</table>
 <h4>Para solicitar o orcamento preencha seus dados:</h4>
<table border="0" width="10%">
      <tr>
      <td align="left"<label>Nome: </label></td>
        <td><input type="text" name="nome" id="nome" size="40" maxlength="30"/></td></tr>
      <tr>
      <td align="left"<label>Telefone: </label></td>
        <td><input type="text" name="telefone" id="telefone" size="40" maxlength="30"/></td></tr>
        <tr>
      <td align="left"<label>Cidade: </label></td>
      <td><input type="text" name="cidade" id="cidade" size="40" maxlength="30"/></td></tr>

    </table>
    <p>
      <label>Forma de pagamento: </label>
      <input type="radio" name="formadepag" value="1" >Cartão de crédito
      <input type="radio" name="formadepag" value="2" >Cartão de debito
      <input type="radio" name="formadepag" value="3" >Dinheiro 
      </p>
      <p><input type="checkbox" name="concordo" value="sim"/>
      Concordo com os termos de validade para o orçamento.</p>
  
  <center><input type="submit" value="Gerar Orçamento" name="orcamento"></center>
    <br><br>
<br><br><br><br>
<br>
<br>



<?php
  error_reporting(E_ERROR | E_PARSE);
  $qtdCort = $_POST["qtde_Corta"];
  $qtdGrama = $_POST["qtde_Grama"];
  $qtdTesoura = $_POST["qtde_Tes"];
  $qtdKit = $_POST["qtde_Kit"];
  $qtdPedra = $_POST["qtde_Pedra"];
  $qtdCimento = $_POST["qtde_Cimento"];
  $qtdMang = $_POST["qtde_Mang"];
  $qtdRega = $_POST["qtde_Rega"];
  $prCort = 99.99;
  number_format($prCort, 99, "," , ".");
  $prGrama = 29.99;
  number_format($prGrama, 29, "," , ".");
  $prTesoura = 149.49;
  number_format($prTesoura, 149, "," , ".");
  $prKit = 200.90;
  number_format($prKit, 200, "," , ".");
  $prPedra = 30.50;
  number_format($prPedra, 30, "," , ".");
  $prCimento = 30.50;
  number_format($prCimento, 30, "," , ".");
  $prMang = 60.50;
  number_format($prMang, 60, "," , ".");
  $prRega = 40.50;
  number_format($prRega, 40, "," , ".");
  $Totalpr1 = 0;
  $Totalpr2 = 0;
  $Totalpr3 = 0;
  $Totalpr4 = 0;
  $Totalpr5 = 0;
  $Totalpr6 = 0;
  $Totalpr7 = 0;
  $Totalpr8 = 0;

  $data = date("d/m/Y");
  $fp = fopen("Orcamento.txt", "w");

  if ($qtdCort > 0 OR $qtdGrama > 0 OR $qtdTesoura > 0 OR $qtdKit > 0 OR $qtdPedra > 0 OR $qtdCimento > 0 OR $qtdMang > 0 OR $qtdRega > 0)
  {
      fwrite ($fp, "O ORÇAMENTO ESTÁ DISPONIVEL ABAIXO\r\n\n" . " Nome: " . $_POST["nome"] . "\r\n" . " Telefone: " . $_POST["telefone"] . "\r\n" . " Cidade:   ". $_POST["cidade"] . "\r\n");
  }
  if ($qtdCort > 0)
  {
      $Totalpr1 = $prCort * $qtdCort;
      fwrite ($fp," \r\nCortador de grama: \r\n Valor unitário: R$ ".$prCort."\r\n Quantidade desejada: ".$qtdCort."\r\n  Valor Total: R$ ".round($Totalpr1));
  }    
  if ($qtdGrama > 0)
  {
      $Totalpr2 = $prGrama * $qtdGrama; 
      fwrite ($fp," \r\nTapete de grama (metro): \r\n Valor do metro: R$ ".$prGrama."\r\n Quantidade desejada: ".$qtdGrama."\r\n  Valor Total: R$ ".round($Totalpr2));
  }
  if ($qtdTesoura > 0)
  {
      $Totalpr3 = $prTesoura * $qtdTesoura;
      fwrite ($fp," \r\nTesoura aparadora \r\nValor unitário: R$ ".$prTesoura." \r\nQuantidade desejada: ".$qtdTesoura."\r\n Valor Total: R$ ".round($Totalpr3));
  }
  if ($qtdKit > 0)
  {
      $Totalpr4 = $prKit * $qtdKit;
      fwrite ($fp," \r\nKit ferramentas jardinagem \r\n Valor unitário: R$ ".$prKit." \r\n Quantidade desejada: ".$qtdKit."\r\n Valor Total: R$ ".round($Totalpr4));
  }
  if ($qtdPedra > 0)
  {   
      round($Totalpr5 = $prPedra * $qtdPedra);
      fwrite ($fp," \r\nPedra ensacada (kilo) \r\n Valor do kilo: R$ ".$prPedra." \r\nQuantidade desejada: ".$qtdPedra."\r\n Valor Total: R$ ".round($Totalpr5));
  }
  if ($qtdCimento > 0)
  {
      $Totalpr6 = $prCimento * $qtdCimento;
      fwrite ($fp," \r\nCimento (kilo) \r\n Valor do kilo: R$ ".$prCimento." \r\n Quantidade desejada: ".$qtdCimento."\r\n Valor Total: R$ ".round($Totalpr6));
  }
  if ($qtdMang > 0)
  {
      $Totalpr7 = $prMang * $qtdMang;
      fwrite ($fp," \r\nMangueira (metro) \r\n Valor do metro: R$ ".$prMang." \r\n Quantidade desejada: ".$qtdMang."\r\n Valor Total: R$ ".round($Totalpr7));
  }
  if ($qtdRega > 0)
  {
      $Totalpr8 = $prMang * $qtdMang;
      fwrite ($fp," \r\nRegador \r\n Valor unitário: R$ ".$prRega." \r\n Quantidade desejada: ".$qtdRega."\r\n Valor Total: R$ ".round($Totalpr8));
  }
    $total_compra = round($Totalpr1 + $Totalpr2 + $Totalpr3 + $Totalpr4 + $Totalpr5 + $Totalpr6 + $Totalpr7 + $Totalpr8 );
    fwrite($fp, "\r\n Total da compra de R$ " .$total_compra);
       $formadepag = $_POST ["formadepag"];
       if ($formadepag == 3)
       {
         $desconto = $total_compra * 0.95;
         fwrite($fp, "\r\n Total da compra de R$ com desconto: " .$desconto);
       }
    fclose($fp);
?>
<footer class="footer">
  <img src="../Imagens/logob.png" VSpace="20px" width="10%"><p class="texto2"> Av. Antônio Frederico Ozanan, 488
Telefone: 4001-0100 </p>
</footer>
</form> 
</body>
</html>