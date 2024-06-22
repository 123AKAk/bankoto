<?= $this->extend("layouts/app") ?>

<?php $this->setVar('pgActive', 'Media'); ?>

<?= $this->section('title') ?> Media <?= $this->endSection() ?>



<?= $this->section("body") ?>

<div class="container mt-5">

    <?php
    if (session()->getFlashData("success")) {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Holy guacamole! <?= session()->getFlashData("success"); ?>.</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    } else if (session()->getFlashData("error")) {
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>
                Holy guacamole!
                <?= session()->getFlashData("error"); ?>.
            </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
    ?>

    <?php if (session()->getFlashdata('validation_errors')) : ?>
        <div class="alert alert-danger alert-dismissible fade show">
            <ul>
                <?php foreach (session()->getFlashdata('validation_errors') as $error) : ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>



    <div class="mb-3">
        <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-secondary float-end">Add Media</button>
    </div>

    <table class="table align-middle mb-0 bg-white mt-3">
        <thead class="bg-light">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($media as $singleMedia) : ?>
                <tr>
                    <td>
                        <p class="fw-normal mb-1"><?= $singleMedia['name'] ?></p>
                    </td>
                    <td>
                        <p class="text-muted mb-0"><?= $singleMedia['description'] ?></p>
                    </td>
                    <td><?= $singleMedia['category'] ?></td>
                    <td>
                        <a href="<?= base_url('media/download/') ?>" class="btn btn-dark btn-sm btn-rounded">
                            Download
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
                <form action="<?= base_url('media/store') ?>" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="mediaName" class="form-label">Media Name</label>
                        <input name="name" type="text" class="form-control" id="mediaName" placeholder="Media Name">
                    </div>

                    <div class="mb-3">
                        <label for="Description" class="form-label">Description</label>
                        <input name="description" type="text" class="form-control" id="Description" placeholder="Description">
                    </div>

                    <!-- Category -->
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select name="category" class="form-select" id="category" required>
                            <option selected disabled>Select category...</option>
                            <option value="electronics">Electronics</option>
                            <option value="clothing">Clothing</option>
                            <option value="home">Home</option>
                            <option value="books">Books</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="file" class="form-label">File</label>
                        <input type="file" name="image" class="form-control" id="file">
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