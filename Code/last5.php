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
	     echo "<table border=2 bgcolor=aliceblue align=center height=150 width=450> <tr> <th><font  color=rebeccapurple size='4pt'>  opname </font> </th><th> <font  color=rebeccapurple size='4pt'> opdate </font>  </th> <th> <font  color=rebeccapurple size='4pt'> optime </font> </th> <th> <font  color=rebeccapurple size='4pt'> ammountofmoney </font> </th> </tr> ";
            $p=$conn->query("SELECT * FROM transactions WHERE accountno=$acc ORDER BY opdate DESC LIMIT 5;");
              while($row = $p->fetch(PDO::FETCH_ASSOC)){
		    $na=$row['opname'];
		   
		     $da=$row['opdate'];
		     $ti=$row['optime'];
		     $am=$row['opamount'];
              echo " <tr><td>  $na </td>  <td> $da </td>  <td> $ti</td> <td>$am </td> </tr> ";
             
                }
	     echo "</table>";
	  ?>
         <script type="text/javascript">
              
         </script>
	     
	      
	     <br> 
	         <p ><a href="main2.php" id=p6  >Go To Previous Page</a>
		         <a href="main2.php"><img src="back.png" alt="not found" id=im1> </a>  </p>
	         <h3 id=h3>  <a href="main.php"> Log Out</a>  </h3>
         <form method="post" >
            
             
         </form>
    </body>
</html>