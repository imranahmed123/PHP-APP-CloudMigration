<?php
// Get the instance ID
$instanceId = getenv('WEBSITE_INSTANCE_ID');

// Display welcome message and instance ID
echo "<h1>Welcome to My Azure Web App</h1>";
echo "<p>Your instance ID is: <strong>" . $instanceId . "</strong></p>";
?>
