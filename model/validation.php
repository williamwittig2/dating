<?php
// ----- VALIDATION FUNCTIONS -----
// Name validation
function validName($str) {
	for ($i = 0; $i < strlen($str); $i++) {
		// If any character is not alphabetic
		if (!ctype_alpha($str[$i])) {
			return false;
		}
	}

	// Checking if the name is at least one letter
	return strlen(trim($str)) > 0;
}

// Age validation
function validAge($age) {
	// Checking if age is between 18 and 118
	return ($age >= 18 && $age <= 118);
}

// Phone number validation
function validPhone($phone) {
	for ($i = 0; $i < strlen($phone); $i++) {
		// Checking if any character is not a digit
		if (!ctype_digit($phone[$i])) {
			return false;
		}
	}

	// Ensuring that the phone number is either 7 or 10 numbers long
	return (strlen(trim($phone)) == 10 || strlen(trim($phone)) == 7);
}

// Email validation
function validEmail($email) {
	// Ensuring the email has a '@' and '.'
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Outdoor interests validation
function validOutdoor($outdoorInterests) {
	// If no outdoor interests were selected
	if (empty($outdoorInterests)) {
		return true;
	}

	// Loops through the user choices
	foreach ($outdoorInterests as $outdoorInterest) {
		// If the choice is not in the list of valid choices
		if (!in_array($outdoorInterest, getOutdoorInterests())) {
			return false;
		}
	}

	// Return true if no invalid values were found
	return true;
}

// Indoor interests validation
function validIndoor($indoorInterests) {
	// If no indoor interests were selected
	if (empty($indoorInterests)) {
		return true;
	}

	// Loops through the user choices
	foreach ($indoorInterests as $indoorInterest) {
		// If the choice is not in the list of valid choices
		if (!in_array($indoorInterest, getIndoorInterests())) {
			return false;
		}
	}

	// Return true if no invalid values were found
	return true;
}