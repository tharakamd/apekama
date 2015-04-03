<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" id="buyer_signup">
                            <div class="form-group">
                                <label class="control-label col-sm-2    " for="buyer_signup_uname">User Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder=    "Unique User Name" id="buyer_signup_uname" name="user_name">
                                </div>
                                <div class="col-sm-4 messages"></div>
                            </div>  
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="buyer_signup_email">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" placeholder="Your email" id="buyer_signup_email" name="email">
                                </div>
                                <div class="col-sm-4 messages"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="buyer_signup_first_name">First Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="First Name" id="buyer_signup_first_name" name="first_name">
                                </div>
                                <div class="col-sm-4 messages"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="buyer_signup_last_name">Last Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Last Name" id="buyer_signup_last_name" name="last_name">
                                </div>
                                <div class="col-sm-4 messages"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="buyer_signup_street">Street</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Street Address" id="buyer_signup_street" name="street">
                                </div>
                                <div class="col-sm-4 messages"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="buyer_signup_city">City</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="City" id="buyer_signup_city" name="city">
                                </div>
                                <div class="col-sm-4 messages"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="buyer_signup_state">State</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="State" id="buyer_signup_state" name="state">
                                </div>
                                <div class="col-sm-4 messages"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="buyer_signup_country">Country</label>
                                <div class="col-sm-6">
                                    <?php require './includes/login/country_list.php'; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="buyer_signup_pw">Password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="buyer_signup_pw" name="password">
                                </div>
                                <div class="col-sm-4 messages"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="buyer_signup_con_pw">Confirm Password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="buyer_signup_con_pw" name="confirm_password">
                                </div>
                                <div class="col-sm-4 messages"></div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                    </form> 
                </div>
            </div>
        </div>