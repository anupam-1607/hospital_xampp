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
			url : 'http://localhost/Shoot_My_Day/admin/action/ajax/ajax_order.php',
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
		
		$o_id=($(this).parent('div').parent('td').siblings('td').find('#id').val());
		alert('You Deleted' +$o_id);
		$.ajax({
			url : 'http://localhost/Shoot_My_Day/admin/action/ajax/ajax_order.php',
			data : 
			{
				o_id : $o_id,
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
		$o_id=($(this).parent('div').parent('td').siblings('td').find('#o_id').val());
		$u_name=($(this).parent('div').parent('td').siblings('td').find('#u_name').val());
		$u_num=($(this).parent('div').parent('td').siblings('td').find('#u_num').val());
		$peoples=($(this).parent('div').parent('td').siblings('td').find('#peoples').val());
		$state=($(this).parent('div').parent('td').siblings('td').find('#state').val());
		$city=($(this).parent('div').parent('td').siblings('td').find('#city').val());
		$area=($(this).parent('div').parent('td').siblings('td').find('#area').val());
		$c_name=($(this).parent('div').parent('td').siblings('td').find('#c_name').val());
		$c_num=($(this).parent('div').parent('td').siblings('td').find('#c_num').val());
		$f_date=($(this).parent('div').parent('td').siblings('td').find('#f_date').val());
		$t_date=($(this).parent('div').parent('td').siblings('td').find('#t_date').val());
		$shoot=($(this).parent('div').parent('td').siblings('td').find('#shoot').val());
		$package=($(this).parent('div').parent('td').siblings('td').find('#package').val());
		
		$.ajax({
			url : 'http://localhost/Shoot_My_Day/admin/action/ajax/ajax_order.php',
			data : {o_id : $o_id, 
					u_name : $u_name,
					u_num : $u_num,
					peoples : $peoples,
					state : $state,
					city : $city,
					area : $area,
					c_name : $c_name,
					c_num : $c_num,
					f_date : $f_date,
					t_date : $t_date,
					shoot : $shoot,
					package : $package, 
					action:'up'},
			method : 'POST',
			datatype : 'html',
			success :function(response)
			{
				
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