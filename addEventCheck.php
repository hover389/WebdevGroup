<?php
		session_start();
			try{
				$db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
				$name = $db->quote($_POST["name"]);
				$date = $db->quote($_POST["date"]);
				$location = $db->quote($_POST["location"]);
				$cost = $db->quote($_POST["cost"]);
				$contact = $db->quote($_POST["contact"]);
				$desc = $db->quote($_POST["desc"]);
				
				$memEvents = "ALTER TABLE signUpEvents ADD ".$name." varchar(50)";
				$sql = "INSERT INTO events (name,date,location,cost,contact,description) VALUES (".$name.",".$date.",".$location.",".$cost.",".$contact.",".$desc);

				$resultSql = $db->query($sql);
				$resultmem = $db->query($memEvents);
			    $row = $result->fetch();
				if ($resultSql === TRUE&&$resultmem = TRUE) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
					
			}
			catch(PDOException $e)
			{
				echo $sql . "<br>" . $e->getMessage();
			}
			
		?>