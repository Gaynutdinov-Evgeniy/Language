'''
ЯЗЫК:
Высокоуровневый
Объектно-ориентированный

ТИПИЗАЦИЯ:
Динамическая
Слабая
Неявная
'''

from example_file import ExampleFile as EF

class Main:
    variable_a = 1                                                                  # int (целые числа)
    variable_b = 1.1                                                                # float (чмсла с плавающей точкой)
    variable_c = '1'                                                                # str (строка)
    variable_d = True                                                               # bool (булевое значение)
    variable_e = None                                                               # NoneType (без типа)
    variable_f = 1 + 2j                                                             # NoneType complex (комплексное число, без типа)
    variable_g = [1, 2, 3]                                                          # list (спиок)
    variable_h = (1, 2, 3)                                                          # tuple (кортеж)
    variable_i = {1, 2, 3}                                                          # set (множества)
    variable_j = {'key1' : 1, 'key2' : 2}                                           # dict (словарь, ассоциативный массив)


    def __init__(self, name: str, age: int) -> None:                                # функция инициализации
        self.name = name
        self.age = age


    def public_fun(self):                                                           # public (публичная фукция) 
        public_variable = 1                                                         # public (публичная переменна) 

    def _protected_fun():                                                           # protected (защищённая фукция)
        _protected_variable = 1                                                     # protected (защищённая переменна)

    def __privat_fun():                                                             # privat (приватная фукция)
        __privat_variable = 1                                                       # privat (приватная переменна)


    def calculator(self, number_1, number_2, action):
        if action == '+': 
            result = number_1 + number_2                                            # 1 + 2 = 3
            return result
        elif action == '-':
            result = number_1 - number_2                                            # 2 - 1 = 1
            return result
        elif action == '*':
            result = number_1 * number_2                                            # 2 * 3 = 6
            return result
        elif action == '/':
            result = number_1 / number_2                                            # 6 / 3 = 2
            return result
        elif action == '^':
            result = number_1 ** number_2                                           # 2 ** 3 = 8
            return result
        elif action == '%':
            result = number_1 % number_2                                            # 5 % 2 = 1
            return result
        elif action == '//':
            result = number_1 // number_2                                           # 5 // 2 = 2 
            return result
        else:
            result = 'Error'
            return result
        

    def comparisons(self, number_1, number_2):
        if number_1 == number_2:
            return '=='
        elif number_1 != number_2:
            return '!='
        elif number_1 > number_2: 
            return '>'
        elif number_1 < number_2: 
            return '<'
        elif number_1 >= number_2: 
            return '>='
        elif number_1 <= number_2: 
            return '<='
        else:
            return 'Error'


    def algebra_of_logic(self, number_1, number_2, number_3, number_4):
        if number_1 + number_2 == 2 and number_3 + number_4 == 2:                   # 1, 1, 1, 1 
            return 'and'
        elif number_1 + number_2 == 2 or number_3 + number_4 == 2:                  # 1, 1, 1, 2 
            return 'or'
        elif not number_1 + number_2 == 2:                                          # 1, 2
            return 'not'
        else:
            return 'Error'

    def cycles(self, j):
        if j == 1:
            for i in range(0, 100, 1):                                              # 0 ... 99
                print(i)
        elif j == 2:
            i = 0
            while i < 100:                                                          # 0 ... 99
                print(i)
                i += 1                                                              # инкремент 
        elif j == 3:
            arr = [1, 2, 3]
            for i in arr:
                print(i)
        else:
            return 'Error'

    def exceptions(self):
        try:                                                                        # Стандартный ход
            variable_1 = 10
            variable_2 = 0
            variable_3 = variable_1 / variable_2
        except Exception as e:                                                      # Ловит исключения 
            print('Error' + e)
        else:                                                                       # Выполняется если в try не возникло исключений 
            print(variable_3)
        finally:                                                                    # Выполняется в любом случае
            return 'Finally'

class MainInheritance(Main):                                                        # Класс наследник
    def get_name(self):
        return self.name

if __name__ == "__main__":
    class_main = Main('Jarvis', 30)
    result_main = class_main.exceptions()
    print(f'Результат {result_main}')                                               # Форматированная строка

    class_main_inheritance = MainInheritance('Edit', 20)
    result_main_inheritance = class_main_inheritance.get_name()
    print(f'Результат {result_main_inheritance}')

    example = EF.example()
    print(example)
