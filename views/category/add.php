<h2>Додавання категорії</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="name" class="form-label">Назва категорії</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="">
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">Файл з фотографією для категорії</label>
        <input type="file" class="form-control" name="file" id="file" accept="image/jpeg" />
    </div>
    <div>
        <button class="btn btn-primary">Додати</button>
    </div>
</form>