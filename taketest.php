<?php
$test_path = $_POST['t'];
$test_name = $_POST['n'];
$test_numquest = $_POST['tq'];
$test_curquest = $_POST['q'];
$test_correct = $_POST['r'];
$auth_usr = $_POST['u'];

$debug = false;

$testdata = simplexml_load_file('./secure/test/' . $test_path . '/test.xml');

if($debug)
{
  echo $test_path . '<br />';
  echo $test_name . '<br />';
  echo $test_numquest . '<br />';
  echo $test_curquest . '<br />';
  echo $test_correct . '<br />';
  echo $auth_usr . '<br />';
  echo $_POST['ans'];
  echo '<a href="./secure/test/' . $test_path . '/test.xml">Test datafile path</a>';
}
?>
<h1><?php echo $auth_user; ?>: <?php echo $test_name; ?></h1>
<hr />
<?php
if($test_curquest > 0)
{
  $prevans = $_POST['ans'];
  $g = $test_curquest - 1;
  if((string)$testdata->q[(int)$g]->c == (string)$prevans)
  {
    $test_correct = $test_correct . 'r';
  }
  else
  {
    $test_correct = $test_correct . 'w';
  }
}
if($test_curquest > $test_numquest)
{
    echo '<p>Click finish test to see results.</p>
  <form method="post" action="./results.php">
  <input type="hidden" name="t" value="' . $test_path . '" />
  <input type="hidden" name="n" value="' . $test_name . '" />
  <input type="hidden" name="tq" value="' . $test_numquest . '" />
  <input type="hidden" name="r" value="' . $test_correct . '" />
  <input type="hidden" name="u" value="' . $auth_usr . '" />
  <input type="submit" name="submit" value="Finish test" />
  </form>';
}
else
{
  //echo '<h3>' . $testdata->q[(int)$test_curquest]->quest . '</h3>';
  //echo '<h3>' . str_replace("#","<br>",$testdata->q[(int)$test_curquest]->quest) . '</h3>';
  echo '<h3>' . str_replace("#","  ",$testdata->q[(int)$test_curquest]->quest) . '</h3>';
  $test_curquest++;
  echo 'Answer: 
  <form method="post" action="./taketest.php">
  <input type="hidden" name="t" value="' . $test_path . '" />
  <input type="hidden" name="n" value="' . $test_name . '" />
  <input type="hidden" name="tq" value="' . $test_numquest . '" />
  <input type="hidden" name="q" value="' . $test_curquest . '" />
  <input type="hidden" name="r" value="' . $test_correct . '" />
  <input type="hidden" name="u" value="' . $auth_usr . '" />
  <input type="text" name="ans" />
  <input type="submit" name="submit" value="Next >>" />
  </form>';
}
?>
