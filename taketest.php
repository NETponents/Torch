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
  echo $test_path . '<br />';
  echo $test_name . '<br />';
  echo $test_numquest . '<br />';
  echo $test_curquest . '<br />';
  echo $test_correct . '<br />';
  echo $auth_usr . '<br />';
}
?>
<h1><?php echo $test_name; ?></h1>
