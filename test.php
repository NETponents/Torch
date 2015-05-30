<html>
  <header>
    
  </header>
  <body>
    <?php
    $testpath = $_GET['t'];
    $testslist = simplexml_load_file('./secure/test/tests.xml');
    $testfullname = '';
    $numquestions = 0;
    for($i = 0; $i <= count($tests->test); $i++)
      {
        if($testslist->test[$i]->path = $testpath)
        {
          $testfullname = $testslist->test[$i]->title;
          $numquestions = $testslist->test[$i]->questions;
          break;
        }
      }
    ?>
    <h1>Instructions</h1>
    <hr />
    <p>You are about to take the test <bold><?php echo $testfullname; ?></bold>. Here are some things to keep in mind:</p>
    <ul>
      <li>DO NOT click the back button.</li>
      <li>DO NOT click refresh.</li>
      <li>DO NOT navigate away from the site until you see the results page.</li>
      <li>DO NOT attempt to hack the system in any way. Doing so will blacklist your IP address.</li>
      <li>DO NOT start the test if your browser does not support JavaScript.</li>
      <li>DO NOT attempt to take this test with Internet Explorer.</li>
      <li>DO read the question completely before answering.</li>
      <li>DO read all the answers before answering.</li>
      <li>DO notify your instructor when finished.</li>
      <li>DO print out the results page for your records.</li>
      <li>DO take your time.</li>
    </ul>
    <br />
    <h1>Browser compatability check</h1>
    <hr />
    <h4>JavaScript test</h4>
    <div id="jstest">Test failed</div>
    <script>
      document.getElementById("jstest").innerHTML = "Test passed";
    </script>
    <br />
    <h1>User information</h1>
    <hr />
    <form method="post" action="./verifytest.php">
      <input type="hidden" name="t" value="<?php echo $testpath; ?>" />
      <input type="hidden" name="n" value="<?php echo $testfullname; ?>" />
      <input type="hidden" name="tq" value="<?php echo $numquestions; ?>" />
      <input type="hidden" name="q" value="0" />
      <input type="hidden" name="r" value="n" />
      Name/ID: <input type="text" name="u" /><br /><br />
      Secure testing code: <input type="password" name="sec"> <br /><br />
      <input type="submit" name="submit" value="Verify" />
    </form>
  </body>
</html>
