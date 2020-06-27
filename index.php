<?php 
    include("./assets/inc/header.php");
    include("./assets/inc/conn.php");

?>
<div style = "background-image: url(./assets/img/engine.jpg); height: 650px; background-size: cover">
    <div style="height: 650px; background-color: rgba(0, 0, 0, 0.4);" >
        <nav class = "navbar navbar-expand-md navbar-dark">
            <a href="index.php" class = "navbar-brand">KADGIS Land Owner Registration</a>
            <button type="button" class = "navbar-toggler" data-toggle="collapse" data-target = "#navbarCollapse">
                <span class = "navbar-toggler-icon"></span>
            </button>
        </nav>

        <div class = "container" id = "firstPage">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        if(isset($_GET['registered'])):
                    ?>
                            <div class = "grey_border home_button_containers">
                                <p>
                                    Your Land Ownership Registeration Has Been Completed. Please Come To Our Office To Collect Your Certificate Of Ownership.
                                </p>
                            </div>
                    <?php
                        endif;
                    ?>

                    <div class = "home_button_containers">
                        <a href = "all_rates.php" class = "custom_index_button">View Our Charge Rates</a>
                    </div>
                
                    <div class = "home_button_containers">
                        <button class = "custom_index_button" onclick = "showRegisterPage()">Register as a land owner</button>
                    </div>
                </div>
            </div>
        </div>
        <div class = "contianer display_none" id = "registerPage">
            <div class="row">
                <form class = "booking_form text-center" action = "pay.php" method = "GET"> 
                    <h2>Land Ownership Registration Form</h2></h2>
                    <!-- <p>Please fill the form below so we can contact you.</p> -->
                    <div class="form-group">
                        <label for="" class="label">Full Name</label>
                        <input required name = "full_name" id = "fullName" type="text" class="form-control" placeholder="First name, middle name and surname.">
                    </div>
                    <div class="form-group">
                        <label for="" class="label">Email</label>
                        <input required name = "email" id = "email" type="email" class="form-control" placeholder="Please input active email address">
                    </div>
                    <div class="form-group">
                        <label for="" class="label">Phone Number</label>
                        <input required name = "phone_number" id = "phoneNumber" type="text" class="form-control" placeholder="Please input active mobile number">
                    </div>
                    <div class="form-group">
                        <label for="" class="label">Land Size (meter square)</label>
                        <input required name = "land_size" id = "landSize" type="text" class="form-control" placeholder="Enter the size of your land in meter square">
                    </div>
                    <div class="form-group">
                        <label for="" class="label">Vicinity</label>
                        <select required class="form-control" name = "vicinity" id = "caseId"> 
                            <option value="">-Select Vicinity where your land is situated-</option>
                            <?php
                                $sql_cases = "SELECT * FROM vicinities ORDER BY name ASC";
                                $query_cases = mysqli_query($conn, $sql_cases);
                                while($fetch_cases = mysqli_fetch_assoc($query_cases)):
                            ?>
                            <option onclick = "fetch_sub_vicinities(<?php echo $fetch_cases['id']?>)" value="<?php echo $fetch_cases['id']?>"><?php echo $fetch_cases['name']?></option>
                            <?php
                                endwhile;
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="label">Sub-Vicinity</label>
                        <select required class="form-control" name = "sub_vicinity" id = "subVicinityId"> 
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="label">Purpose Of Purchase Of The Land</label>
                        <select required class="form-control" name = "purpose" id = "caseId"> 
                            <option value="">-Select Option-</option>
                            <option value="residential">Residential Use</option>
                            <option value="commercial">Commercial Use</option>
                            <option value="industrial">Industrial Use</option>
                            <option value="edu_health">Education And Health Use</option>
                            <option value="institutional">Institutional Use</option>
                            <option value="agricultural">Agricultural Use</option>
                            <option value="filling_station">Filling Station</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-primary py-3 px-4" role = "submit" type = "submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
<!-- <div class="container">
    <div class="row">
        <div class="col-md-3">

        </div>
    </div>
</div> -->
<?php include("./assets/inc/footer.php");?>
