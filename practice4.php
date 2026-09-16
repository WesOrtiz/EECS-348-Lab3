
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Multiplication Table</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 30px; max-width: 600px; margin: 0 auto; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="number"] { width: 100%; padding: 8px; box-sizing: border-box; }
        button { padding: 10px 15px; background-color: #0051ba; color: white; border: none; cursor: pointer; width: 100%; font-weight: bold; }
        table { border-collapse: collapse; margin-top: 20px; width: 100%; }
        td, th { border: 1px solid #333; padding: 10px; text-align: center; }
        th { background-color: #f4f4f4; font-weight: bold; }
    </style>
</head>
<body>

    <h2>Multiplication Table Generator</h2>
    
    <!-- action="" means the form submits to itself -->
    <form action="" method="POST">
        <div class="form-group">
            <label for="size">Enter a number:</label>
            <input type="number" id="size" name="size" min="1" required value="<?php echo isset($_POST['size']) ? htmlspecialchars($_POST['size']) : ''; ?>">
        </div>
        <button type="submit">Generate Table</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['size'])) {
        $size = intval($_POST['size']);
        
        echo "<h3>Result Grid:</h3>";
        echo "<table>";
        
        echo "<tr><th>&times;</th>";
        for ($col = 1; $col <= $size; $col++) {
            echo "<th>$col</th>";
        }
        echo "</tr>";
        
        for ($row = 1; $row <= $size; $row++) {
            echo "<tr>";
            echo "<th>$row</th>";
            
            for ($col = 1; $col <= $size; $col++) {
                echo "<td>" . ($row * $col) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

</body>
</html>