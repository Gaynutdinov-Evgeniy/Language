/*
ЯЗЫК:
Высокоуровневый
Объектно-ориентированный

ТИПИЗАЦИЯ:
Динамическая
Слабая
Неявная
*/

class Main {
    constructor(name, age) {
        this.name = name;
        this.age = age;
    }

    variables(){
        this.variable_a = 1;                                // number (числа)
        this.variable_b = '1';                              // string (строка)
        this.variable_c = true;                             // boolean
        this.variable_d = null;                             // null
        this.variable_e;                                    // undefined
        this.variable_f = 111111111111111111111111111111;   // bigInt
        this.variable_g = Symbol();                         // symbol
        this.variable_h = [1, 2, 3];                        //
        this.variable_i = {'key1' : 1, 'key2' : 2};         //
    } 
}