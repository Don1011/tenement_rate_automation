<?php
    include("assets/inc/conn.php");
    if(isset($_GET["vicinity_id"]))
    {
        $vid = $_GET["vicinity_id"];
        $sql_fetch = "SELECT * FROM sub_vicinities WHERE vicinity_id = '".$vid."'";
        $query_fetch = mysqli_query($conn, $sql_fetch);
        while($fetch = mysqli_fetch_assoc($query_fetch)){

            ?>            
            <option value="<?php echo $fetch["id"]?>"><?php echo $fetch["name"]?></option>
            <?php
        }
    }
    
?>