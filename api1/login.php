<?php
include "config1.php";
 ?>
<?php
    $email = $_POST['uname'];
    $password = $_POST['pswd'];
   if ($email != "" && $password != ""){

        $sql_query = "SELECT * FROM `user` WHERE username='".$email."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_assoc($result);
		if($row!=0){
			do
			{
				//$Attname=$row['name'];
					//$_SESSION["attname"]=$Attname;
						    ?>  <script>

              window.location.href = "waiter_index.php";
               </script>
			<?php

			}while($row = mysqli_fetch_assoc($result));
			}

		else{
            ?>  <script>

               alert("Invalid ID or Password");
               </script>
			<?php

		}

    }
      else{
		       echo "Username or Password missing !";

	  }
 ?>

