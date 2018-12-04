<?php
/**
* Класс опций
*/
// Пространство имен
namespace Shasoft;
/**
* Класс опций
*/
class Opts {
	/**
	* @var array Значения
	*/	
	protected $m_vars=[];
	/**
	* Конструктор
	* @param array $vars Начальные значения
	*/
	public function __construct($vars) {
		$this->m_vars = $vars;
	}
	/**
	* Магический метод для установки значения
	* @param string $name Ключ
	* @param mixed $value Значение
	*/
	public function __set($name,$value) {
		$this->m_vars[$name] = $value;
	}
	/**
	* Магический метод для чтения значения
	* @param string $name Ключ
	* @return mixed
	*/
	public function __get($name) {
		return $this->m_vars[$name];
	}
	/**
	* Магический метод для проверки существования значения
	* @param string $name Ключ
	* @return boolean
	*/
	public function __isset($name) {
		return isset($this->m_vars[$name]);
	}
	/**
	* Магический метод для удаления значения
	* @param string $name Ключ
	* @return void
	*/	
	public function __unset($name) {
		unset($this->m_vars[$name]);
	}
	/**
	* Метод проверки существования значения
	* @param string $name Ключ
	* @return boolean
	*/		
	public function has($name) {
		return array_key_exists($name,$this->m_vars);
	}
	/**
	* Метод для установки значения
	* @param string $name Ключ
	* @param mixed $value Значение
	*/
	public function set($name,$value) {
		$this->m_vars[$name] = $value;
		return $this;
	}
	/**
	* Метод для чтения значения
	* @param string $name Ключ. Если = NULL, то метод вернет все значения
	* @param mixed $defval Значение по умолчанию. Возвращается если такого ключа нет
	* @return mixed
	*/
	public function get($name=NULL,$defval=NULL) {
		if( is_null($name) ) {
			return $this->m_vars;
		}
		if( isset($this->m_vars[$name]) ) {
			return $this->m_vars[$name];
		}
		return $defval;
	}
}