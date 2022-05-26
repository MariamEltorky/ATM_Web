<html>
    <head>
        <title> ATM-Banking Services </title>
        <link rel="stylesheet" href="style.css"> 
        <h2 id=hh1> Welcome To MarSal Bank </h2>
     </head>
     <body id=body1>
        <?php session_start();
          require_once "connection.php";
	      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              $_SESSION['accno'] = $_POST['accno'];
          }	
            if( empty($_SESSION['count']) || $_SESSION['count']>=3 )
                $_SESSION['count']=0;
	    
            if (isset($_POST['confirm'])&& $_POST['confirm'] =='confirm') {
		  if (!empty($_POST['accno']) && !empty($_POST['pass'])) {
                
                $acc=$_POST['accno'];
                $pass=$_POST['pass'];

                 $res = $conn->query("SELECT accountno,password FROM clients WHERE accountno=$acc ");
        	while($row=$res->fetch()) { 
                if ($row['accountno']==$_POST['accno'] && $row['password']==$_POST['pass']) {
                        header("Location:main2.php");
                       
                       break;
                    }
                else {
		      $_SESSION['count']++;
		   
		}
            
            }
		    if($_SESSION['count']==3) {
			
			  date('h:i:s') ;
			   sleep(20);   //to sleep 20 seconds
			    date('h:i:s');
			      echo "<br> <br> <p align='center'> <font color=red  size='4pt'> Please Enter Your Correct  Password </font> </p>";
   
                
                }
		  else {
			   echo "<br> <br> <p align='center'> <font color=red  size='4pt'>Invalid Login Information... If You Enter Password 3 times Wrong, system Will Close For 20 Seconds</font> </p>"; 
			  
		  }
		  }
		
               }
	
	      ?>
         <script type="text/javascript">
	         function con () {
		    var accn=document.getElementById("acc").value
		     var pas=document.getElementById("paa").value
		     if (acc=="" || pas=="") {
			     window.alert("Please Enter Password And Account Number");
			     document.getElementById("acc").value=""
			     document.getElementById("paa").value=""
			     document.getElementsById("confirm").value=""
		     } 
		               
		        
		     }
            
         </script>
         <form method="post">
             <br> <br> <br>
	       <p id=p1> Account No:  <input type="text" name="accno" value="" id=acc> </p>
	         
             <p id=p1> Password:   &nbsp;&nbsp;&nbsp;  <input type="password" name="pass" id=paa> </p> 
             <p id=p5 > <input type="submit"  id=si4 name="confirm" value="confirm" onclick="con()" > </p>
                
             
	     </form>
    </body>
</html>