

<!DOCTYPE html>
<html>
<p>
	function getIp(){
		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}else{
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}

	echo 'L adresse IP de l utilisateur est : '.getIp();

</p>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Affichage de texte avec PHP</h2>
        
        <p>
            Cette ligne a été écrite entièrement en HTML caca.<br />
            <?php echo("Celle-ci a été écrite entièrement en PHP."); ?>
        </p>
    <p>
	     getIp();
    </p>
   
    
      </body>
</html>
