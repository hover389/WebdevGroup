
		
		<?php
		session_start();
			try{
					$db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
					$uid = $db->quote($_POST["uid"]);
					$password =  $_POST["password"];
					
					$sql = "select * from memberInfo where userName = ".$uid;

					$result = $db->query($sql);
					
				   $row = $result->fetch();
					if($row===false){
						echo "user name not valid";
					}
					else{
						if($row[5]!=$password){
							echo "password is not valid";
						}
						else{
							$_SESSION["memLevel"] = $row[12];
							$_SESSION["uid"] = $row[0];
							echo "success";
						}
					}
					
			}
			catch(PDOException $e)
			{
				echo $sql . "<br>" . $e->getMessage();
			}
			
		?>
			

