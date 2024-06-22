<?= $this->extend("layouts/app") ?>

<?php $this->setVar('pgActive', 'Dashboard'); ?>

<?= $this->section('title') ?> Dashboard <?= $this->endSection() ?>

<!-- cards start -->

<!-- cards end -->

<?= $this->section("body") ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">No of Products</h5>
                        <p class="card-text">
                            <?= $product_count ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><a class="text-decoration-none" href="<?= base_url('product') ?>">View</a></small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">No of Media </h5>
                        <p class="card-text"><?= $media_count ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><a class="text-decoration-none" href="<?= base_url('product') ?>">View</a></small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Product Views</h5>
                        <p class="card-text">
                            <?= $product_views ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><a class="text-decoration-none" href="<?= base_url('product') ?>">View</a></small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"> No of Downloads</h5>
                        <p class="card-text">
                            <?= $downloads ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><a class="text-decoration-none" href="<?= base_url('product') ?>">View</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>