<?php

	include "DBConnection.php";

	class MyAction extends DataBase
	{
		public function GetHomeName($table)
		{
			return mysqli_query($this->con,"SELECT * FROM `$table`");
		}
		public function GetHomeFull($table)
		{
			return mysqli_query($this->con,"SELECT * FROM `$table`");
		}
	}

	if(isset($_POST['menu_home']))
	{
		$myaction = new MyAction;
		$data = $myaction->GetHomeName("tasks");
		$row = mysqli_num_rows($data);
		if($row)
		{
			echo "
			<div id='result-tabs' class='col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-0 col-xs-12'>
				<div id='home_result'> <ol>";
			while($row = mysqli_fetch_array($data))
			{
				echo "<div id='wraper-tasks-list'><h4><li> $row[task_name]</li></h4>";
				echo "<p>
						<b>$row[status]</b>
					 </p>
					<pre id='task_description' style='white-space: pre-wrap; background:rgba(0,0,0,0); border:0px;'>
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