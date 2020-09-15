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



        <!--staff list -->

        <div >
            <p class="stafftopic"> Staff member Details</p>
            <form method="GET" action="staffmembers.php" class="staffmembers">
                <?php include './services/staffmembers/searchstaffbyId.php'; ?>
                <div class="search-staff">
                    <input type="text" name="searchName" placeholder="Type your first name...."/>
                    <input type="submit" value="Search" />
                </div>
                <br/>
                <br/>
                <?php include'./services/staffmembers/displaystaff.php' ?>
            </form>                    
            <button onclick="showmemberadding()" class="btnNewstaff">Add new Member</button>

        </div>
 <div id="myModal" >
        <div id="save_newMember">
            <img src="images/close-x (1).png"  onClick="cancelmemberadding()" class="closeicon1" />
            <form method="POST" action="services/staffmembers/savestaff.php" class="save_member">
                <p class="topicSaveMember"> Enter member details</p>
                <table class='tbl-memberform'>
                    <tr>
                        <td>First Name:</td>
                        <td><input type="text" name="fname" /></td><br/>
                    <td>Last Name:</td>
                    <td><input type="text" name="lname" /></td><br/>
                    </tr>
                    <tr>
                        <td>Age:</td>
                        <td> <input type="number" name="age"  /></td><br/>
                    <td>CV:</td>
                    <td><input type="file" name="cv" ></textarea></td>   
                    </tr>

                    <tr>
                        <td>Contact:</td>
                        <td> <input type="number" name="contact"  /></td><br/>
                    <td>Living Address:</td>
                    <td><input type="text" name="address"  ></textarea></td> 
                    </tr>
                    <tr>

                        <td>NIC:</td>
                        <td> <input type="text" id="nic" name="nic" onkeyup="checkNIC()"/><br/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><p id="nic-descriiptor" ></p></td>
                    </tr>


                </table>
                <br/>
                <br/>
                <button  class="save-staff" name="save">Save</button>
            </form>
        </div>
        </div>
    </body>
</html>
