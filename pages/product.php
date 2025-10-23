        <?php require_once '../includes/header.php' ?>
        <?php require_once '../actions/select_products.php' ?>
        <div class="content-section">
            <div class="table-page-container">
                <div class="table-page-header-section">
                    <div class="table-page-header-title">
                        <h2>Products Management</h2>
                        <i data-lucide="chevron-down" id="headerDropdownToggle"></i>
                    </div>
                    <div class="table-page-header-dropdown-filter not-visible" id="tableHeaderDropdown">
                        <div class="table-page-dropdown">
                            <div class="table-page-dropdown-header">
                                <p>Name</p>
                                <i data-lucide="chevron-down" class="dropdown-content-toggle"></i>
                            </div>
                            <div class="table-page-dropdown-content">
                                <p>A-Z</p>
                                <p>Z-A</p>
                                <p>Limit: 5</p>
                                <p>Limit: 10</p>
                            </div>
                        </div>
                        <div class="table-page-dropdown">
                            <div class="table-page-dropdown-header">
                                <p>Category</p>
                                <i data-lucide="chevron-down" class="dropdown-content-toggle"></i>
                            </div>
                            <div class="table-page-dropdown-content">
                                <p>A-Z</p>
                                <p>Z-A</p>
                                <p>Limit: 5</p>
                                <p>Limit: 10</p>
                            </div>
                        </div>
                        <div class="table-page-dropdown">
                            <div class="table-page-dropdown-header">
                                <p>Price</p>
                                <i data-lucide="chevron-down" class="dropdown-content-toggle"></i>
                            </div>
                            <div class="table-page-dropdown-content">
                                <p>A-Z</p>
                                <p>Z-A</p>
                                <p>Limit: 5</p>
                                <p>Limit: 10</p>
                            </div>
                        </div>
                        <div class="table-page-dropdown">
                            <div class="table-page-dropdown-header">
                                <p>Stock</p>
                                <i data-lucide="chevron-down" class="dropdown-content-toggle"></i>
                            </div>
                            <div class="table-page-dropdown-content">
                                <p>A-Z</p>
                                <p>Z-A</p>
                                <p>Limit: 5</p>
                                <p>Limit: 10</p>
                            </div>
                        </div>
                        <div class="table-page-dropdown">
                            <div class="table-page-dropdown-header">
                                <p>Status</p>
                                <i data-lucide="chevron-down" class="dropdown-content-toggle"></i>
                            </div>
                            <div class="table-page-dropdown-content">
                                <p>A-Z</p>
                                <p>Z-A</p>
                                <p>Limit: 5</p>
                                <p>Limit: 10</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-page-body-section">
                    <div class="table-page-body-header">
                        <div class="table-page-search-container">
                            <i data-lucide="search"></i>
                            <input type="text" placeholder="Search product..." class="table-search-input">
                        </div>
                        <div class="misc-action-button">
                            <button class="btn convert-csv-btn" id="convertCsvBtn">
                                <i data-lucide="file-plus"></i>
                                <p>Convert to CSV</p>
                            </button>
                            <button class="btn add-btn">
                                <i data-lucide="plus-circle"></i>
                                <p>Add Product</p>
                            </button>
                        </div>
                    </div>
                    <table class="table-page-body-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($rows as $p): ?>
                                <tr>
                                    <td><?= ++$no ?></td>
                                    <td><?= $p['name'] ?></td>
                                    <td><?= $p['category'] ?></td>
                                    <td><?= $p['price'] ?></td>
                                    <td><?= $p['stock'] ?></td>
                                    <td><?= $p['status'] ?></td>
                                    <td class="action-table">
                                        <i data-lucide="eye" class="action-icon"></i>
                                        <i data-lucide="edit" class="action-icon"></i>
                                        <i data-lucide="trash-2" class="action-icon"></i>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <!-- <tr>
                                <td>2</td>
                                <td>Samsung Galaxy S25 Ultra</td>
                                <td>Electronic</td>
                                <td>Rp. 25,000,000</td>
                                <td>253</td>
                                <td>Active</td>
                                <td class="action-table">
                                    <i data-lucide="eye" class="action-icon"></i>
                                    <i data-lucide="edit" class="action-icon"></i>
                                    <i data-lucide="trash-2" class="action-icon"></i>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php require_once '../includes/footer.php' ?>