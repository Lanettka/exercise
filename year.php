<?php
function isleap( $year )
{
if( $year % 4 == 0 )
	echo 'Leap year';
else
	echo 'The year is not a leap year';
}
	echo isleap(2015);
?>