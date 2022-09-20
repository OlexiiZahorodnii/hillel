<?php
//вся дз сделана на основе ваших примеров
//т.к. зачем искать другие решения, если есть готовое
$arr = [1, 2, 3, [11, 12, 13,], 4, 5,[14, 15,],];
function arrayParse(array $arr, int $exteriorKey): array
{
    $result = [];
    foreach ($arr as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, arrayParse($value, $exteriorKey));
        } else {
            if ($key === $exteriorKey) {
                $result[] = $value;
            }
        }
    }
    return $result;
}

var_dump(arrayParse($arr, 1));//вывел элементы
echo '<br/>';

$string = 'big bob broke bad';
$SubStr = 'b';
function searchSubStr(string $needle, string $haystack): int
{
    return substr_count($needle, $haystack);
    }

var_dump(searchSubStr($string, $SubStr));//в колличестве 5 шт.
/*но тут учитываются только 'b', 
а 'B' будет не учитываться.*/
echo '<br/>';

function arraySumRecursive (array $arr): int
{
	$sum = 0;
	foreach($arr as $value){
		if (is_array($value)) {
			$sum += arraySumRecursive($value);
		} else {
			$sum += $value;
		}
	}
	return $sum;
}
var_dump(arraySumRecursive($arr));//сума масива
echo '<br/>';

$BiggerSquare = 64;
$SmallerSquare = 16;
function countSquare(int $BiggerSquare, int $SmallerSquare): float
{
	return $BiggerSquare/$SmallerSquare;
}
var_dump(countSquare($BiggerSquare, $SmallerSquare));
//внесс для изменения эту строку для git.
?>