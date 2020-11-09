<!DOCTYPE html>

<html>
 
<head>
	<meta charset=UTF-8" />
	
	<title>Feedback</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
 
	<div id="page-wrap">
 
		
		
        <?php
            
           
            $answer2 = $_POST['q2a'];
            $answer3 = $_POST['q3a'];
			
			
      
            echo "Thanks for giving us a ",$answer2+$answer3;
            
            
        ?>
	
	</div>
 
</body>
 
</html>