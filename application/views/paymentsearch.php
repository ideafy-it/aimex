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
        <strong><h4><span class="glyphicon glyphicon-briefcase"></span>  
        PAYMENT COLLECTION</h4></strong>
              
        <div class="search-transaction">
            <p>
              FILTER BY:<select name="payment_terms">
                                        <option value="firstname">CLIENT NUMBER</option>
                                        <option value="firstname">FIRST NAME</option>
                                        <option value="lastname">LAST NAME</option>
                                        <option value="accountnumber">ACCOUNT NUMBER</option>
                                        <option value="loantype">TYPE OF LOAN</option>
                                        <option value="kindofloan">SCHEDULED PAYMENT</option>
                                        <option value="firstname">STATUS</option>
                                </select>
              SEARCH  <input type="text" name="search_item" id="search_item">
              <button type="submit" class="search-transaction-submit1">GO</button>
            </p>
        </div>

            <div id="client-transactions">
              <table id="client-transactions-table">
                <tr>
                  <th>CLIENT NUMBER <span class="glyphicon glyphicon-sort"></span></th>
                  <th>FIRST NAME <span class="glyphicon glyphicon-sort"></span></th>
                  <th>LAST NAME <span class="glyphicon glyphicon-sort"></span></th>
                  <th>ACCOUNT NUMBER <span class="glyphicon glyphicon-sort"></span></th>
                  <th>TYPE OF LOAN <span class="glyphicon glyphicon-sort"></span></th>
                  <th>SCHEDULED PAYMENT <span class="glyphicon glyphicon-sort"></span></th>
                  <th>STATUS <span class="glyphicon glyphicon-sort"></th>
                  <th>SELECT</th>
                </tr>
                <tr>
                  <td>001-1234</td>
                  <td>JUAN</td>
                  <td>SANTOS</td>
                  <td>8153445</td>
                  <td>SALARY</td>
                  <td>09/10/2017</td>
                  <td>ACTIVE</td>
                  <td><button id="select" type="submit">SELECT</button></td>
                </tr>

                <tr>
                  <td>021-1234</td>
                  <td>MARIA</td>
                  <td>GUEVARRA</td>
                  <td>9876245</td>
                  <td>SSS</td>
                  <td>12/04/2017</td>
                  <td>CLOSED</td>
                  <td><button id="select" type="submit">SELECT</button></td>
                </tr>

                <tr>
                  <td>914-1234</td>
                  <td>JUANA</td>
                  <td>VERGARA</td>
                  <td>2371235</td>
                  <td>BONUS</td>
                  <td>09/09/2017</td>
                  <td>ACTIVE</td>
                  <td><button id="select" type="submit">SELECT</button></td>
                </tr>
         
                <tr>
                  <td>914-1234</td>
                  <td>PAOLO</td>
                  <td>RIVERA</td>
                  <td>191824</td>
                  <td>PVAO</td>
                  <td>11/01/2017</td>
                  <td>ACTIVE</td>
                  <td><button id="select" type="submit">SELECT</button></td>
                </tr>

              </table>
            </div>

            <div id="transaction-pagination">
             <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
              </nav>
            </div>


    <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>

</html>