
<form action="4.php" method="POST">
         <input name="title">
	<button type="submit">
	        Отправить
	</button>
</form>
   <?php
	if ((isset($_POST["title"])>80)) {
           
		echo "Здравствуйте, уважаемый";
	}
else 
     echo ("Успехов!")
        
        ?>




<?php
	echo $_GET["name"];
?>
