# Preg
> version 1.0

Полифилл preg_* функций из php

### Install
```
jppm add preg@*
```

### Функции
- `->`[`preg_match_all()`](#func-preg_match_all)
- `->`[`preg_match()`](#func-preg_match)
- `->`[`preg_grep()`](#func-preg_grep)
- `->`[`preg_replace()`](#func-preg_replace)
- `->`[`preg_replace_callback()`](#func-preg_replace_callback)
- `->`[`preg_split()`](#func-preg_split)
- `->`[`preg_quote()`](#func-preg_quote)

---

# Поддерживаемые модификаторы
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

# Функции

<a name="func-preg_match_all"></a>

### preg_match_all()
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
function preg_match_all($pattern, $subject, &$matches = null, $flags = PREG_PATTERN_ORDER): int
```

---
<a name="func-preg_match"></a>

### preg_match()
```php
/**
 * Выполняет проверку на соответствие регулярному выражению
 * 
 * @link    http://php.net/manual/function.preg-match.php
 * 
 * @param   string  $pattern  Искомый шаблон
 * @param   string  $subject  Входная строка
 * @param   array   $matches  (optional)  Параметр будет заполнен результатами поиска
 * @return  int
 */
function preg_match($pattern, $subject, &$matches = null): int
```

---
<a name="func-preg_grep"></a>

### preg_grep()
```php
/**
 * Возвращает массив вхождений, которые соответствуют шаблону
 * 
 * @link    http://php.net/manual/function.preg-grep.php
 * 
 * @param   string  $pattern  Искомый шаблон
 * @param   array   $subject  Входящий массив
 * @param   int     $flags    (optional)  Возможное значение - PREG_GREP_INVERT
 * @return  array
 */
function preg_grep($pattern, $input, $flags = 0): array
```

---
<a name="func-preg_replace"></a>

### preg_replace()
```php
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
```

---
<a name="func-preg_replace_callback"></a>

### preg_replace_callback()
```php
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
```

---
<a name="func-preg_split"></a>

### preg_split()
```php
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
function preg_split($pattern, $subject, $limit = 0): array
```

---
<a name="func-preg_quote"></a>

### preg_quote()
```php
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
 function preg_quote($str, $delimiter = null): string
```
---
