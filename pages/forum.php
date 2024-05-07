<?php
include("header.php");
include("bd_connect/auth_session.php");
?>

<?
session_start();

?>
<?php

if(isset($_GET['logout'])){	
	
	//Simple exit message 

	
	session_destroy();
	header("Location: forum.php"); //Redirect the user 
}

if(!isset($_SESSION['user_name_us'])){
	header("Location: login.php"); //Redirect the user
}
else{
?>
<body>
    <main>
        

                        <div id="wrapper">
                        <div id="menu">
                        <p class="welcome">Пользователь <b><?php echo     $_SESSION['user_name_us']; ?></b></p>
                       
                                <div style="clear:both"></div>
                            </div>
                            
                            <div id="chatbox"></div>
                            
                            <form name="message" action="">
                                <input name="usermsg" type="text" id="usermsg" size="63" />
                                <input name="submitmsg" type="submit"  id="submitmsg" value="Отправить" />
                            </form>
                        </div>




    </main>
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/forum_src.js"></script>
<script type="text/javascript">

</script>
<?php
}
?>
<?php

include("footer.php");
?>