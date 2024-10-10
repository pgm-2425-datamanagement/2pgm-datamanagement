<?php //print_r($item); ?>
<div class="card">
    <h3><?= $item->name ?></h3>
    <p><?= $item->short_description ?></p>
    <?php foreach($item->getStudents() as $student): ?>
        <li><?= $student ?></li>
    <?php endforeach; ?>
    <img src="" alt="">
</div>