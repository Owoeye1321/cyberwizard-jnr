<DOCTYPE html>
<head>
</head>
<body>
<?php
            function greet_hng($name,$hng_id,$language){
                
                $output = "Hello world,this is ".$name." with HNGi7 ID: ".$hng_id." using language "
                .$language." for stage 2 TEST RESULT:<i style ='color:green;'>Pass</i> ";
                return $output;
            }
             
             echo  greet_hng("OWOEYE SAMUEL","HNG-02249","PHP");


?>

</body>
</html>