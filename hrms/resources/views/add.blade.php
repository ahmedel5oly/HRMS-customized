<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add new user</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .input-container {
            max-width: 400px;
            margin: 20px auto;
        }
        label {
            display: inline-block;
            margin-bottom: 5px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .scroll-icon {
            position: relative;
        }
        .scroll-icon::after {
            content: '\1F4DC'; /* Unicode character for scroll icon */
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
</head>
<body>
    <header>
        <h1>add new user</h1>
    </header>

    <div class="input-container">
        <label for="input1">Label 1:</label>
        <input type="text" id="input1" placeholder="Input 1">

        <label for="input2">Label 2:</label>
        <input type="text" id="input2" placeholder="Input 2">

        <label for="input3">Label 3:</label>
        <input type="text" id="input3" placeholder="Input 3">

        <label for="input4">Label 4:</label>
        <input type="text" id="input4" placeholder="Input 4">

        <label for="input5">Label 5:</label>
        <div class="scroll-icon">
            <input type="text" id="input5" placeholder="الصلاحيات">
        </div>
    </div>
</body>
</html>
