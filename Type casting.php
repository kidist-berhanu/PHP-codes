<?php

// Function to determine possible typecasts
function getPossibleTypecasts($value) {
    $possibleTypecasts = [];
    
    // Check if the value is numeric
    if (is_numeric($value)) {
        $possibleTypecasts[] = "integer";
        $possibleTypecasts[] = "float";
    }
    
    // Check if the value is a string
    if (is_string($value)) {
        $possibleTypecasts[] = "string";
        // Check if the string can be converted to a number
        if (is_numeric($value)) {
            $possibleTypecasts[] = "integer";
            $possibleTypecasts[] = "float";
        }
    }
    
    // Check if the value is a boolean
    if (is_bool($value)) {
        $possibleTypecasts[] = "boolean";
    }
    
    // Check if the value is an object
    if (is_object($value)) {
        $possibleTypecasts[] = "object";
    }
    
    return $possibleTypecasts;
}

// Get user input for value and type
echo "Enter the value: ";
$value = readline();
echo "Enter the type (string, integer, float, boolean, object): ";
$type = readline();

// Convert user input to lowercase
$type = strtolower($type);

// Check if the type is valid
if (!in_array($type, ["string", "integer", "float", "boolean", "object"])) {
    echo "Invalid type!\n";
    exit();
}

// Perform typecasts
echo "Casting '{$value}' to '{$type}':\n";

// Get possible typecasts
$possibleTypecasts = getPossibleTypecasts($value);

// Check if the selected type is possible
if (!in_array($type, $possibleTypecasts)) {
    echo "Cannot cast '{$value}' to '{$type}'!\n";
    exit();
}

// Cast value to the selected type
$castedValue = null;
switch ($type) {
    case "string":
        $castedValue = (string) $value;
        break;
    case "integer":
        $castedValue = (int) $value;
        break;
    case "float":
        $castedValue = (float) $value;
        break;
    case "boolean":
        $castedValue = (bool) $value;
        break;
    case "object":
        $castedValue = (object) $value;
        break;
}

// Display the casted value
echo "Casted value: ";
var_dump($castedValue);
?>
