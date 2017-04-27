
<!--					<?php
$db = pg_connect("host=localhost port=5432 dbname=studyGroup user=postgres password=password");
$result = pg_query($db, "SELECT * FROM room where study_name = '$_POST[studyName]'");
$row = pg_fetch_assoc($result);
if (isset($_POST['submit']))
{
echo "<ul>
<form name='update' action='joinGroup.php' method='POST' >
<li>studyGroup name:</li><li><input type='text' name='studyName_updated' value='$row[study_name]'  /></li>
<li>room:</li><li><input type='text' name='room_name_updated' value='$row[room_name]' /></li>
<li>Projector:</li><li><input type='text' name='projector_updated' value='$row[projector]' /></li>
<li>Date :</li><li><input type='text' name='date_updated' value='$row[date]' /></li>
<li>Time:</li><li><input type='text' name='time_updated' value='$row[time]' /></li>
<li><input type='submit' name='new' /></li>
  </form>
</ul>";
}
if (isset($_POST['new']))
{
$result1 = pg_query($db, "UPDATE room SET study_name = '$_POST[studyName_updated]', study_name = '$_POST[studyName_updated]',
projector = '$_POST[projector_updated]', projector = '$_POST[projector_updated]',date = '$_POST[date_updated]',
time = '$_POST[time_updated]'");
if (!$result1)
{
echo "Update failed!!";
} else
{
echo "Update successfull;";
}
}
?>-->
