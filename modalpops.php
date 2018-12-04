<!-- start of sta cruz -->
<div class="modal fade" id="stacruz"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6" style="height: 100px; text-align: center; margin-top: auto; margin-bottom: auto;">
            <font size="12" style="color:#2AACC6;">Sta Cruz</font>
          </div>
          <div class="col-md-6">
             <img class="img-fluid" style="" src="resources/images/stacruz.png">
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Clean Up Summary</h5>
              </div>
                <label>Total Volunteers</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalvolunteerstacruz['totalvolunteer']);?> persons" style="text-align: center">
                <label>Estimated Distance Cleaned</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummstacruz['totaldistance']);?>km" style="text-align: center">
                <label>Estimated Total Weight of Trashed Collected: (kg)</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalstacruz['totalweight']);?>kg" style="text-align: center">
                <label>Estimaed Total No. of Trash Bags Filled</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummstacruz['totaltrashbags']);?>" style="text-align: center">
                <label>Total Trash Pieces</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotaltrashpcsstacruz['totaltrashpcs']);?> pcs" style="text-align: center">
                
            </div>
            <div class="col-md-6">
                <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Trash Collected</h5>
                </div>
                <label>Plastic</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalplasticstacruz['totalplastic']);?>" style="text-align: center">
                <label>Tiny Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummstacruz['totaltinytrash']);?>" style="text-align: center">
                <label>Other Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummstacruz['totalothertrash']);?>" style="text-align: center">
                <label>Glass & Metals</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummstacruz['totalglassmetals']);?>" style="text-align: center">
                <label>Fishing Gears</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummstacruz['totalfishinggear']);?>" style="text-align: center">
                
            </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- end of sta cruz -->

<!-- start of candelaria -->
<div class="modal fade" id="candelaria"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6" style="height: 100px; text-align: center; margin-top: auto; margin-bottom: auto;">
            <font size="12" style="color:#2AACC6;">Candelaria</font>
          </div>
          <div class="col-md-6">
             <img class="img-fluid" style="" src="resources/images/candelaria.png">
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Clean Up Summary</h5>
              </div>
                
                <label>Total Volunteers</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalvolunteercandelaria['totalvolunteer']);?> persons" style="text-align: center">
                <label>Estimated Distance Cleaned</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummcandelaria['totaldistance']);?>km" style="text-align: center">
                <label>Estimated Total Weight of Trashed Collected: (kg)</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalcandelaria['totalweight']);?>kg" style="text-align: center">
                <label>Estimaed Total No. of Trash Bags Filled</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummcandelaria['totaltrashbags']);?>" style="text-align: center">
                <label>Total Trash Pieces</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotaltrashpcscandelaria['totaltrashpcs']);?> pcs" style="text-align: center">
                
            </div>
            <div class="col-md-6">
                <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Trash Collected</h5>
                </div>
                <label>Plastic</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalplasticcandelaria['totalplastic']);?>" style="text-align: center">
                <label>Tiny Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummcandelaria['totaltinytrash']);?>" style="text-align: center">
                <label>Other Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummcandelaria['totalothertrash']);?>" style="text-align: center">
                <label>Glass & Metals</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummcandelaria['totalglassmetals']);?>" style="text-align: center">
                <label>Fishing Gears</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummcandelaria['totalfishinggear']);?>" style="text-align: center">
                
            </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- end of candelaria -->

<!-- start of masinloc -->
<div class="modal fade" id="masinloc"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6" style="height: 100px; text-align: center; margin-top: auto; margin-bottom: auto;">
            <font size="12" style="color:#2AACC6;">Masinloc</font>
          </div>
          <div class="col-md-6">
             <img class="img-fluid" style="" src="resources/images/masinloc.png">
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Clean Up Summary</h5>
              </div>
                <label>Total Volunteers</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalvolunteermasinloc['totalvolunteer']);?> persons" style="text-align: center">
                <label>Estimated Distance Cleaned</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummmasinloc['totaldistance']);?>km" style="text-align: center">
                <label>Estimated Total Weight of Trashed Collected: (kg)</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalmasinloc['totalweight']);?>kg" style="text-align: center">
                <label>Estimaed Total No. of Trash Bags Filled</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummmasinloc['totaltrashbags']);?>" style="text-align: center">
                <label>Total Trash Pieces</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotaltrashpcsmasinloc['totaltrashpcs']);?> pcs" style="text-align: center">
                
            </div>
            <div class="col-md-6">
                <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Trash Collected</h5>
                </div>
                <label>Plastic</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalplasticmasinloc['totalplastic']);?>" style="text-align: center">
                <label>Tiny Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummmasinloc['totaltinytrash']);?>" style="text-align: center">
                <label>Other Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummmasinloc['totalothertrash']);?>" style="text-align: center">
                <label>Glass & Metals</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummmasinloc['totalglassmetals']);?>" style="text-align: center">
                <label>Fishing Gears</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummmasinloc['totalfishinggear']);?>" style="text-align: center">
                
            </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- end of masinloc -->

