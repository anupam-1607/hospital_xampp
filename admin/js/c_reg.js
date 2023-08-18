$(document).ready(function()
{
	//alert('first alert...!!');
	$(document).on('click','#save',function(e)
	
	{
		
		$fullname=($('#fullname').val());
		$email=($('#email').val());
		$phone=($('#phone').val());
		$camera=($('#camera').val());
		$studio=($('#studio').val());
		$birthdate=($('#birthdate').val());
		$uname=($('#uname').val());
		$pass=($('#pass').val());
		$gender=($('#gender').val());
		$.ajax({
			url : 'http://localhost/Shoot_My_Day/admin/action/ajax/ajax_reg.php',
			data : 
			{
				
				fullname : $fullname,
				email : $email,
				phone : $phone,
				camera : $camera,
				studio : $studio,
				birthdate : $birthdate,
				uname : $uname,
				pass : $pass,
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
			url : 'http://localhost/Shoot_My_Day/admin/action/ajax/ajax_reg.php',
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
		$fullname=($(this).parent('div').parent('td').siblings('td').find('#fullname').val());
		$email=($(this).parent('div').parent('td').siblings('td').find('#email').val());
		$phone=($(this).parent('div').parent('td').siblings('td').find('#phone').val());
		$camera=($(this).parent('div').parent('td').siblings('td').find('#camera').val());
		$studio=($(this).parent('div').parent('td').siblings('td').find('#studio').val());
		$birthdate=($(this).parent('div').parent('td').siblings('td').find('#birthdate').val());
		$uname=($(this).parent('div').parent('td').siblings('td').find('#uname').val());
		$pass=($(this).parent('div').parent('td').siblings('td').find('#pass').val());
		$gender=($(this).parent('div').parent('td').siblings('td').find('#gender').val());
		
		
		$.ajax({
			url : 'http://localhost/Shoot_My_Day/admin/action/ajax/ajax_reg.php',
			data : {id : $id, 
					fullname : $fullname,
					email : $email,
					phone : $phone,
					camera : $camera,
					studio : $studio,
					birthdate : $birthdate,
					uname : $uname,
					pass : $pass,
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