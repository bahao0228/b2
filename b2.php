<?php

//Câu 4
$haystack = "Hello, welcome to the world of PHP!";
$needle = "PHP";
$position = strpos($haystack, $needle);
if ($position !== false) {
    echo "Chuỗi con '$needle' được tìm thấy tại vị trí $position trong chuỗi gốc.";
} else {
    echo "Chuỗi con '$needle' không được tìm thấy trong chuỗi gốc.";
}
echo '</br>';

//Câu 7
$originalString = "Hello, welcome to the world of PHP!";
$upperCaseString = strtoupper($originalString);
echo "Chuỗi gốc: " . $originalString . "\n";
echo "Chuỗi sau khi chuyển đổi thành chữ hoa: " . $upperCaseString;

echo '</br>';

//Câu 9
$originalString = "hello, welcome to the world of php!";
$capitalizedString = ucwords($originalString);
echo "Chuỗi gốc: " . $originalString . "\n";
echo "Chuỗi sau khi chuyển đổi: " . $capitalizedString;
echo '</br>';

//Câu 14
$array = ["Hello", "world", "from", "PHP"];
$joinedString = implode(" ", $array);
echo "Mảng sau khi nối: " . $joinedString;
echo '</br>';

//Câu 16
function endsWith($string, $substring) {
    $substringLength = strlen($substring); 
    // Lấy chiều dài của chuỗi chính
    $stringLength = strlen($string);  
    // Nếu chiều dài của chuỗi con lớn hơn chuỗi chính, trả về false
    if ($substringLength > $stringLength) {
        return false;
    }
    // So sánh phần cuối của chuỗi chính với chuỗi con
    return substr($string, $stringLength - $substringLength) === $substring;
}
$mainString = "Hello, welcome to PHP!";
$subString = "PHP!";

if (endsWith($mainString, $subString)) {
    echo "Chuỗi chính '$mainString' kết thúc bằng chuỗi con '$subString'.";
} else {
    echo "Chuỗi chính '$mainString' không kết thúc bằng chuỗi con '$subString'.";
}
echo '</br>';

//Câu 17
$mainString = "Hello, welcome to the world of PHP!";
$subString = "world";
$result = strstr($mainString, $subString);
if ($result !== false) {
    echo "Chuỗi chính '$mainString' chứa chuỗi con '$subString'.";
} else {
    echo "Chuỗi chính '$mainString' không chứa chuỗi con '$subString'.";
}
echo '</br>';

//Câu 18
$originalString = "Hello, World! 123 @#$%^&*()";
$replacementChar = '*';
$modifiedString = preg_replace('/[^a-zA-Z0-9]/', $replacementChar, $originalString);
echo "Chuỗi gốc: " . $originalString . "\n";
echo "Chuỗi sau khi thay thế: " . $modifiedString;
?>