<!-- start of palauig -->
<div class="modal fade" id="palauig"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6" style="height: 100px; text-align: center; margin-top: auto; margin-bottom: auto;">
            <font size="12" style="color:#2AACC6;">Palauig</font>
          </div>
          <div class="col-md-6">
             <img class="img-fluid" style="" src="resources/images/palauig.png">
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Clean Up Summary</h5>
              </div>
                <label>Total Volunteers</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalvolunteerpalauig['totalvolunteer']);?> persons" style="text-align: center">
                <label>Estimated Distance Cleaned</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummpalauig['totaldistance']);?>km" style="text-align: center">
                <label>Estimated Total Weight of Trashed Collected: (kg)</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalpalauig['totalweight']);?>kg" style="text-align: center">
                <label>Estimaed Total No. of Trash Bags Filled</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummpalauig['totaltrashbags']);?>" style="text-align: center">
                <label>Total Trash Pieces</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotaltrashpcspalauig['totaltrashpcs']);?> pcs" style="text-align: center">
                
            </div>
            <div class="col-md-6">
                <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Trash Collected</h5>
                </div>
                <label>Plastic</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalplasticpalauig['totalplastic']);?>" style="text-align: center">
                <label>Tiny Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummpalauig['totaltinytrash']);?>" style="text-align: center">
                <label>Other Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummpalauig['totalothertrash']);?>" style="text-align: center">
                <label>Glass & Metals</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummpalauig['totalglassmetals']);?>" style="text-align: center">
                <label>Fishing Gears</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummpalauig['totalfishinggear']);?>" style="text-align: center">
                
            </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- end of palauig -->

<!-- start of iba -->
<div class="modal fade" id="iba"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6" style="height: 100px; text-align: center; margin-top: auto; margin-bottom: auto;">
            <font size="12" style="color:#2AACC6;">Iba</font>
          </div>
          <div class="col-md-6">
             <img class="img-fluid" style="" src="resources/images/iba.png">
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Clean Up Summary</h5>
              </div>
                <label>Total Volunteers</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalvolunteeriba['totalvolunteer']);?> persons" style="text-align: center">
                <label>Estimated Distance Cleaned</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummiba['totaldistance']);?>km" style="text-align: center">
                <label>Estimated Total Weight of Trashed Collected: (kg)</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotaliba['totalweight']);?>kg" style="text-align: center">
                <label>Estimaed Total No. of Trash Bags Filled</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummiba['totaltrashbags']);?>" style="text-align: center">
                <label>Total Trash Pieces</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotaltrashpcsiba['totaltrashpcs']);?> pcs" style="text-align: center">
                
            </div>
            <div class="col-md-6">
                <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Trash Collected</h5>
                </div>
                <label>Plastic</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalplasticiba['totalplastic']);?>" style="text-align: center">
                <label>Tiny Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummiba['totaltinytrash']);?>" style="text-align: center">
                <label>Other Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummiba['totalothertrash']);?>" style="text-align: center">
                <label>Glass & Metals</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummiba['totalglassmetals']);?>" style="text-align: center">
                <label>Fishing Gears</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummiba['totalfishinggear']);?>" style="text-align: center">
                
            </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- end of iba -->

