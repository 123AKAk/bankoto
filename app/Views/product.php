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
            <tr>
                <td>
                    <p class="fw-normal mb-1">Software engineer</p>
                </td>
                <td>
                    <p class="text-muted mb-0">IT department</p>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                        Edit
                    </button>
                </td>
            </tr>

        </tbody>
    </table>
</div>



<?= $this->endSection() ?>