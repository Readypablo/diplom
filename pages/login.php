<?php
include("header.php");
require('bd_connect/db.php');

?>


<body>

<main>

<?php

session_start();
// Когда форма отправлена, проверьте и создайте сеанс пользователя.
if (isset($_POST['mobile'])) {
    $mobile = stripslashes($_REQUEST['mobile']);    
    $mobiles = mysqli_real_escape_string($con, $mobile);

    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);

// Проверьте, существует ли пользователь в базе данных
    $query    = "SELECT * FROM `users` WHERE mobile='$mobile'
                 AND password='$password'";

    $result = mysqli_query($con , $query) or die ;
    $rows = mysqli_num_rows($result);
    if( $rows==1){

        // берем данные из базы чтоб потом их передать
        if($result){
            $main_user = mysqli_fetch_assoc($result);
            $_SESSION['user_name_us']=$main_user['first_name'];
            $_SESSION['user_name_last']=$main_user['last_name'];
            $_SESSION['user_mobile']=$main_user['mobile'];     
           $_SESSION['first_name'] = $mobile;
             header("Location: profile.php");
    }
    // если данные не совпали
}else{
    echo '    
    <div class="login-block">
        <div class="login form">
            <div class="text-login">
         
            <p class="right-regist-txt">Неправильные данные для входа</p>
         
            <a href="login.php" class="modal-link">Повторить</a>
         
            </div>
        </div>
    </div>';
}
}else{
?>



    <div class="login-block">
        <div class="login form">
            <div class="text-login">
                <div>
                <p class="right-login-txt">Вход</div>
                <div>
                <span class="polssogl">
                    <p>By logging in you agree to the
                    ridiculously long terms that you
                    didn't bother to read</p>
                </span></div>

                </p>
            
            </div>
            <form class="form_login" method="post">
            <div class="inp-block"><input type="text" class="inp-login" name="mobile" placeholder="Номер телефона" required></div>
            <div class="inp-block"><input type="password" class="inp-login" name="password" placeholder="Пароль" required></div>
            <input type="submit" value="Отправить" class="button-login">
        <a href="registration.php" class="login-link">Регистрация</a>
            </form>
        </div>
    </div>
</main>


    
</body>
<script src="../js/refresh.js"></script>
<?php }?>
<?php

include("footer.php");
?>