# opts
Класс параметров

Простой класс параметров.

```php
 // Создать
 $opts = new \shasoft\Opts(['x'=>666]);
 // Установить значение атрибута a
 $opts->set('a',1);
 // Установить значение атрибута b
 $opts->b = 2;
 // Получить значение атрибута b (если его нет, то значение по умолчанию = 123)
 $opts->get(b,123);
 // Получить значение атрибута a
 $opts->a;
 // Получить массив всех значений
 $opts->get();
 // Проверить существование свойства b
 $opts->has('b'); 
 isset($opts->b);
```

[Мой сайт](http://shasoft.com)