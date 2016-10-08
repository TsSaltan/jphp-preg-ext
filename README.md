## DevelNext Preg Bundle
Пакет расширений для работы с функциями preg_*  оригинального php

### Поддерживаемые функции
```php
/**
 * --RU--
 * Выполняет Выполняет глобальный поиск шаблона в строке
 * 
 * @param string $pattern - Искомый шаблон
 * @param string $subject - Входная строка
 * @param array $matches = null - Параметр будет заполнен результатами поиска
 * @param int $flags = PREG_PATTERN_ORDER
 * @return int
 */
function preg_match_all($pattern, $subject, &$matches = null, $flags = PREG_PATTERN_ORDER)

/**
 * --RU--
 * Выполняет проверку на соответствие регулярному выражению
 * 
 * @param string $pattern - Искомый шаблон
 * @param string $subject - Входная строка
 * @param array $matches = null - Параметр будет заполнен результатами поиска
 * @return int
 */
function preg_match($pattern, $subject, &$matches = null)

/**
 * --RU--
 * Возвращает массив вхождений, которые соответствуют шаблону
 * 
 * @param string $pattern - Искомый шаблон
 * @param array $subject - Входящий массив
 * @return array
 */
function preg_grep($pattern, $input, $flags = 0)

/**
 * --RU--
 * Выполняет поиск и замену по регулярному выражению
 * 
 * @param mixed $pattern - Искомый шаблон. Может быть как строкой, так и массивом строк.
 * @param callable $callback - Вызываемая callback-функция function( array $matches )
 * @param mixed $subject - Строка или массив строк для поиска и замены
 * @return string
 */
function preg_replace($pattern, $replacement, $subject)

/**
 * --RU--
 * Выполняет поиск по регулярному выражению и замену с использованием callback-функции
 * 
 * @param string $pattern - Искомый шаблон
 * @param callable $callback - Вызываемая callback-функция function( array $matches )
 * @param string $subject - Строка для поиска и замены
 */
function preg_replace_callback($pattern, $callback, $subject)
```