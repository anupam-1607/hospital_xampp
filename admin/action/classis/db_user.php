<?php
class demo
{
	function up($p)
	{
		$db = mysqli_connect("localhost","root","","");
				mysqli_select_db($db,"shoot_my_day");
				// echo 'Id';
				$id = $p['id'];
				$fname = $p['fname'];
				$lname = $p['lname'];
				$email = $p['email'];
				$phone = $p['phone'];
				$uname = $p['uname'];
				$pass = $p['pass'];
				$birthdate = $p['birthdate'];
				$city = $p['city'];
				$gender = $p['gender'];
				$sql="update user set fname = '$fname', lname = '$lname', email = '$email', phone = '$phone', uname = '$uname', pass = '$pass', birthdate = '$birthdate', city = '$city', gender = '$gender' where id = '$id'";
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
				$id = $de['id'];
				echo $id.'--';
				$sql="delete from user where id =".$id;
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
                        <th colspan="2">Name</th>
                        <th>Email</th>
                        <th>Phone number</th>
						<th>User name</th>
                        <th>Password</th>
                        <th>City</th>
						<th>Birth date </th>
						<th>Gender</th>
						<th  colspan="2"> Action	</th>
                    </tr>';
	
	//mysqli_select_db($db,"testproject");

		$sql = "select * from user";
		$result = mysqli_query ($db, $sql);
		if(mysqli_num_rows ($result))
		{
			while($row = $result->fetch_array())
			{
		
	
		echo'
		
		<tr>
							<td><input type="text"id="id" value="'.$row['id'].'"></td>
				<td>
					<div class="dis">'.$row['fname'].'</div><br>
					<div class="hid"><input type="text" id="fname" value='.$row['fname'].'></div>
				</td>
				<td>
					<div class="dis">'.$row['lname'].'</div><br>
					<div class="hid"><input type="text" name="lname" id="lname" value='.$row['lname'].'></div>
				</td>
				
				<td>
					<div class="dis">'.$row['email'].'</div><br>
					<div class="hid"><input type="text" name="email" id="email" value='.$row['email'].'></div>
				</td>

				<td>
					<div class="dis">'.$row['phone'].'</div><br>
					<div class="hid"><input type="number" name="phone" id="phone" value='.$row['phone'].'></div>
				</td>

				<td>
					<div class="dis">'.$row['uname'].'</div><br>
					<div class="hid"><input type="text" name="uname" id="uname" value='.$row['uname'].'></div>
				</td>

				<td>
					<div class="dis">'.$row['pass'].'</div><br>
					<div class="hid"><input type="text" name="pass" id="pass" value='.$row['pass'].'></div>
				</td>

				<td>
					<div class="dis">'.$row['city'].'</div><br>
					<div class="hid"><input type="text" name="city" id="city" value='.$row['city'].'></div>
				</td>


				<td>
					<div class="dis">'.$row['birthdate'].'</div><br>
					<div class="hid"><input type="date" name="birthdate" id="birthdate" value='.$row['birthdate'].'></div>
				</td>
<td>
					<div class="dis">'.$row['gender'].'</div><br>
					<div class="hid"><input type="text" name="gender" id="gender" value='.$row['gender'].'></div>
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