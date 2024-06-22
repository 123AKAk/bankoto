<?= $this->extend("layouts/app") ?>

<?php $this->setVar('pgActive', 'Product'); ?>

<?= $this->section('title') ?> Add Product <?= $this->endSection() ?>


<?= $this->section("body") ?>

<div class="container mt-5 mb-5">


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



  <a href="<?= base_url('product') ?>" class="btn btn-link text-decoration-none">
    < Go Back</a>

      <h2 class="text-center mb-4">Add Product</h2>
      <form action="<?= base_url('product/store') ?>" method="post">

        <!-- Product Name -->
        <div class="mb-3">
          <label for="productName" class="form-label">Product Name</label>
          <input type="text" name="name" class="form-control" id="productName" placeholder="Enter product name" required>
        </div>

        <!-- Product Title -->
        <div class="mb-3">
          <label for="productTitle" class="form-label">Product Title</label>
          <input type="text" name="title" class="form-control" id="productTitle" placeholder="Enter product title" required>
        </div>

        <!-- Product Description -->
        <div class="mb-3">
          <label for="productDescription" class="form-label">Product Description</label>
          <textarea class="form-control" name="description" id="productDescription" rows="3" placeholder="Enter product description" required></textarea>
        </div>

        <!-- Category -->
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" name="category" id="category" required>
            <option selected disabled>Select category...</option>
            <option value="electronics">Electronics</option>
            <option value="clothing">Clothing</option>
            <option value="home">Home</option>
            <option value="books">Books</option>
          </select>
        </div>

        <!-- Tag -->
        <div class="mb-3">
          <label for="tag" class="form-label">Tag</label>
          <input type="text" name="tag" class="form-control" id="tag" placeholder="Enter tags separated by commas">
        </div>

        <!-- Size -->
        <div class="mb-3">
          <label for="size" class="form-label">Size</label>
          <input type="text" name="size" class="form-control" id="size" placeholder="Enter size">
        </div>

        <!-- Weight -->
        <div class="mb-3">
          <label for="weight" class="form-label">Weight</label>
          <input type="text" name="weight" class="form-control" id="weight" placeholder="Enter weight">
        </div>

        <!-- SKU ID -->
        <div class="mb-3">
          <label for="skuId" class="form-label">SKU ID</label>
          <input type="text" name="sku_id" class="form-control" id="skuId" placeholder="Enter SKU ID">
        </div>

        <!-- Color -->
        <div class="mb-3">
          <label for="color" class="form-label">Color</label>
          <input type="color" name="colour" class="form-control" id="color" placeholder="Enter color">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary float-end">Submit</button>
      </form>
</div>

<br>
<br>


<?= $this->endSection() ?>