<?= $this->extend("layouts/app") ?>

<?php $this->setVar('pgActive', 'Product'); ?>

<?= $this->section('title') ?> Product <?= $this->endSection() ?>



<?= $this->section("body") ?>

<div class="container mt-5">

    <a href="<?= base_url('product/add') ?>" class="btn btn-secondary float-end">Add Product</a>

    <table class="table align-middle mb-0 bg-white mt-3">
        <thead class="bg-light">
            <tr>
                <th>Name</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Tag</th>
                <th>Size</th>
                <th>Weight</th>
                <th>Sku id</th>
                <th>colour</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td>
                        <p class="fw-normal mb-1"><?= $product['name'] ?></p>
                    </td>
                    <td>
                        <p class="text-muted mb-0"><?= $product['title'] ?></p>
                    </td>
                    <td><?= $product['description'] ?></td>
                    <td><?= $product['category'] ?></td>
                    <td><?= $product['tag'] ?></td>
                    <td><?= $product['size'] ?></td>
                    <td><?= $product['weight'] ?></td>
                    <td><?= $product['sku_id'] ?></td>
                    <td><?= $product['colour'] ?></td>
                    <td>
                        <a href="<?= base_url('product/view/') ?>" class="btn btn-sencondary btn-sm btn-rounded">
                            View
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Media</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('media/store') ?>" method="post">

                    <div class="mb-3">
                        <label for="mediaName" class="form-label">Media Name</label>
                        <input type="text" class="form-control" id="mediaName" placeholder="Media Name">
                    </div>

                    <div class="mb-3">
                        <label for="Description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="Description" placeholder="Description">
                    </div>

                    <!-- Category -->
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" id="category" required>
                            <option selected disabled>Select category...</option>
                            <option value="electronics">Electronics</option>
                            <option value="clothing">Clothing</option>
                            <option value="home">Home</option>
                            <option value="books">Books</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="file" class="form-label">File</label>
                        <input type="file" class="form-control" id="file">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary float-end mb-3">Upload Media</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link float-start" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>