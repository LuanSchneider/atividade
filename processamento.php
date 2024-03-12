<?php
			
			$hostname = "127.0.0.1";
			$user = "root";
			$password = "";
			$database = "times";
		
			$conexao = new mysqli($hostname, $user, $password, $database);

			if ($conexao -> connect_errno) {
				echo "Failed to connect to MySQL: " . $conexao -> connect_error;
				
			} else {
				// Evita caracteres especiais (SQL Inject)
				$nome = $conexao -> real_escape_string($_POST['nome']);
				$tecnico = $conexao -> real_escape_string($_POST['tecnico']);
				$cidade = $conexao -> real_escape_string($_POST['cidade']);
				$senha = $conexao -> real_escape_string($_POST['senha']);
				$email = $conexao -> real_escape_string($_POST['email']);

                $sql="INSERT INTO `times_de _futebol`
							(`nome`, `tecnico`, `cidade`,'senha','email)
						VALUES
							('".$nome."', '".$tecnico."', '".$cidade."')";
                


				$resultado = $conexao->query($sql);
				echo"nome".$nome;
				echo"técnico".$tecnico;
				echo "cidade".$tecnico;
		
				if (isset($_GET['query'])) {
					// Evita caracteres especiais (SQL Inject)
					$query = $conexao -> real_escape_string($_GET['query']);
			
					$sql = "SELECT * FROM `times_de_futebol` WHERE `nome` LIKE '%" . $query . "%' OR `tecnico` LIKE '%" . $query . "%' OR `cidade` LIKE '%" . $query . "%'";
			
					$resultado = $conexao->query($sql);
			
					if ($resultado->num_rows > 0) {
						while($row = $resultado->fetch_assoc()) {
							echo "Nome: " . $row["nome"]. " - Técnico: " . $row["tecnico"]. " - Cidade: " . $row["cidade"]. "<br>";
						}
					} else {
			
						echo "Nenhum resultado encontrado";
						if ($conexao -> connect_errno) {
							echo "Failed to connect to MySQL: " . $conexao -> connect_error;
							exit();
						
						
					
							
						
							
											
						}
						
					}
				}
			}
			
			

			