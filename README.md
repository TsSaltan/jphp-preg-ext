## DevelNext Preg Bundle
Пакет расширений для работы с функциями preg_*  оригинального php

### Changelog
```
-- 0.2 --
[Fix] Исправлен баг с модификаторами
[Fix] preg_replace и preg_replace_callback поддерживают работу с массивами
[Add] preg_split
[Add] preg_quote

-- 0.1 --
[Add] preg_match_all
[Add] preg_match
[Add] preg_grep
[Add] preg_replace
[Add] preg_replace_callback
```


### Поддерживаемые функции
```php
/**
 * --RU--
 * Выполняет глобальный поиск шаблона в строке
 * 
 * @link    http://php.net/manual/function.preg-match-all.php
 *
 * @param   string  $pattern  Искомый шаблон
 * @param   string  $subject  Входная строка
 * @param   array   $matches  (optional)  Параметр будет заполнен результатами поиска
 * @param   int     $flags    (optional)  Возможные значения - PREG_PATTERN_ORDER, PREG_SET_ORDER
 * @return  int
 */
function preg_match_all($pattern, $subject, &$matches = null, $flags = PREG_PATTERN_ORDER)

/**
 * --RU--
 * Выполняет проверку на соответствие регулярному выражению
 * 
 * @link    http://php.net/manual/function.preg-match.php
 * 
 * @param   string  $pattern  Искомый шаблон
 * @param   string  $subject  Входная строка
 * @param   array   $matches  (optional)  Параметр будет заполнен результатами поиска
 * @return  int
 */
function preg_match($pattern, $subject, &$matches = null)

/**
 * --RU--
 * Возвращает массив вхождений, которые соответствуют шаблону
 * 
 * @link    http://php.net/manual/function.preg-grep.php
 * 
 * @param   string  $pattern  Искомый шаблон
 * @param   array   $subject  Входящий массив
 * @param   int     $flags    (optional)  Возможное значение - PREG_GREP_INVERT
 * @return  array
 */
function preg_grep($pattern, $input, $flags = 0)

/**
 * --RU--
 * Выполняет поиск и замену по регулярному выражению
 * 
 * @link    http://php.net/manual/function.preg-replace.php
 * 
 * @param   mixed  $pattern      Искомый шаблон. Может быть как строкой, так и массивом строк.
 * @param   mixed  $replacement  Строка или массив строк для замены
 * @param   mixed  $subject      Строка или массив строк для поиска и замены
 * @return  mixed  Строка или массив, в зависимости от параметра $subject
 */
function preg_replace($pattern, $replacement, $subject)

/**
 * --RU--
 * Выполняет поиск по регулярному выражению и замену с использованием callback-функции
 * 
 * @link    http://php.net/manual/function.preg-replace-callback.php
 * 
 * @param   mixed     $pattern   Искомый шаблон (строка или массив)
 * @param   callable  $callback  Вызываемая callback-функция function( array $matches )
 * @param   mixed     $subject   Строка или массив для поиска и замены
 * @return  mixed     Строка или массив, в зависимости от параметра $subject
 */
function preg_replace_callback($pattern, $callback, $subject)

/**
 * --RU--
 * Разбивает строку по регулярному выражению
 * 
 * @link    http://php.net/manual/function.preg-split.php
 * 
 * @param   string  $pattern  Строка, содержащая искомый шаблон.
 * @param   mixed   $subject  Входная строка
 * @param   int     $limit    (optional)  Если указан, функция возвращает не более, чем limit подстрок
 * @return  array
 */
function preg_split($pattern, $subject, $limit = 0)

/**
 * --RU--
 * Экранирует символы в регулярных выражениях
 * 
 * @link    http://php.net/manual/function.preg-quote.php
 * 
 * @param   string  $str        Входная строка
 * @param   string  $delimiter  (optional)  Символ, который будет также экранироваться
 * @return  string
 */
 function preg_quote($str, $delimiter = null)
```

### Поддерживаемые модификаторы
```
i (php - PCRE_CASELESS, jphp - CASE_INSENSITIVE)
Если этот модификатор используется, символы в шаблоне соответствуют символам как верхнего, так и нижнего регистра.

m (php - PCRE_MULTILINE, jphp - MULTILINE)
Многострочный поиск

s (php - PCRE_DOTALL, jphp - DOTALL)
Если данный модификатор используется, метасимвол "точка" в шаблоне соответствует всем символам, включая перевод строк. Без него - всем, за исключением переводов строк. Этот модификатор эквивалентен записи /s в Perl. Класс символов, построенный на отрицании, например [^a], всегда соответствует переводу строки, независимо от наличия этого модификатора.

u (php - PCRE_UTF8, jphp - UNICODE_CASE)
Этот модификатор включает дополнительную функциональность: шаблон и целевая строка обрабатываются как UTF-8 строки.
```