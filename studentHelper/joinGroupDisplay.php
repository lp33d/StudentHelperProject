<link rel="stylesheet" href="CSS/main.css" type="text/css">
<?PHP
require 'Database/configure.php';

$conn=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, MYSQL_DB);

$groups="SELECT * FROM studyGroup";

$result=(mysqli_query($conn,$groups));
// $row=mysqli_fetch_array($result);

while($row=mysqli_fetch_array($result)) {
echo
"<body>
  <section id='externalWrapper'>
   <section id='internalWrapper'>
    <div class='row cf'>
      <div class='half'>
        <form name='display' action='joinGroup.php' method='POST' >
          <div class='row cf'>
            <div class='row cf'>
              <br>
              <p class='inputName'>Study Group Name: {$row['studyName']} </p>
              </div>
              <div class='row cf'>
              <br>
              <p class='inputName'>Study Group Room:   {$row['room']} </p>
              </div>
              <div class='row cf'>
              <br>
              <p class='inputName'>Study Group Date: {$row['date']} </p>
              </div>
              <div class='row cf'>
              <br>
              <p class='inputName'>Study Group Time:  {$row['time']} </p>
              </div>
              <br>
              <button id='submit'  class='button'>Join Group</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</section>
</body>";
}

/*
if (isset($_POST['submit'])) {
echo
"
<body>
  <section id='externalWrapper'>
   <section id='internalWrapper'>
    <div class='row cf'>
      <div class='half'>
        <form name='display' action='joinGroup.php' method='POST' >
          <div class='row cf'>
            <div class='half'>
              <p class='inputName'>Study Group Name: '{$row['studyName']}' </p><p value= '{$row['studyName']}'></p>
              <p class='inputName'>Study Group Name: '{$row['studyName']}' </p><p value= '{$row['studyName']}'></p>
              <p class='inputName'>Study Group Name: '{$row['studyName']}' </p><p value= '{$row['studyName']}'></p>
              <p class='inputName'>Study Group Name: '{$row['studyName']}' </p><p value= '{$row['studyName']}'></p>
              <button id='submit'  class='button'>Join Group</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</section>
</body>";
} */
//header('location: joinGroup.php');

?>