<!-- start of botolan -->
<div class="modal fade" id="botolan"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6" style="height: 100px; text-align: center; margin-top: auto; margin-bottom: auto;">
            <font size="12" style="color:#2AACC6;">Botolan</font>
          </div>
          <div class="col-md-6">
             <img class="img-fluid" style="" src="resources/images/botolan.png">
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Clean Up Summary</h5>
              </div>
                <label>Total Volunteers</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalvolunteerbotolan['totalvolunteer']);?> persons" style="text-align: center">
                <label>Estimated Distance Cleaned</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummbotolan['totaldistance']);?>km" style="text-align: center">
                <label>Estimated Total Weight of Trashed Collected: (kg)</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalbotolan['totalweight']);?>kg" style="text-align: center">
                <label>Estimaed Total No. of Trash Bags Filled</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummbotolan['totaltrashbags']);?>" style="text-align: center">
                <label>Total Trash Pieces</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotaltrashpcsbotolan['totaltrashpcs']);?> pcs" style="text-align: center">
                
            </div>
            <div class="col-md-6">
                <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Trash Collected</h5>
                </div>
                <label>Plastic</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalplasticbotolan['totalplastic']);?>" style="text-align: center">
                <label>Tiny Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummbotolan['totaltinytrash']);?>" style="text-align: center">
                <label>Other Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummbotolan['totalothertrash']);?>" style="text-align: center">
                <label>Glass & Metals</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummbotolan['totalglassmetals']);?>" style="text-align: center">
                <label>Fishing Gears</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummbotolan['totalfishinggear']);?>" style="text-align: center">
                
            </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end of botolan -->

<!-- start of cabangan -->
<div class="modal fade" id="cabangan"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6" style="height: 100px; text-align: center; margin-top: auto; margin-bottom: auto;">
            <font size="12" style="color:#2AACC6;">cabangan</font>
          </div>
          <div class="col-md-6">
             <img class="img-fluid" style="" src="resources/images/cabangan.png">
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Clean Up Summary</h5>
              </div>
                <label>Total Volunteers</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalvolunteercabangan['totalvolunteer']);?> persons" style="text-align: center">
                <label>Estimated Distance Cleaned</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummcabangan['totaldistance']);?>km" style="text-align: center">
                <label>Estimated Total Weight of Trashed Collected: (kg)</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalcabangan['totalweight']);?>kg" style="text-align: center">
                <label>Estimaed Total No. of Trash Bags Filled</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummcabangan['totaltrashbags']);?>" style="text-align: center">
                <label>Total Trash Pieces</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotaltrashpcscabangan['totaltrashpcs']);?> pcs" style="text-align: center">
                
            </div>
            <div class="col-md-6">
                <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Trash Collected</h5>
                </div>
                <label>Plastic</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalplasticcabangan['totalplastic']);?>" style="text-align: center">
                <label>Tiny Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummcabangan['totaltinytrash']);?>" style="text-align: center">
                <label>Other Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummcabangan['totalothertrash']);?>" style="text-align: center">
                <label>Glass & Metals</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummcabangan['totalglassmetals']);?>" style="text-align: center">
                <label>Fishing Gears</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummcabangan['totalfishinggear']);?>" style="text-align: center">
                
            </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end of cabangan -->


<!-- start of san felipe -->
<div class="modal fade" id="sanfelipe"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6" style="height: 100px; text-align: center; margin-top: auto; margin-bottom: auto;">
            <font size="12" style="color:#2AACC6;">San Felipe</font>
          </div>
          <div class="col-md-6">
             <img class="img-fluid" style="" src="resources/images/sanfelipe.png">
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Clean Up Summary</h5>
              </div>
                <label>Total Volunteers</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalvolunteersanfelipe['totalvolunteer']);?> persons" style="text-align: center">
                <label>Estimated Distance Cleaned</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsanfelipe['totaldistance']);?>km" style="text-align: center">
                <label>Estimated Total Weight of Trashed Collected: (kg)</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsanfelipe['totalweight']);?>kg" style="text-align: center">
                <label>Estimaed Total No. of Trash Bags Filled</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsanfelipe['totaltrashbags']);?>" style="text-align: center">
                <label>Total Trash Pieces</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotaltrashpcssanfelipe['totaltrashpcs']);?> pcs" style="text-align: center">
                
            </div>
            <div class="col-md-6">
                <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Trash Collected</h5>
                </div>
                <label>Plastic</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalplasticsanfelipe['totalplastic']);?>" style="text-align: center">
                <label>Tiny Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsanfelipe['totaltinytrash']);?>" style="text-align: center">
                <label>Other Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsanfelipe['totalothertrash']);?>" style="text-align: center">
                <label>Glass & Metals</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsanfelipe['totalglassmetals']);?>" style="text-align: center">
                <label>Fishing Gears</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsanfelipe['totalfishinggear']);?>" style="text-align: center">
                
            </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end of san felipe -->

