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
                <div class="col-md-8">
                    <div class = "booking_form text-left"> 
                        
                        <?php 
                            $sql_vic = "SELECT * FROM vicinities";
                            $query_vic = mysqli_query($conn, $sql_vic);
                            while($fetch_vic = mysqli_fetch_assoc($query_vic)):
                        ?>
                        <div class="card margin_5">
                            <div class="card-body">
                                <h6 class="card-title"><?php echo $fetch_vic['name']?></h6>
                                <div class="bootstrap-modal">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $fetch_vic['id']?>">See sub-vicinities with their prices and rates</button>
                                    <div class="modal fade bd-example-modal-lg" id = "modal<?php echo $fetch_vic['id']?>" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Sub-vicinities In <?php echo $fetch_vic['name']?></h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-3"><b>Location</b></div>
                                                            <div class="col-3"><b>Land Use</b></div>
                                                            <div class="col-3"><b>Rate</b></div>
                                                            <div class="col-3"><b>Price</b></div>
                                                        </div>
                                                        <?php 
                                                            $sql_sub_vic = "SELECT * FROM sub_vicinities WHERE vicinity_id = '".$fetch_vic['id']."'";
                                                            $query_sub_vic = mysqli_query($conn, $sql_sub_vic);
                                                            while($fetch_sub_vic = mysqli_fetch_assoc($query_sub_vic)):
                                                        ?>
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <?php echo $fetch_sub_vic['name']?>
                                                                </div>
                                                                <div class="col-3">
                                                                    <!-- Land uses -->
                                                                    <p>Residential</p>
                                                                    <p>Commercial</p>
                                                                    <p>Industrial</p>
                                                                    <p>Education And Health</p>
                                                                    <p>Institutional</p>
                                                                    <p>Filling Station</p>
                                                                    <p>Agricultural</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <!-- rates -->
                                                                    <p><?php echo $fetch_sub_vic['residential_use_rate']?></p>
                                                                    <p><?php echo $fetch_sub_vic['commercial_use_rate']?></p>
                                                                    <p><?php echo $fetch_sub_vic['industrial_use_rate']?></p>
                                                                    <p><?php echo $fetch_sub_vic['edu_health_use_rate']?></p>
                                                                    <p><?php echo $fetch_sub_vic['institutional_use_rate']?></p>
                                                                    <p><?php echo $fetch_sub_vic['filling_station_rate']?>(FIXED)</p>
                                                                    <p><?php echo $fetch_sub_vic['agricultural_use_rate']?></p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <!-- prices -->
                                                                    <p><?php echo $fetch_sub_vic['residential_use_price']?></p>
                                                                    <p><?php echo $fetch_sub_vic['commercial_use_price']?></p>
                                                                    <p><?php echo $fetch_sub_vic['industrial_use_price']?></p>
                                                                    <p><?php echo $fetch_sub_vic['edu_health_use_price']?></p>
                                                                    <p><?php echo $fetch_sub_vic['institutional_use_price']?></p>
                                                                    <p><?php echo $fetch_sub_vic['filling_station_price']?>(FIXED)</p>
                                                                    <p><?php echo $fetch_sub_vic['agricultural_use_price']?></p>
                                                                </div>
                                                            </div>
                                                        <?php
                                                            endwhile;
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
</div> 

<?php include("./assets/inc/footer.php");?>
