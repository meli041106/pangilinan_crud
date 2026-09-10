<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Products | Lab 5</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8f1e5;
            color: #263238;
        }

        .navbar {
            background: #2563a6;
            color: white;
            padding: 18px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            font-size: 22px;
        }

        .logout {
            color: white;
            text-decoration: none;
            background: #174a7c;
            padding: 9px 16px;
            border-radius: 8px;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .header h1 {
            color: #174a7c;
        }

        .add-btn {
            background: #2563a6;
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: bold;
        }

        .add-btn:hover {
            background: #174a7c;
        }

        .table-container {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #dbeafe;
            color: #174a7c;
            padding: 14px;
            text-align: left;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #eee;
        }

        tr:hover {
            background: #f8fafc;
        }

        .edit {
            color: #2563a6;
            text-decoration: none;
            font-weight: bold;
        }

        .delete {
            color: #c0392b;
            text-decoration: none;
            font-weight: bold;
        }

        .empty {
            text-align: center;
            padding: 30px;
            color: #777;
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <h2>Lab 5 • Product Management</h2>

        <a href="/logout" class="logout">Logout</a>
    </nav>

    <div class="container">

        <div class="header">
            <h1>Products</h1>

            <a href="/products/create" class="add-btn">
                + Add Product
            </a>
        </div>

        <div class="table-container">

            <table>

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php if (!empty($products)): ?>

                        <?php foreach ($products as $product): ?>

                            <tr>

                                <td><?= $product['id']; ?></td>

                                <td>
                                    <strong><?= $product['product_name']; ?></strong>
                                </td>

                                <td><?= $product['description']; ?></td>

                                <td>₱<?= number_format($product['price'], 2); ?></td>

                                <td><?= $product['quantity']; ?></td>

                                <td><?= $product['created_at']; ?></td>

                                <td>
                                    <a
                                        href="/products/edit/<?= $product['id']; ?>"
                                        class="edit"
                                    >
                                        Edit
                                    </a>

                                    &nbsp; | &nbsp;

                                    <a
                                        href="/products/delete/<?= $product['id']; ?>"
                                        class="delete"
                                        onclick="return confirm('Are you sure you want to delete this product?');"
                                    >
                                        Delete
                                    </a>
                                </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>
                            <td colspan="7" class="empty">
                                No products found.
                            </td>
                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>

    </div>

</body>
</html>