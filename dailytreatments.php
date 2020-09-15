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

        <!--Treatment list -->
        <div >
            <p class="treatmenttopic"> Dalily treatment Details</p>
            <form method="GET" action="dailytreatments.php" class="dailytreatments">
                <?php include'./services/dailytreatments/displaytreatments.php' ?>
            </form>                    
            <button onclick="showtreatmentadding()" class="btnNewtreatment">Add new treatment</button>
        </div>

        <div id="myModal" >
            <div id="save_newtreatment">
                <img src="images/close-x (1).png"  onClick="canceltreatmentadding()" class="closeicon3" />
                <form method="POST" action="services/dailytreatments/savedailytreatments.php" class="save_treatment">
                    <p class="topicSavetreatment"> Enter treatment details</p>
                    <table class='tbl-treatmentform'>
                        <tr>
                            <td>Treatment type:</td>
                            <td><?php include'./services/dailytreatments/type.php' ?> </td><br/>
                        <td>Description:</td>
                        <td><input type="text" name="description" /></td><br/>
                        </tr>
                        <tr>
                            <td>Staff member:</td>
                            <td><?php include'./services/dailytreatments/staffmember.php' ?> </td><br/>
                        <td>Customer:</td>
                        <td><?php include'./services/dailytreatments/customer.php' ?> </td><br/>
                        </tr>
                        <tr>
                            <td>Date:</td>
                            <td> <input type="date" name="date"  ></td><br/>
                        <td>Price:</td>
                        <td><input type="text" name="price" ></textarea></td>   
                        </tr>
                    </table>

                    <button  class="save-treatment" name="save">Save</button>
                </form>
            </div>
        </div>
    </body>
</html>


