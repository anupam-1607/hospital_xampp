$(document).ready(function()
{
	//alert('first alert...!!');
	$(document).on('click','#save',function(e)
	
	{
		
		$fname=($('#first').val());
		$lname=($('#last').val());
		$email=($('#email').val());
		$phone=($('#phone').val());
		$uname=($('#uname').val());
		$pass=($('#pass').val());
		$birthdate=($('#birthdate').val());
		$city=($('#city').val());
		$gender=($('#gender').val());
		$.ajax({
			url : 'http://localhost/Shoot_My_Day/admin/action/ajax/ajax_user.php',
			data : 
			{
				
				fname : $fname,
				lname : $lname,
				email : $email,
				phone : $phone,
				uname : $uname,
				pass : $pass,
				birthdate : $birthdate,
				city : $city,
				gender : $gender,
				action:'ins'
			},
			method : 'POST',
			datatype : 'html',
			success :function(response)
			{
				//alert(response);
				$('#tab').html(response);
			}
			
		});
		e.preventDefault();
	});
	$(document).on('click','.upd',function(e)
	{
		$(this).parent('div').css('display','none');
		$(this).parent('div').siblings('div').css('display','block');
	    //alert($(this).parent('div').html());
		$(this).parent('div').parent('td').siblings('td').find('.dis').css('display','none');
		$(this).parent('div').parent('td').siblings('td').find('.hid').css('display','block');
		
		e.preventDefault();
        //$('.dis').hide();
		//$('.hid').show();
    });
		$(document).on('click','.del',function(e)
	{
		
		$id=($(this).parent('div').parent('td').siblings('td').find('#id').val());
		alert('You Deleted'+$id);
		$.ajax({
			url : 'http://localhost/Shoot_My_Day/admin/action/ajax/ajax_user.php',
			data : 
			{
				id : $id,
				action:'del'
			},
			method : 'POST',
			datatype : 'html',
			success :function(response)
			{
				$("#tab").html(response);
				
			}
			
		});
		
		e.preventDefault();
	});
		$(document).on('click','.sve',function(e)
	{
		$(this).parent('div').css('display','block');
		$(this).parent('div').siblings('div').css('display','none');
	    //alert($(this).parent('div').html());
		$(this).parent('div').parent('td').siblings('td').find('.dis').css('display','block');
		$(this).parent('div').parent('td').siblings('td').find('.hid').css('display','none');
		$id=($(this).parent('div').parent('td').siblings('td').find('#id').val());
		$fname=($(this).parent('div').parent('td').siblings('td').find('#fname').val());
		$lname=($(this).parent('div').parent('td').siblings('td').find('#lname').val());
		$email=($(this).parent('div').parent('td').siblings('td').find('#email').val());
		$phone=($(this).parent('div').parent('td').siblings('td').find('#phone').val());
		$uname=($(this).parent('div').parent('td').siblings('td').find('#uname').val());
		$city=($(this).parent('div').parent('td').siblings('td').find('#city').val());
		$pass=($(this).parent('div').parent('td').siblings('td').find('#pass').val());
		$birthdate=($(this).parent('div').parent('td').siblings('td').find('#birthdate').val());
		$city=($(this).parent('div').parent('td').siblings('td').find('#city').val());
		$gender=($(this).parent('div').parent('td').siblings('td').find('#gender').val());
		
		
		$.ajax({
			url : 'http://localhost/Shoot_My_Day/admin/action/ajax/ajax_user.php',
			data : {id : $id, 
					fname : $fname, 
					lname : $lname, 
					email : $email, 
					phone : $phone, 
					uname : $uname,
					city : $city,
					pass : $pass, 
					birthdate : $birthdate, 
					city : $city,
					gender : $gender, 
					action:'up'},
			method : 'POST',
			datatype : 'html',
			success :function(response)
			{
				// alert('succuss!!');
				$("#tab").html(response);
				
			}
			
		});
		 e.preventDefault();
	});
		$(document).on('click','.can',function(e)
	{
		
		$(this).parent('div').siblings('div').css('display','block');

				$(this).parent('div').css('display','none');
		$(this).parent('div').siblings('td').css('display','none');
		$(this).parent('div').parent('td').siblings('td').find('.dis').css('display','block');
		$(this).parent('div').parent('td').siblings('td').find('.hid').css('display','none');
		e.preventDefault();	
	});
});  