<?php

/**
 * RTL Plugin for Kirby 3
 *
 * @author Adel Noureddine <adel.noureddine@outlook.com>
 * @version 3.0.0
 */

Kirby::plugin('adelnoureddine/rtl', [
  'tags' => [
	'rtl' => [
	  	'html' => function($tag) {
	  		return '<div style="direction: rtl;">' . $tag->value . '</div>';
	  	}
  	]
  ]
]);