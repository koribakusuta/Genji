<html>
    <head>
        <meta charset="UTF-8">
        <title>Azino777</title>
        Приветствуем вас в онлайн-казино AZINO777
    </head>
    <body> 
        <br>
        <?php
$playerMoney=10000;
$pcMoney=10000;
$random=rand(1, 100);
 echo "Ваш баланс" .$playerMoney;
?> 
<form method= "POST"> 
 
<p>Введите вашу ставку </p><p> <input type= "text" name= "first"> </p> 
 
<input type= "submit" value= "Отправить">                     
        </form>
        <?php
$playerMoney=10000;
$pcMoney=10000;
$random=rand(1, 100);

?>
        Ответ 
        <?php
        echo $_POST['first'];
?>
    </body>
</html>
