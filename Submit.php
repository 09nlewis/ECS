<header>
<meta http-equiv="refresh" content="0; url=https://natalie.digital/Event_Creation.html" />
</header>

<?php
//Connecting to sql db.
$con = mysqli_connect("csmysql.cs.cf.ac.uk", "c1609359", "watoocnob2", "c1609359");
//Sending form data to sql db.
mysqli_query($conn, "INSERT INTO Events(Event_ID,Showground_Name,Showground_Address,Date_of_Event, Time_of_first_class,Classes,Special_Instructions,Closing_Date)
	VALUES('$_POST[EventID]', '$_POST[ShowgroundName]', '$_POST[ShowgroundAddress]', '$_POST[TeamEntries]', '$_POST[EventDate]', '$_POST[ClassTime]', '$_POST[Classes]', '$_POST[instructions]','$_POST[ClosingDate]')");


?>