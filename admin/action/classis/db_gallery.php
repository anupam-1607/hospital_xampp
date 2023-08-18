<?php
class demo
{
	function del($de)
	{
		$db = mysqli_connect("localhost","root","","");
				mysqli_select_db($db,"shoot_my_day");
				$p_id = $de['p_id'];
				
				$sql="delete from uplodsss where p_id =".$p_id;
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
				mysqli_select_db($db,"testproject");
				
				$fname = $i['fname'];
				$lname = $i['lname'];
				$sql="insert into demo2(fname,lname) values ('{$fname}','{$lname}')";
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
                        <th >Imgae Details</th>
                       	
						<th> Action	</th>
                    </tr>';
	
	//mysqli_select_db($db,"testproject");

		$sql = "select * from uplodsss";
		$result = mysqli_query ($db, $sql);
		if(mysqli_num_rows ($result))
		{
			while($row = $result->fetch_array())
			{
		
	
		echo'<tr>
			<td><input type="text" id="p_id" value="'.$row['p_id'].'"></td>
				<td>
					<div class="dis"><img src="'.$row['imgs'].'"></div><br>
					<div class="hid"><input type="text" id="u_name" value='.$row['imgs'].'></div>
				</td>
						
				
				<td>
					<div class="dis"><a href="" class="del">Delete</a></div>
					<br><div class="hid" ><a href="" class="can">Cancel</a></div></td>
			</tr>';
		
			}
		}
	
//echo'</table>';
		// <td>
		// 			<div class="dis"><a href="" class="upd">Update</a></div>
		// 			<br><div class="hid" ><a href="" class="sve">Save</a></div>
		// 		</td>
	}
}
?>