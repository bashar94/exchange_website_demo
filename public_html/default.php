<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div style="background-color:#E7EDF4" class="panel-body">
				
				<div class="pull-right">
					<strong>Sort by:</strong>	
					<select>
					  <option>Date</option>
					  <option>Value</option>
					  
					</select>
				</div>
				

								
			</div>
		</div>
	</div>
	
	<div class="col-xs-3 col-sm-3 col-md-3 col-md-offset-1">
		<div class="panel panel-default">
			<div style="height: 500px; background-color:#E7EDF4" class="panel-body">
				<strong>Catagories</strong>
				<hr class="hr-notifi" />
				
				<ul class="list-group">
				  <li class="list-group-item"><a href="#">Electronics</a> <span class="badge">12</span></li>
				  <li class="list-group-item"><a href="#">Education</a>  <span class="badge">5</span></li> 

				</ul>
				
				<br />
				
				<strong>Location</strong>
				<hr class="hr-notifi" />
				
				<ul class="list-group">
				  <li class="list-group-item"><a href="#">Dhaka</a> <span class="badge">12</span></li>
				  <li class="list-group-item"><a href="#">Chittagong</a>  <span class="badge">5</span></li> 

				</ul>

								
			</div>
		</div>
	</div>
	
	<div class="col-xs-9 col-sm-9 col-md-7">
		<div class="panel panel-default">
			<div style="background-color:#E7EDF4" class="panel-body">
				
			<?php if(isset($_GET['id'])){ ?>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="feature_image">
							<img src="http://cdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s7--.jpg"/>
						</div>
						<hr />
						<label>Galaxy s7</label>
						<hr />
						<label>Catagory: </label>
						<span>Electronics</span>
						<hr />
						<label>Additional Money:</label>
						<span>0TK</span>
						<hr />
						<label>Description:</label>
						<p>This is a description of Galaxy s7</p>
						<hr />
						<label>More Images</label>
					</div>
					
					
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="feature_image">
							<img src="http://cdn2.knowyourmobile.com/sites/knowyourmobilecom/files/styles/gallery_wide/public/2017/03/screen_shot_2017-03-29_at_17.35.22.png?itok=pyLKIbf3" />
						</div>
						
						<hr />
						<label>Galaxy s7</label>
						<hr />
						<label>Catagory: </label>
						<span>Electronics</span>
						<hr />
						<label>Additional Money:</label>
						<span>0TK</span>
						<hr />
						<label>Description:</label>
						<p>This is a description of Galaxy s7</p>
						<hr />
						<label>More Images</label>
					</div>
				</div>
				<br />
				
				<div class="panel panel-default">
					<div style="background-color:#FFFFFF" class="panel-body">
						<div class="text-center"><label>Posted By</label></div>
						<hr />
						<p><a href="?page=bashar" class="about-page">Bashar Bhuiyan</a>
						<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#phoneModal"><i class="fa fa-phone fa-fw" aria-hidden="true"></i></button>
						<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#messageModal"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></button>
						</p>
					</div>
				</div>	
				
				<div id="phoneModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">
				
				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Phone Number</h4>
				      </div>
				      <div class="modal-body">	
				      	<label>01781486421</label>
				      </div>
				     
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
				      </div>
				    </div>
				   </div>
				  </div>
				  
				  <div id="messageModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">
					
					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">Message</h4>
					      </div>
					      <div class="modal-body">	
			      	
							<label>To: Someone</label>
							<div class="form-group">
						        <textarea class="form-control" rows="3"  placeholder="Write a text."></textarea>
							</div>
							<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane fa-fw" aria-hidden="true"></i> Send</button>
					
					      </div>
					     
					      <div class="modal-footer">
					        <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
					      </div>
					      
					    </div>
					   </div>
					</div>
				
				<?php }else{?>
				
				<div style="height: 150px; background-color:#ffffff" class="panel-body">
					<div class="row">
						
						<div class="col-xs-3 col-sm-3 col-md-3 feature_image">
							<img src="http://cdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s7--.jpg"/>
						</div>
						
						<div class="col-xs-6 col-sm-6 col-md-6 text-center">
							<a class="about-page" href="#"><p><strong>Samsung Galaxy S7</strong></p>
							<i class="fa fa-exchange fa-rotate-90 fa-fw" aria-hidden="true"></i>
							
							<p><strong>Samsung Galaxy S8</strong></p></a>
							
							<p><small>Dhaka</small></p>
						</div>
						
						<div class="col-xs-3 col-sm-3 col-md-3 feature_image">
							<img src="https://cnet2.cbsistatic.com/img/LibAeUYyHxrRgOzRZZkWGKvIm8I=/770x433/2017/03/28/986492e6-7611-44e7-9cc7-30d90563a7e0/flsamsunggalaxys8.jpg" />
						</div>
						
					</div>
				</div>
				<hr class="hr-notifi" />
				
				
				<?php } ?>

								
			</div>
		</div>
	</div>
	
	
</div>
