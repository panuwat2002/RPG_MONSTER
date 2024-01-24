
<?php
if (isset($_GET['game'])) {
    $gameName = $_GET['game'];
    $filePath = "path/to/games/{$gameName}.zip"; // Replace with actual path
    if (file_exists($filePath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filePath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));
        readfile($filePath);
        exit;
    } else {
        echo "<p>Game not found</p>";
    }
}
?>
