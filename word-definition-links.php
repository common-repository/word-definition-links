<?php
/*
Plugin Name: Word definition links
Plugin URI: http://portfolio.nicolasbouliane.com/
Description: Inserts links to word definitions and translations in posts. Use [define:word] and [en2fr:word] to define and translate.
Version: 1.1
Author: Nicolas Bouliane
Author URI: http://nicolasbouliane.com
License: GPL2
*/

function insertDefinitionLinks($content) {
	//Search for the [define:keyword] tag
		$definitiontag = '/\[define:(.+?)\]/i';
	//Replace word with links to the definition
		$replacement = "<a target='_blank' title='" . __('Define this','word-definition-links') . "' class='definition' href='http://dictionary.reference.com/search?q=$1'>$1</a>";
	//Replace what is to be replaced
		$content = preg_replace($definitiontag,$replacement,$content);
		
	//Search for the [lang2lang:keyword] tag for translations
		$definitiontag = '/\[([a-z]{2})2([a-z]{2}):(.+?)\]/i';
	//Replace word with links to the translation
		$replacement = "<a target='_blank' title='" . __('Translate this','word-definition-links') . "' class='translation' href='http://translate.google.com/translate_t?sl=$1&tl=$2&text=$3'>$3</a>";
	//Replace what is to be replaced
		$content = preg_replace($definitiontag,$replacement,$content);
		
	//Search for the [wiki:keyword] tag for translations
		$definitiontag = '/\[wiki([a-z]{2}):(.+?)\]/i';
	//Replace word with links to the translation
		$replacement = "<a target='_blank' title='" . __('See Wikipedia article','word-definition-links') . "' class='translation' href='http://www.wikipedia.org/search-redirect.php?language=$1&search=$2'>$2</a>";
	//Replace what is to be replaced
		$content = preg_replace($definitiontag,$replacement,$content);
		
    return $content;
}

//Set the CSS for the links. Feel free to edit.
function setupCssStyles(){
	echo("
		<style type='text/css'>
			.translation,.definition{text-decoration:none;color:inherit !important;padding:0 6px 0 0;background:url('wp-content/plugins/word-definition-links/define.gif') no-repeat center right;}
			.translation:hover, .definition:hover{border-bottom:1px dotted #9c9c9c;}
		</style>
	");
}

//Load the translation languages
load_plugin_textdomain('admin-email', "/wp-content/plugins/admin-email/");

//Hook the filter to replace the keyword in posts
add_filter ( 'the_content', 'insertDefinitionLinks', 9999);
//Hook the CSS for the links
add_action ( 'wp_print_styles', 'setupCssStyles', 9999);
?>