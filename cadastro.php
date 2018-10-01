<?php require("header.php");?>

<div class="geral_cima">
	<div class="geral_baixo">
    	<div class="content">
        	<h1>CADASTRO</h1>
            
            <?php
			
				if(isset($_POST["acao"])=="ok"){
					
				require("conexao.php");
				
				//Pega os dados do formulário
				$nome=$_POST["nome"];
				$email=$_POST["email"];
				$cnpj=$_POST["cnpj"];
				$telefone=$_POST["telefone"];
				$celular=$_POST["celular"];
				$logadouro=$_POST["logadouro"];
				$numero=$_POST["numero"];
				$cep=$_POST["cep"];
				$latitude=$_POST["latitude"];
				$longitude=$_POST["longitude"];
				$estado=$_POST["estado"];
				$cidade=$_POST["cidade"];
				$termos=$_POST["termos"];
				$tipo=$_POST["tipo"];
				
				$veiculo=$_POST["veiculo"];
				$porte=$_POST["porte"];
				
				$material=$_POST["material"];
				$capacidade=$_POST["capacidade"];
				
				//Faz a inserção no DB
				$sql=mysql_query("insert into organizacao (nome, email, cnpj, telefone, celular, logadouro, numero, cep, latitude, longitude, estado, cidade, tipo, termos) value ('$nome', '$email', '$cnpj', '$telefone', '$celular', '$logadouro', '$numero', '$cep', '$latitude', '$longitude', '$estado', '$cidade', '$tipo', '$termos')");
				
				
				//se o tipo for transporte
				if($tipo=="Transporte"){
					$idOrgTrans=mysql_insert_id();
					$sql_trans=mysql_query("insert into transporte 
					(idOrgTrans, tipoTrans, porteTrans) 
					value 
					('$idOrgTrans','$veiculo','$porte')");
				}
				//------------------------------------------------------------------
				
				//se o tipo for ponto de coleta
				if($tipo=="Ponto de Coleta"){
					$idOrgColeta=mysql_insert_id();
					$sql_coleta=mysql_query("insert into coleta 
					(idOrgColeta, materialColeta, capacidadeColeta) 
					value 
					('$idOrgColeta','$material','$capacidade')");
				}
				//------------------------------------------------------------------
							
				if($sql){
					echo"<div class='msn'>Cadastro Realizado com Sucesso!</div>";
				}else{
					echo"<div class='msn1'>Cadastro não Realizado! Tente novamente mais tarde.</div>";
				}
				
				}//if ação
				
			?>
            
            <form action="" method="post" enctype="application/x-www-form-urlencoded">
              <div class="lateral_esquerda">
            	
                	<input type="text" class="campo" name="nome" placeholder="Nome" />
                    <input type="text" class="campo" name="email" placeholder="E-mail" />
                    <input type="text" class="campo" name="cnpj" placeholder="CPF/CNPJ" />
                    <input type="text" class="campo meio" name="telefone" placeholder="Telefone" />
                    <input type="text" class="campo meio" id="direita" name="celular" placeholder="Celular" />
                    <input type="text" class="campo" name="logadouro" placeholder="Logadouro" />
                    <input type="text" class="campo meio" name="numero" placeholder="Número" />
                    <input type="text" class="campo meio" id="direita" name="cep" placeholder="CEP" />
                    <input type="text" class="campo meio" name="latitude" placeholder="Latitude" />
                    <input type="text" class="campo meio" id="direita" name="longitude" placeholder="Longitude" />

                    <select name="estado" class="campo meio">
                      <option>Estado</option>
                      <option value="Bahia">Bahia</option>
                    </select>
                    <select name="cidade" class="campo meio" id="direita" >
                    	<option>Cidade</option>
						<option value="Feira de Santana">Feira de Santana</option>
                        <option value="Salvador">Salvador</option>
                    </select>
                    
					<input type="password" class="campo meio" name="senha" placeholder="Senha" />

                    <div id="trans">
                    	<label>Informações do veículo</label>
    	                <input type="text" class="campo meio" name="veiculo" placeholder="Tipo do Veículo" />
	                    <select name="porte" class="campo meio" id="direita" >
                            <option>Porte do Veículo</option>
                            <option value="Pequeno">Pequeno</option>
                            <option value="Médio">Médio</option>
                            <option value="Grande">Grande</option>
                    	</select>
                    </div>

                    <div id="coleta">
                    	<label>Informações do ponto de Coleta</label>
    	                <input type="text" class="campo meio" name="material" placeholder="Material Aceito" />
	                    <input type="text" class="campo meio" name="capacidade" id="direita" placeholder="Capacidade de Armazenamento" />
                    </div>
                    
                    <div id="termos">
                    	<input name="termos" type="checkbox" value="s" /> Li e concordo com os <a href="">Termos de Uso</a> e <a href="">Política de Privacidade</a>.
                    </div>
                    
                    <input name="" type="submit" value="CADASTRAR" class="botao" />
    
    	        </div>
				   
                <div class="lateral_direita" id="opcao">
                	<h2>Selecione o Tipo de Usuário</h2>
                	<label>
                    	<input name="tipo" type="radio" value="Ponto de Coleta" onclick="exibeConteudo('coleta')" /> Ponto de Coleta
                    </label>
                    <label>
                    	<input name="tipo" type="radio" value="Transporte" onclick="exibeConteudo('trans')" /> Transporte
                    </label>
                    <label>
                    	<input name="tipo" type="radio" value="Centro de Reciclagem" onclick="exibeConteudo('reci')" /> Centro de Reciclagem 
                    </label>
            	</div>
                
                <input name="acao" type="hidden" value="ok" />

			</form>

        </div>
    </div>
</div>


<?php require("footer.php");?>