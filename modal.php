




									<!-- pancit seafood -->
									<div class="modal fade" id="pancit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										 <form action="actions/addorder" method="post">
											  <div class="modal-dialog modal-lg" role="document">

											    <div class="modal-content">
											      	<div class="modal-header">
											      		<?php echo $id; ?>
											      		<input type="hidden" name="id" value="<?php echo $id; ?>">
											        	<h1>Pancit Style's</h1>
											      	</div>

												      <div class="modal-body">
												      	<label for="">Category</label>
												      	<input type="hidden" name="category" value="">
												      		<input type="hidden" name="item" value="pancit cantoon">
												      			<input type="hidden" name="price" value="200">
												      	<div class="custom-control custom-radio">
												      		<input type="radio" id="customRadio1" name="category" class="custom-control-input" value="Regular">
												      		<label class="custom-control-label" for="customRadio1">Regular</label>
												      	</div>
												      	<div class="custom-control custom-radio">
												      		<input type="radio" id="customRadio2" name="category" class="custom-control-input" value="Medium">
												      		<label class="custom-control-label" for="customRadio2">Medium</label>
												      	</div>
												      	<div class="custom-control custom-radio">
												      		<input type="radio" id="customRadio3" name="category" class="custom-control-input" value="Large">
												      		<label class="custom-control-label" for="customRadio3">Large</label>
												      	</div>
												      	<div class="col-md-8" style="margin-bottom: 10px;">
																	<div id=field1>
																	  <button type="button" id="sub1" class="sub" style="background-color: #d3362a; height: 30px; width: 30px; border-radius: 2px; color: white; font-weight: bold;">-</button>
																	  <input type="text" id="1" name="quantity" value=0 class=field>
																	  <button type="button" id="add1" class="add" style="background-color: #2f9a36; height: 30px; width: 30px; border-radius: 2px; color: white; font-weight: bold;">+</button>
																	</div>
																</div>

												      </div>
											      <div class="modal-footer">
											      	<button type="submit" class="btn btn-primary">Add</button>
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											      </div>
											  </form>
											    </div>
											  </div>
										</div>
										<!-- end of pancit seafood -->

										<!--pancit common -->
										<div class="modal fade" id="pancitcommon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog modal-lg" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h1>Palabok Common</h1>
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
											      <div class="modal-footer">
											      	<button type="button" class="btn btn-primary">Add</button>
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											      </div>
											    </div>
											  </div>
										</div>
										<!--end of pancit common -->

										<!--pancit miki bihon -->
										<div class="modal fade" id="pancitmb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog modal-lg" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h1>Pancit Miki Bihon</h1>
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
																	<div id=field2>
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
																	<div id=field3>
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
											      <div class="modal-footer">
											      	<button type="button" class="btn btn-primary">Add</button>
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											      </div>
											    </div>
											  </div>
										</div>
										<!--end of pancit miki bihon -->

										<!--pancit canton -->
										<div class="modal fade" id="pancitcanton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog modal-lg" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h1>Pancit Canton</h1>
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
													    	<label style="font-weight: bold;">Choose Table</label>
													    	<label>Total Bills: </label>
													    	<input type="text" name="" value="P2000.00" style="border-style: none;" readonly>
													    </div>
													    </div>
												      </div>
											      <div class="modal-footer">
											      	<button type="button" class="btn btn-primary">Add</button>
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											      </div>
											    </div>
											  </div>
										</div>
										<!--end of pancit canton -->

										<!--Lomi -->
										<div class="modal fade" id="lomi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog modal-lg" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h1>Lomi</h1>
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
											      <div class="modal-footer">
											      	<button type="button" class="btn btn-primary">Add</button>
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											      </div>
											    </div>
											  </div>
										</div>
										<!--end of Lomi -->

										<!--Chowmien-->
										<div class="modal fade" id="chowmien" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog modal-lg" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h1>Chowmien</h1>
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
											      <div class="modal-footer">
											      	<button type="button" class="btn btn-primary">Add</button>
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											      </div>
											    </div>
											  </div>
										</div>
										<!--end of chowmien -->

										<!--Beef Mami-->
										<div class="modal fade" id="beefmami" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog modal-lg" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h1>Beef Mami</h1>
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
											      <div class="modal-footer">
											      	<button type="button" class="btn btn-primary">Add</button>
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											      </div>
											    </div>
											  </div>
										</div>
										<!--end of beef mami -->

										<!--Chicken Mami-->
										<div class="modal fade" id="chickenmami" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog modal-lg" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h1>Chicken Mami</h1>
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
											      <div class="modal-footer">
											      	<button type="button" class="btn btn-primary">Add</button>
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											      </div>
											    </div>
											  </div>
										</div>
										<!--end of chicken mami -->

										<!--Super Mami-->
										<div class="modal fade" id="supermami" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog modal-lg" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h1>Super Mami</h1>
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
											      <div class="modal-footer">
											      	<button type="button" class="btn btn-primary">Add</button>
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											      </div>
											    </div>
											  </div>
										</div>
										<!--end of super mami -->

										<!--pancit sotanghon-->
										<div class="modal fade" id="pancitsotanghon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog modal-lg" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h1>Pancit Sotanghon</h1>
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
											      <div class="modal-footer">
											      	<button type="button" class="btn btn-primary">Add</button>
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											      </div>
											    </div>
											  </div>
										</div>
										<!--end of pancit sotanghon -->

										<!--pancit malabon-->
										<div class="modal fade" id="pancitmalabon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog modal-lg" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h1>Pancit Malabon</h1>
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
											      <div class="modal-footer">
											      	<button type="button" class="btn btn-primary">Add</button>
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											      </div>
											    </div>
											  </div>
										</div>
										<!--end of malabon -->

										<!--pancit palabok-->
										<div class="modal fade" id="pancitpalabok" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog modal-lg" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h1>Pancit Palabok</h1>
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
											      <div class="modal-footer">
											      	<button type="button" class="btn btn-primary">Add</button>
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											      </div>
											    </div>
											  </div>
										</div>
										<!--end of pancit palabok -->


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