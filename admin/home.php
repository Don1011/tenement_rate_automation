<?php 
    include("./assets/inc/header.php");
    include("./assets/inc/conn.php");

?>
<div style = "background-image: url(./assets/img/engine.jpg); height: 650px; background-size: cover">
    <div style="height: 650px; background-color: rgba(0, 0, 0, 0.4);" >
        <nav class = "navbar navbar-expand-md navbar-dark">
            <a href="home.php" class = "navbar-brand">KADGIS Land Owner Registration</a>
            <button type="button" class = "navbar-toggler" data-toggle="collapse" data-target = "#navbarCollapse">
                <span class = "navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id = "navbarCollapse">
                <div class="navbar-nav">
                    <a href="home.php" class="nav-item nav-link">Home</a>
                    <a href="add_vicinity.php" class="nav-item nav-link">Add Vicinity</a>
                    <a href="add_sub_vicinity.php" class="nav-item nav-link">Add Sub-Vicinity</a>
                    <a href="all_rates.php" class="nav-item nav-link">View All Vicinities</a>
                    <a href="logout.php" class="nav-item nav-link">Logout</a>
                </div>
            </div>
        </nav>
        <div class = "contianer">
            <div class="row justify-content-center">
                <div class = "col-10 grey_border text-left"> 
                    <h3 class = "text-center">List Of All Registered Customers</h3>
                    <?php 
                        $sql_users = "SELECT * FROM registered_users";
                        $query_users = mysqli_query($conn, $sql_users);
                        while($fetch_users = mysqli_fetch_assoc($query_users)):
                    ?>
                    <div class="row grey_border">
                        <div class="col-2">
                            <?php echo $fetch_users['full_name']?>
                        </div>
                        <div class="col-2">
                            <?php echo $fetch_users['email']?>
                        </div>
                        <div class="col-2">
                            <?php echo $fetch_users['phone_number']?>
                        </div>
                        <div class="col-2">
                            <?php echo $fetch_users['land_size']. "(in meter square)"?>
                        </div>
                        <div class="col-2">
                            <?php 
                                $v = $fetch_users['vicinity'];
                                $sv = $fetch_users['sub_vicinity'];
                                $sql_v = "SELECT * FROM vicinities WHERE id = '$v'";
                                $query_v = mysqli_query($conn, $sql_v);
                                $fetch_v = mysqli_fetch_assoc($query_v);

                                $sql_sv = "SELECT * FROM sub_vicinities WHERE id = '$sv'";
                                $query_sv = mysqli_query($conn, $sql_sv);
                                $fetch_sv = mysqli_fetch_assoc($query_sv);

                                echo $fetch_v['name']."(".$fetch_sv['name'].")";
                            ?>
                        </div>
                        <div class="col-2">
                            <?php echo strtoupper($fetch_users['use_of_land'])?>
                        </div>
                    </div>
                    <?php
                        endwhile;
                    ?>

                </div>
            </div>
        </div>
    </div>
</div> 

<?php include("./assets/inc/footer.php");?>
