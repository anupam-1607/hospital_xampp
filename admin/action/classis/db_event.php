<?php
class demo
{
	function up($p)
	{
		$db = mysqli_connect("localhost","root","","");
				mysqli_select_db($db,"shoot_my_day");
				// echo 'Id';
				$e_id = $p['e_id'];
				$e_name = $p['e_name'];
				$e_from = $p['e_from'];
				$e_to = $p['e_to'];
				$e_disc = $p['e_disc'];
				$e_tag = $p['e_tag'];
				
				$sql="update add_event set e_name = '$e_name', e_from = '$e_from', e_to = '$e_to', e_disc = '$e_disc', e_tag = '$e_tag' where e_id = '$e_id'";
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
				$e_id = $de['e_id'];
				
				$sql="delete from add_event where e_id =".$e_id;
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
				
				$ename = $i['ename'];
				$esdate = $i['esdate'];
				$etdate = $i['etdate'];
				$edisc = $i['edisc'];
				$etag = $i['etag'];
				$sql="insert into add_event(e_name, e_from, e_to, e_disc, e_tag) values ('{$ename}','{$esdate}','{$etdate}','{$edisc}','{$etag}')";
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
                        
                        <th>Event Name</th>
                        <th>Start From</th>
						<th>End Date</th>
                        <th>Event Discription</th>
                        <th>Event Tag</th>
						
						<th  colspan="2"> Action	</th>
                    </tr>';
	
	//mysqli_select_db($db,"testproject");

		$sql = "select * from add_event";
		$result = mysqli_query ($db, $sql);
		if(mysqli_num_rows ($result))
		{
			while($row = $result->fetch_array())
			{
		
	
		echo'
		
		<tr>
							<td><input type="text"id="e_id" value="'.$row['e_id'].'"></td>
				<td>
					<div class="dis">'.$row['e_name'].'</div><br>
					<div class="hid"><input type="text" id="e_name" value='.$row['e_name'].'></div>
				</td>
				<td>
					<div class="dis">'.$row['e_from'].'</div><br>
					<div class="hid"><input type="date" name="e_from" id="e_from" value='.$row['e_from'].'></div>
				</td>
				
				<td>
					<div class="dis">'.$row['e_to'].'</div><br>
					<div class="hid"><input type="date" name="e_to" id="e_to" value='.$row['e_to'].'></div>
				</td>

				<td>
					<div class="dis">'.$row['e_disc'].'</div><br>
					<div class="hid"><input type="textarea" name="e_disc" id="e_disc" cols="30" rows="5" value='.$row['e_disc'].'></div>
				</td>

				<td>
					<div class="dis">'.$row['e_tag'].'</div><br>
					<div class="hid"><input type="text" name="e_tag" id="e_tag" value='.$row['e_tag'].'></div>
				</td>

				
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
	
	
}
?>