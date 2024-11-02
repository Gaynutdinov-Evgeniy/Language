/*
ЯЗЫК:
Высокоуровневый
Объектно-ориентированный

ТИПИЗАЦИЯ:
Динамическая
Слабая
Неявная
*/

<?php
require_once 'example_file.php';

use ExampleFileName\ExampleFile as EF;

class Main
{
    public $variable_a = 1;                                                                 // int (целые числа)
    public $variable_b = 1.1;                                                               // float (чмсла с плавающей точкой)
    public $variable_c = '1';                                                               // str (строка)
    public $variable_d = true;                                                              // bool (булевое значение)
    public $variable_e = null;                                                              // NoneType (без типа)
    public $variable_f = array(1, 2, 3);                                                    // list (спиок)
    public $variable_g = [1, 2, 3];                                                         // list (спиок с коротким синтаксисом)
    public $variable_h = array('key1' => 1, 'key2' => 2);                                   // dict (словарь, ассоциативный массив)
    public $variable_i = ['key1' => 1, 'key2' => 2];                                        // dict (словарь, ассоциативный массив с коротким синтаксисом)

    public $name;
    public $age;
    public $result;

    public function __construct($name, $age)
    {
        $this->name == $name;
        $this->age == $age;
    }


    public $public_variable;                                                                // public (публичная переменна)
    protected $protected_variable;                                                          // protected (защищённая переменн)
    private $privat_variable;                                                               // privat (приватная переменна)

    public function public_fun()                                                            // public (публичная фукция)
    {
    }
    protected function protected_fun()                                                      // protected (защищённая фукция)
    {
    }
    private function privat_fun()                                                           // privat (приватная фукция)
    {
    }


    public function calculator($number_1, $number_2, $action)
    {
        if ($action == '+') {
            $this->result = $number_1 + $number_2;                                          // 1 + 2 = 3
            return $this->result;
        } else if ($action == '-') {
            $this->result = $number_1 - $number_2;                                          // 2 - 1 = 1
            return $this->result;
        } else if ($action == '*') {
            $this->result = $number_1 * $number_2;                                          // 2 * 3 = 6
            return $this->result;
        } else if ($action == '/') {
            $this->result = $number_1 / $number_2;                                          // 6 / 3 = 2
            return $this->result;
        } else if ($action == '^') {
            $this->result = $number_1 ** $number_2;                                         // 2 ** 3 = 8
            return $this->result;
        } else if ($action == '%') {
            $this->result = $number_1 % $number_2;                                          // 5 % 2 = 1
            return $this->result;
        } else {
            $this->result = 'Error';
            return $this->result;
        }
    }


    public function comparisons($number_1, $number_2)
    {
        if ($number_1 == $number_2) {
            return '==';
        } else if ($number_1 != $number_2) {
            return '!=';
        } else if ($number_1 > $number_2) {
            return '>';
        } else if ($number_1 < $number_2) {
            return '<';
        } else if ($number_1 >= $number_2) {
            return '>=';
        } else if ($number_1 <= $number_2) {
            return '<=';
        } else {
            return 'Error';
        }
    }


    public function algebra_of_logic($number_1, $number_2, $number_3, $number_4)
    {
        if ($number_1 + $number_2 == 2 && $number_3 + $number_4 == 2) {                     // 1, 1, 1, 1 
            return '&&';
        } else if ($number_1 + $number_2 == 2 || $number_3 + $number_4 == 2) {              // 1, 1, 1, 2
            return '||';
        } else {
            return 'Error';
        }
    }


    public function cycles($j)
    {
        if ($j == 1) {
            for ($i = 0; $i < 100; $i++) {                                                  // 0 ... 99
                echo $i;
            }
        } else if ($j == 2) {                                                               // 0 ... 99
            $i = 0;
            while ($i < 100) {
                echo $i;
                $i++;                                                                       // инкремент
            }
        } else if ($j == 3) {
            $arr = [1, 2, 3];
            foreach ($arr as $i) {
                echo $i;
            }
        } else {
            return 'Error';
        }
    }

    public function exceptions()
    {
        try {                                                                               // Стандартный ход
            $variable_1 = 10;
            $variable_2 = 0;
            $variable_3 = $variable_1 / $variable_2;
            return $variable_3;
        } catch (Exception $e) {                                                            // Ловит исключения 
            echo 'Error' . $e;
        } finally {                                                                         // Выполняется в любом случае
            return 'Finally';
        }
    }
}

class MainInheritance extends Main
{
    public function get_name()
    {
        return $this->name;
    }
}

$class_main = new Main('Jarvis', 30);
$result_main = $class_main->exceptions();
echo "Результат {$result_main}";                                                            // Форматированная строка

$class_main_inheritance = new MainInheritance('Edit', 20);
$result_main_inheritance = $class_main_inheritance->get_name();
echo "Результат {$result_main_inheritance}";

$ef = new EF;
$example = $ef->example();
echo $example;
?>