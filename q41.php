<?php
// Global variable
$globalVar = 10;

function demonstrateScope() {
    // Local variable (accessible only within this function)
    $localVar = 5;
    echo "Inside the function:\n";
    echo "Local Variable: $localVar\n";
    
    // Accessing the global variable inside the function using 'global' keyword
    global $globalVar;
    echo "Global Variable (using 'global' keyword): $globalVar\n";
    
    // Static variable retains its value between function calls
    static $staticVar = 0;
    $staticVar++;
    echo "Static Variable Value (incremented): $staticVar\n";
}

echo "Global Variable outside the function: $globalVar\n\n";

// Call the function multiple times to observe static variable behavior
demonstrateScope();
demonstrateScope();
demonstrateScope();
echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
