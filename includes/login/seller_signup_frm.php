<div class="modal fade bs-example-modal-lg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="seller_signup" method="post" action="./includes/login/seller_signup.php">
                    <div class="form-group">
                        <label class="control-label col-sm-2    " for="seller_signup_uname">User Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder=    "Unique User Name" id="seller_signup_uname" name="seller_user_name">
                        </div>
                        <div class="col-sm-4 messages"></div>
                    </div>  
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="seller_signup_email">Email</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" placeholder="Your email" id="seller_signup_email" name="seller_email">
                        </div>
                        <div class="col-sm-4 messages"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="seller_signup_first_name">First Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="First Name" id="seller_signup_first_name" name="seller_first_name">
                        </div>
                        <div class="col-sm-4 messages"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="seller_signup_last_name">Last Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Last Name" id="seller_signup_last_name" name="seller_last_name">
                        </div>
                        <div class="col-sm-4 messages"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="seller_signup_street">Street</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Street Address" id="seller_signup_street" name="seller_street">
                        </div>
                        <div class="col-sm-4 messages"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="seller_signup_city">City</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="City" id="seller_signup_city" name="seller_city">
                        </div>
                        <div class="col-sm-4 messages"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="seller_signup_state">State</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="State" id="seller_signup_state" name="seller_state">
                        </div>
                        <div class="col-sm-4 messages"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="seller_signup_zip">Zip</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Zip Code" id="seller_signup_zip" name="seller_zip_code">
                        </div>
                        <div class="col-sm-4 messages"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="seller_signup_country">Country</label>
                        <div class="col-sm-6">
                            <select class="selectpicker form-control" name="seller_country">
                                <option value="Afghanistan" title="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands" title="Åland Islands">Åland Islands</option>
                                <option value="Albania" title="Albania">Albania</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="seller_signup_pw">Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="seller_signup_pw" name="seller_password">
                        </div>
                        <div class="col-sm-4 messages"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="seller_signup_con_pw">Confirm Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="seller_signup_con_pw" name="seller_confirm_password">
                        </div>
                        <div class="col-sm-4 messages"></div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>