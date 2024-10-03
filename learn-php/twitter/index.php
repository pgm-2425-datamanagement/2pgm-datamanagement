<?php
require_once 'includes/db.php';
require_once 'libraries/messages.php';

$search = $_GET['search'] ?? '';

$result = getMessages($search);

include_once 'partials/header.php';
?>
    <div class="messages">
        <form method="POST" action="./addMessage.php">
            <div class="message message-new">
            
                <div class="avatar">JD</div>

                <div class="content">
                    <textarea name="tweet"></textarea>
                    <button type="submit">Tweet</button>
                </div>
            </div>
        </form>

        <form>
            <input type="text" name="search" placeholder="Search">
            <button type="submit">Search</button>
        </form>

        <?php 
        require_once 'includes/db.php';

        foreach($result as $row) {
            //print_r($row);
            include 'views/message.php';
            //require 'views/message.php';
        } 
            
        ?>
    </div>
<?php include_once 'partials/footer.php'; ?>