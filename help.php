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
        <div >
            <p class="helptopic"> Help</p>
            <p class="helpsubtopic"> Details about how to manage the system</p>
        </div>
        <div class="helpdetail"></div>
        <table class="tbl_help">
            <tr>
                <th>Dashboard</th>
                <th>Daily Treatments</th>
                <th>Appointments</th>
                <th>Sellings</th>
            </tr>      
            <tr>
                <td>In the dashboard, the user can choose any option in the dashboard. 
                    Such as Daily treatment, Appointments, sellings, staff member, Customer.</td>
                <td>In this module, the user can store their daily doing treatments details. 
                    They can monitor them and they can delete any detail if they want.</td>
                <td>In this module, the user can store appointment details of customers. 
                    They can monitor them, update any detail and they can delete any appointment if they want.</td>
                <td>In this module, the user can store their daily selling records. 
                    They can monitor them and they can delete any detail if they want.</td>
            </tr>
            <tr>
                <th></th>
                <th>Staff member</th>
                <th>Customers</th>
                <th></th>
            </tr>
            <tr>
                <td></td>
                <td>In this module, the user can store staff member details. 
                    They can monitor them and they can delete any detail if they want.</td>
                <td>In this module, the user can store Customer details. 
                    They can monitor them and they can delete any detail if they want.</td>
                <td></td>
            </tr>
        </table>
    </body>
</html>
