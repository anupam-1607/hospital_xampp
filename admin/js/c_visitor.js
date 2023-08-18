$(document).ready(function()
{
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
			
			$v_id=($(this).parent('div').parent('td').siblings('td').find('#v_id').val());
			alert('You Deleted'+$v_id);
			$.ajax({
				url : 'http://localhost/Shoot_My_Day/admin/action/ajax/ajax_visitor.php',
				data : 
				{
					v_id : $v_id,
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
			$v_id=($(this).parent('div').parent('td').siblings('td').find('#v_id').val());
			$v_pic=($(this).parent('div').parent('td').siblings('td').find('#v_pic').val());
			$v_disc=($(this).parent('div').parent('td').siblings('td').find('#v_disc').val());
			
			
			$.ajax({
				url : 'http://localhost/Shoot_My_Day/admin/action/ajax/ajax_visitor.php',
				data : {v_id : $v_id, 
						v_pic : $v_pic, 
						v_disc : $v_disc, 
						 
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

		$(document).on('click','#but_upload',function()
		{
			// alert('su che??');

			var n1 = new FormData();
			n1.append("pc1",$("#file1").prop("files")[0]);
			n1.append("action","upld");
			n1.append("pc2",$("#file1").val().replace("C:\\fakepath\\",""));

			n1.append("v_des", $("#v_des").val());

			$.ajax(
				{
					url : 'http://localhost/shoot_my_day/admin/action/ajax/ajax_visitor.php',
					type : 'POST',
					data : n1,
					contentType : false,
					processData : false,
					success : function(response)
					{
						alert('Your added data in Visitor..');
					}
				});
			
		});

	// 	$(document).on('click','#but_upload',function(e)
	// 	{
	// 		$v_disc=($('#v_disc').val());
		
				
	// 		$.ajax({
	// 			url : 'http://localhost/shoot_my_day/admin/action/ajax/ajax_visitor.php',
	// 			data : 
	// 			{
	// 				v_disc : $v_disc,
					
	// 				action:'ins'
	// 			},
	// 			type : 'POST',
	// 			datatype : 'html',
	// 			success :function(response)
	// 			{
	// 				if(response == 'true')
	// 				{
	// 					alert('Your Data Inserted...!!');
						
						
	// 				}
	// 				else
	// 				{
	// 						alert('False');
	// 				}
					
	// 			}
				
			
	// 	});
		
		
	
	// 	e.preventDefault();
	// });
});