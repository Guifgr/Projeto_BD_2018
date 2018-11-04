<?php
include("topBar.php");
include("db.php");

	$hoje = date('Y-m-d');
	if(isset($_POST['Btn_vamos'])){
    	$Dest = $_POST['destino'];
    	$Part = $_POST['partida'];
    	$Dat = $_POST['data'];
    	$InsertDados = mysqli_query($conn, "INSERT INTO save (destino, partida, data) VALUES ('$Dest' , '$Part', '$Dat')");
    	//---------------------------------------------------------------------------------------------------
    	if($Dat == ""){
    		echo '<script type="text/javascript">
    			alert("Preencha todos os campos.");
    		</script>';
    	}else if($Dat < $hoje){
    		echo '<script type="text/javascript">
    			alert("Coloque uma data válida");
    		</script>';
    	}
    	else if ($SelectDados = mysqli_query($conn, "SELECT * FROM save WHERE destino='$Dest' AND partida='$Part' AND data='$Dat' ORDER BY id DESC")){
    		while ($Assoc = mysqli_fetch_assoc($SelectDados)){
    			$id = $Assoc['id'];
    		}
    		header("location: BITSITE2.php?id=$id&Dest=$Dest&Part=$Part");
    	}
  	}



?>
<html>
    <head>
        <title>BusBuy</title>
        <meta charset="utf-8">
        <link href="styleone.css" rel="stylesheet">
    </head>
    
    <body>
        <h1>Bus Buy</h1>
        <p>The best way to find a trip</p>
        <div class="buttons" id="btn_div">
        <form method="post">
        <label name="onde">Onde Vamos?</label> <br> 
            <select type="text" name="destino" id="destino">
                <option value="AC">Acre</option>
	               <option value="AL">Alagoas</option>
	               <option value="AP">Amapá</option>
	               <option value="AM">Amazonas</option>
	               <option value="BA">Bahia</option>
	               <option value="CE">Ceará</option>
	               <option value="DF">Distrito Federal</option>
	               <option value="ES">Espírito Santo</option>
	               <option value="GO">Goiás</option>
	               <option value="MA">Maranhão</option>
	               <option value="MT">Mato Grosso</option>
	               <option value="MS">Mato Grosso do Sul</option>
	               <option value="MG">Minas Gerais</option>
	               <option value="PA">Pará</option>
	               <option value="PB">Paraíba</option>
	               <option value="PR">Paraná</option>
	               <option value="PE">Pernambuco</option>
	               <option value="PI">Piauí</option>
	               <option value="RJ">Rio de Janeiro</option>
	               <option value="RN">Rio Grande do Norte</option>
	               <option value="RS">Rio Grande do Sul</option>
	               <option value="RO">Rondônia</option>
	               <option value="RR">Roraima</option>
	               <option value="SC">Santa Catarina</option>
	               <option value="SP">São Paulo</option>
	               <option value="SE">Sergipe</option>
	               <option value="TO">Tocantins</option></select> <br>
            <label name="onde">De onde Vamos?</label> <br> 
            <select type="text" name="partida" id="partida">
                <option value="AC">Acre</option>
	               <option value="AL">Alagoas</option>
	               <option value="AP">Amapá</option>
	               <option value="AM">Amazonas</option>
	               <option value="BA">Bahia</option>
	               <option value="CE">Ceará</option>
	               <option value="DF">Distrito Federal</option>
	               <option value="ES">Espírito Santo</option>
	               <option value="GO">Goiás</option>
	               <option value="MA">Maranhão</option>
	               <option value="MT">Mato Grosso</option>
	               <option value="MS">Mato Grosso do Sul</option>
	               <option value="MG">Minas Gerais</option>
	               <option value="PA">Pará</option>
	               <option value="PB">Paraíba</option>
	               <option value="PR">Paraná</option>
	               <option value="PE">Pernambuco</option>
	               <option value="PI">Piauí</option>
	               <option value="RJ">Rio de Janeiro</option>
	               <option value="RN">Rio Grande do Norte</option>
	               <option value="RS">Rio Grande do Sul</option>
	               <option value="RO">Rondônia</option>
	               <option value="RR">Roraima</option>
	               <option value="SC">Santa Catarina</option>
	               <option value="SP">São Paulo</option>
	               <option value="SE">Sergipe</option>
	               <option value="TO">Tocantins</option></select> <br>
       <label name="onde">Quando?</label> <br> 
		<input type="date" placeholder="Coloque a data" name="data" id="data"><br/> <br>
        <input type="submit" value="VAMOS!" name="Btn_vamos">
        </form>
        </div>
    </body>
</html>