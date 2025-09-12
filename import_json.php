<?php
// import_json.php
// Script to import projects from JSON file to SQLite database

// Database path
$db_path = __DIR__ . '/database/projects.db';

// JSON file path
$json_path = __DIR__ . '/projects.json';

// Check if JSON file exists
if (!file_exists($json_path)) {
    die("JSON file not found: $json_path");
}

// Load JSON data
$json_data = file_get_contents($json_path);
$projects = json_decode($json_data, true);

// Check if JSON is valid
if (json_last_error() !== JSON_ERROR_NONE) {
    die("JSON Error: " . json_last_error_msg());
}

// Connect to database
try {
    $db = new SQLite3($db_path);
    
    // Clear existing data
    $db->exec('DELETE FROM projects');
    
    // Prepare insert statement
    $stmt = $db->prepare('
        INSERT INTO projects (title, thumbnail, gallery, specs, orientation) 
        VALUES (:title, :thumbnail, :gallery, :specs, :orientation)
    ');
    
    $imported_count = 0;
    $skipped_count = 0;
    
    // Insert each project
    foreach ($projects as $index => $project) {
        echo "Processing project #" . ($index + 1) . ": " . $project['title'] . "\n";
        
        // Validate required fields
        if (empty($project['title'])) {
            echo "  SKIPPED: Missing title\n";
            $skipped_count++;
            continue;
        }
        
        if (empty($project['thumbnail'])) {
            echo "  SKIPPED: Missing thumbnail\n";
            $skipped_count++;
            continue;
        }
        
        // Ensure gallery and specs are arrays and convert to strings
        $gallery = isset($project['gallery']) && is_array($project['gallery']) ? $project['gallery'] : [];
        $specs = isset($project['specs']) && is_array($project['specs']) ? $project['specs'] : [];
        
        $gallery_str = !empty($gallery) ? implode(',', $gallery) : 'no-gallery.jpg';
        $specs_str = !empty($specs) ? implode(',', $specs) : 'No specifications provided';
        
        echo "  Gallery: " . $gallery_str . "\n";
        echo "  Specs: " . $specs_str . "\n";
        
        // Bind parameters
        $stmt->bindValue(':title', $project['title'], SQLITE3_TEXT);
        $stmt->bindValue(':thumbnail', $project['thumbnail'], SQLITE3_TEXT);
        $stmt->bindValue(':gallery', $gallery_str, SQLITE3_TEXT);
        $stmt->bindValue(':specs', $specs_str, SQLITE3_TEXT);
        $stmt->bindValue(':orientation', '', SQLITE3_TEXT); // Empty initially
        
        // Execute
        if ($stmt->execute()) {
            $imported_count++;
            echo "  IMPORTED: " . $project['title'] . "\n";
        } else {
            echo "  FAILED: " . $project['title'] . " - " . $db->lastErrorMsg() . "\n";
            $skipped_count++;
        }
        
        echo "----------------------------------------\n";
    }
    
    echo "\nImport completed!\n";
    echo "Imported: $imported_count projects\n";
    echo "Skipped: $skipped_count projects\n";
    
    // Close connection
    $db->close();
    
} catch (Exception $e) {
    die("Database error: " . $e->getMessage());
}
?>