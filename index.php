<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
    <style>
        body {
            background-color: #f7f7f7; 
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 400px;
            text-align: center;
        }
        h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        label {
            font-size: 18px;
            color: #555;
            margin-bottom: 8px;
            display: block;
            text-align: left;
        }
        input[type="text"], input[type="email"], input[type="date"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0 20px;
            border: 2px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color:rgb(74, 192, 207);
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color:rgb(67, 196, 235);
        }

        .error-message {
            color: red;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Enter Employee Data</h2>
        <form action="submit.php" method="POST">
            <label for="name">Employee Name</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="birthdate">Birthdate</label>
            <input type="date" id="birthdate" name="birthdate" required>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
