<?php

if(isset($_POST['kullanici'],$_POST['sifre'])
&& ($_POST['kullanici']=='g221210010@sakarya.edu.tr')
&& ($_POST['sifre']=='g221210010'))
{
    echo "Hoşgeldiniz ".$_POST['kullanici'];
}
else
{
    echo "Bilgilerinizi kontrol ediniz !!!.<br>"; 
}

echo "<p> <a href='signup.html'>&lt;GERİ DÖN&gt;</a></p>"


?>