<!-- start of san narciso -->
<div class="modal fade" id="sannarciso"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6" style="height: 100px; text-align: center; margin-top: auto; margin-bottom: auto;">
            <font size="12" style="color:#2AACC6;">San Narciso</font>
          </div>
          <div class="col-md-6">
             <img class="img-fluid" style="" src="resources/images/sannarciso.png">
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Clean Up Summary</h5>
              </div>
                <label>Total Volunteers</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalvolunteersannarciso['totalvolunteer']);?> persons" style="text-align: center">
                <label>Estimated Distance Cleaned</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsannarciso['totaldistance']);?>km" style="text-align: center">
                <label>Estimated Total Weight of Trashed Collected: (kg)</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsannarciso['totalweight']);?>kg" style="text-align: center">
                <label>Estimaed Total No. of Trash Bags Filled</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsannarciso['totaltrashbags']);?>" style="text-align: center">
                <label>Total Trash Pieces</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotaltrashpcssannarciso['totaltrashpcs']);?> pcs" style="text-align: center">
                
            </div>
            <div class="col-md-6">
                <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Trash Collected</h5>
                </div>
                <label>Plastic</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalplasticsannarciso['totalplastic']);?>" style="text-align: center">
                <label>Tiny Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsannarciso['totaltinytrash']);?>" style="text-align: center">
                <label>Other Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsannarciso['totalothertrash']);?>" style="text-align: center">
                <label>Glass & Metals</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsannarciso['totalglassmetals']);?>" style="text-align: center">
                <label>Fishing Gears</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsannarciso['totalfishinggear']);?>" style="text-align: center">
                
            </div>
        </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end of san narciso -->

<!-- start of san antonio -->
<div class="modal fade" id="sanantonio"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6" style="height: 100px; text-align: center; margin-top: auto; margin-bottom: auto;">
            <font size="12" style="color:#2AACC6;">San Antonio</font>
          </div>
          <div class="col-md-6">
             <img class="img-fluid" style="" src="resources/images/sanantonio.png">
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Clean Up Summary</h5>
              </div>
                <label>Total Volunteers</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalvolunteersanantonio['totalvolunteer']);?> persons" style="text-align: center">
                <label>Estimated Distance Cleaned</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsanantonio['totaldistance']);?>km" style="text-align: center">
                <label>Estimated Total Weight of Trashed Collected: (kg)</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsanantonio['totalweight']);?>kg" style="text-align: center">
                <label>Estimaed Total No. of Trash Bags Filled</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsanantonio['totaltrashbags']);?>" style="text-align: center">
                <label>Total Trash Pieces</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotaltrashpcssanantonio['totaltrashpcs']);?> pcs" style="text-align: center">
            </div>
            <div class="col-md-6">
                <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Trash Collected</h5>
                </div>
                <label>Plastic</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalplasticsanantonio['totalplastic']);?>" style="text-align: center">
                <label>Tiny Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsanantonio['totaltinytrash']);?>" style="text-align: center">
                <label>Other Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsanantonio['totalothertrash']);?>" style="text-align: center">
                <label>Glass & Metals</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsanantonio['totalglassmetals']);?>" style="text-align: center">
                <label>Fishing Gears</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsanantonio['totalfishinggear']);?>" style="text-align: center">
                
            </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- end of san antonio -->

