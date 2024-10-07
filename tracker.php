<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment Tracker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        table th, table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #333;
            color: white;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        .status {
            font-weight: bold;
            text-align: center;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .status.active {
            background-color: #4CAF50;
            color: white;
        }

        .status.inactive {
            background-color: #f44336;
            color: white;
        }

        .status.pending {
            background-color: #FF9800;
            color: white;
        }

        .status.completed {
            background-color: #2196F3;
            color: white;
        }
    </style>
</head>
<body>

    <h1>Equipment Reservation Tracker</h1>

    <!-- Tracker Table -->
    <table>
        <thead>
            <tr>
                <th>Employee Name</th>
                <th>Equipment</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td>Excavator</td>
                <td>2024-10-05</td>
                <td>2024-10-10</td>
                <td><span class="status active">Active</span></td>
            </tr>
            <tr>
                <td>Jane Smith</td>
                <td>Bulldozer</td>
                <td>2024-09-29</td>
                <td>2024-10-05</td>
                <td><span class="status completed">Completed</span></td>
            </tr>
            <tr>
                <td>Alex Johnson</td>
                <td>Crane</td>
                <td>2024-10-07</td>
                <td>2024-10-12</td>
                <td><span class="status pending">Pending</span></td>
            </tr>
            <tr>
                <td>Maria Garcia</td>
                <td>Forklift</td>
                <td>2024-09-25</td>
                <td>2024-09-30</td>
                <td><span class="status inactive">Inactive</span></td>
            </tr>
        </tbody>
    </table>

</body>
</html>
