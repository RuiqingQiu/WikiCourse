
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
    
    
   <table>
      <tr>     
        <td>
        <?php
        mysql_connect("localhost","root","") or die (mysql_error());
        mysql_select_db("db_wc") or die(mysql_error());
	      $data = mysql_query("SELECT DISTINCT `department` FROM `wc_course`");
	      if($data == FALSE)
	      {
	        die(mysql_error());
	      }
	      while($row = mysql_fetch_array($data))
	      {
         $departmentname = $row["department"]; //store distinct department name
        
        ?>
         <!--link to new course_name page with the parameter of the specific department name -->
	      <a href="../business/course_name.php?departmentname=<?php echo $departmentname ?>"><?php echo $departmentname; ?></a><br/>
	      <?php
	      };
        ?>
	       


        </td>
  
        <td>
          <table>
            <tbody>
              <tr>
                <td>找不到？ <a href="../business/request_course.html">求课</a> </td>
              </tr>
              <tr>
                <td>要补充？ <a href="../business/supply_course.html">供课</a> </td>
              </tr>
            </tbody>
          </table>
        </td>
     
        <td>
        <div>
        悬赏排行榜
        </div>
        </td>
      
      </tr>
    </table>
  </body>
</html>
