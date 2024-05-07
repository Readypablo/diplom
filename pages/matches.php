<?php

include("header.php");
include("bd_connect/db.php");

?>




<?php 






$sql4 = "SELECT * FROM `matches`";
$resultt = $con->query($sql4);


for($dataa = []; $row = mysqli_fetch_assoc($resultt); $dataa[]=$row)
{

}

?>









<body>
    <main>
        

        <div class="matches-block">

                        <?php
                        foreach($dataa as $elemm)  {

                        echo ' 
                        <div class="matches-row">
                                        <div class="date-time-match">
                                            <p><span>'.$elemm['date'].'</span><br>
                                            '.$elemm['time'].'</p>
                                        </div>  
                                        <div class="first-team">
                                            <p><span>'.$elemm['first_team'].'</span><br>
                                            '.$elemm['city_first'].'</p>
                                        </div>    
                                        <div class="score-match">
                                        '.$elemm['score'].'
                                        </div>  
                                        <div class="last-team">
                                        <p><span>'.$elemm['last_team'].'</span><br>
                                        '.$elemm['city_last'].'</p>
                                        </div>  
                        </div>';
                        }  
                        ?>


                            <!-- <div class="matches-row">
                                            <div class="date-time-match">
                                                <p><span>data/data</span><br>
                                                    time</p>
                                            </div>  
                                            <div class="first-team">
                                                <p><span>first-team</span><br>
                                                    city</p>
                                            </div>    
                                            <div class="score-match">
                                                2:3
                                            </div>  
                                            <div class="last-team">
                                                <p><span>first-team</span><br>
                                                    city</p>
                                            </div>  
                            </div> -->
                
        </div>







    </main>
</body>


<?php

include("footer.php");
?>