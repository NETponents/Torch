<?php
$test_path = $_GET['t'];
$test_name = $_GET['n'];
$test_numquest = $_GET['tq'];
$test_curquest = $_GET['q'];
$test_correct = $_GET['r'];
$auth_usr = $_GET['u'];
$auth_secret = $_GET['sec'];

$testauthsecret = '';

$testslist = simplexml_load_file('./secure/test/tests.xml');
for($i = 0; $i <= count($testslist->test); $i++)
{
  if($testslist->test[$i]->path = $test_path)
  {
    $testauthsecret = $testslist->test[$i]->pass;
    break;
  }
}
if($testauthsecret = $auth_secret)
{
  echo '<p>Click begin to start the test</p>
  <form method="post" action="./taketest.php">
  <input type="hidden" name="t" value="' . $test_path . '" />
  <input type="hidden" name="n" value="' . $test_name . '" />
  <input type="hidden" name="tq" value="' . $test_numquest . '" />
  <input type="hidden" name="q" value="0" />
  <input type="hidden" name="r" value="n" />
  <input type="hidden" name="u" value="' . $auth_usr . '" />
  <input type="submit" name="submit" value="Begin test" />
  </form>';
}
else
{
  echo '<h3>Error 0x01. Please go back and try again.</h3>';
  echo '<p>E(bad_auth_key)</p>';
}
?>
