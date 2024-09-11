<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Results</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Data from Database</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Marks</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($result)): ?>
            <?php foreach ($result as $row): ?>
               
                <?php echo $row; ?>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No data available.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

</body>
</html>
