<?
session_start();
setlocale(LC_ALL, 'ru_RU', 'ru_RU.UTF-8', 'ru', 'russian'); 
if(isset($_SESSION['user_name_us'])){
	$text = $_POST['text'];
	
	$fp = fopen("log.html", 'a');
	fwrite($fp, "<div class='msgln'><span class='date-forum'>(".date('d.m H:i').")</span> <b>".$_SESSION['user_name_us']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
	fclose($fp);
}
?>