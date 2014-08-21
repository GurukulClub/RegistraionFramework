<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>

	            <!-- declaration links to twitter bootstrap -->
				
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrapValidator.css"/>
    <link rel="stylesheet" href="css/font-awesome.css" /> 
   

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrapValidator.js"></script>  
    
	
            <!-- input data information inside the registration form: -->
                    
                    <div class="page-header">
                        <h2>Registration Form</h2>
                    </div>
                    <div style="clear: both;padding-bottom: 20px;">
                       </div>
							
					 <form id="defaultForm" method="post" class="form-horizontal" action="">
                        <div class="form-group">
                            <label class="col-lg-1 control-label">Name</label>
                           <div class="col-lg-3">
                           <input type="text" class="form-control" name="Name" id="Name" />
                            </div>
                        </div>		
					
					
					 <form id="defaultForm" method="post" class="form-horizontal" action="">
                        <div class="form-group">
                            <label class="col-lg-1 control-label">User Name</label>
                           <div class="col-lg-3">
                           <input type="text" class="form-control" name="User Name" id="User Name" />
                            </div>
                        </div>	
						
						
						 <form id="defaultForm" method="post" class="form-horizontal" action="">
                        <div class="form-group">
                            <label class="col-lg-1 control-label">Email</label>
                           <div class="col-lg-3">
                           <input type="text" class="form-control" name="Email" id="Email" />
                            </div>
                        </div>	
						
						 <form id="defaultForm" method="post" class="form-horizontal" action="">
                        <div class="form-group">
                            <label class="col-lg-1 control-label">Password</label>
                           <div class="col-lg-3">
                           <input type="Password" class="form-control" name="Password" id="Password" />
                            </div>
                        </div>	
						
						 <form id="defaultForm" method="post" class="form-horizontal" action="">
                        <div class="form-group">
                            <label class="col-lg-1 control-label">Confirm Password</label>
                           <div class="col-lg-3">
                           <input type="Password" class="form-control" name="ConfirmPassword" id="ConfirmPassword" />
                            </div>
                        </div>

                        <div class="form-group">
                          
                                <button type="submit" class="btn btn-primary" id="submitform" name="submitform" >submit</button>
                                <button type="button" class="btn btn-info" id="resetBtn">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
        
        </div>
    </div>
	
	
     <!-- jquery validation using bootstrap -->
	   
    <script type="text/javascript" >
	 $(document).ready(function() {
    $('#defaultForm').bootstrapValidator({
        //live: 'disabled',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstName: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    },
                    stringLength: {
                        max: 50,
                        message: 'Name must be less than 50 characters long'
                    }
                }
            },
            UserName: {
                validators: {
                    notEmpty: {
                        message: 'User Name is required and cannot be empty'
                    },
                    stringLength: {
                        max: 50,
                        message: 'User Name must be less than 50 characters long'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Email is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            
           
            
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    },
                    stringLength: {
                        min: 8,
                        max: 20,
                        message: 'The password must be more than 8 and less than 20 characters long'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and cannot be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                
                }
            },
            
         
        }
    });
     
	  $('#submitform').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
	 
	 
    $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });
});
</script>
</head>   
</html>
