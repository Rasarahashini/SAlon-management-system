<html>
    <head>  
        <meta charset="UTF-8">
        <title></title>
        <!--include importing page to js and css -->
        <?php include './pages/import.html'; ?>
    </head>
    <body id="main_body" onload="<?php echo isset($_GET["searchId"]) ? 'showappointmentadding()' : ''; ?>">
        <div class="navigation">
            <a href="main.php"> <img src="images/logo3.png" class="logo" /></a>
            <!-- include menu page for display options in navigation bar -->
            <?php include './pages/menu.html'; ?>
        </div>

        <!--appointment list -->
        <div >
            <p class="appointmenttopic"> Appointment Details</p>
            <form method="GET" action="appointments.php" class="displayappointments">
                <?php include'./services/appointments/displayappointments.php' ?>
            </form>                    
            <button onclick="showappointmentadding()" class="btnNewappointment">Add new Appointment</button>
        </div>
        <!--Save appointment -->
        <div id="myModal" >
            <div id="save_newappointment">
                <img src="images/close-x (1).png"  onClick="cancelappointmentadding()" class="closeicon2" />
                <form method="POST" action="services/appointments/save_appointments.php" class="save_appointments">
                    <?php include './services/appointments/appointmentbyid.php'; ?>
                    <p class="topicSaveappointents"> Enter appointment details</p>
                    <table class='tbl-appointmentform'>
                        <tr>
                            <td>Appointment Name:</td>
                            <td><input type="text" name="description"  required="true" value="<?php echo $description; ?>"/></td><br/>
                        </tr>   
                        <tr>
                            <td>Customer Name:</td>
                            <td><?php include'./services/appointments/customer.php' ?> </td><br/>
                        </tr>
                        <tr>
                            <td>Staff member:</td>
                            <td><?php include'./services/appointments/staffmember.php' ?> </td><br/>
                        </tr>
                        <tr>
                            <td>Date:</td>
                            <td> <input type="date" name="date"   required="true" value="<?php echo $date; ?>"/></td><br/>
                        </tr>
                        <tr>
                            <td>Time:</td>
                            <td> <input type="text" name="time"  required="true" value="<?php echo $time; ?>" /></td><br/>
                        </tr>
                    </table>
                    <button  class="save-appointment" name="save">Save</button>
                    <button  class="update-appointment" name="update">update</button>
                </form>
            </div>
        </div>
    </body>
</html>
