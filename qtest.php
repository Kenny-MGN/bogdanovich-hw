<?
    $page_title = 'Тест';
    require_once ('header.php');
    require_once('classes/Test.php');
?>
<main>
    <?
        $test = new Test();
        if (isset($_POST['submit'])){
            echo $test->getResults($_POST['user_answers']);
            echo '<a style="font-size: 125%" href="qtest.php" title="Пройти ещё раз">Пройти ещё раз</a>';
        }
        else $test->generateForm();
    ?>
</main>
<? require_once ('footer.php'); ?>