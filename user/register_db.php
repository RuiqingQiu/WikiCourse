<meta http-equiv="Content-type" content="text/html; charset=utf8" />

<?php
	include_once '../lib/common.php';
	include_once '../lib/db.php';
	include_once '../lib/functions.php';
	include_once '../lib/user.php';
	
	mysql_query("set name utf8");
	if(isset($_GET['register']))
	{
		if(isset($_POST['reg_name'])&&isset($_POST['reg_gender'])&&isset($_POST['reg_grade'])
		&&isset($_POST['reg_email'])&&isset($_POST['reg_password'])&&isset($_POST['reg_repeat']))
		{
			if( empty($_POST['reg_name']) || empty($_POST['reg_gender']) || empty($_POST['reg_grade'])
			||empty($_POST['reg_email']) || empty($_POST['reg_password'])||empty($_POST['reg_repeat']))
			{
				echo "请完整填写每一项,谢谢";
			}
			else
			{
				$email=$_POST['reg_email'];
				$result1=mysql_query("select * from `db_wc`.`wc_user` where `email`='".$email."'");
				$row=mysql_num_rows($result1);
				if($row)
				{
					"邮箱已使用,请更换邮箱重试";
					echo"<a href=register_form.html>返回</a>";
				}
				else
				{
					if($_POST['reg_password'] == $_POST['reg_repeat'])
					{
						echo $temp="验证成功";
						$sql="INSERT INTO `db_wc`.`wc_user` (`name`,`gender`,`grade`,`email`,`password`) VALUES ('".$_POST['reg_name']."','".$_POST['reg_gender']."','".$_POST['reg_grade']."','".$_POST['reg_email']."','".$_POST['reg_password']."')";
						echo $sql;
						$result=mysql_query($sql);
						
						if($result==true)
						{
							echo "<script>window.location.href='../user/login_form.html'</script>";
						}
						else
						{
							echo "注册失败".mysql_error();
						}
					}
					else
					{
						echo "重复密码错误";
					}
				}
			}
		}
		else
		{
			echo "请完整填写每一项,谢谢";
		}
		
	}