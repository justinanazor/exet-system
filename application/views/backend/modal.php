    <script type="text/javascript">
	function showAjaxModal(url){
		// SHOWING AJAX PRELOADER IMAGE
		jQuery('#modal_ajax .modal-body').html('<div style="text-align:center;margin-top:200px;"><img src="<?php echo base_url();?>assets/images/preloader.gif" /></div>');
		
		// LOADING THE AJAX MODAL
		jQuery('#modal_ajax').modal('show', {backdrop: 'true'});
		
		// SHOW AJAX RESPONSE ON REQUEST SUCCESS
		$.ajax({
			url: url,
			success: function(response)
			{
				jQuery('#modal_ajax .modal-body').html(response);
			}
		});
	}
	</script>
    
    <!-- (Ajax Modal)-->
	
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="modal_ajax">
        <div class="modal-dialog modal-lg">
            <div class="modal-content slimscrollsidebar">
                <div class="modal-body " style="height:400px"></div>
            </div>
        </div>
    </div>
    
    
    
    
    <script type="text/javascript">
	function confirm_modal(delete_url){
		jQuery('#modal-4').modal('show', {backdrop: 'static'});
		document.getElementById('delete_link').setAttribute('href' , delete_url);
	}

	

	function publish_modal(delete_url){
		jQuery('#modal-5').modal('show', {backdrop: 'static'});
		document.getElementById('delete_link2').setAttribute('href' , delete_url);
	}


	
	function unpublish_modal(delete_url){
		jQuery('#modal-6').modal('show', {backdrop: 'static'});
		document.getElementById('delete_link3').setAttribute('href' , delete_url);
	}
	
	function send_modal(delete_url){
		jQuery('#modal-7').modal('show', {backdrop: 'static'});
		document.getElementById('delete_link4').setAttribute('href' , delete_url);
	}

	function parent_modal(delete_url){
		jQuery('#modal-8').modal('show', {backdrop: 'static'});
		document.getElementById('delete_link5').setAttribute('href' , delete_url);
	}

	function admin_modal(delete_url){
		jQuery('#modal-9').modal('show', {backdrop: 'static'});
		document.getElementById('delete_link6').setAttribute('href' , delete_url);
	}

	</script>
    
    <!-- (Normal Modal)-->
    <div class="modal fade" id="modal-4">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top:100px;">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="text-align:left;"><strong style="color:#FFFFFF">CONFIRMATION&nbsp;!!!</strong></h4>
                </div>
                

                <div class="modal-footer" align="center">
				<div class="row">
				 <div class="col-sm-7">	
				ARE YOU SURE YOU WANT TO DELETE THIS INFORMATION ?
				</div>
				 <div class="col-sm-5">	
                    <a href="#" class="btn btn-success btn-rounded btn-sm" id="delete_link"><i class="fa fa-check">&nbsp;</i>Delete</a>
                    <button type="button" class="btn btn-info btn-rounded btn-sm" data-dismiss="modal"><i class="fa fa-times">&nbsp;</i>Cancel</button>
					</div>
				</div>
				</div>
            </div>
        </div>
    </div>


	<div class="modal fade" id="modal-5">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top:100px;">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="text-align:left;"><strong style="color:#FFFFFF">CONFIRMATION&nbsp;!!!</strong></h4>
                </div>
                

                <div class="modal-footer" align="center">
				<div class="row">
				 <div class="col-sm-7">	
				ARE YOU SURE YOU WANT TO APPROVE THIS REQUEST ?
				</div>
				 <div class="col-sm-5">	
                    <a href="#" class="btn btn-success btn-rounded btn-sm" id="delete_link2"><i class="fa fa-check">&nbsp;</i>approve</a>
                    <button type="button" class="btn btn-info btn-rounded btn-sm" data-dismiss="modal"><i class="fa fa-times">&nbsp;</i>Cancel</button>
					</div>
				</div>
				</div>
            </div>
        </div>
    </div>
	
	<div class="modal fade" id="modal-6">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top:100px;">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="text-align:left;"><strong style="color:#FFFFFF">CONFIRMATION&nbsp;!!!</strong></h4>
                </div>
                

                <div class="modal-footer" align="center">
				<div class="row">
				 <div class="col-sm-7">	
				ARE YOU SURE YOU WANT TO UNPUBLSIH THIS EXAMINATION?
				</div>
				 <div class="col-sm-5">	
                    <a href="#" class="btn btn-success btn-rounded btn-sm" id="delete_link3"><i class="fa fa-check">&nbsp;</i>Publish</a>
                    <button type="button" class="btn btn-info btn-rounded btn-sm" data-dismiss="modal"><i class="fa fa-times">&nbsp;</i>Cancel</button>
					</div>
				</div>
				</div>
            </div>
        </div>
    </div>

	<div class="modal fade" id="modal-7">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top:100px;">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="text-align:left;"><strong style="color:#FFFFFF">CONFIRMATION&nbsp;!!!</strong></h4>
                </div>
                

                <div class="modal-footer" align="center">
				<div class="row">
				 <div class="col-sm-7">	
				ARE YOU SURE YOU WANT TO SEND THIS REQUEST TO PARENT ?
				</div>
				 <div class="col-sm-5">	
                    <a href="#" class="btn btn-success btn-rounded btn-sm" id="delete_link4"><i class="fa fa-check">&nbsp;</i>Send</a>
                    <button type="button" class="btn btn-info btn-rounded btn-sm" data-dismiss="modal"><i class="fa fa-times">&nbsp;</i>Cancel</button>
					</div>
				</div>
				</div>
            </div>
        </div>
    </div>


	<div class="modal fade" id="modal-8">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top:100px;">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="text-align:left;"><strong style="color:#FFFFFF">CONFIRMATION&nbsp;!!!</strong></h4>
                </div>
                

                <div class="modal-footer" align="center">
				<div class="row">
				 <div class="col-sm-7">	
				ARE YOU SURE YOU WANT TO CONFIRM THIS REQUEST OF YOUR CHILD ?
				</div>
				 <div class="col-sm-5">	
                    <a href="#" class="btn btn-success btn-rounded btn-sm" id="delete_link5"><i class="fa fa-check">&nbsp;</i>Send</a>
                    <button type="button" class="btn btn-info btn-rounded btn-sm" data-dismiss="modal"><i class="fa fa-times">&nbsp;</i>Cancel</button>
					</div>
				</div>
				</div>
            </div>
        </div>
    </div>

	
	<div class="modal fade" id="modal-8">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top:100px;">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="text-align:left;"><strong style="color:#FFFFFF">CONFIRMATION&nbsp;!!!</strong></h4>
                </div>
                

                <div class="modal-footer" align="center">
				<div class="row">
				 <div class="col-sm-7">	
				ARE YOU SURE YOU WANT TO CONFIRM THIS REQUEST OF THIS STUDENT ?
				</div>
				 <div class="col-sm-5">	
                    <a href="#" class="btn btn-success btn-rounded btn-sm" id="delete_link5"><i class="fa fa-check">&nbsp;</i>Confirm</a>
                    <button type="button" class="btn btn-info btn-rounded btn-sm" data-dismiss="modal"><i class="fa fa-times">&nbsp;</i>Cancel</button>
					</div>
				</div>
				</div>
            </div>
        </div>
    </div>

	<div class="modal fade" id="modal-9">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top:100px;">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="text-align:left;"><strong style="color:#FFFFFF">CONFIRMATION&nbsp;!!!</strong></h4>
                </div>
                

                <div class="modal-footer" align="center">
				<div class="row">
				 <div class="col-sm-7">	
				DEAN ARE YOU SURE YOU WANT TO FINALLY CONFIRM THIS REQUEST OF THIS STUDENT ?
				</div>
				 <div class="col-sm-5">	
                    <a href="#" class="btn btn-success btn-rounded btn-sm" id="delete_link6"><i class="fa fa-check">&nbsp;</i>approve</a>
                    <button type="button" class="btn btn-info btn-rounded btn-sm" data-dismiss="modal"><i class="fa fa-times">&nbsp;</i>Cancel</button>
					</div>
				</div>
				</div>
            </div>
        </div>
    </div>
