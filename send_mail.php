<?php
    $mail = $_POST['mail'];      
    $emailFrom = "news@tokcer.com";
    $to =  $mail;        
    $subject = "Pendaftaran berhasil";
    $message = '<body >
        <div style="width:500px; margin:10px auto; background:#f1f1f1; border:1px solid #ccc; font-size: 16px; font-weight: 600;">
            Terima Kasih telah bergabung di Tokcer...Sebentar lagi Jomblo akan berakhir...mantap euy! Tunggu tanggal mainnya!
        </div>
    </body>
    ';  

    $headers = "From:" . $emailFrom . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
  
    // mail($to,$subject,$message,$headers);
    if(@mail($to,$subject,$message,$headers))
    {
     
     echo "<script type='text/javascript'>
          location.href = 'index.html';          
     </script>";
     
    }else{
      echo "Erreur! Veuillez Remplir les Champs Requis.";
    }
    

?>