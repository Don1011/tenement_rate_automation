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
                    <h3 class = "text-center">Add New Vicinity</h3>
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <?php
                                if(isset($_GET['name'])):
                                    if(!empty($_GET['name'])):
                                        $name = $_GET['name'];
                                        $sql_check = "SELECT * FROM vicinities WHERE name = '$name'";
                                        $query_check = mysqli_query($conn, $sql_check);
                                        if(mysqli_num_rows($query_check)):

                                            ?>
                                                <div class = "grey_border home_button_containers">
                                                    <p>
                                                        The Vicinty Has Already Been Added Previously. <a href="add_sub_vicinity.php">Click Here To Add A Sub-Vicinity Under This Vicinity</a>
                                                    </p>
                                                </div>
                                            <?php
                                            
                                        else:
                                            $sql_add = "INSERT INTO vicinities(name) VALUES('$name')";
                                            $query_add = mysqli_query($conn, $sql_add);
                            ?>
                                        <div class = "grey_border home_button_containers">
                                            <p>
                                                The Vicinty Has Been Successfully Added. <a href="add_sub_vicinity.php">Click Here To Add A Sub-Vicinity Under This Vicinity</a>
                                            </p>
                                        </div>
                            <?php
                                        endif;
                                    else:
                                        echo "<script lang = 'javascript' >Enter A Name Bofore Submitting</script>";
                                    endif;
                                endif;
                            ?>
                            <form action="add_vicinity.php" method = "GET" class = "text-center">
                                <div class="form-group">
                                    <label for="" class="label">Vicinity Name</label>
                                    <input required name = "name" id = "name" type="text" class="form-control" placeholder="Enter the Name Of Vicinity">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary py-3 px-4" role = "submit" type = "submit">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> 

<?php include("./assets/inc/footer.php");?>
