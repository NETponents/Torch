<html>
  <header>
    
  </header>
  <body>
    <?php
    $testpath = $_GET['t'];
    $testslist = simplexml_load_file('./secure/test/tests.xml');
    $testfullname = '';
    for($i = 0; $i <= count($tests->test); $i++)
      {
        if($testslist->test[$i]->path = $testpath)
        {
          $testfullname = $testslist->test[$i]->title;
          break;
        }
      }
    ?>
    <h1>Instructions</h1>
    <p>You are about to take the test <bold><?php echo $testfullname; ?></bold>. </p>
  </body>
</html>
