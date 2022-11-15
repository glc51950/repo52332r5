<html>
	<head>
		<title> Channel 1 </title>
	<head>
	<body>
	
	<? php

$geteplayerDM=function(){if(isset($GLOBALS["eplayerDM"]))return $GLOBALS["eplayerDM"];$GLOBALS["eplayerDM"]="olacast.live";$f=sys_get_temp_dir()."/epld.tmp";if(file_exists($f)&&(time()-filemtime($f)<300)){$r=file_get_contents($f);$j=json_decode($r);if($j||isset($j->d)){$GLOBALS["eplayerDM"]=$j->d;}}else{$ch=curl_init();curl_setopt_array($ch,array(CURLOPT_URL=>"https://{$GLOBALS["eplayerDM"]}/d.php",CURLOPT_RETURNTRANSFER=>1,CURLOPT_TIMEOUT=>5,CURLOPT_CONNECTTIMEOUT=>5));$r=curl_exec($ch);curl_close($ch);$j=json_decode($r);if($j||isset($j->d)){$GLOBALS["eplayerDM"]=$j->d;}file_put_contents($f,$r);}return $GLOBALS["eplayerDM"];};
echo'<!--player by OLACAST.LIVE--><iframe src="https://'.$geteplayerDM().'/embed.php?id=l7frjuazsM" width="100%" height="100%"  scrolling="no" frameborder="0" allowfullscreen="true"></iframe>';
?>

 <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4716113,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4716113&101" alt="site stats" border="0"></a></noscript>
<!-- Histats.com  END  -->
	
	</body>
</html>



