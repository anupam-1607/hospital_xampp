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
		
		$e_id=($(this).parent('div').parent('td').siblings('td').find('#e_id').val());
		alert('You Deleted'  +$e_id);
		$.ajax({
			url : 'http://localhost/Shoot_My_Day/admin/action/ajax/ajax_event.php',
			data : 
			{
				e_id : $e_id,
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
		$e_id=($(this).parent('div').parent('td').siblings('td').find('#e_id').val());
		$e_name=($(this).parent('div').parent('td').siblings('td').find('#e_name').val());
		$e_from=($(this).parent('div').parent('td').siblings('td').find('#e_from').val());
		$e_to=($(this).parent('div').parent('td').siblings('td').find('#e_to').val());
		$e_disc=($(this).parent('div').parent('td').siblings('td').find('#e_disc').val());
		$e_tag=($(this).parent('div').parent('td').siblings('td').find('#e_tag').val());
		
		
		$.ajax({
			url : 'http://localhost/Shoot_My_Day/admin/action/ajax/ajax_event.php',
			data : {e_id : $e_id, 
					e_name : $e_name, 
					e_from : $e_from, 
					e_to : $e_to, 
					e_disc : $e_disc, 
					e_tag : $e_tag,
					
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



	$(document).on('click','#addevent',function(e)
	
	{
		
		$ename=($('#ename').val());
		$esdate=($('#esdate').val());
		$etdate = ($('#etdate').val());
		$edisc = ($('#edisc').val());
		$etag = ($('#etag').val());
		
				
			$.ajax({
				url : 'http://localhost/shoot_my_day/admin/action/ajax/ajax_event.php',
				data : 
				{
					ename : $ename,
					esdate : $esdate,
					etdate : $etdate,
					edisc : $edisc,
					etag : $etag,
					
					action:'ins'
				},
				type : 'POST',
				datatype : 'html',
				success :function(response)
				{
					if(response == 'true')
					{
						alert('Your Event is INSERTED...!!');
						window.location.href = "http://localhost/shoot_my_day/admin/addevent.php";
						
					}
					else
					{
							alert('False');
					}
					
				}
		});
		e.preventDefault();
	});	
});  