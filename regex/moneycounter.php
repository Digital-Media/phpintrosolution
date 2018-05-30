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
            // teststring.txt, no $matches[1] without " EUR"
            // preg_match_all("/( [1-9])([0-9]*)(,[0-9]{2}|,-|)( EUR\b)/", $input, $matches);
            // teststring.txt, $matches[1] contains only decimals additional () around decimals
            // preg_match_all("/(( [1-9])([0-9]*)(,[0-9]{2}|,-|))( EUR\b)/", $input, $matches);
            preg_match_all("/(( [1-9]{1}|^[1-9]|\R[1-9]| 0[^0-9]|^0|\R0[^0-9])([0-9]*)(,[0-9]{2}|,-|))( EUR\b)/", $input, $matches); // challange.txt

            $sum = 0;
            //print_r($matches);
            //*// complicated version with $matches containing valid amounts with decimals and " EUR"
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
            //*/
            /*// simple version with $matches[1] containing all valid decimals without " EUR". Additional () around the decimals are necessary in regex
            foreach ($matches[1] as $money) {
                $amount[]= str_replace(",", ".", $money);
            }
            $sum = array_sum($amount);
            //*/


            echo "<p>Original text was: <blockquote>" . nl2br(htmlentities($input)) . "</blockquote></p>", PHP_EOL;
            echo "<p>The total amount is: <strong>" . number_format($sum, 2, ',', '.') . " EUR</strong></p>", PHP_EOL;
            ?>
            <a href="index.html">Start Over</a>
</body>
</html>
