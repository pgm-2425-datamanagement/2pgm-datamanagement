<div class="item">
    <div class="name">
        <?= $item->name; ?>
    </div>
    <div class="planet">
        <?= $item->planet; ?>
    </div>
    <div class="buttons">
        <a href="/alien/edit/<?= $item->id; ?>">Edit</a>
        <a href="#">Delete</a>
    </div>
</div>