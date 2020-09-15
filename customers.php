<html>
    <head>  
        <meta charset="UTF-8">
        <title></title>
        <!--include importing page to js and css -->
        <?php include './pages/import.html'; ?>
    </head>
    <body id="main_body">
        <div class="navigation">
            <a href="main.php"> <img src="images/logo3.png" class="logo" /></a>
            <!-- include menu page for display options in navigation bar -->
            <?php include './pages/menu.html'; ?>
        </div>
        <!--customer list -->
        <div >
            <p class="customerztopic"> Customer Details</p>
            <form method="GET" action="customers.php" class="customers">
                <?php include'./services/customers/displaycustomers.php' ?>
            </form>                    
            <button onclick="showcustomeradding()" class="btnNewcustomer">Add new Customer</button>
        </div>
        <div id="myModal" >
            <div id="save_newcustomer">
                <img src="images/close-x (1).png"  onClick="cancelcustomeradding()" class="closeicon2" />
                <form method="POST" action="services/customers/save_customers.php" class="save_customer">
                    <p class="topicSavecustomer"> Enter customer details</p>
                    <table class='tbl-customerform'>
                        <tr>
                            <td>Name:</td>
                            <td><input type="text" name="name" /></td><br/>
                        </tr>
                        <tr>
                            <td>Age:</td>
                            <td> <input type="number" name="age"  /></td><br/>
                        </tr>
                        <tr>
                            <td>NIC:</td>
                            <td> <input type="text" name="nic" /><br/></td>
                        </tr>
                        <tr>
                            <td>Contact:</td>
                            <td> <input type="number" name="contact"  /></td><br/>
                        </tr>
                        <tr>
                            <td><p id="nic-descriiptor" ></p></td>
                        </tr>
                    </table>
                    <button  class="save-customer" name="save">Save</button>
                </form>
            </div></div>
    </body>
</html>

