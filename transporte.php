<?php require("header.php");?>

<div class="geral_cima">
	<div class="geral_baixo">
    	<div class="content">
        	<h1>ENCONTRE UM TRANSPORTADOR VOLUNTÁRIO</h1>
            
            <div class="lateral_esquerda">
            	<?php
                	require("conexao.php");
					
					$sql=mysql_query("select nome, logadouro, numero, cep, telefone, celular, latitude, longitude, tipo, cidade, estado, porteTrans, tipoTrans from organizacao INNER JOIN transporte on id=idOrgTrans");
					echo"<ul class='lista'>";
					while($linha=mysql_fetch_array($sql)){
						$nome=$linha["nome"];
						$logadouro=$linha["logadouro"];
						$numero=$linha["numero"];
						$cep=$linha["cep"];
						$telefone=$linha["telefone"];	
						$celular=$linha["celular"];
						$latitude=$linha["latitude"];
						$longitude=$linha["longitude"];
						$tipo=$linha["tipo"];
						$cidade=$linha["cidade"];
						$estado=$linha["estado"];
						$tipoTrans=$linha["tipoTrans"];
						$porteTrans=$linha["porteTrans"];
						
						echo"
							<li style='width:100%;'>
								<h2 style='width:80%; float:left;'>$nome</h2>
								<a href=''><img src='img/ico-email.png'/></a>
								<p>
									$logadouro, $numero, $cep, $cidade - $estado 
									<br> 
									$telefone | $celular
									<br> 
									<b>Veículo: </b>$tipoTrans&nbsp;&nbsp;&nbsp;&nbsp;<b>Porte: </b>$porteTrans
								</p>
							</li>
						";
					}
					
					echo"</ul>";
				?>
            </div>
            
            <div class="lateral_direita">
            	<img src="img/transporte.png" />
            </div>
        </div>
    </div>
</div>


<?php require("footer.php");?>