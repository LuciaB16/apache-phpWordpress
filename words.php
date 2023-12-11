<?php
/**
 * @package Hello_Words
 * @version 1.0.0
 */
/*
Plugin Name: Hello Words
Plugin URI: http://wordpress.org/plugins/hello-words/
Description: Esto no es solo un plugin, esto simboliza la esperanza y entusiasmo de una generacion entera resumida en dos palabras.
Author: Lucia Balsa
Version: 1.0.0
Author URI: http://lucia.balsa/

/*
function inicioPlugin()
{
    createTable();
    insertData();
}

/**
 * Carga tabla wp_dam
 * Con las palabras que queremos cambiar
 */
/*
function createTable()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'pajaros';
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        pajaros varchar(255) NOT NULL,
        peces varchar(255) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

*/

/**
 * Inserta datos en la tabla wp_dam
 */
/*
function insertData()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'pajaros';
    $data_exists = $wpdb->get_var("SELECT COUNT(*) FROM $table_name");
    if ($data_exists > 0) {
        $wpdb->query("DROP TABLE IF EXISTS $table_name");
        createTable();
    }
    $wpdb->insert(
        $table_name,
        array(
            'pajaros' => 'colibri',
            'peces' => 'bacalao'
        )
    );
    $wpdb->insert(
        $table_name,
        array(
            'pajaros' => 'periquito',
            'peces' => 'salmon'
        )
    );
    $wpdb->insert(
        $table_name,
        array(
            'pajaros' => 'paloma',
            'peces' => 'lubina'
        )
    );
    $wpdb->insert(
        $table_name,
        array(
            'pajaros' => 'gaviota',
            'peces' => 'trucha'
        )
    );
    $wpdb->insert(
        $table_name,
        array(
            'pajaros' => 'aguila',
            'peces' => 'atun'
        )
    );
    $wpdb->insert(
        $table_name,
        array(
            'pajaros' => 'loro',
            'peces' => 'raya'
        )
    );


}

add_action('plugin_loaded', 'inicioPlugin');




function renym_wordpress_typo_fix($text)
{
    return str_replace('WordPress', 'WordPressDAM', $text);
}

add_filter('the_content', 'renym_wordpress_typo_fix');
*/

/*
function renym_words_replace($text)
{
    $array = array("colibri", "periquito", "paloma", "gaviota", "aguila");
    $array2 = array("bacalao", "salmon", "lubina", "trucha", "atun");
    return str_replace($array, $array2, $text);
}

add_filter('the_content', 'renym_words_replace');
*/

/**
 * Reemplazar palabras cogiendolas de la base de datos
 *
*/
/*
function renym_words_replace_db($text){
    global $wpdb;
    $table_name = $wpdb->prefix . 'pajaros';
    $results = $wpdb->get_results("SELECT * FROM $table_name");
    foreach ($results as $result) {
        $array[] = $result->pajaros;
        $array2[] = $result->peces;
    }
    return str_replace($array, $array2, $text);
}
add_filter('the_content', 'renym_words_replace_db');
*/


function inicioPlugin()
{
    createTable();
    insertData();
}


function createTable()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'pares';
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $table_name (
        pares mediumint(10) NOT NULL,
        impares mediumint(10) NOT NULL,
        PRIMARY KEY  (pares)
    ) $charset_collate;";
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}


function insertData()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'pares';
    $data_exists = $wpdb->get_var("SELECT COUNT(*) FROM $table_name");
    if ($data_exists > 0) {
        $wpdb->query("DROP TABLE IF EXISTS $table_name");
        createTable();
    }
    $wpdb->insert(
        $table_name,
        array(
            'pares' => 0,
            'impares' => 1
        )
    );
    $wpdb->insert(
        $table_name,
        array(
            'pares' => 2,
            'impares' => 3
        )
    );
    $wpdb->insert(
        $table_name,
        array(
            'pares' => 4,
            'impares' => 5
        )
    );
    $wpdb->insert(
        $table_name,
        array(
            'pares' => 6,
            'impares' => 7
        )
    );
}

add_action('plugin_loaded', 'inicioPlugin');


// Función que reemplaza números pares por impares en el contenido
function reemplazar_contenido_pares_impares($contenido) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'pares';
    $results = $wpdb->get_results("SELECT * FROM $table_name");

    foreach ($results as $result) {
        $array[] = $result->pares;
        $array2[] = $result->impares;
    }
    return str_replace($array, $array2, $contenido);
}
add_filter('the_content', 'reemplazar_contenido_pares_impares');




// Función que reemplaza números pares por impares en el título
function reemplazar_titulo_pares_impares($titulo) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'pares';
    $results= $wpdb->get_results("SELECT * FROM $table_name");

    foreach ($results as $result) {
        $array[] = $result->pares;
        $array2[] = $result->impares;
    }
    return str_replace($array, $array2, $titulo);
}
add_filter('the_title', 'reemplazar_contenido_pares_impares');