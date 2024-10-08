<h1>Twitter</h1>
...

<?php foreach ($messages as $message): ?>
    <div class="message">
        <p><?= $message->message ?></p>
    </div>
<?php endforeach; ?>