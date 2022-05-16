<?php

$connect = mysqli_connect('localhost', 'root', '', 'ajax');

if(isset($_POST['continent_id'])){
    $continent_id = $_POST['contiennt_id'];
    $sql = mysqli_query($connect, "SELECT * FROM country WHERE continent_id='$country_id' ORDER BY country_name");
    ?>

    <select name="country">
        <option value="">Select Country</option>
        <?php
        while ($row = mysqli_fetch_array($sql)){
            ?>
            <option value="<?php echo $row['id'];?>">
                <?php echo $row['country_name'];?>
            </option>
            <?php
        }
        ?>
    </select>
    <?php
}

?>