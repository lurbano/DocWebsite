<?php
echo htmlspecialchars("Hello: " . $_GET["text"]);

$data = [
  "user" => "lurbano",
  "text" => $_GET["text"]
};

// $data = $_GET["text"];
$dataString = json_encode($data);

file_put_contents("dataFile.json", $dataString);

echo "saved Data";

?>
