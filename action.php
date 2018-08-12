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

		echo "
		<div id='result-tabs' class='col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-0 col-xs-12'>
			<div id='home_result'>";
		while($row = mysqli_fetch_array($data))
		{
				echo "<div id='wraper'> <h3> $row[0] $row[1]</h3>";
				echo "<div>
						<p>
						$row[1] <br>$row[2]
						</p>
					</div></div>";
		}
		echo "</div>
				</div>";
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