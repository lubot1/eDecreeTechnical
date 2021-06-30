<?php
if (isset($_POST['submit'])) {

    $input = $_POST['arrayInput'];
    $numSet = explode(" ", $input);
    sort($numSet);
    
    $numSetFrequency = array_count_values($numSet);
    $arrayLength = count($numSet);

    // Simple average calculator
    $mean = array_sum($numSet)/$arrayLength;

    // Check if there is any mode in the first place
    if (array_sum($numSetFrequency) == count($numSetFrequency)) {
        $mode = "None";
    } else {
        // Creates an array of most common numbers
        $mode = array_keys($numSetFrequency, max($numSetFrequency));
        // Then implodes it if there are more than one
        $mode = implode($mode, ", ");
    }

    // Check if the array length is odd or even to find which indices to check for the median
    if($arrayLength % 2 == 0) {
        $index = $arrayLength / 2;
        $median = ($numSet[$index] + $numSet[$index - 1]) / 2;
    } else {
        $index = ($arrayLength + 1) / 2;
        $median = $numSet[$index - 1];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="" method="post" name="userInput">
            <label for="arrayInput">Enter set of numbers, separated by spaces</label>
            <input type="text" name="arrayInput">
            <input type="submit" value="Calculate" name="submit">
        </form>
        <section id="output">
            <h2>Output</h2>
            <p>Mean: <?= (isset($mean))?$mean:"" ?></p>
            <p>Median: <?= (isset($median))?$median:"" ?></p>
            <p>Mode: <?= (isset($mode))?$mode:"" ?></p>
        </section>
    </main>
    
    
</body>
</html>