<!-- start of san marcelino -->
<div class="modal fade" id="sanmarcelino"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6" style="height: 100px; text-align: center; margin-top: auto; margin-bottom: auto;">
            <font size="12" style="color:#2AACC6;">San Marcelino</font>
          </div>
          <div class="col-md-6">
             <img class="img-fluid" style="" src="resources/images/sanmarcelino.png">
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Clean Up Summary</h5>
              </div>
                <label>Total Volunteers</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalvolunteersanmarcelino['totalvolunteer']);?> persons" style="text-align: center">
                <label>Estimated Distance Cleaned</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsanmarcelino['totaldistance']);?>km" style="text-align: center">
                <label>Estimated Total Weight of Trashed Collected: (kg)</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsanmarcelino['totalweight']);?>kg" style="text-align: center">
                <label>Estimaed Total No. of Trash Bags Filled</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsanmarcelino['totaltrashbags']);?>" style="text-align: center">
                <label>Total Trash Pieces</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotaltrashpcssanmarcelino['totaltrashpcs']);?> pcs" style="text-align: center">
                
            </div>
            <div class="col-md-6">
                <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Trash Collected</h5>
                </div>
                <label>Plastic</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalplasticsanmarcelino['totalplastic']);?>" style="text-align: center">
                <label>Tiny Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsanmarcelino['totaltinytrash']);?>" style="text-align: center">
                <label>Other Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsanmarcelino['totalothertrash']);?>" style="text-align: center">
                <label>Glass & Metals</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsanmarcelino['totalglassmetals']);?>" style="text-align: center">
                <label>Fishing Gears</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsanmarcelino['totalfishinggear']);?>" style="text-align: center">
                
            </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- end of san maracelino -->

<!-- start of castillejos -->
<div class="modal fade" id="castillejos"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6" style="height: 100px; text-align: center; margin-top: auto; margin-bottom: auto;">
            <font size="12" style="color:#2AACC6;">Castillejos</font>
          </div>
          <div class="col-md-6">
             <img class="img-fluid" style="" src="resources/images/castillejos.png">
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Clean Up Summary</h5>
              </div>
                <label>Total Volunteers</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalvolunteercastillejos['totalvolunteer']);?> persons" style="text-align: center">
                <label>Estimated Distance Cleaned</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummcastillejos['totaldistance']);?>km" style="text-align: center">
                <label>Estimated Total Weight of Trashed Collected: (kg)</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalcastillejos['totalweight']);?>kg" style="text-align: center">
                <label>Estimaed Total No. of Trash Bags Filled</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummcastillejos['totaltrashbags']);?>" style="text-align: center">
                <label>Total Trash Pieces</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotaltrashpcscastillejos['totaltrashpcs']);?> pcs" style="text-align: center">
                
            </div>
            <div class="col-md-6">
                <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Trash Collected</h5>
                </div>
                <label>Plastic</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalplasticcastillejos['totalplastic']);?>" style="text-align: center">
                <label>Tiny Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummcastillejos['totaltinytrash']);?>" style="text-align: center">
                <label>Other Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummcastillejos['totalothertrash']);?>" style="text-align: center">
                <label>Glass & Metals</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummcastillejos['totalglassmetals']);?>" style="text-align: center">
                <label>Fishing Gears</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummcastillejos['totalfishinggear']);?>" style="text-align: center">
                
            </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- end of castillejos -->

<!-- start of subic -->
<div class="modal fade" id="subic"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6" style="height: 100px; text-align: center; margin-top: auto; margin-bottom: auto;">
            <font size="12" style="color:#2AACC6;">Subic</font>
          </div>
          <div class="col-md-6">
             <img class="img-fluid" style="" src="resources/images/subic.png">
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Clean Up Summary</h5>
              </div>
                <label>Total Volunteers</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalvolunteersubic['totalvolunteer']);?> persons" style="text-align: center">
                <label>Estimated Distance Cleaned</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsubic['totaldistance']);?>km" style="text-align: center">
                <label>Estimated Total Weight of Trashed Collected: (kg)</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsubic['totalweight']);?>kg" style="text-align: center">
                <label>Estimaed Total No. of Trash Bags Filled</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsubic['totaltrashbags']);?>" style="text-align: center">
                <label>Total Trash Pieces</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotaltrashpcssubic['totaltrashpcs']);?> pcs" style="text-align: center">
                
            </div>
            <div class="col-md-6">
                <div class="container-fluid" style="background-color: #2AACC6; color:white; text-align: center;">
                <h5>Trash Collected</h5>
                </div>
                <label>Plastic</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalplasticsubic['totalplastic']);?>" style="text-align: center">
                <label>Tiny Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsubic['totaltinytrash']);?>" style="text-align: center">
                <label>Other Trash</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsubic['totalothertrash']);?>" style="text-align: center">
                <label>Glass & Metals</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsubic['totalglassmetals']);?>" style="text-align: center">
                <label>Fishing Gears</label>
                <input type="text" class="form-control" value="<?php echo number_format($rowtotalsummsubic['totalfishinggear']);?>" style="text-align: center">
                
            </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- end of subic -->