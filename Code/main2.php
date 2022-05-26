<html>
    <head>
        <title> ATM-Banking Services </title>
        <link rel="stylesheet" href="style.css"> 
       <h2 id=hh2> Welcome To MarSal Bank </h2>
     </head>
  <body id=body1>
        <?php session_start();
          require_once "connection.php";
	      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['accno'] = $_POST['accno'];
        
        if($_SESSION['accno']) {
            header('location: add.php');
	   header('location: withdraw.php');
	         header('location: aval.php');
	         header('location: last5.php');
	        header('location: account.php');
	        
        }
    }
	    
	?> 
      <script type="text/javascript">
	      	 
         </script>
         <form>
                <p id=p3> <input type="button" value="add" id=si1 onclick="window.location.href='add.php'">
             &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;    &nbsp;   &nbsp;   &nbsp;  &nbsp;    &nbsp;   &nbsp;   &nbsp;  &nbsp;  &nbsp;    &nbsp;   &nbsp;   &nbsp;
                   
                 <input type="button" id=si2 onclick="window.location.href='aval.php'" value="Avaliable Money" id=av></p>
	         
                <p id=p4> <input type="button" id=si1 onclick="window.location.href='withdraw.php'" value="withdraw" id=wi> 
                    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;    &nbsp;   &nbsp;   &nbsp;  &nbsp;    &nbsp;   &nbsp;   &nbsp;  &nbsp;  &nbsp;    &nbsp;   &nbsp;   &nbsp;
                   
                    
              <input type="button" id=si2 onclick="window.location.href='last5.php'" value="Last 5 Transactions" id=la> </p>
	         <p align=center> <input type="button" value="My Account" id=si1 onclick="window.location.href='account.php'"> </p>
	         <br> <br>
	             <h3 id=h3>  &nbsp;    &nbsp;   &nbsp;   &nbsp;  &nbsp;    &nbsp;   &nbsp;   &nbsp; &nbsp;    &nbsp;   &nbsp;   &nbsp; &nbsp;    &nbsp;   &nbsp;   &nbsp; &nbsp;    &nbsp;   &nbsp;   &nbsp;  &nbsp;    &nbsp;   &nbsp;   &nbsp;  &nbsp;    &nbsp;   &nbsp;   &nbsp; &nbsp;    &nbsp;   &nbsp;   &nbsp; &nbsp;    &nbsp;   &nbsp;   &nbsp;  &nbsp;    &nbsp;   &nbsp;   &nbsp; &nbsp;    &nbsp;   &nbsp;   &nbsp; &nbsp;    &nbsp;   &nbsp; <a href="main.php"> Log Out</a>  </h3>
         </form>
    </body>
</html>