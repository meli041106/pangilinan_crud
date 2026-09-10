<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Product | Product Management System</title>

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

        .logout:hover {
            background: #123b63;
        }

        .container {
            width: 90%;
            max-width: 700px;
            margin: 40px auto;
        }

        .page-title {
            margin-bottom: 25px;
        }

        .page-title h1 {
            color: #174a7c;
            margin-bottom: 7px;
        }

        .page-title p {
            color: #777;
        }

        .form-card {
            background: white;
            padding: 30px;

            border-radius: 14px;

            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.08);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;

            color: #174a7c;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;

            padding: 12px 14px;

            border: 1px solid #d6dce2;
            border-radius: 8px;

            font-family: Arial, sans-serif;
            font-size: 15px;

            outline: none;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        input:focus,
        textarea:focus {
            border-color: #2563a6;
            box-shadow: 0 0 0 3px rgba(37, 99, 166, 0.12);
        }

        .buttons {
            display: flex;
            gap: 12px;
            margin-top: 25px;
        }

        .btn {
            padding: 12px 20px;

            border-radius: 8px;

            text-decoration: none;
            font-weight: bold;

            border: none;
            cursor: pointer;

            font-size: 15px;
        }

        .save-btn {
            background: #2563a6;
            color: white;
        }

        .save-btn:hover {
            background: #174a7c;
        }

        .cancel-btn {
            background: #e5e7eb;
            color: #374151;
        }

        .cancel-btn:hover {
            background: #d1d5db;
        }

        @media (max-width: 600px) {

            .navbar {
                padding: 18px 20px;
            }

            .navbar h2 {
                font-size: 18px;
            }

            .container {
                width: 92%;
                margin: 25px auto;
            }

            .form-card {
                padding: 22px;
            }

            .buttons {
                flex-direction: column;
            }

            .btn {
                text-align: center;
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">

        <h2>Product Management System</h2>

        <a href="/logout" class="logout">
            Logout
        </a>

    </nav>


    <div class="container">

        <div class="page-title">

            <h1>Add Product</h1>

            <p>
                Enter the details of the new product below.
            </p>

        </div>


        <div class="form-card">

            <form method="POST" action="/products/create">

                <div class="form-group">

                    <label for="product_name">
                        Product Name
                    </label>

                    <input
                        type="text"
                        id="product_name"
                        name="product_name"
                        placeholder="Enter product name"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="description">
                        Description
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        placeholder="Enter product description"
                    ></textarea>

                </div>


                <div class="form-group">

                    <label for="price">
                        Price
                    </label>

                    <input
                        type="number"
                        id="price"
                        name="price"
                        step="0.01"
                        min="0"
                        placeholder="0.00"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="quantity">
                        Quantity
                    </label>

                    <input
                        type="number"
                        id="quantity"
                        name="quantity"
                        min="0"
                        placeholder="Enter quantity"
                        required
                    >

                </div>


                <div class="buttons">

                    <button
                        type="submit"
                        class="btn save-btn"
                    >
                        Add Product
                    </button>

                    <a
                        href="/products"
                        class="btn cancel-btn"
                    >
                        Cancel
                    </a>

                </div>

            </form>

        </div>

    </div>

</body>
</html>