<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Money Counter</title>
</head>
<body>
            <h1>Money Counter</h1>
            <p>Using Regular Expressions</p>
            <h2 >Counting Results</h2>
            <?php
            $input = $_POST["input"];
            //preg_match("/((^[1-9]| [1-9])([0-9]*)(,[[:digit:]]{2}|,-|)( EUR\h| EUR\b))/g", $input, $matches);
            preg_match_all("/(^[1-9]| [1-9])([0-9]*)(,[[:digit:]]{2}|,-|)( EUR\h| EUR\b)/", $input, $matches);

            $sum = 0;
            //print_r($matches);
            foreach ($matches[0] as $money) {
                // $amount = str_replace(",", ".", $money);

                // replace comma with dot to enable adding prices
                // replacing " EUR" with nothing for conversion into numbers
                $amount = preg_replace_callback_array(
                    [
                        '|,|' => function ($match) {
                            return str_replace(",", ".", $match[0]);
                        },
                        '|\sEUR|' => function ($match) {
                            return str_replace(" EUR", "", $match[0]);
                        }
                    ],
                    $money
                );
                $amount = (float)trim($amount);
                //var_dump($amount);

                $sum += $amount;
            }

            echo "<p>Original text was: <blockquote>" . htmlentities($input) . "</blockquote></p>", PHP_EOL;
            echo "<p>The total amount is: <strong>" . number_format($sum, 2, ',', '.') . " EUR</strong></p>", PHP_EOL;
            ?>
            <a href="index.html">Start Over</a>
</body>
</html>
