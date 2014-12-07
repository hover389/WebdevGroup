<?php
				try{
					$db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
					$uid = $db->quote($_POST["uid"]);
					$eventName = $_POST["eventName"];
					$sql = "UPDATE `signUpEvents` SET `".$eventName."`='T' WHERE UserName=".$uid;

					
					
					if ($db->query($sql)) {
						echo "Event added successfully";
					} else {
						echo "Error adding event";
					}
				}
				catch(PDOException $e)
				{
					echo $sql . "<br>" . $e->getMessage();
				}
				
?>