<?php
				try{
					$db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
					$uid = $db->quote($_POST["userName"]);
					$sql = "DELETE `memberInfo` WHERE userName = ".$uid;

					
					
					if ($db->query($sql)) {
						echo "Member deleted successfully";
					} else {
						echo "Error deleting Member";
					}
				}
				catch(PDOException $e)
				{
					echo $sql . "<br>" . $e->getMessage();
				}
				
?>