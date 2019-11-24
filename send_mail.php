<?php
    $mail = $_POST['mail'];      
    $emailFrom = "news@tokcer.com";
    $to =  $mail;        
    $subject = "Pendaftaran berhasil";
    $message = '<body >
        <div style="width:500px; margin:10px auto; background:#f1f1f1; border:1px solid #ccc; font-size: 16px; font-weight: 600;">
            Terima Kasih telah bergabung di Tokcer...Sebentar lagi Jomblo akan berakhir...mantap euy! Tunggu tanggal mainnya!
        </div>
        <div style="text-align: center;">
             <a href="mailto:asiaed888@gmail.com"> Tolong hubungi saya</a>
        </div>
    </body>
    ';  
    
    
    $emailFrom1 = "news@tokcer.com";
    $to1 =  "asiaed888@gmail.com";    
    $subject1 = "Pengguna baru dibuat";
    $message1 = '<body >
        <div style="width:500px; margin:10px auto; background:#f1f1f1; border:1px solid #ccc; font-size: 16px; font-weight: 600; text-align: center;">
            '.$mail.'
        </div>
    </body>
    ';  
   

    $headers = "From:" . $emailFrom . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    
    $headers1 = "From:" . $emailFrom1 . "\r\n";
    $headers1 .= "Content-type: text/html; charset=UTF-8" . "\r\n";
  
    mail($to1,$subject1,$message1,$headers1);
    if(@mail($to,$subject,$message,$headers))
    {
     
     echo "<script type='text/javascript'>
          location.href = 'index.html';          
     </script>";
     
    }else{
      echo "Erreur! Veuillez Remplir les Champs Requis.";
    }
    

?>