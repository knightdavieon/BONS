


<div class="modal "  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="pancit">
    <div class="modal-dialog" style="top:40%;" role="document">
        <div class="modal-content">
            <form action="actions/accounts/updateaccount" method="post">
                <div class="modal-header" style="padding-top: 0; padding-bottom: 0;">
                    <h4>Update Account</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
												      	<div class="col-md-6" style="margin-right: 0; padding-left: 0; padding-right: 0;">
													       	<div class="col-md-12" style="">
													       		<div class="row">
													       		<div class="col-md-4">
														       		<label class="container">Regular
																	  
																</div>
																<div class="col-md-8" style="margin-bottom: 10px;">
																	<div id=field1>
																	  <button type="button" id="sub1" class="sub" style="background-color: #d3362a; height: 30px; width: 30px; border-radius: 2px; color: white; font-weight: bold;">-</button>
																	  <input type="text" id="1" value=0 class=field>
																	  <button type="button" id="add1" class="add" style="background-color: #2f9a36; height: 30px; width: 30px; border-radius: 2px; color: white; font-weight: bold;">+</button>
																	</div>
																</div>
																</div>
													       	</div>

													       	<div class="col-md-12" style="">
													       		<div class="row">
													       		<div class="col-md-4">
														       		<label class="container">Medium
																	 
																	</label>
																</div>
																<div class="col-md-8" style="margin-bottom: 10px;">
																	<div id=field1>
																	  <button type="button" id="sub1" class="sub" style="background-color: #d3362a; height: 30px; width: 30px; border-radius: 2px; color: white; font-weight: bold;">-</button>
																	  <input type="text" id="1" value=0 class=field>
																	  <button type="button" id="add1" class="add" style="background-color: #2f9a36; height: 30px; width: 30px; border-radius: 2px; color: white; font-weight: bold;">+</button>
																	</div>
																</div>
																</div>
													       	</div>

													       	<div class="col-md-12" style="">
													       		<div class="row">
													       		<div class="col-md-4">
														       		<label class="container">Large
																	  
																	</label>
																</div>
																<div class="col-md-8" style="margin-bottom: 10px;">
																	<div id=field1>
																	  <button type="button" id="sub1" class=sub style="background-color: #d3362a; height: 30px; width: 30px; border-radius: 2px; color: white; font-weight: bold;">-</button>
																	  <input type="text" id="1" value=0 class=field>
																	  <button type="button" id="add1" class=add style="background-color: #2f9a36; height: 30px; width: 30px; border-radius: 2px; color: white; font-weight: bold;">+</button>
																	</div>
																</div>
																</div>
													       	</div>
													              														      	
													    </div>

													    <div class="col-md-6">
													    	<label>Total Bills: </label>
													    	<input type="text" name="" value="P2000.00" style="border-style: none;" readonly>
													    </div>

													    </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="userid" value="<?php echo $row['account_id']; ?>" />
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal "  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="deactivateaccount<?php echo $i;?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="actions/accounts/deactivateaccount" method="post">
                <div class="modal-header">
                    <h4>Deactivate account</h4>
                </div>
                <div class="modal-body">

                    <div style="text-align:center;"><font size="30px"><span class="fa fa-warning" style="color: red;"><h3>Are You Sure?</h3></span></font></div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="accountid" value="<?php echo $row['account_id']; ?>" />
                    <button type="submit" class="btn btn-primary">Deactivate</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal "  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="activateaccount<?php echo $i;?>">
    <div class="modal-dialog" style="align-content: center;" role="document">
        <div class="modal-content">
            <form action="actions/accounts/activateaccount" method="post">
                <div class="modal-header">
                    <h4>Activate account</h4>
                </div>
                <div class="modal-body">

                    <div style="text-align:center;"><font size="30px"><span class="fa fa-exclamation" style="color: yellow;"><h3>Are You Sure?</h3></span></font></div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="accountid" value="<?php echo $row['account_id']; ?>" />
                    <button type="submit" class="btn btn-primary">Activate</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal "  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="deleteaccount<?php echo $i;?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="actions/accounts/deleteaccount" method="post">
                <div class="modal-header">
                    <h4>Delete account</h4>
                </div>
                <div class="modal-body">

                    <div style="text-align:center;"><font size="30px"><span class="fa fa-warning" style="color: red;"><h3>Are You Sure?</h3></span></font></div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="accountid" value="<?php echo $row['account_id']; ?>" />
                    <button type="submit" class="btn btn-primary">Delete</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>






    <!-- All Jquery -->
    <script src="../resources/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../resources/js/lib/bootstrap/js/popper.min.js"></script>


<script>
$(document).ready(function(){
$('#chckbox<?php echo $i; ?>').change(function(){
if(this.checked)
$('#showcont<?php echo $i; ?>').fadeIn('slow');
else
$('#showcont<?php echo $i; ?>').fadeOut('slow');

});
});
</script>



	<script>
		
		var total;
		// if user changes value in field
		$('.field1').change(function() {
		  // maybe update the total here?
		}).trigger('change');

		$('.add1').click(function() {
		  var target = $('.field1', this.parentNode)[0];
		  target.value = +target.value + 1;
		});

		$('.sub1').click(function() {
		  var target = $('.field1', this.parentNode)[0];
		  if (target.value > 0) {
		    target.value = +target.value - 1;
		  }
		});

	</script>