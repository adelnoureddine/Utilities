<?php

/**
 * RTL Plugin
 *
 * @author Adel Noureddine <adel.noureddine@outlook.com>
 * @version 1.0.0
 */

kirbytext::$pre[] = function($kirbytext, $text) {

  $text = preg_replace_callback('!\(rtl(…|\.{3})\)(.*?)\((…|\.{3})rtl\)!is', function($matches) use($kirbytext) {

    $html    = array();

      $field = new Field($kirbytext->field->page, null, trim($matches[2]));
      $html[] = '<div style="direction: rtl;">' . kirbytext($field) . '</div>';

    return implode($html);

  }, $text);

  return $text;

};
