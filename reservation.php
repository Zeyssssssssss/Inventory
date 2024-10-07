<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
        }

        .reservation-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .reservation-form label {
            display: block;
            margin: 10px 0 5px;
        }

        .reservation-form input, 
        .reservation-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .reservation-form button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .reservation-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Equipment Reservation</h1>

    <!-- Reservation Form -->
    <div class="reservation-form">
        <form action="/submit-reservation" method="POST">
            <!-- Employee Name -->
            <label for="employee-name">Employee Name</label>
            <input type="text" id="employee-name" name="employee_name" placeholder="Enter your name" required>

            <!-- Department -->
            <label for="department">Department</label>
            <input type="text" id="department" name="department" placeholder="Enter your department" required>

            <!-- Equipment Selection -->
            <label for="equipment">Select Equipment</label>
            <select id="equipment" name="equipment" required>
                <option value="">Select equipment</option>
                <option value="Excavator">Excavator</option>
                <option value="Bulldozer">Bulldozer</option>
                <option value="Forklift">Forklift</option>
                <option value="Crane">Crane</option>
            </select>

            <!-- Reservation Date -->
            <label for="reservation-date">Reservation Date</label>
            <input type="date" id="reservation-date" name="reservation_date" required>

            <!-- Duration -->
            <label for="duration">Reservation Duration (days)</label>
            <input type="number" id="duration" name="duration" placeholder="Enter the number of days" min="1" required>

            <!-- Submit Button -->
            <button type="submit">Submit Reservation</button>
        </form>
    </div>

</body>
</html>
