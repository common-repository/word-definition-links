=== Word Definition Links ===
Contributors: n1c0_ds
Donate link: http://nicolasbouliane.com
Tags: dashboard, message, widget, administrator, admin
Requires at least: 2.0.2
Tested up to: 3.0
Stable tag: trunk

Inserts subtle links to definitions, Wiki articles and translations of words in multiple languages using short tags.

== Description ==

This plugin will display a small ‘?’ icon that links to either the definition or the translation of the word.
The plugin is a no-brainer to use: [define:dog] will define the word ‘dog’ and [en2fr:dog] will translate the
word ‘dog’ from english to french. [wikies:dog] will show the Wikipedia article for the given word in spanish (es).
Dictionary.com is used to define words, as it has definitions for technical terms too.
Translation works with Google's translation engine.

For a list of 2-letter language code, see here: http://reference.sitepoint.com/html/lang-codes

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the files to the '/wp-content/plugins/' directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. To insert a word definition, use [define:dog], [wiki:dog] for Wikipedia articles and [en2fr:dog] for english-to-french translations.

== Frequently Asked Questions ==

= Is there a way to use other dictionaries? =

Not yet, but if someone asks for it, I'll add one.

== Screenshots ==

1. The plugin in action

== Changelog ==

= 1.1 =
* The plugin now uses Dictionary.com for word definitions.
* The [wikien:word] shortcode was added

= 1.0 =
* Everything works.