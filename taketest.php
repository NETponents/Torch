<?php
$test_path = $_POST['t'];
$test_name = $_POST['n'];
$test_numquest = $_POST['tq'];
$test_curquest = $_POST['q'];
$test_correct = $_POST['r'];
$auth_usr = $_POST['u'];

$debug = true;

$testdata = simplexml_load_file('./secure/test/' . $test_path . '/test.xml');

?>
<?php
if($debug == true)
{
  echo $test_path;
  echo $test_name;
  echo $test_numquest;
  echo $test_curquest;
  echo $test_correct;
  echo $auth_usr;
}
?>
<h1><?php echo $test_name; ?></h1>
