<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["search"])) {
        $searchQuery = $_POST["search"];
        echo "You searched for: " . htmlspecialchars($searchQuery);
    } else {
        echo "No search query provided.";
    }
}
?>
