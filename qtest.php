<?
    $page_title = 'Тест';
    require_once ('header.php');
    require_once ('funs.php');
    $n = 1; // Номер текущего вопроса в потоке
?>
<main>
    <? if (isset($_POST['submit'])):
        echo '<h1>Результат теста:</h1>';
        echo get_test_result($_POST['user_answers']);
        echo '<a style="font-size: 125%" href="qtest.php" title="Пройти ещё раз">Пройти ещё раз</a>';
    else:
    ?>
    <h1>Быстрый тест</h1>
    <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
        <ol>
            <li class="question">
                <span class="question_text">Считаете ли Вы, что у многих ваших знакомых хороший характер?</span>
                <span class="question_switch">
                    <input type="radio" name="user_answers[<?=$n?>]" value="1" id="q<?=$n?>_true" class="answer_true" checked>
                    <label for="q<?=$n?>_true">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                    <input type="radio" name="user_answers[<?=$n?>]" value="0" id="q<?=$n?>_false" class="answer_false">
                    <label for="q<?=$n++?>_false">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                </span>
            </li>

            <li class="question">
                <span class="question_text">Раздражают ли Вас мелкие повседневные обязанности?</span>
                <span class="question_switch">
                    <input type="radio" name="user_answers[<?=$n?>]" value="1" id="q<?=$n?>_true" class="answer_true" checked>
                    <label for="q<?=$n?>_true">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                    <input type="radio" name="user_answers[<?=$n?>]" value="0" id="q<?=$n?>_false" class="answer_false">
                    <label for="q<?=$n++?>_false">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                </span>
            </li>

            <li class="question">
                <span class="question_text">Верите ли Вы, что ваши друзья преданы Вам? </span>
                <span class="question_switch">
                    <input type="radio" name="user_answers[<?=$n?>]" value="1" id="q<?=$n?>_true" class="answer_true" checked>
                    <label for="q<?=$n?>_true">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                    <input type="radio" name="user_answers[<?=$n?>]" value="0" id="q<?=$n?>_false" class="answer_false">
                    <label for="q<?=$n++?>_false">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                </span>
            </li>

            <li class="question">
                <span class="question_text">Неприятно ли Вам, когда незнакомый человек делает Вам замечание?</span>
                <span class="question_switch">
                    <input type="radio" name="user_answers[<?=$n?>]" value="1" id="q<?=$n?>_true" class="answer_true" checked>
                    <label for="q<?=$n?>_true">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                    <input type="radio" name="user_answers[<?=$n?>]" value="0" id="q<?=$n?>_false" class="answer_false">
                    <label for="q<?=$n++?>_false">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                </span>
            </li>

            <li class="question">
                <span class="question_text">Способны ли Вы ударить собаку или кошку?</span>
                <span class="question_switch">
                    <input type="radio" name="user_answers[<?=$n?>]" value="1" id="q<?=$n?>_true" class="answer_true" checked>
                    <label for="q<?=$n?>_true">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                    <input type="radio" name="user_answers[<?=$n?>]" value="0" id="q<?=$n?>_false" class="answer_false">
                    <label for="q<?=$n++?>_false">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                </span>
            </li>

            <li class="question">
                <span class="question_text">Часто ли Вы принимаете лекарства?</span>
                <span class="question_switch">
                    <input type="radio" name="user_answers[<?=$n?>]" value="1" id="q<?=$n?>_true" class="answer_true" checked>
                    <label for="q<?=$n?>_true">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                    <input type="radio" name="user_answers[<?=$n?>]" value="0" id="q<?=$n?>_false" class="answer_false">
                    <label for="q<?=$n++?>_false">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                </span>
            </li>

            <li class="question">
                <span class="question_text">Часто ли Вы меняете магазин, в который ходите за продуктами?</span>
                <span class="question_switch">
                    <input type="radio" name="user_answers[<?=$n?>]" value="1" id="q<?=$n?>_true" class="answer_true" checked>
                    <label for="q<?=$n?>_true">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                    <input type="radio" name="user_answers[<?=$n?>]" value="0" id="q<?=$n?>_false" class="answer_false">
                    <label for="q<?=$n++?>_false">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                </span>
            </li>

            <li class="question">
                <span class="question_text">Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?</span>
                <span class="question_switch">
                    <input type="radio" name="user_answers[<?=$n?>]" value="1" id="q<?=$n?>_true" class="answer_true" checked>
                    <label for="q<?=$n?>_true">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                    <input type="radio" name="user_answers[<?=$n?>]" value="0" id="q<?=$n?>_false" class="answer_false">
                    <label for="q<?=$n++?>_false">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                </span>
            </li>

            <li class="question">
                <span class="question_text">Тяготят ли Вас общественные обязанности? </span>
                <span class="question_switch">
                    <input type="radio" name="user_answers[<?=$n?>]" value="1" id="q<?=$n?>_true" class="answer_true" checked>
                    <label for="q<?=$n?>_true">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                    <input type="radio" name="user_answers[<?=$n?>]" value="0" id="q<?=$n?>_false" class="answer_false">
                    <label for="q<?=$n++?>_false">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                </span>
            </li>

            <li class="question">
                <span class="question_text">Способны ли Вы ждать более 5 минут, не проявляя беспокойства?</span>
                <span class="question_switch">
                    <input type="radio" name="user_answers[<?=$n?>]" value="1" id="q<?=$n?>_true" class="answer_true" checked>
                    <label for="q<?=$n?>_true">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                    <input type="radio" name="user_answers[<?=$n?>]" value="0" id="q<?=$n?>_false" class="answer_false">
                    <label for="q<?=$n++?>_false">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                </span>
            </li class="question">

            <li class="question">
                <span class="question_text">Часто ли Вам приходят в голову мысли о Вашей невезучести?</span>
                <span class="question_switch">
                    <input type="radio" name="user_answers[<?=$n?>]" value="1" id="q<?=$n?>_true" class="answer_true" checked>
                    <label for="q<?=$n?>_true">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                    <input type="radio" name="user_answers[<?=$n?>]" value="0" id="q<?=$n?>_false" class="answer_false">
                    <label for="q<?=$n++?>_false">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                </span>
            </li>

            <li class="question">
                <span class="question_text">Сохранилась ли у Вас фигура по сравнению с прошлым?</span>
                <span class="question_switch">
                    <input type="radio" name="user_answers[<?=$n?>]" value="1" id="q<?=$n?>_true" class="answer_true" checked>
                    <label for="q<?=$n?>_true">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                    <input type="radio" name="user_answers[<?=$n?>]" value="0" id="q<?=$n?>_false" class="answer_false">
                    <label for="q<?=$n++?>_false">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                </span>
            </li>

            <li class="question">
                <span class="question_text">Можете ли Вы с улыбкой воспринимать подтрунивание друзей?</span>
                <span class="question_switch">
                    <input type="radio" name="user_answers[<?=$n?>]" value="1" id="q<?=$n?>_true" class="answer_true" checked>
                    <label for="q<?=$n?>_true">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                    <input type="radio" name="user_answers[<?=$n?>]" value="0" id="q<?=$n?>_false" class="answer_false">
                    <label for="q<?=$n++?>_false">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                </span>
            </li>

            <li class="question">
                <span class="question_text">Нравится ли Вам семейная жизнь?</span>
                <span class="question_switch">
                    <input type="radio" name="user_answers[<?=$n?>]" value="1" id="q<?=$n?>_true" class="answer_true" checked>
                    <label for="q<?=$n?>_true">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                    <input type="radio" name="user_answers[<?=$n?>]" value="0" id="q<?=$n?>_false" class="answer_false">
                    <label for="q<?=$n++?>_false">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                </span>
            </li>

            <li class="question">
                <span class="question_text">Злопамятны ли Вы?</span>
                <span class="question_switch">
                    <input type="radio" name="user_answers[<?=$n?>]" value="1" id="q<?=$n?>_true" class="answer_true" checked>
                    <label for="q<?=$n?>_true">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                    <input type="radio" name="user_answers[<?=$n?>]" value="0" id="q<?=$n?>_false" class="answer_false">
                    <label for="q<?=$n++?>_false">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                </span>
            </li>

            <li class="question">
                <span class="question_text">Находите ли Вы, что стоит погода, типичная для данного времени года?</span>
                <span class="question_switch">
                    <input type="radio" name="user_answers[<?=$n?>]" value="1" id="q<?=$n?>_true" class="answer_true" checked>
                    <label for="q<?=$n?>_true">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                    <input type="radio" name="user_answers[<?=$n?>]" value="0" id="q<?=$n?>_false" class="answer_false">
                    <label for="q<?=$n++?>_false">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                </span>
            </li>

            <li class="question">
                <span class="question_text">Случается ли Вам с утра быть в плохом настроении? </span>
                <span class="question_switch">
                    <input type="radio" name="user_answers[<?=$n?>]" value="1" id="q<?=$n?>_true" class="answer_true" checked>
                    <label for="q<?=$n?>_true">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                    <input type="radio" name="user_answers[<?=$n?>]" value="0" id="q<?=$n?>_false" class="answer_false">
                    <label for="q<?=$n++?>_false">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                </span>
            </li>

            <li class="question">
                <span class="question_text">Раздражает ли Вас современная живопись?</span>
                <span class="question_switch">
                    <input type="radio" name="user_answers[<?=$n?>]" value="1" id="q<?=$n?>_true" class="answer_true" checked>
                    <label for="q<?=$n?>_true">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                    <input type="radio" name="user_answers[<?=$n?>]" value="0" id="q<?=$n?>_false" class="answer_false">
                    <label for="q<?=$n++?>_false">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                </span>
            </li class="question">

            <li class="question">
                <span class="question_text">Надоедает ли Вам присутствие чужих детей в доме более одного часа?</span>
                <span class="question_switch">
                    <input type="radio" name="user_answers[<?=$n?>]" value="1" id="q<?=$n?>_true" class="answer_true" checked>
                    <label for="q<?=$n?>_true">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                    <input type="radio" name="user_answers[<?=$n?>]" value="0" id="q<?=$n?>_false" class="answer_false">
                    <label for="q<?=$n++?>_false">
                        <span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>
                    </label>
                </span>
            </li>
        </ol>
        <br>
        <button type="submit" name="submit" id="submit_button">Узнать результат</button>
    </form>
    <? endif; ?>
</main>
<? require_once ('footer.php'); ?>
