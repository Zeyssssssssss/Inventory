<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        h1 {
            text-align: center;
            font-size: 40px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .submit-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #5cb85c;
            color: white;
            text-align: center;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Return Record</h1>

        <form action="submit_return.php" method="POST">
            <table>
                <thead>
                    <tr>
                        <th>Item ID</th>
                        <th>Employee ID</th>
                        <th>Item Name</th>
                        <th>Date of Return</th>
                        <th>Condition</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="item_id" placeholder="Enter Item ID"></td>
                        <td><input type="text" name="employee_id" placeholder="Enter Employee ID"></td>
                        <td><input type="text" name="item_name" placeholder="Enter Item Name"></td>
                        <td><input type="text" name="return_date" placeholder="YYYY-MM-DD"></td>
                        <td>
                            <select name="condition">
                                <option value="Good">Good</option>
                                <option value="Damaged">Damaged</option>
                                <option value="Requires Repair">Requires Repair</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="submit-btn">Submit Return</button>
        </form>
    </div>

</body>
</html>
