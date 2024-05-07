<?php
include("bd_connect/auth_session.php");
include("bd_connect/db.php");
include("header.php");
?>

<body>
    <main>

        <div class="profile-area">
            <div class="profile-block">
  
                <div class="txt-prof-right">
                        <div class="zag-prof-info">
                        <p>ИНФОРМАЦИЯ</p>
                        </div>
                        <div class="prof-info">
                            <div class="block-prof-info">
                                <p class="zag-block-prof-info">Имя</p>
                                <p>  <?php echo $_SESSION['user_name_us'] ?></p>
                            </div>
                            <div class="block-prof-info">
                                <p class="zag-block-prof-info">Фамилия</p>
                                <p>  <?php echo $_SESSION['user_name_last'] ?></p>
                            </div>
                        </div>
                        <div class="prof-info">
                            <div class="block-prof-info">
                                <p class="zag-block-prof-info">Номер</p>
                                <p>  <?php echo $_SESSION['user_mobile'] ?></p>
                            </div>
                            <div class="block-prof-info">
                         
                            </div>
                        </div>
                            <div class="row-button">
                              
                               <a href="bd_connect/logout.php">   <input type="submit" class="btn-prof" value="Выход"></a>
                            </div>
                </div>
            </div>
        </div>

        
    </main>
</body>


<?php

include("footer.php");
?>