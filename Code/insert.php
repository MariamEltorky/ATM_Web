<html>
    <head>
     </head>
     <body>
        <?php
         require_once "connection.php";
	
			$conn->exec("INSERT INTO clients (name,accountno,password,amountofmoney) VALUES ('mahmoud abdelrahman',112233,'125m7',100000)");
         	$conn->exec("INSERT INTO clients (name,accountno,password,amountofmoney) VALUES ('maher melad',445566,'440m5',50000)");
            $conn->exec("INSERT INTO clients (name,accountno,password,amountofmoney) VALUES ('ayman soltan',778899,'778a9',70000)");
         	$conn->exec("INSERT INTO clients (name,accountno,password,amountofmoney) VALUES ('yahia adel',123456,'123y6',20000)");
            $conn->exec("INSERT INTO clients (name,accountno,password,amountofmoney) VALUES ('karima mahmoud',234561,'235k1',10000)");
         	$conn->exec("INSERT INTO clients (name,accountno,password,amountofmoney) VALUES ('aya ali',345612,'345a2',12000)");
         
        
         
         $conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('add','2016/10/12','12:10:00' ,3000,112233)");
           $conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('withdraw','2017/1/10','22:14:00',10000,112233)");  
          $conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('add','2017/4/20','15:22:00' ,12000,112233)");
           $conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('withdraw','2017/12/15','10:23:00',5000,112233)");  
          $conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('add','2018/5/16','14:12:00',6000,112233)");
        
          $conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('withdraw','2017/5/10','02:14:00',6000,445566)");      
          $conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('add','2017/12/19','05:33:00',10000,445566)");      
          $conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('withdraw','2018/4/5','20:40:00',4000,445566)");      
          $conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('add','2018/12/13','21:05:00',5000,445566)");      
         
          $conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('withdraw','2017/10/10','20:20:00',5000,778899)");      
          $conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('add','2018/8/5','20:40:00',4000,778899)");      
          $conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('withdraw','2018/11/4','15:33:00',10000,778899)");  
         
         $conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('add','2018/10/11','18:20:00',10000,123456)");      
         $conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('withdraw','2018/12/10','19:30:00',5000,123456)");      
         $conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('add','2019/1/12','05:40:00',2000,123456)");      
        
         $conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('withdraw','2018/12/20','10:12:00',2000,234561)");    
         $conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('add','2019/2/12','20:13:00',3000,234561)");    
         
          $conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('add','2018/8/10','11:12:00',2000,345612)");    
          $conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('withdraw','2018/10/11','04:33:00',4000,345612)");    
          $conn->exec("INSERT INTO transactions (opname,opdate,optime,opamount,accountno) VALUES ('withdraw','2019/3/10','08:11:00',3000,345612)");    
          
        
     ?>
    </body>
</html>