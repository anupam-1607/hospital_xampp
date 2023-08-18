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
		
		
		$p_id=($(this).parent('div').parent('td').siblings('td').find('#p_id').val());
		alert('You Deleted ID No. ' +$p_id);
		$.ajax({
			url : 'http://localhost/Shoot_My_Day/admin/action/ajax/ajax_gallery.php',
			data : 
			{
				p_id : $p_id,
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
		$p_id=($(this).parent('div').parent('td').siblings('td').find('#p_id').val());
		$imgs=($(this).parent('div').parent('td').siblings('td').find('#imgs').val());
		
		
		$.ajax({
			url : 'http://localhost/Shoot_My_Day/admin/action/ajax/ajax_gallery.php',
			data : {p_id : $p_id, 
					imgs : $imgs,
					 
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
