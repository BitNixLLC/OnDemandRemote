<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BitNix Support - Administration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #202020;color:white;">
    <div class="container mt-5">
        <center><img src="https://example.com/logo_nextcloud.png"></center>
        <center><h1 class="mb-4">BitNix Support - Administration</h1></center><br><br>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['generate'])) {
                $newCode = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
                file_put_contents('codes.txt', $newCode . PHP_EOL, FILE_APPEND);
                header("Location: admin.php");
                exit;
            } elseif (isset($_POST['delete'])) {
                $codeToDelete = $_POST['code'];
                $codes = file('codes.txt', FILE_IGNORE_NEW_LINES);
                $updatedCodes = array_diff($codes, [$codeToDelete]);
                file_put_contents('codes.txt', implode(PHP_EOL, $updatedCodes) . PHP_EOL);
                header("Location: admin.php");
                exit;
            }
        }
        ?>
        <form method="post" class="mb-3 d-inline">
            <button type="submit" name="generate" class="btn btn-primary">Generate New Code</button>
        </form>

        <h2>Generated Codes</h2>
        <ul class="list-group">
        <?php
            $codes = file('codes.txt', FILE_IGNORE_NEW_LINES);

            if (empty(array_filter($codes, 'trim'))) {
                echo '<center><br><br><br>No active codes.</center>';
            } else {
                foreach ($codes as $code) {
                    if (!empty(trim($code))) {
                        echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
                        echo $code;
                        echo '<form method="post" class="mb-0">';
                        echo '<input type="hidden" name="code" value="' . htmlspecialchars($code) . '">';
                        echo '<button type="submit" name="delete" class="btn btn-danger btn-sm">Delete</button>';
                        echo '</form>';
                        echo '</li>';
                    }
                }
            }
        ?>
        </ul>
    </div>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
