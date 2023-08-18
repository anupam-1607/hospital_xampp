<?php
class demo
{
	function up($p)
	{
		$db = mysqli_connect("localhost","root","","");
				mysqli_select_db($db,"shoot_my_day");
				// echo 'Id';
				$v_id = $p['v_id'];
				$v_pic = $p['v_pic'];
				$v_disc = $p['v_disc'];
				
				$sql="update visitors set v_pic = '$v_pic' , v_disc = '$v_disc' where v_id = '$v_id'";
			if(mysqli_query($db,$sql))
			{
				echo"succuss here";
				return $this->tab();
			}
			else
			{
				echo"Error.. ".mysqli_error($db);
			}
	}
	function del($de)
	{
		$db = mysqli_connect("localhost","root","","");
				mysqli_select_db($db,"shoot_my_day");
				$v_id = $de['v_id'];
				
				$sql="delete from visitors where v_id =".$v_id;
			if(mysqli_query($db, $sql))
			{
				echo"delete success";
				$this->tab();
			}
			else
			{
				echo"Error.. ".mysqli_error($db);
			}
	}
	function ins($i)
	{
		$db = mysqli_connect("localhost","root","","");
				mysqli_select_db($db,"shoot_my_day");
				
				$v_disc = $i['v_disc'];
				
				$sql="insert into visitors(v_disc) values ('{$v_disc}')";
			if(mysqli_query($db,$sql))
			{
				//echo"delete success";
			return $this->tab();
			}
			else
			{
				echo"Error.. ".mysqli_error($db);
			}
	}

	function tab()
	{
		$db = mysqli_connect("localhost","root","","");
				mysqli_select_db($db,"shoot_my_day");
				echo'
				
                	<tr>
						<th>Id</th>
                        
						<th>Image</th>
						<th>Description</th>
						<th  colspan="2"> Action	</th>
                    </tr>';
	
	//mysqli_select_db($db,"testproject");

		$sql = "select * from visitors";
		$result = mysqli_query ($db, $sql);
		if(mysqli_num_rows ($result))
		{
			while($row = $result->fetch_array())
			{
		
	
		echo'
		
		<tr>
							<td><input type="text"id="v_id" value="'.$row['v_id'].'"></td>
				<td>
					<div class="dis">'.$row['v_pic'].'</div><br>
					<div class="hid"><input type="text" id="v_pic" value='.$row['v_pic'].'></div>
				</td>
				<td>
					<div class="dis">'.$row['v_disc'].'</div><br>
					<div class="hid"><input type="text" name="v_disc" id="v_disc" value='.$row['v_disc'].'></div>
				</td>
				
				
				<td>


				<td>
					<div class="dis"><a href="" class="upd">Update</a></div>
					<br><div class="hid" ><a href="" class="sve">Save</a></div>
				</td>
				<td>
					<div class="dis"><a href="" class="del">Delete</a></div>
					<br><div class="hid" ><a href="" class="can">Cancel</a></div></td>
			</tr>';
		
			}
		}
	
//echo'</table>';
	}

	function select($l)
	{
		$db = mysqli_connect("localhost","root","",""); 
		mysqli_select_db($db,"shoot_my_day");

		$img1 = $l['pc2'];
		$v_des = $l['v_des'];
		
		$sql = "insert into visitors (v_pic, v_disc) values('{$img1}','{$v_des}')";
		$result = mysqli_query($db, $sql) or die(mysqli_error($db));
		if($result)
		{
			echo 'true';
		}
		else
		{
			echo 'error..!';
		}
	
	}
	
	
}
?>