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
        <div class = "contianer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <?php
                        if(isset($_GET["full_name"]) && isset($_GET["email"]) && isset($_GET["phone_number"]) && isset($_GET["land_size"]) && isset($_GET["vicinity"]) && isset($_GET["sub_vicinity"]) && isset($_GET["purpose"])){
                            
                            $full_name = $_GET["full_name"];
                            $email = $_GET["email"];
                            $phone_number = $_GET["phone_number"];
                            $land_size = $_GET["land_size"];
                            $vicinity = $_GET["vicinity"];
                            $sub_vicinity = $_GET["sub_vicinity"];
                            $purpose = $_GET["purpose"];
                        }else{
                            header("location: index.php");
                        }

                        if(isset($_GET["final_full_name"]) && isset($_GET["final_email"]) && isset($_GET["final_phone_number"]) && isset($_GET["final_land_size"]) && isset($_GET["final_vicinity"]) && isset($_GET["final_sub_vicinity"]) && isset($_GET["final_purpose"])){
                            
                            $full_name = $_GET["final_full_name"];
                            $email = $_GET["final_email"];
                            $phone_number = $_GET["final_phone_number"];
                            $land_size = $_GET["final_land_size"];
                            $vicinity = $_GET["final_vicinity"];
                            $sub_vicinity = $_GET["final_sub_vicinity"];
                            $purpose = $_GET["final_purpose"];

                            //full_name 	email 	phone_number 	land_size 	vicinity 	sub_vicinity 	use_of_land 
                            $sql_final = "INSERT INTO registered_users (full_name, email, phone_number, land_size, vicinity, sub_vicinity, use_of_land) VALUES('$full_name', '$email', '$phone_number', '$land_size', '$vicinity', '$sub_vicinity', '$purpose')";
                            $query_final = mysqli_query($conn, $sql_final);
                            header("location: index.php?registered=1");
                        }
                    ?>
                    <form class = "booking_form text-center" action = "pay.php" method = "GET"> 
                        <h2>Pay For The Land Ownership Cetificate.</h2>
                        <!-- <p>Please fill the form below so we can contact you.</p> -->
                        <div class="form-group display_none">
                            <label for="" class="label">Full Name</label>
                            <input name = "final_full_name" type="text" value = "<?php echo $full_name?>">
                            <!-- Holds value for full name -->
                        </div>
                        <div class="form-group display_none">
                            <label for="" class="label">Email</label>
                            <input name = "final_email" type="email" value = "<?php echo $email?>">
                            <!-- Holds value for email -->
                        </div>
                        <div class="form-group display_none">
                            <label for="" class="label">Phone Number</label>
                            <input name = "final_phone_number" type="text" value = "<?php echo $phone_number?>">
                            <!-- Holds value for phone number -->
                        </div>
                        <div class="form-group display_none">
                            <label for="" class="label">Land Size (meter square)</label>
                            <input name = "final_land_size" type="text" value = "<?php echo $land_size?>">
                            <!-- Holds value for land size -->
                        </div>
                        <div class="form-group display_none">
                            <label for="" class="label">Vicinity</label>
                            <input name = "final_vicinity" type="text" value = "<?php echo $vicinity?>">
                            <!-- Holds the value for the vicinity id -->
                        </div>
                        <div class="form-group display_none">
                            <label for="" class="label">Sub-Vicinity</label>
                            <input name = "final_sub_vicinity" type="text" value = "<?php echo $sub_vicinity?>">
                            <!-- Holds the value for the sub-vicinity id -->
                        </div>
                        <div class="form-group display_none">
                            <label for="" class="label">Purpose Of Purchase Of The Land</label>
                            <input name = "final_purpose" type="text"  value = "<?php echo $purpose?>">
                            <!-- Holds the value for the purpose of land purchase -->
                        </div>
                        
                        <!-- =====================Input fields for the payment form==================== -->
                        <hr>
                        <div class="form-group">
                            <input name = "number" class="form-control" placeholder="Please input ATM Card Digits">
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input name = "number" class="form-control" placeholder="Expiry Date">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input name = "number" class="form-control" placeholder="CVV">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary py-3 px-4" role = "submit" type = "submit">Pay</button>
                        </div>
                    </form>
                </div>
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
