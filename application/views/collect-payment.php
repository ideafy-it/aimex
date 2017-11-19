<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aimex Software</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>
    <body>
            
         <div class="top-nav">
                 <nav class="navbar navbar-toggleable-md navbar-light bg-faded">               
                         <a class="navbar-brand" href="#">AIMEX SOFTWARE</a>
                          <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                              <li class="nav-item">
                                <a class="nav-link" href="#">JUAN DELACRUZ <span class="glyphicon glyphicon-user"></a>
                              </li>
                              <li class="nav-item">
                                 <ul class = "dropdown-menu">
                                   <li><a href = "#">PROFILE</a></li>
                                   <li><a href = "#">LOGOUT</a></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </nav>
            </div>

            <div id="manage-navbar">
                    <ul class="nav nav-tabs">
                      <li><a href="transactiontype.html"><span class="glyphicon glyphicon-envelope"></span>  APPLY</a></li>
                      <li class="dropdown active"><a href="#"><span class="glyphicon glyphicon-cog"></span>  MANAGE</a>
                        <div class="dropdown-content">
                              <a href="collect-payment.html">COLLECT</a>
                              <a href="#">SEARCH</a>
                        </div>
                      </li>
                      <li><a href="transactionsummary.html"><span class="glyphicon glyphicon-edit"></span>  REPORT</a></li>
                      <li><a href="timelog.html"><span class="glyphicon glyphicon-calendar"></span>  TIME LOG</a></li>
                     </ul>
           </div>

        <div id ="loandetails-info">
        <strong><h4><span class="glyphicon glyphicon-tags"></span>  
        PAYMENT COLLECTION</h4></strong>
        </div>
            
        <div class="clientinfo">
           <div id="clientinfo-left">
                 <strong><h4>CLIENT INFORMATION</h4></strong>
                  <div class="form-group">
                        <p>
                            CLIENT NAME: JUAN DELA CRUZ<br>
                            ACCOUNT NUMBER: 91812-41841<br>
                            LOAN TYPE: SALARY

                        </p>
                    </div>
                </div>

                <div id="clientinfo-right">
                    <div class="form-group">
                        SCHEDULED PAYMENT: 02/01/2017<br>
                        REMAINING MONTHS: 4<br>
                        REMAINING BALANCE: 23000                      
                    </div>
                </div>    
         </form>
        </div>

          <div id="add-payment">
          <strong><h4>INPUT PAYMENT DETAILS</h4></strong>
            <div id="loandetails_left">
              DATE OF PAYMENT: <input type="date" name="payment_schedule" id="payment_schedule"><br>
              MODE OF PAYMENT: <select name="payment_terms">
                                        <option value="CASH">CASH</option>
                                        <option value="CHECK">CHECK</option>
                                </select><br> 
              CHECK NO.: <input type="text" name="check_no" id="check_no"><br>
              O.R. NUMBER: <input type="text" name="or_no" id="or_no"><br>
              AMOUNT PAID: <input type="text" name="amount_paid" id="amount_paid"><br>
            </div>
         

          <div id="loandetails_mid">
            <strong><i>IF PAYMENT IS MADE THROUGH A REPRESENTATIVE, PLEASE FILL UP THE FOLLOWING FIELDS:</i></strong><br>
            REPRESENTATIVE NAME: <input type="text" name="representative_name" id="representative_name"><br>
            RELATIONSHIP TO THE BORROWER: <input type="text" name="borrower_relation" id="borrower_relation"><br>
            CONTACT NUMBER: <input type="text" name="representative_contact" id="representative_contact"><br>
            </div>
           </div>

        <div id="newclientapp_submit">
          <button type="button" class="btn btn-primary" id="transact-submit" type="submit">SUBMIT PAYMENT</button>
        </div>

    <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>

</html>