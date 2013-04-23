<meta http-equiv="Content-type" content="text/html; charset=utf8" />

<?php
	include_once '../lib/common.php';
	include_once '../lib/db.php';
	include_once '../lib/functions.php';
	include_once '../lib/user.php';
	
	//department,course_number,course_name,professor,course_description
	mysql_query("set name utf8");

	if(isset($_POST['department'])&&isset($_POST['course_number'])&&isset($_POST['course_name'])
		&&isset($_POST['professor'])&&isset($_POST['course_description']))
	{
		if( empty($_POST['department']) || empty($_POST['course_number']) || empty($_POST['course_name'])
			||empty($_POST['professor']) || empty($_POST['course_description']))
		{
			echo "请完整填写每一项,谢谢";
		}
		else
		{
			$sql="INSERT INTO `db_wc`.`wc_course` (`department`,`course_number`,`course_name`,`professor`,`course_description`) VALUES ('".$_POST['department']."','".$_POST['course_number']."','".$_POST['course_name']."','".$_POST['professor']."','".$_POST['course_description']."')";
			echo $sql;
			$result=mysql_query($sql);
						
			if($result==true)
			{
				echo "<script>window.location.href='../main/index.php'</script>";
			}
			else
			{
				echo "注册失败".mysql_error();
			}
			
		}
	}		
?>