
<!--DCTYPE html-->
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>WikiCourse登陆</title>
    <link href="../css/main.css" rel="stylesheet" type="text/css" />
   
  </head>
  
  <body>
    <h2>Wiki COURSE</h2>
    <!--navigator-->
    <nav> <a href="../main/index.html">找课</a> <a href="../main/index.html">求课</a>
      <a href="../main/index.html">同课</a> <a href="../main/index.html">账户</a> <a

        href="../main/index.html">关于</a> 
    </nav>

    <?php echo $_GET["departmentname"] ?><br>
    
    
    <?php
        mysql_connect("localhost","root","") or die (mysql_error());
        mysql_select_db("db_wc") or die(mysql_error());
        
        // get the department name in URL and select data from SQL according to the department 
	      $data = mysql_query("SELECT `course_name` FROM `wc_course` WHERE `department`= '".$_GET["departmentname"]."'");
	      if($data == FALSE)
	      {
	        die(mysql_error());
	      }
	      while($row = mysql_fetch_array($data))
	      {
         $coursename = $row["course_name"];
        
        ?>
	      <a href="#"><?php echo $coursename; ?></a><br/>
	      <?php
	      };
        ?>
    
      
    
    
    
  </body>
</html>
