<?php

$result=mail("test@test.ru","Message from my lending page: Call back $_POST[InputName] by number $_POST[InputTelephone]",
"User named $_POST[InputName] asks to call back by number: $_POST[InputTelephone]");

if ($result) {
echo "<p>Please wait us. We call back soon.</p>";
	}
else {
	
echo "<p>Something went wrong. Please try again.</p>";	
};
?>