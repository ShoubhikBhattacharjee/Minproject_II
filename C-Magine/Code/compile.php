<?php
if(isset($_POST['code'])) {
    $code = $_POST['code'];
    $filename = "program.c";
    file_put_contents($filename, $code);

    $outputFile = "output.exe";
    $command = "gcc $filename -o $outputFile 2>&1"; // Compile
    $compileOutput = shell_exec($command);

if (file_exists($outputFile)) {
    $runOutput = shell_exec("output.exe 2>&1"); // Run without `./`
    echo "Compilation Success! Output:<br><pre>$runOutput</pre>";
} else {
    echo "Compilation Error:<br><pre>$compileOutput</pre>";
}
}
?>