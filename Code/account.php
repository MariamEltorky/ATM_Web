<html>
    <head>
        <title> ATM-Banking Services </title>
        <link rel="stylesheet" href="style.css"> 
        <h2 id=hh4> Welcome To MarSal Bank </h2>
     </head>
     <body id=body1>
        <?php session_start();
          require_once "connection.php";
	       $acc=$_SESSION['accno'];  
	     echo "<table bgcolor=aliceblue align=center height=150 width=500> ";
            $p=$conn->query("SELECT * FROM clients WHERE accountno=$acc ");
              while($row = $p->fetch(PDO::FETCH_ASSOC)){
		    $na=$row['name'];
		   
		     $ac=$row['accountno'];
		     $am=$row['amountofmoney'];
		    
              echo "<tr > <td> <font color=purple  size='5pt' > <b>  Name: </b> </font> </td> <td> <font color=palevioletred  size='4pt' > <b> <i> $na  </i></b> </font></td> </tr> <tr> <td> <font color=purple  size='5pt' > <b>  Account Number:  </b> </font>  </td> <td> <font color=palevioletred  size='4pt' > <b> <i>  $ac </i></b> </td> </tr> <tr> <td><font color=purple  size='5pt' > <b> Amount Of Money: </b> </font> </td> <td><font color=palevioletred  size='4pt' > <b> <i> $am </i></b> </td> </tr>   ";
             
                }
	     echo "</table>";
	  ?>
         <script type="text/javascript">
              
         </script>
	     
	         <p ><a href="main2.php" id=p6  >Go To Previous Page</a>
		         <a href="main2.php"><img src="back.png" alt="not found" id=im1> </a>  </p>
	       <h3 id=h3>  <a href="main.php"> Log Out</a>  </h3>
         <form method="post" >
            
             
         </form>
    </body>
</html>