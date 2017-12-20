<!-- Top content -->
<div class="top-content">
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">                
        <a class="navbar-brand" href="#">AIMEX SOFTWARE</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url()?>">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url()?>register">REGISTER</a>
                    </li>
                </ul>
            </div>
        </nav>
</div>
<div class="inner-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text">
                <h1 id="h1-login-form"><strong>AIMEX</strong> LOGIN FORM</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 form-box">
            	<div class="form-top">
            		<div class="form-top-left">
                        <h3>LOGIN TO OUR SYSTEM</h3>
            			<p>ENTER YOUR USERNAME AND PASSWORD TO LOG ON:</p>
            		</div>
            		<div class="form-top-right">
            			<i class="fa fa-lock"></i>
            		</div>
                </div>
                <div class="form-bottom">
                    <form role="form" action="<?=base_url();?>login_validation" method="post" class="login-form" data-parsley-validate>
                        <div class="form-group">
           	            	<label class="sr-only" for="form-username">Username</label>
                           	<input type="text" name="form-username" placeholder="USERNAME" class="form-username form-control" id="form-username" parsley-data-required>
                        </div>
                        <div class="form-group">
                   	        <label class="sr-only" for="form-password">Password</label>
                   	        <input type="password" name="form-password" placeholder="PASSWORD" class="form-password form-control" id="form-password" parsley-data-required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="sign-in" href="transactiontype.html">SIGN IN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>