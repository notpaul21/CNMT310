<?php

require_once("WebServiceClient.php");

$result = null;

	$requestClient = new WebServiceClient("https://cnmt310.classconvo.com/classreg/");
	$requestClient->setPostFields(array(
        "apikey" => "api75", 
        "apihash" => "wxcSHb3CF6",
		"action" => "liststudents",
		"data" => []
	));
	$requestResult = $requestClient->send();

	$result = json_decode($requestResult);
	if (json_last_error() !== JSON_ERROR_NONE) {
		$backendError = "Your class list didn't return json!";
	} else if ($result->result === "Error") {
		$backendError = "API-side Error: ".$result->data->message;
	}

echo "<!DOCTYPE html>\n";
echo "<html lang=\"en\">\n";
echo "<head>\n";
echo "    <meta charset=\"UTF-8\">\n";
echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
echo "    <title>PHP Text Display</title>\n";
echo "</head>\n";
echo "<body>\n";
echo "    <h1>" . $requestResult . "</h1>\n";
echo "</body>\n";
echo "</html>\n";
