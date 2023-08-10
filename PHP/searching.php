<?php
$stateList = "California, Texas, New York, Nevada, Massachusetts, Oregon";
$states = explode(', ', $stateList);

$stateEndingWithXas = "";

foreach ($states as $state) {
    if (substr($state, -3) === "xas") {
        $stateEndingWithXas = $state;
        break;
    }
}

if (!empty($stateEndingWithXas)) {
    $newStateList = $stateList . ', ' . $stateEndingWithXas;
    echo "State found and added: $stateEndingWithXas<br>";
    echo "Updated state list: $newStateList";
} else {
    echo "No state found ending with 'xas'.";
}

// start with M and end with s
$matchingState = "";

foreach ($states as $state) {
    if (substr($state, 0, 1) === "M" && substr($state, -1) === "s") {
        $matchingState = $state;
        break;
    }
}

if (!empty($matchingState)) {
    echo "Matching state found: $matchingState";
} else {
    echo "No state found starting with 'M' and ending with 's'.";
}
?>
