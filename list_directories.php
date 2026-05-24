<?php
/**
 * Recursively lists all directories and files in a given directory
 * 
 * @param string $dir The directory to scan
 * @param int $level The indentation level (for nested directories)
 */
function listDirectories($dir, $level = 0) {
    // Check if the directory is valid
    if (!is_dir($dir)) {
        echo "Invalid directory: $dir";
        return;
    }
    
    // Open the directory
    $files = scandir($dir);
    if ($files === false) {
        echo "Failed to open directory: $dir";
        return;
    }
    
    // Iterate through items in the directory
    foreach ($files as $file) {
        // Skip the current (.) and parent (..) directories
        if ($file === '.' || $file === '..') {
            continue;
        }
        
        // Create the full path
        $path = "$dir/$file";
        
        // Display directory or file with indentation
        echo str_repeat('&nbsp;', $level * 4); // Indentation for nested items
        echo (is_dir($path) ? "📁 " : "📄 ") . htmlspecialchars($file) . "<br>";
        
        // If it's a directory, recursively list its contents
        if (is_dir($path)) {
            listDirectories($path, $level + 1);
        }
    }
}

// Call the function to list directories, starting from the current directory
echo "<h1>Project Directory Structure</h1>";
echo "<div style='font-family: monospace; line-height: 1.5;'>";
listDirectories(__DIR__);
echo "</div>";
?>
