<?php
// Database credentials
$dbhost = 'redlock-sql';
$dbuser = 'root';
$dbpass = '';
$dbname = 'Redlock';

// Connect to database
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from table
$sql = "SELECT ID, Nama, Alamat, Jabatan FROM users";
$result = mysqli_query($conn, $sql);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    // Output table header
    echo "<table><tr><th>ID(PK)</th><th>Nama</th><th>Alamat</th><th>Jabatan</th></tr>";

    $a = 0;
    // Output table rows
    while ($row = mysqli_fetch_assoc($result)) {
        $a = $a+1;
        echo "<tr><td>" . $row['ID'] . "</td><td>" . $row['Nama'] . "</td><td>" . $row['Alamat'] . "</td><td>" . $row['Jabatan'] . "</td></tr>";

    }

    // Close table
    echo "</table>";
    echo "<p> Total User : ".$a."</p>";
} else {
    echo "No data found";
}

// Close database connection
mysqli_close($conn);
?>
