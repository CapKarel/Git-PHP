<?php
// Load JSON file
$json = file_get_contents("profile.json");

// Decode JSON -> PHP array
$profile = json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>IT Profil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>
<?php echo htmlspecialchars($profile["name"] ?? "Unknown"); ?>
</h1>

<h2>Dovednosti</h2>
<ul>
<?php foreach ($profile["skills"] ?? [] as $skill): ?>
    <li><?= htmlspecialchars($skill); ?></li>
<?php endforeach; ?>
</ul>

<h2>Zájmy</h2>
<ul>
<?php foreach ($profile["interests"] ?? [] as $interest): ?>
    <li><?= htmlspecialchars($interest); ?></li>
<?php endforeach; ?>
</ul>

</body>
</html>
