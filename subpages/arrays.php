<?
    $page_title = 'Массивы';
    require_once ('../template/header.php');
?>
<main>
    <figure>
        <img src="../images/arrays_meme.jpg" alt="Мем про многомерные массивы" id="arrays_meme">
    </figure>
    <h1>Задачи:</h1>
    <ol>
        <li>
            <p>
                Создать массив размера n, заполненный случайными числами. Вывести каждый элемент массива с новой строки.
                Все четные элементы массива необходимо вывести жирным шрифтом.
            </p>
            <details class="arrays_solution_spoiler">
                <summary>Решение</summary>
                <code class="arrays_solution_code">
$array1 = [];<br>
for ($i = 0, $n = 10; $i < $n; $i++) $array1[] = mt_rand(0, 99);<br>
// Ноль тоже считается четным числом, поэтому не исключается из условия<br>
foreach ($array1 as $num) echo ($num % 2 == 0) ? "&lt;b&gt;$num&lt;/b&gt;&lt;br&gt;" : "$num&lt;/br&gt;";
                </code>
                <h2>Вывод:</h2>
                <code>
                    <?
                        $array1 = [];
                        for ($i = 0, $n = 10; $i < $n; $i++) $array1[] = mt_rand(0, 99);
                        // Ноль тоже считается четным числом
                        foreach ($array1 as $num) echo ($num % 2 == 0) ? "<b>$num</b><br>" : "$num</br>";
                    ?>
                </code>
            </details>
        </li>
        <li>
            <p>
                Создать двумерный массив произвольной длины, содержащий строковые значения.
                Необходимо вывести все элементы массива, начинающиеся на А.
            </p>
            <details class="arrays_solution_spoiler">
                <summary>Решение</summary>
                <code class="arrays_solution_code">
$array2 = [<br>
    array('Athens', 'Moscow', 'Kiev', 'Washington', 'Abu-Dhabi', 'Belgrade', 'Ottawa'),<br>
    array('Athens', 'Moscow', 'Kiev', 'Washington', 'Abu-Dhabi', 'Belgrade', 'Ottawa'),<br>
    array('Rose', 'Lily', 'Aster', 'Violet', 'Sunflower', 'Azalea', 'Camellia', 'Anemone'),<br>
    array('Alaina', 'Valerie', 'Marie', 'Alyssa', 'Kathleen', 'Jane', 'Anna')<br>
];<br>
foreach ($array2 as $sub_array) {<br>
    foreach ($sub_array as $element) if($element[0] == 'A') echo $element, ' ';<br>
}
                </code>
                <h2>Вывод:</h2>
                <code>
                    <?
                        $array2 = [
                            array('Athens', 'Moscow', 'Kiev', 'Washington', 'Abu-Dhabi', 'Belgrade', 'Ottawa'),
                            array('Rose', 'Lily', 'Aster', 'Violet', 'Sunflower', 'Azalea', 'Camellia', 'Anemone'),
                            array('Alaina', 'Valerie', 'Marie', 'Alyssa', 'Kathleen', 'Jane', 'Anna')
                        ];
                        foreach ($array2 as $sub_array) {
                            foreach ($sub_array as $element) if($element[0] == 'A') echo $element, ' ';
                        }
                    ?>
                </code>
            </details>
        </li>
        <li>
            <p>
                Создать двумерный массив, состоящий из чисел. Необходимо вывести общее количество элементов массива
                и количество элементов массива для каждого измерения.
            </p>
            <details class="arrays_solution_spoiler">
                <summary>Решение</summary>
                <code class="arrays_solution_code">
// Инициализируем массив:
$array3 = [];
// Заполняем массив подмассивами (в количестве n) в цикле for:
for ($i = 0, $n = mt_rand(2, 5); $i < $n; $i++) {
    // Инициализация нового подмассива в цикле:
    $sub_array = [];
    // Подмассив будет заполнен 2-10 числами:
    $nums_quantity = mt_rand(2, 10);
    // Заполняем массив случайными уникальными числами от 0 до 99 в цикле:
    do {
        // Генерируем случайное число от 0 до 99
        $random_num = mt_rand(0, 99);
        // Обеспечивает уникальность вносимого значения:
        if (!in_array($random_num, $sub_array)) $sub_array[] = $random_num;
    }
    while (count($sub_array) < $nums_quantity);
    // Добавляем подмассив в родительский массив:
    $array3[] = $sub_array;
}

// Подсчет количества элементов
$total_elements = 0;
foreach ($array3 as $index =>$list) {
    $list_elements = count($list);
    $total_elements += $list_elements;
    echo 'Количество элементов в ', $index + 1, '-м подмассиве: ',
        $list_elements, '&lt;br&gt;';
}
echo "Общее количество элементов в массиве: $total_elements";
echo "Общее количество элементов в массиве (включая подмассивы): ",
    count($array3) + $total_elements;
                </code>
                <h2>Вывод:</h2>
                <code>
                    <?
                        // Инициализируем массив:
                        $array3 = [];
                        // Заполняем массив подмассивами (в количестве n) в цикле for:
                        for ($i = 0, $n = mt_rand(2, 5); $i < $n; $i++) {
                            // Инициализация нового подмассива в цикле:
                            $sub_array = [];
                            // Подмассив будет заполнен 2-10 числами:
                            $nums_quantity = mt_rand(2, 10);
                            // Заполняем массив случайными уникальными числами от 0 до 99 в цикле:
                            do {
                                // Генерируем случайное число от 0 до 99
                                $random_num = mt_rand(0, 99);
                                // Обеспечивает уникальность вносимого значения:
                                if (!in_array($random_num, $sub_array)) $sub_array[] = $random_num;
                            }
                            while (count($sub_array) < $nums_quantity);
                            // Добавляем подмассив в родительский массив:
                            $array3[] = $sub_array;
                        }

                        // Распечатка массива:
                        echo '<b>Полученный массив содержит:</b><br>';
                        foreach ($array3 as $key => $sub_array) {
                            echo "Подмассив ", $key + 1, ': ';
                            foreach ($sub_array as $num) echo '<span class="array_num">', $num, '</span>';
                            echo '<br>';
                        }

                        echo '<br>';

                        // Подсчет количества элементов
                        $total_elements = 0;
                        foreach ($array3 as $index =>$list) {
                            $list_elements = count($list);
                            $total_elements += $list_elements;
                            echo 'Количество элементов в ', $index + 1, '-м подмассиве: ', $list_elements, '<br>';
                        }
                        echo "<br>Общее количество элементов (чисел) в массиве: $total_elements";
                        echo "<br>Общее количество элементов в массиве (включая подмассивы): ",
                            count($array3) + $total_elements;
                    ?>
                </code>
            </details>
        </li>
    </ol>
</main>
<? require_once ('../template/footer.php'); ?>