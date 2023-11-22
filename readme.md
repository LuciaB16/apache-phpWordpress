# Funciones de Modificación de Texto en WordPress


**1. Funcion renym_wordpress_typo_fix**
```
function renym_wordpress_typo_fix( $text ) {
return str_replace( 'WordPress', 'WordPressDAM', $text );
}

add_filter( 'the_content', 'renym_wordpress_typo_fix' );
```

Esta función reemplaza las ocurrencias de la palabra 'WordPress' con 'WordPressDAM' en un texto dado.

Podemos explicar línea por línea este código:
- `function renym_wordpress_typo_fix( $text )` -> Define una función que toma un parámetro de texto.


- `return str_replace( 'WordPress', 'WordPressDAM', $text );` -> Utiliza str_replace para reemplazar todas
  las menciones de 'WordPress' con 'WordPressDAM' en el texto.


- `add_filter( 'the_content', 'renym_wordpress_typo_fix' );` -> Añade un filtro a la función the_content,
  aplicando la función renym_wordpress_typo_fix al contenido.

------
```
function renym_words_replace( $text ) {
    $array = array("colibri", "periquito", "paloma", "gaviota", "aguila");
    $array2 = array("bacalao","salmon","lubina","trucha","atun");
    return str_replace( $array, $array2, $text );
}

add_filter( 'the_content', 'renym_words_replace' );
```

Esta función reemplaza palabras específicas en un texto dado con las palabras de reemplazo correspondientes.

Podemos explicar línea por línea este código:
- `function renym_words_replace( $text )` -> Define una función que toma un parámetro de texto.


- `$array = array("colibrí", "periquito", "paloma", "gaviota", "águila");` -> Define un array que contiene las palabras
  a buscar en el texto.


- `$array2 = array("bacalao","salmón","lubina","trucha","atún");` -> Define un segundo array que contiene las palabras
  de reemplazo correspondientes.


- `return str_replace( $array, $array2, $text );` -> Utiliza str_replace para reemplazar todas las palabras en $array
  con las palabras correspondientes en $array2.


- `add_filter( 'the_content', 'renym_words_replace' );` -> Añade un filtro a la función the_content, aplicando la función
  renym_words_replace al contenido. 
