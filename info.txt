
<?php 

// Query to get total submissions
$totalSubmissionsQuery = "SELECT COUNT(*) AS total FROM submissions";
$totalResult = $conn->query($totalSubmissionsQuery);
$totalSubmissions = $totalResult->fetch_assoc()['total'];

// Query to get recent submissions (let's say 'recent' means submissions in the last 24 hours)
$recentSubmissionsQuery = "SELECT COUNT(*) AS recent FROM submissions WHERE submission_date >= NOW() - INTERVAL 1 DAY";
$recentResult = $conn->query($recentSubmissionsQuery);
$recentSubmissions = $recentResult->fetch_assoc()['recent'];

// Query to get all submissions data (date, header, and data)
$submissionsQuery = "SELECT header, data, submission_date FROM submissions ORDER BY submission_date DESC";
$submissionsResult = $conn->query($submissionsQuery);


include("config.php");
include("dashboard.html");

$query = "SELECT * FROM suggestions";
$result = mysqli_query($conn, $query);


if ($submissionsResult->num_rows > 0) {
    while ($row = $submissionsResult->fetch_assoc()) {
        echo "<div class='submission'>";
        echo "<p><strong>Date of Submission:</strong> " . date("d/m/Y H:i", strtotime($row['submission_date'])) . "</p>";
        echo "<p><strong>Header:</strong> " . htmlspecialchars($row['title']) . "</p>";
        echo "<p><strong>Data:</strong> " . nl2br(htmlspecialchars($row['suggestion'])) . "</p>";
        echo "</div><hr>";
    }
} else {
    echo "<p>No submissions found.</p>";
}


// Close the database connection
$conn->close();









?>





















 