<?php

	// File System
	/*
	$textfile = readfile('readme.txt');
	echo $textfile
	*/

	$file = 'newfile.txt';

	if(file_exists($file)){

		// Read File
		// echo readfile($file) . '<br />';

		// Copy File
		// copy($file, 'newfile.txt') . '<br />';

		// Absolute path
		// echo realpath($file) . '<br />';

		// File size
		// echo filesize($file) . '<br />';

		// Rename File
		// rename($file, 'text.txt');

		// Opening a file for READING
		$handle = fopen($file, 'a+');

		// Read the file (1st parameter = file, 2nd parameter = How many bytes to be read)
		// echo fread($handle, filesize($file)) . '<br />';
		// echo fread($handle, 11) . '<br />';

		// Read a single line
		// echo fgets($handle);

		// Read a single character
		// echo fgetc($handle);

		// Writing to a file
		fwrite($handle, "\nEverything popular is wrong");

	} else {
		echo "File does not exist";
	}

	// Make new directory
	// mkdir('quotes');

?>