<html>
<head>
<title>LinkEncoder</title>
</head>
<body>

  <form method="POST" action="">
  
   <h1>Enter Link Here:</h1>
   <input type="text" name="textenter" placeholder="Link Here">

<?php
 if((isset($_POST["encode"]))||(isset($_POST["decode"]))) 
   { 
     $flag = true;

         if($_POST["textenter"]=="")
           {echo "<- Enter something here";
           $flag = false;}
           
   }
?>
   <br> 
   <input type="submit" name= "encode" value="Encode">
   <input type="submit" name= "decode" value="Decode"><br>
  </form>

<?php    

   if($flag)
     {if(isset($_POST["encode"]))
        {$currstr= str_split($_POST["textenter"],1); 
        $temp = "";

        for($i=0; $i<count($currstr);$i+=1)
            $temp.= ((ord($currstr[$i]))-32)."`";
        
        
        echo "Your Encoded link is: ".$temp;}
      else
      if(isset($_POST["decode"]))
        {
         
             $currstr= str_split($_POST["textenter"],1); 
             $total="";
             $temp = "";
     
             for($i=0; $i<count($currstr);$i+=1)
                 {
                     if($currstr[$i] != '`')
                        $temp.= $currstr[$i];
                     else  
                       { $total.= (string)(chr((int)$temp+32));
                       $temp = "";}
                      }
                      
             echo ("Your Decoded link is: $total");
        }
       
      }
    
      
   
        
?>



</body>
</html>