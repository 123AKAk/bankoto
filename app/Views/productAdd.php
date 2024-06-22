<?= $this->extend("layouts/app") ?>

<?php $this->setVar('pgActive', 'Product'); ?>

<?= $this->section('title') ?> Product <?= $this->endSection() ?>


<?= $this->section("body") ?>

<div class="container mt-5 mb-5">

  <a href="<?= base_url('product') ?>" class="btn btn-link text-decoration-none">< Go Back</a>

  <h2 class="text-center mb-4">Add Information</h2>
  <form>

    <!-- Product Name -->
    <div class="mb-3">
      <label for="productName" class="form-label">Product Name</label>
      <input type="text" class="form-control" id="productName" placeholder="Enter product name" required>
    </div>

    <div class="mb-3">
      <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-secondary">Add Media</button>
    </div>

    <!-- Product Title -->
    <div class="mb-3">
      <label for="productTitle" class="form-label">Product Title</label>
      <input type="text" class="form-control" id="productTitle" placeholder="Enter product title" required>
    </div>

    <!-- Product Description -->
    <div class="mb-3">
      <label for="productDescription" class="form-label">Product Description</label>
      <textarea class="form-control" id="productDescription" rows="3" placeholder="Enter product description" required></textarea>
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

    <!-- Tag -->
    <div class="mb-3">
      <label for="tag" class="form-label">Tag</label>
      <input type="text" class="form-control" id="tag" placeholder="Enter tags separated by commas">
    </div>

    <!-- Size -->
    <div class="mb-3">
      <label for="size" class="form-label">Size</label>
      <input type="text" class="form-control" id="size" placeholder="Enter size">
    </div>

    <!-- Weight -->
    <div class="mb-3">
      <label for="weight" class="form-label">Weight</label>
      <input type="text" class="form-control" id="weight" placeholder="Enter weight">
    </div>

    <!-- SKU ID -->
    <div class="mb-3">
      <label for="skuId" class="form-label">SKU ID</label>
      <input type="text" class="form-control" id="skuId" placeholder="Enter SKU ID">
    </div>

    <!-- Color -->
    <div class="mb-3">
      <label for="color" class="form-label">Color</label>
      <input type="text" class="form-control" id="color" placeholder="Enter color">
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary float-end">Submit</button>
  </form>
</div>

<br>
<br>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Media</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>

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