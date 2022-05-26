<html>
    <head>
        <title> ATM-Banking Services </title>
        <link rel="stylesheet" href="style.css"> 
       <h2 id=hh3> Welcome To MarSal Bank </h2>
        </head>
    <body id=body1>
        <?php session_start();
           require_once "connection.php";
	     $acc=$_SESSION['accno'];  
            $p=$conn->query("SELECT amountofmoney FROM clients WHERE accountno=$acc");
              while($row = $p->fetch(PDO::FETCH_ASSOC)){
		    $am=$row['amountofmoney'];
              echo " <p align='center' > <font size='5pt'> Avaliable Amount Of Money In Your Account: &nbsp;   &nbsp;   &nbsp; </font> ";
                echo "<b><u> <font color= darkblue   size='6pt'> $am </font></u> </b> </p>";
                  
                }
	    
         
        ?>
	 
	         <p ><a href="main2.php" id=p6  >Go To Previous Page</a>
		         <a href="main2.php"><img src="back.png" alt="not found" id=im1> </a>  </p>
	        <h3 id=h3>  <a href="main.php"> Log Out</a>  </h3>
       <form method="post" >
            
	    
                
             
         </form>
     </body>
</html>