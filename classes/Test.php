<?
    class Test {
        private $questions = [
            1 => 'Считаете ли Вы, что у многих ваших знакомых хороший характер?',
            2 => 'Раздражают ли Вас мелкие повседневные обязанности?',
            3 => 'Верите ли Вы, что ваши друзья преданы Вам?',
            4 => 'Неприятно ли Вам, когда незнакомый человек делает Вам замечание?',
            5 => 'Способны ли Вы ударить собаку или кошку?',
            6 => 'Часто ли Вы принимаете лекарства?',
            7 => 'Часто ли Вы меняете магазин, в который ходите за продуктами?',
            8 => 'Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?',
            9 => 'Тяготят ли Вас общественные обязанности?',
            10 => 'Способны ли Вы ждать более 5 минут, не проявляя беспокойства?',
            11 => 'Часто ли Вам приходят в голову мысли о Вашей невезучести?',
            12 => 'Сохранилась ли у Вас фигура по сравнению с прошлым?',
            13 => 'Можете ли Вы с улыбкой воспринимать подтрунивание друзей?',
            14 => 'Нравится ли Вам семейная жизнь?',
            15 => 'Злопамятны ли Вы?',
            16 => 'Находите ли Вы, что стоит погода, типичная для данного времени года?',
            17 => 'Случается ли Вам с утра быть в плохом настроении?',
            18 => 'Раздражает ли Вас современная живопись?',
            19 => 'Надоедает ли Вам присутствие чужих детей в доме более одного часа?'
        ];

        private $right_answers = [
            1 => false, 2 => false, 3 => true, 4 => false, 5 => false,
            6 => false, 7 => false, 8 => false, 9 => true, 10 => true,
            11 => false, 12 => false, 13 => true, 14 => true, 15 => false,
            16 => false, 17 => false, 18 => false, 19 => true];

        public function generateForm() {
            echo '<h1>Быстрый тест</h1>';
            echo '<form method="post" action="', $_SERVER['PHP_SELF'], '">';
            echo '<ol>';
            for ($n = 1; $n <= count($this->questions); $n++) {
                echo '<li class="question">';
                echo '<span class="question_text">', "$n. ", $this->questions[$n], '</span>';
                echo '<span class="question_switch">';
                echo '<input type="radio" name="user_answers[', $n, ']" value="1" id="q', $n, '_true" class="answer_true" checked>';
                echo '<label for="q', $n, '_true">';
                echo '<span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>';
                echo '</label>';
                echo '<input type="radio" name="user_answers[', $n, ']" value="0" id="q', $n, '_false" class="answer_false">';
                echo '<label for="q', $n, '_false">';
                echo '<span><img src="images/icons/check-icn.svg" alt="Checked Icon"></span>';
                echo '</label>';
                echo '</span>';
                echo '</li>';
            }
            echo '</ol><br>';
            echo '<button type="submit" name="submit" id="submit_button">Узнать результат</button>';
            echo '</form>';
        }

        public function getResults($user_answers): string {
            for ($i = 1, $points = 0; $i <= count($user_answers); $i++) {
                if ($user_answers[$i] == $this->right_answers[$i]) $points++;
            }
            echo '<h1>Результат теста:</h1>';
            echo "<p>Вы набрали $points баллов</p>";
            if ($points < 8) return '<p style="color: red">Вашим друзьям можно посочувствовать.</p>';
            elseif ($points <= 15) return '<p style="color: darkorange">Вы не лишены недостатков, но с вами можно ладить.</p>';
            else return '<p style="color: green">У Вас покладистый характер</p>';
        }
    }