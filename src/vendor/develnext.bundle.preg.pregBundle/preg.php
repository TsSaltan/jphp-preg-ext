<?php
/**
 * Становятся доступa preg_* функции
 *
 * Обязательно, чтоб функции были объявлены в корневом namespace
 */

namespace;
// Для autoloader'а
class preg{

}

use bundle\preg\Preg;
use php\framework\Logger;

define('PREG_PATTERN_ORDER', 1 << 0);
define('PREG_SET_ORDER', 1 << 1);
define('PREG_GREP_INVERT', 1 << 2);

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
function preg_match_all($pattern, $subject, &$matches = null, $flags = PREG_PATTERN_ORDER){
	$preg = new Preg($pattern, $subject);
	$preg->compile();
	$matches = [];
	while ($preg->find()){
		if($flags & PREG_PATTERN_ORDER){
			foreach($preg->matches() as $k=>$v){
				$matches[$k][] = $v;
			}
		}
		elseif($flags & PREG_SET_ORDER){
			$matches[] = $preg->matches();
		}
	}

	return isset($matches[0]) ? sizeof($matches[0]) : 0;
}

/**
 * --RU--
 * Выполняет проверку на соответствие регулярному выражению
 * 
 * @param string $pattern - Искомый шаблон
 * @param string $subject - Входная строка
 * @param array $matches = null - Параметр будет заполнен результатами поиска
 * @return int
 */
function preg_match($pattern, $subject, &$matches = null/*, $flags = 0, $offset = 0*/){
	$preg = new preg($pattern, $subject);
	$preg->compile();
	$matches = [];

	if($preg->find()){
		$matches = $preg->matches();
	}

	return sizeof($matches);
}

/**
 * --RU--
 * Возвращает массив вхождений, которые соответствуют шаблону
 * 
 * @param string $pattern - Искомый шаблон
 * @param array $subject - Входящий массив
 * @return array
 */
function preg_grep($pattern, $input, $flags = 0){
	$return = [];
	foreach($input as $subject){
		$preg = new preg($pattern, $subject);
		$preg->compile();
		$find = $preg->find();

		if(
			($find && !($flags & PREG_GREP_INVERT)) ||
			(!$find && ($flags & PREG_GREP_INVERT)) 
			){
				$return[] = $subject;
		}
		
		//PREG_GREP_INVERT
	}

	return $return;
}

/**
 * --RU--
 * Выполняет поиск и замену по регулярному выражению
 * 
 * @param mixed $pattern - Искомый шаблон. Может быть как строкой, так и массивом строк.
 * @param callable $callback - Вызываемая callback-функция function( array $matches )
 * @param mixed $subject - Строка или массив строк для поиска и замены
 * @return string
 */
function preg_replace($pattern, $replacement, $subject/* [, int $limit = -1 [, int &$count ]] */){
	if(is_array($pattern) and is_array($replacement)){
		foreach($pattern as $k=>$p){
			$subject = preg_replace($p, (isset($replacement[$k]) ? $replacement[$k] : last($replacement)), $subject);
		}
		return $subject;
	}

	try{
		$preg = new preg($pattern, $subject);
		$preg->compile();
		return $preg->replace($replacement);
	} catch (\php\lang\IllegalArgumentException $e){
		Logger::Warn('[preg_replace] ' . $e->getMessage());
		return false;
	}
}

/**
 * --RU--
 * Выполняет поиск по регулярному выражению и замену с использованием callback-функции
 * 
 * @param string $pattern - Искомый шаблон
 * @param callable $callback - Вызываемая callback-функция function( array $matches )
 * @param string $subject - Строка для поиска и замены
 */
function preg_replace_callback($pattern, $callback, $subject){
	$preg = new preg($pattern, $subject);
	$preg->compile();
	return $preg->replaceCallback($callback);
}