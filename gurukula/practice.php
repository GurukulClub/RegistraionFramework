<!DOCTYPE html>
<html>
<head>

    <title>Registration Form</title>
	
	<link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrapValidator.css"/>
    <link rel="stylesheet" href="css/font-awesome.css" />
    
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrapValidator.js"></script>
	
</head>
	<body>
    <body style="background-color:AliceBlue ;">
        	<div class="row">
                 <h1> <div class="col-md-6 col-md-offset-3"> Xervmon Registration </center></h1>
              </div>
			</div>

              <ul class="nav nav-tabs" role="tablist">
                  <li class="active"><a href="#home" role="tab" data-toggle="tab">Home</a></li>
                  <li><a href="#profile" role="tab" data-toggle="tab">Profile</a></li>
                  <li><a href="#messages" role="tab" data-toggle="tab">Messages</a></li>
                  
             </ul>

             <div class="tab-content">
                      <div class="tab-pane active" id="home"> 
                                <div style="clear: both;padding-bottom: 20px;"> </div>
						        <form id="defaultForm" method="post" class="form-horizontal" action="">
                                         <div class="form-group">
                                              <label class="col-lg-1 control-label">First Name</label>
                                                   <div class="col-lg-3">
                                                         <input type="text" class="form-control" name="firstName" id="firstName"/>
                                                   </div>   
									   	 </div>	
					                   
                              		   <div class="form-group">
                                              <label class="col-lg-1 control-label">Last Name</label>
                                                  <div class="col-lg-3">
                                                         <input type="text" class="form-control" name="lastName" id="lastName" />
                                                  </div>
                                       </div>	
					
					                  <div class="form-group">
                                              <label class="col-lg-1 control-label">User Name</label>
                                                   <div class="col-lg-3">
                                                      <input type="text" class="form-control" name="username" id="username" />
                                                    </div>
                                      </div>	
						
					                  <div class="form-group">
                                               <label class="col-lg-1 control-label">Email</label>
                                                    <div class="col-lg-3">
                                                           <input type="text" class="form-control" name="email" id="email" />
                                                    </div>
                                      </div>	
						
					                  <div class="form-group">
                                                 <label class="col-lg-1 control-label">Password</label>
                                                        <div class="col-lg-3">
                                                             <input type="Password" class="form-control" name="password" id="password" />
                                                       </div>
                                      </div>	
						
					                 <div class="form-group">
                                              <label class="col-lg-1 control-label">Confirm Password</label>
                                                 <div class="col-lg-3">
                                                   <input type="Password" class="form-control" name="confirmPassword" id="confirmPassword" />
                                                 </div>
                                    </div>

                                     <div class="form-group">
                          
                                           <button type="submit" class="btn btn-primary" id="submitForm" name="submitForm" >submit</button>
                                            <button type="button" class="btn btn-info" id="resetBtn">Reset</button>
                                    </div>
                                </form>
                        </div>
	
	                    <div class="tab-pane" id="profile"> </br>
                                <div class="row">
                                     <div class="form-group">
                                             <label class="col-lg-1 control-label">FullName</label>
                                                 <div class="col-lg-3">
                                                     <input type="Password" class="form-control" name="password" id="password" />
                                                 </div>
			                         </div></br></br></br>
 
                                     <div class="form-group">
                                             <label class="col-lg-1 control-label">Education</label> 
                                                  <div class="dropdown">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                                             <span class="caret"></span>
                                                        </button>
                                                       <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">B.E</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">B.Tech</a></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">B.Com</a></li>
                                                            <li role="presentation" class="divider"></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Others</a></li>
                                                       </ul>
                                                  </div>
			                         </div></br></br>

			                         <div class="form-group">
                                             <label class="col-lg-1 control-label">Sex</label>
                                             <label class="radio-inline">
                                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Male
                                             </label>
                                             <label class="radio-inline">
                                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Female
                                             </label>
						             </div></br></br>

			                         <div class="form-group">
                                             <label class="col-lg-1 control-label">FileUpload</label>
                                             <input type="file" id="exampleInputFile">
	                                         <p>File must be .txt,.doc,.pdf form </p>
						 		     </div> </br> </br>
    						  
                                     <div class="form-group">
                                             <label class="col-lg-1 control-label">Address</label>
	                                         <textarea class="form-control" rows="3"></textarea>
	                                 </div> </br> </br>

									 <!-- Indicates a successful or positive action -->
                                     <button type="button" class="btn btn-success">Save</button>

                                     <!-- Indicates caution should be taken with this action -->  
                                     <button type="button" class="btn btn-warning">Reset</button>
                                     </br> </br> </br>
                    
                                </div>  </br>

                        </div>
 
                        <div class="tab-pane" id="messages">
                              <ul class="nav nav-tabs" role="tablist">
                                  <li class="active"><a href="#home" role="tab" data-toggle="tab">Inbox</a></li>
                                  <li><a href="#profile" role="tab" data-toggle="tab">Sent</a></li>
                                  <li><a href="#messages" role="tab" data-toggle="tab">Draft</a></li>
  
                             </ul>
                             <!-- Tab panes -->
							 <div class="tab-content">
                                  <div class="tab-pane active" id="Inbox"> 
                                      <table class="table table-bordered">
                                            <tr class="active"></tr>
											<tr class="success">...</tr>
                                            <tr class="warning">...</tr>

                                            <!-- On cells (`td` or `th`) -->
                                            <tr>
                                                  <td class="active">Primary</td>
                                                  <td class="success">Social</td>
                                                  <td class="warning">Promotions</td>
                                           </tr>
                                     </table>  
                                  </div> 
                             </div>
                             <div class="tab-content">
                                     <div class="tab-pane active" id="Sent"> ..</div> 
                            </div>
                            <div class="tab-content">
                                     <div class="tab-pane" id="draft">...</div>
                            </div>
                        </div>	
				</div>
        </body>
</html>




