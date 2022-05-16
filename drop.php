<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajax dropdown</title>

    <script type="text/javascript">
        $(document).ready(function(){
            // Retrieve Continents
            $(".continent").change(function(){
                var continent_id = $(this).val();
                $.ajax({
                    url:"country_region.php",
                    method:"POST",
                    data:{continent_id:continent_id},
                    success:function(data){
                        $(".country").html(data);
                    }
                });
            });

            // Retrieve Countries
            $(".country").change(function(){
                var s_continent_id = $(".continent").val();
                var country_id = $(this).val();
                $.ajax({
                    url:"country_region.php",
                    method:"POST",
                    data:{s_continent_id:s_continent_id,country_id:country_id},
                    success:function(data){
                        $(".region").html(data);
                    }
                });
            });
        });
    </script>
</head>
<body>
    <!-- <form action=""> -->

        <label for="">Continent</label> <br>
        <select name="continent" id="continent">
            <option selected>Select country</option>
            <?php
                $sql = mysqli_query($connect, 'SELECT * FROM continent ORDER BY country_name');
                while ($row = mysqli_fetch_array($sql)){
                    ?>
                    <option value="<?php echo $row['id']; ?>">
                    <?php echo $row['continent_name']; ?>
                    </option>
                    <?php
                }
            ?>
        </select>
        <br>

        <label for="">Country</label> <br>
        <select name="country" id="country">
            <option selected>Select Country</option>
        </select>
        <br>

        <label for="">Region</label> <br>
        <select name="region" id="region">
            <option selected>Select Region</option>
        </select>
        
    <!-- </form> -->
</body>
</html>