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
                    <h3 class = "text-center">Add Sub-Vicinity</h3>
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <?php
                                if(isset($_GET['name']) && isset($_GET['vicinity_id']) && isset($_GET['size_m2']) && isset($_GET['residential_use_rate']) && isset($_GET['residential_use_price']) && isset($_GET['commercial_use_rate']) && isset($_GET['commercial_use_price']) && isset($_GET['industrial_use_rate']) && isset($_GET['industrial_use_price']) && isset($_GET['edu_health_use_rate']) && isset($_GET['edu_health_use_price']) && isset($_GET['institutional_use_rate']) && isset($_GET['institutional_use_price']) && isset($_GET['filling_station_rate']) && isset($_GET['filling_station_price']) && isset($_GET['agricultural_use_rate']) && isset($_GET['agricultural_use_price'])):
                                    if(!empty($_GET['name']) && !empty($_GET['vicinity_id']) && !empty($_GET['size_m2']) && !empty($_GET['residential_use_rate']) && !empty($_GET['residential_use_price']) && !empty($_GET['commercial_use_rate']) && !empty($_GET['commercial_use_price']) && !empty($_GET['industrial_use_rate']) && !empty($_GET['industrial_use_price']) && !empty($_GET['edu_health_use_rate']) && !empty($_GET['edu_health_use_price']) && !empty($_GET['institutional_use_rate']) && !empty($_GET['institutional_use_price']) && !empty($_GET['filling_station_rate']) && !empty($_GET['filling_station_price']) && !empty($_GET['agricultural_use_rate']) && !empty($_GET['agricultural_use_price'])):

                                        
                                        $name = $_GET['name'];
                                        $vicinity_id = $_GET['vicinity_id'];
                                        $size_m2 = $_GET['size_m2'];
                                        $residential_use_rate = $_GET['residential_use_rate'];
                                        $residential_use_price = $_GET['residential_use_price'];
                                        $commercial_use_rate = $_GET['commercial_use_rate'];
                                        $commercial_use_price = $_GET['commercial_use_price'];
                                        $industrial_use_rate = $_GET['industrial_use_rate'];
                                        $industrial_use_price = $_GET['industrial_use_price'];
                                        $edu_health_use_rate = $_GET['edu_health_use_rate'];
                                        $edu_health_use_price = $_GET['edu_health_use_price'];
                                        $institutional_use_rate = $_GET['institutional_use_rate'];
                                        $institutional_use_price = $_GET['institutional_use_price'];
                                        $filling_station_rate = $_GET['filling_station_rate'];
                                        $filling_station_price = $_GET['filling_station_price'];
                                        $agricultural_use_rate = $_GET['agricultural_use_rate'];
                                        $agricultural_use_price = $_GET['agricultural_use_price'];

                                        $sql_check = "SELECT * FROM sub_vicinities WHERE name = '$name'";
                                        $query_check = mysqli_query($conn, $sql_check);
                                        if(mysqli_num_rows($query_check)):

                                            ?>
                                                <div class = "grey_border home_button_containers">
                                                    <p>
                                                        The Sub-vicinty Has Already Been Added Previously. 
                                                    </p>
                                                </div>
                                            <?php
                                            
                                        else:
                                            $sql_add = "INSERT INTO sub_vicinities(`name`, `vicinity_id`, `size_m2`, `residential_use_rate`, `residential_use_price`, `commercial_use_rate`, `commercial_use_price`, `industrial_use_rate`, `industrial_use_price`, `edu_health_use_rate`, `edu_health_use_price`, `institutional_use_rate`, `institutional_use_price`, `filling_station_rate`, `filling_station_price`, `agricultural_use_rate`, `agricultural_use_price`) VALUES('$name', '$vicinity_id', '$size_m2', '$residential_use_rate', '$residential_use_price', '$commercial_use_rate', '$commercial_use_price', '$industrial_use_rate', '$industrial_use_price', '$edu_health_use_rate', '$edu_health_use_price', '$institutional_use_rate', '$institutional_use_price', '$filling_station_rate', '$filling_station_price', '$agricultural_use_rate', '$agricultural_use_price')";
                                            $query_add = mysqli_query($conn, $sql_add);
                            ?>
                                        <div class = "grey_border home_button_containers">
                                            <p>
                                                The Sub-vicinty Has Been Successfully Added.
                                            </p>
                                        </div>
                            <?php
                                        endif;
                                    else:
                                        echo "<script lang = 'javascript'>alert(Complete Filling The Form Before Submitting)</script>";
                                    endif;
                                endif;
                            ?>
                            <form action="add_sub_vicinity.php" method = "GET" class = "text-center">
                                <div class="form-group">
                                    <label for="" class="label">Sub-vicinity Name</label>
                                    <input required name = "name" id = "name" type="text" class="form-control" placeholder="Enter the Name Of Sub-vicinity">
                                </div>

                                <div class="form-group">
                                    <label for="" class="label">Vicinity</label>
                                    <select required class="form-control" name = "vicinity_id"> 
                                        <option value="">-Select Vicinity-</option>
                                        <?php
                                            $sql_cases = "SELECT * FROM vicinities ORDER BY name ASC";
                                            $query_cases = mysqli_query($conn, $sql_cases);
                                            while($fetch_cases = mysqli_fetch_assoc($query_cases)):
                                        ?>
                                        <option value="<?php echo $fetch_cases['id']?>"><?php echo $fetch_cases['name']?></option>
                                        <?php
                                            endwhile;
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="" class="label">Land Size (In meter square)</label>
                                    <input required name = "size_m2" type="number" class="form-control" placeholder="Size Of Land">
                                </div>

                                <div class="row margin_15">
                                    <label for="" class="col-12 label">Residential Use Rate And Price</label>
                                    <div class="col-6">
                                        <input required name = "residential_use_rate" type="text" class="form-control" placeholder="Rate">
                                    </div>
                                    <div class="col-6">
                                        <input required name = "residential_use_price" type="text" class="form-control" placeholder="Price">
                                    </div>
                                </div>

                                <div class="row margin_15">
                                    <label for="" class="col-12 label">Commercial Use Rate And Price</label>
                                    <div class="col-6">
                                        <input required name = "commercial_use_rate" type="text" class="form-control" placeholder="Rate">
                                    </div>
                                    <div class="col-6">
                                        <input required name = "commercial_use_price" type="text" class="form-control" placeholder="Price">
                                    </div>
                                </div>

                                <div class="row margin_15">
                                    <label for="" class="col-12 label">Industrial Use Rate And Price</label>
                                    <div class="col-6">
                                        <input required name = "industrial_use_rate" type="text" class="form-control" placeholder="Rate">
                                    </div>
                                    <div class="col-6">
                                        <input required name = "industrial_use_price" type="text" class="form-control" placeholder="Price">
                                    </div>
                                </div>

                                <div class="row margin_15">
                                    <label for="" class="col-12 label">Education And Health Use Rate And Price</label>
                                    <div class="col-6">
                                        <input required name = "edu_health_use_rate" type="text" class="form-control" placeholder="Rate">
                                    </div>
                                    <div class="col-6">
                                        <input required name = "edu_health_use_price" type="text" class="form-control" placeholder="Price">
                                    </div>
                                </div>

                                <div class="row margin_15">
                                    <label for="" class="col-12 label">Institutional Use Rate And Price</label>
                                    <div class="col-6">
                                        <input required name = "institutional_use_rate" type="text" class="form-control" placeholder="Rate">
                                    </div>
                                    <div class="col-6">
                                        <input required name = "institutional_use_price" type="text" class="form-control" placeholder="Price">
                                    </div>
                                </div>

                                <div class="row margin_15">
                                    <label for="" class="col-12 label">Filling Station Rate And Price</label>
                                    <div class="col-6">
                                        <input required name = "filling_station_rate" type="text" class="form-control" placeholder="Rate">
                                    </div>
                                    <div class="col-6">
                                        <input required name = "filling_station_price" type="text" class="form-control" placeholder="Price">
                                    </div>
                                </div>

                                <div class="row margin_15">
                                    <label for="" class="col-12 label">Agricultural Use Rate And Price</label>
                                    <div class="col-6">
                                        <input required name = "agricultural_use_rate" type="text" class="form-control" placeholder="Rate">
                                    </div>
                                    <div class="col-6">
                                        <input required name = "agricultural_use_price" type="text" class="form-control" placeholder="Price">
                                    </div>
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
