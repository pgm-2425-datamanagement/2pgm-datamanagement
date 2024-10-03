<div class="message">
    <div class="avatar"><img src="https://picsum.photos/id/1005/100/100"></div>
    <div class="content">
        <div class="info"><a href="#"><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></a> &bull; @deweirdt &bull; Donderdag 1 oktober 2020 11:20</div>
        <div class="tweet">
            <?php 
            //echo $row['message']; 
            //htmlspecialchars is used to prevent XSS attacks (see slides about security)
            echo htmlspecialchars($row['message']);
            ?>
        </div>
    </div>
</div>