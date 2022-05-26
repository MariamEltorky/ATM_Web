<html>
    <head>
        <title> ATM-Banking Services </title>
        <link rel="stylesheet" href="style.css"> 
        <h2 id=hh3> Welcome To MarSal Bank </h2>
     </head>
     <body id=body1>
        <?php session_start();
          require_once "connection.php";
	      
	    if (isset($_POST['withdraw'])) {
		    
		    $acc=$_SESSION['accno'];  
	   $amo=$_POST['amount'];	    
		    if (!empty($amo)) {
                 $p1=$conn->query("SELECT amountofmoney FROM clients WHERE accountno=$acc");
		    while($row=$p1->fetch()) {
		   if (($row['amountofmoney']-$amo)>0) {
		 $da=date('Y-m-d');	
		$ti=date('h:i:sa');	  
		
		$conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('withdraw','$da','$ti',$amo,$acc)");
				  
		 $p=$conn->query("UPDATE clients SET amountofmoney=amountofmoney-$amo WHERE accountno=$acc");
		 echo " <p align='center'> <font color=green  size='3pt'> Successful Withdraw ($amo) in Account Number ($acc) </font><br> <font color=red  size='3pt'>  If You Finish Your Withdraw Operation,Please Press Finish... </font> </p>";
			    }
				    
			    else {
				 echo " <p align='center'> <font color=red  size='4pt'>Can’t Withdraw.....Please, Check Avaliable Amount Of Money In Your Account.</font> </p>";
			    }
		    }
		    }
		   
				   
	    }
	     
	            
	      ?>
         <script type="text/javascript">
	         
              function ch () {
		    var inp=document.getElementById("in").value
		    if (inp=="") {
			  
		    var che=confirm(" Do you want to make another operation!?")
		    if (che==true)
			    
			    location='main2.php'
		    else
			    location='afteraddandwithdraw.php'
		    }
		 }
         </script>
	    
         <form method="post" >
            
	       
	         <p id=p1 > Amount Of Money:  <input type="text" name="amount" id=in > </p> <p  id=out> </p>
             <p id=p5> <input type="submit" id=si3 name="withdraw"  value="withdraw from my account"  > 
		    <input type="submit" id=si5 name="add" onclick="ch();return false;" value="Finish" > </p>
	         
	         <p ><a href="main2.php" id=p6  >Go To Previous Page</a>
		         <a href="main2.php"><img src="back.png" alt="not found" id=im1> </a>  </p>
	       
                
             
	     </form>
		     
    </body>
</html>