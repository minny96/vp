<?php
    $name = $_POST["name"];
    $phone = $_POST["tel"];
    $token = "598755174:AAHz4tJeGrhCehaNcJO6O1TFtgex-Fwl3ME";
    $chatid = "43115581";

    $mess = "Новый заказ, сучка! \n <b>Имя: </b>".$name."\n<b>Телефон:</b> ".$phone;
    $tbot = file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chatid."&text=".urlencode($mess));

?>