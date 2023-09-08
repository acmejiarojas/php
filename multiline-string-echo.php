<?php
	echo "1. A multiline string echo statement";
	echo "<br / >";
	echo "<br / >";
	
	$author = "Alfred E Newman";
	echo "This is a Headline
	
	This is the first line.
	This is the second.
	Written by $author.";
	
	echo "<br />";
	echo "<br />";
	echo "2. A multiline string Assignment";
	echo "<br / >";
	
	$text = "This is a Headline
	
	This is the first line.
	This is the second.
	Written by $author.";	
	
	echo "<br / >";
	echo "3. Alternative multiline echo statement";
	echo "<br / >";
	echo "<br / >";
	echo <<<_END
	This is a Headline
	
	This is the first line.
	This is the second.
	- Written by $author
	_END;
?>
