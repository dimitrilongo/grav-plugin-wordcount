<?php
namespace Grav\Plugin;

class WordCountTwigExtension extends \Twig_Extension
{

  /**
  * returns the name of the class if required
  *
  * @return string the name of the class
  */
  public function getName()
  {
      return 'WordCountTwigExtension';
  }

  /**
   * Return a list of all functions.
   *
   * @return array
   */
  public function getFunctions()
  {
      return [
          new \Twig_SimpleFunction('getWordCount', [$this, 'getWordCount']),
      ];
  }

  /**
   * [getWordCount description]
   * @param  [type] $content [description]
   * @return [type]          [description]
   */
  public function getWordCount($content)
  {
    $content = strip_tags($content);
    $content = str_replace("\n", ' ', $content);
    $content = preg_replace("/\s+/", ' ', $content);
    $content = trim($content);

    return str_word_count($content);
  }

}
