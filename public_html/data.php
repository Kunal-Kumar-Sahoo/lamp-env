<?php require('config.php') ?>

<div class="container"
    <?php 
        include("project-title.php");
    ?>
    <h4 class="display-4 border-bottom py-2">Current Sensor Data
    </h4>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Soil Moisture</th>
                <th scope="col">Time</th>
                <th scope="col">Date</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sr=1;
                $query=mysqli_query($connection, "SELECT * FROM data ORDER BY id DESC;");
                // $query
                while($row=mysqli_fetch_array($query))
                {
                    ?>
                <tr>
                    <th scope="row"><?php echo $sr++; ?></th>
                    <td><?php echo $row["soil_data"]; ?></td>
                    <td><?php echo $row["time_"]; ?></td>
                    <td><?php echo $row["date_"]; ?></td>
                    <td><a href="delete.php" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>