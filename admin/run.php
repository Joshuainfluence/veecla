<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #ecf0f1;
        }

        .chart-container {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
        }

        .bar {
            width: 50px;
            background-color: #3498db;
            position: relative;
            text-align: center;
            color: #fff;
            margin-bottom: 0px;
            transform: scaleY(-1);
        }

        .bar:nth-child(2n) {
            background-color: #e74c3c;
        }

        .bar:nth-child(3n) {
            background-color: #2ecc71;
        }

        .bar:nth-child(4n) {
            background-color: #f39c12;
        }

        .bar-content {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
            transform: scaleY(-1);
        }
    </style>
    <title>Vertical Bar Chart</title>
</head>
<body>
    <div class="chart-container">
        <div class="bar" style="height: 100px;">
            <div class="bar-content">Section 1</div>
        </div>
        <div class="bar" style="height: 150px;">
            <div class="bar-content">Section 2</div>
        </div>
        <div class="bar" style="height: 80px;">
            <div class="bar-content">Section 3</div>
        </div>
        <div class="bar" style="height: 120px;">
            <div class="bar-content">Section 4</div>
        </div>
    </div>
</body>
</html>
