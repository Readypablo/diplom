<?php
include("header.php");
require('bd_connect/db.php');
?>

<body>
<main>
    
<?php

if(isset($_REQUEST['first_name'])){

    // имя
    $first_name = stripcslashes($_REQUEST['first_name']);
    $first_name = mysqli_real_escape_string($con,$first_name);

    // фамилия
    $last_name = stripcslashes($_REQUEST['last_name']);
    $last_name = mysqli_real_escape_string($con,$last_name);

    // мобильный
    $mobile = stripcslashes($_REQUEST['mobile']);
    $mobile = mysqli_real_escape_string($con,$mobile);

    // пароль
    $password = stripcslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);

     $query = "INSERT into `users` (first_name, last_name, mobile,password)
     VALUES ('$first_name', '$last_name', '$mobile', '$password')";



    $ult = mysqli_query($con, $query);

    // чекаем все поля все ли хорошо там
    if($ult){
        echo '    
        <div class="login-block">
            <div class="login form">
                <div class="text-login">
             
                <p class="right-regist-txt">Регистрация прошла успешно!</p>
             
                <a href="login.php" class="modal-link">Авторизация</a>
             
                </div>
            </div>
        </div>';
    }else{
        echo '    
        <div class="login-block">
            <div class="login form">
                <div class="text-login">

                <p class="right-regist-txt">Вы заполнил не все поля</p>  
             
                <a href="registration.php" class="modal-link">зарегистрироваться</a>

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
                <p class="right-regist-txt">Регистрация</div>
                <div>
                <span class="polssogl">
                    <p>By logging in you agree to the
                    ridiculously long terms that you
                    didn't bother to read</p>
                </span></div>

                </p>
            
            </div>
            <form class="form_login" method="post">   
            <div class="inp-block-reg"><input type="text" class="inp-login"  name="first_name" placeholder="Имя" required></div>
            <div class="inp-block-reg"><input type="text" class="inp-login" name="last_name" placeholder="Фамилия" required></div>
            <div class="inp-block-reg"><input type="text" class="inp-login"  name="mobile" placeholder="Номер телефона" required></div>
            <div class="inp-block-reg"><input type="password" class="inp-login" name="password" placeholder="Пароль" required></div>

            <input type="submit" value="Отправить" class="button-login2">
        <a href="login.php" class="login-link">Вход</a>
            </form>
        </div>
    </div>
</main>


    
</body>
<script src="../js/refresh.js"></script>
<?php
}
include("footer.php");
?>