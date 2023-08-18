<?php
class demo
{
	function up($p)
	{
		$db = mysqli_connect("localhost","root","","");
				mysqli_select_db($db,"shoot_my_day");
				// echo 'Id';
				$id = $p['o_id'];
				$u_name = $p['u_name'];
				$u_num = $p['u_num'];
				$peoples = $p['peoples'];
				$state = $p['state'];
				$city = $p['city'];
				$area = $p['area'];
				$c_name = $p['c_name'];
				$c_num = $p['c_num'];
				$f_date = $p['f_date'];
				$t_date = $p['t_date'];
				$shoot = $p['shoot'];
				$package = $p['package'];
				
				$sql="update bookings set u_name = '$u_name', u_num = '$u_num', peoples = '$peoples', state = '$state', city = '$city', area = '$area', c_name = '$c_name', c_num = '$c_num',  f_date = '$f_date', t_date = '$t_date', shoot = '$shoot', package = '$package' where o_id = '$id'";
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
				$o_id = $de['o_id'];
				echo $id.'--';
				$sql="delete from bookings where id =".$o_id;
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
                        <th >Customer</th>
                        <th >Customer Number</th>
                        <th>How Many People</th>
                        <th>State</th>
                        <th>City</th>
                        <th>Area</th>
                        <th>Cameraman</th>
						<th>Cameraman Number</th>
                        <th>Start Date</th>
						<th>End Date</th>
						<th>Shoot</th>
						<th>Package</th>
						<th  colspan="2"> Action	</th>
                    </tr>';
	
	//mysqli_select_db($db,"testproject");

		$sql = "select * from bookings";
		$result = mysqli_query ($db, $sql);
		if(mysqli_num_rows ($result))
		{
			while($row = $result->fetch_array())
			{
		
	
		echo'
		
		<tr>
							<td><input type="text" id="o_id" value="'.$row['o_id'].'"></td>
				<td>
					<div class="dis">'.$row['u_name'].'</div><br>
					<div class="hid"><input type="text" id="u_name" value='.$row['u_name'].'></div>
				</td>
							
				<td>
					<div class="dis">'.$row['u_num'].'</div><br>
					<div class="hid"><input type="text" name="u_num" id="u_num" value='.$row['u_num'].'></div>
				</td>

				<td>
					<div class="dis">'.$row['peoples'].'</div><br>
					<div class="hid"><input type="number" name="peoples" id="peoples" value='.$row['peoples'].'></div>
				</td>

				<td>
					<div class="dis">'.$row['state'].'</div><br>
					<div class="hid"><input type="text" name="state" id="state" value='.$row['state'].'></div>
				</td>

				<td>
					<div class="dis">'.$row['city'].'</div><br>
					<div class="hid"><input type="text" name="city" id="city" value='.$row['city'].'></div>
				</td>

				<td>
					<div class="dis">'.$row['area'].'</div><br>
					<div class="hid"><input type="text" name="area" id="area" value='.$row['area'].'></div>
				</td>

				<td>
					<div class="dis">'.$row['c_name'].'</div><br>
					<div class="hid"><input type="text" name="c_name" id="c_name" value='.$row['c_name'].'></div>
				</td>

				<td>
					<div class="dis">'.$row['c_num'].'</div><br>
					<div class="hid"><input type="number" name="c_num" id="c_num" value='.$row['c_num'].'></div>
				</td>

				
				<td>
					<div class="dis">'.$row['f_date'].'</div><br>
					<div class="hid"><input type="date" name="f_date" id="f_date" value='.$row['f_date'].'></div>
				</td>

				<td>
					<div class="dis">'.$row['t_date'].'</div><br>
					<div class="hid"><input type="date" name="t_date" id="t_date" value='.$row['t_date'].'></div>
				</td>

				<td>
					<div class="dis">'.$row['shoot'].'</div><br>
					<div class="hid"><input type="text" name="shoot" id="shoot" value='.$row['shoot'].'></div>
				</td>

				<td>
					<div class="dis">'.$row['package'].'</div><br>
					<div class="hid"><input type="number" name="package" id="package" value='.$row['package'].'></div>
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