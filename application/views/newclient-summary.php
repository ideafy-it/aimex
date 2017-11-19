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
                      <li class="active"><a href="transactiontype.html"><span class="glyphicon glyphicon-envelope"></span>  APPLY</a></li>
                      <li class="dropdown"><a href="#"><span class="glyphicon glyphicon-cog"></span>  MANAGE</a>
                        <div class="dropdown-content">
                              <a href="#">COLLECT</a>
                              <a href="#">SEARCH</a>
                        </div>
                      </li>
                      <li><a href="transactionsummary.html"><span class="glyphicon glyphicon-edit"></span>  REPORT</a></li>
                      <li><a href="timelog.html"><span class="glyphicon glyphicon-calendar"></span>  TIME LOG</a></li>
                     </ul>
           </div>

        <div id ="loandetails-info">
        <strong><h4><span class="glyphicon glyphicon-tags"></span>  
        TRANSACTION SUMMARY</h4></strong>
        </div>
            
        <div class="clientinfo">
           <div id="clientinfo-left">
                 <strong><h4>TRANSACTION DETAILS</h4></strong>
                  <div class="form-group">
                        <p>
                            CLIENT NAME: JUAN DELA CRUZ<br>
                            LOAN TYPE: SSS<br>
                            LOAN AMOUNT: 60,000<br>
                            PAYMENT SCHEDULE: MONTHLY<br>

                        </p>
                    </div>
                </div>

                <div id="clientinfo-right">
                    <div class="form-group">
                        PENSION TERMS (IN MONTHS): 12<br>
                        RELEASE DATE: 03/17/2017<br>
                        EFFECTIVE DATE: 03/17/2017<br>
                        REFERENCE CHEQUE: 81238174                    
                    </div>
                </div>    
        </div>

         <div id="show_loan_breakdown">    
                <strong><h4>LOANS BREAKDOWN</h4></strong>
                <div id="loan_breakdown">
                    <div id="textbox">
                      <p class="alignleft"><strong>LOANS RECEIVABLE</strong></p>
                      <p class="alignright">60000</p>
                   </div>
                  <br>

                 <table id="loan_breakdown_table">
                    <tr>
                      <th>INTEREST RATE (IN) %)</th>
                      <th>UNEARNED INTEREST</th>
                      <th>SERVICE CHARGE</th>
                      <th>NOTARIAL FEE</th>
                      <th>SUBTOTAL</th>
                    </tr>

                    <tr>
                      <td>2.5</td>
                      <td>14400</td>
                      <td>250</td>
                      <td>250</td>
                      <td>14900</td>
                    </tr>
                  </table>
               </div>

              <br>
               <div id="loan_breakdown">
                    <div id="textbox">
                      <p class="alignleft"><strong>CASHOUT</strong></p>
                      <p class="alignright">45100</p>
                </div>
              </div>

              <br>
              <div id="loan_breakdown">
                    <div id="textbox">
                      <p class="alignleft"><strong>SUKLI</strong></p>
                      <p class="alignright">5000</p>
                   </div>
                <br>

            </div>
          </div>

        <div id="show_payment_schedule">  
           <div id="payment_schedule"> 
            <strong><h4>PAYMENT SCHEDULE</h4></strong>
           <br>
           <table id="payment_table">
                    <tr>
                      <th>PAYMENT DATE</th>
                      <th>REMAINING MONTHS</th>
                      <th>AMOUNT</th>
                      <th>BALANCE</th>
                    </tr>

                    <tr>
                      <td>04/17/2017</td>
                      <td>11</td>
                      <td>2000</td>
                      <td>18000</td>
                    </tr>

                    <tr>
                      <td>05/17/2017</td>
                      <td>10</td>
                      <td>2000</td>
                      <td>16000</td>
                    </tr>

                    <tr>
                      <td>06/17/2017</td>
                      <td>9</td>
                      <td>2000</td>
                      <td>14000</td>
                    </tr>

                    <tr>
                      <td>07/17/2017</td>
                      <td>8</td>
                      <td>2000</td>
                      <td>12000</td>
                    </tr>

                    <tr>
                      <td>08/17/2017</td>
                      <td>7</td>
                      <td>2000</td>
                      <td>10000</td>
                    </tr>

                    <tr>
                      <td>09/17/2017</td>
                      <td>6</td>
                      <td>2000</td>
                      <td>8000</td>
                    </tr>
                 </table>
            </div>
           </div>

        <div id="newclientapp_submit">
         <button type="button" class="btn btn-secondary" id="transact-submit" type="submit">GENERATE PDF</button>
         <button type="button" class="btn btn-primary" id="transact-submit" type="submit">SUBMIT TRANSACTION</button>
        </div>

    <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>

</html>