<?php
				try{
					$db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
					$uid = $db->quote($_POST["userName"]);
					$level = $db->quote($_POST["level"]);
					$sql = ;

					
					
					if ($db->query($sql)) {
						echo "Member level changed successfully";
					} else {
						echo "Error changing member level";
					}
				}
				catch(PDOException $e)
				{
					echo $sql . "<br>" . $e->getMessage();
				}
				
?>