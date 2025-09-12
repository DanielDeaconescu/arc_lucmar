<?php

$db_path = __DIR__ . '/../database/projects.db';

try {

    // Connect to the SQLite database
    $db = new SQLite3($db_path);

    // Make sure db file is readable and writeable
    if (!file_exists($db_path)) {
        die("Database file not found: " . $db_path);
    }

    // Query to get all projects
    $result = $db->query('SELECT * FROM projects ORDER BY id');

    $projects = [];

    // Fetch data and convert to the format the code expects
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        // Convert comma-separated strings back to arrays

        $projects[] = [
            'id' => $row['id'],
            'title' =>  $row['title'],
            'thumbnail' => $row['thumbnail'],
            'gallery' => explode(',', $row['gallery']),
            'specs' => explode(',', $row['specs']),
            'orientation' => $row['orientation']
        ];

        
    }

    // Close connection
        $db->close();

} catch (Exception $e) {
    die("Database error: " . $e->getMessage());
}

// Detect orientation safely

function getOrientation($imagePath) {
    if (!file_exists($imagePath)) return 'landscape';

    [$width, $height] = getimagesize($imagePath);

    // Try to read EXIF if available (only works on JPEG/TIFF)
    if (function_exists('exif_read_data') && exif_imagetype($imagePath) === IMAGETYPE_JPEG) {
        $exif = @exif_read_data($imagePath);
        if (!empty($exif['Orientation'])) {
            $orientation = $exif['Orientation'];

            // If rotated 90 or 270 degrees, swap width and height
            if (in_array($orientation, [5, 6, 7, 8])) {
                [$width, $height] = [$height, $width];
            }
        }
    }

    return $width > $height ? 'landscape' : 'portrait';
}

foreach ($projects as $key => $project) {
    $projects[$key]['orientation'] = getOrientation($project['thumbnail']);
}

$landscapeProjects = array_filter($projects, fn($p) => $p['orientation'] === 'landscape');

$portraitProjects = array_filter($projects, fn($p) => $p['orientation'] === 'portrait');

?>