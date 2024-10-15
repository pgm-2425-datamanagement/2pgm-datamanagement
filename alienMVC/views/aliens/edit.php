<form method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $alien->name; ?>">
    </div>
    <div class="mb-3">
        <label for="planet" class="form-label">planet</label>
        <input type="text" class="form-control" id="planet" name="planet" value="<?= $alien->planet; ?>">
    </div>
    <input type="submit" value="Save" class="btn btn-primary">
</form>