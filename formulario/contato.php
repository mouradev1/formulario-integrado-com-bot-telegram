<?php
    // MOURA DEV
    // 
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $messagem = $_POST['messagem'];
    

   
   
    
    $token = "SEU TOKEN";

    $chat_id = " ID DO SEU GRUPO";
    $arr = array(
        'Nome:    ' =>$name,
        'Email:  ' =>$email,
        'Messagem: ' => $messagem,        
        
    );

    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b>".$value."%0A";
    }

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

    if($sendToTelegram) {
        echo "<script>window.location='index.html';alert('Seu Contato foi enviado com sucesso!');</script>";
        return true;
    }
    else {
        echo '<h1>Erro ao enviar horario!</h1>';
    }
?>