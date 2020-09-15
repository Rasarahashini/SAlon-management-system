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

        <!--Selling records -->
        <div >
            <p class="sellingstopic"> Selling records</p>
            <form method="GET" action="sellingrecords.php" class="soldlist">
                <?php include'./services/sellings/displaysellings.php' ?>
            </form> 
        </div>
        <!--Save Selling records -->
        <div id="save_newselling">
            <form method="POST" action="services/sellings/savesellings.php" class="save_sellings">
                <p class="topicSaveselling"> Enter selling details</p>
                <table class='tbl-sellingform'>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" /></td><br/>
                    </tr>
                    <tr>
                        <td>Quantity:</td>
                        <td> <input type="number" name="quantity"  /></td><br/>
                    </tr>
                    <tr>
                        <td>Price:</td>
                        <td> <input type="text" name="price" /><br/></td>
                    </tr>
                    <tr>
                        <td>Staff member:</td>
                        <td><?php include'./services/sellings/staffmember.php' ?> </td><br/>
                    </tr>
                </table>
                <button  class="save-selling" name="save">Save</button>
            </form>
        </div>
    </body>
</html>

