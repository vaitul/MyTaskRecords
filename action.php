<?php

	include "DBConnection.php";

	class MyAction extends DataBase
	{
		public function GetHomeName($status)
		{
			if($status!="all" && $status!="--Sort By--")
				return mysqli_query($this->con,"SELECT * FROM `tasks` WHERE `status`= '$status' ");
			else
				return mysqli_query($this->con,"SELECT * FROM `tasks`");
		}
		public function GetHomeFull($table)
		{
			return mysqli_query($this->con,"SELECT * FROM `$table`");
		}
	}

	if(isset($_POST['menu_home']))
	{
		$status = $_POST['menu_home'];
		$myaction = new MyAction;
		$data = $myaction->GetHomeName($status);
		$row = mysqli_num_rows($data);
		if($row)
		{
			echo "
			<div id='result-tabs' class='col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-0 col-xs-12'>
				<div id='home_result'> <ol>";
			while($row = mysqli_fetch_array($data))
			{
				if($row['status']=='-1')
					$status = "<span> <i class='fas fa-circle' style='color:#ea4141;zoom:1.1;'> </i> Pending <span> &nbsp;&nbsp; 
							   <span> <i class='fa fa-calendar-alt' style='color:#2193b0;zoom:1.1;'> </i><span> $row[deadline]</span> </span>";
				if($row['status']=='0')
					$status = "<span> <i class='fas fa-circle' style='color:#edd315;zoom:1.1;'> </i> Started <span>  &nbsp;&nbsp 
							   <span> <i class='fa fa-calendar-alt' style='color:#2193b0;zoom:1.1;'> </i> <span>$row[deadline]</span> </span>";
				if($row['status']=='1')
					$status = "<span> <i class='fas fa-circle' style='color:green;zoom:1.1;'> </i> Copleted <span>  &nbsp;&nbsp 
							   <span> <i class='fa fa-calendar-alt' style='color:#2193b0;zoom:1.1;'> </i> <span>$row[deadline]</span> </span>";
				echo "<div id='wraper-tasks-list'><h4><li id='taskid-$row[id]'> $row[task_name]</li></h4>";
				echo "<p>
						<b>$status</b>
					 </p>
					<pre id='task_description' style='white-space: pre-wrap; background:rgba(0,0,0,0); border:0px;'>
					<div id='underline'></div>
$row[task_description]
					 </pre>
					</div>";
			}
			echo "</ol></div>
			</div>";
		}
		else
		{
			echo 0;
		}
	}
	if(isset($_POST['menu_about']))
	{
		echo "<h1><h1><h1>About</h1></h1></h1>";
	}
	if(isset($_POST['menu_account']))
	{
		echo "<h1><h1><h1>Account</h1></h1></h1>";
	}
?>