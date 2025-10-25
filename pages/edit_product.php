        <?php $title = "Admin Panel - Add Product"; require_once '../includes/header.php'; ?>
        <?php require_once '../actions/products/select_single_product.php' ?>
        <?php require_once '../actions/categories/select_categories.php' ?>
        <div class="content-section">
            <a href="product.php" class="btn back-to-btn">
                <i data-lucide="arrow-left-circle"></i>
                <p>Back to Products</p>
            </a>
            <div class="form-container">
                <h2 class="form-header">
                    <i data-lucide="plus-circle"></i>
                    <p>Add Product Form</p>
                </h2>
                <form action="../actions/products/edit_product.php" class="form" method="POST">
                    <?php foreach($product as $p): ?>
                    <input type="hidden" name="product_id" value="<?= $p['id'] ?>">
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-input" placeholder="Enter product name eg. Samsung S24" value="<?= $p['name'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Category</label>
                        <select type="text" class="form-input" name="category_id" required>
                            <option value="" disabled selected>Select a category</option>
                            <?php foreach($categories as $ct): ?>
                            <option <?= $ct['id'] == $p['category_id'] ? 'selected' : '' ?> value="<?= $ct['id'] ?>"><?= $ct['name'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Price</label>
                        <input type="number" class="form-input" placeholder="Enter product price eg. 2300" name="price" required value="<?= $p['price'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Stock</label>
                        <input type="text" class="form-input" placeholder="Enter product warehouse stock eg. 300" name="stock" required value="<?= $p['stock'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select type="text" class="form-input" name="status" required>
                            <option value="" disabled selected>Select product status</option>
                            <option <?= $p['status'] == 'Active' ? 'selected' : '' ?> value="Active">Active</option>
                            <option <?= $p['status'] == 'Inactive' ? 'selected' : '' ?> value="Inactive">Inactive</option>
                        </select>
                    </div>
                    <?php endforeach ?>
                    <div class="form-btn-container form-group">
                        <button type="submit" class="btn back-to-btn">
                            <i data-lucide="send"></i>
                            <h3>Submit</h2>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <?php require_once '../includes/footer.php' ?>