<?php
/**
 * Created by PhpStorm.
 * User: nasri
 * Date: 22/12/2017
 * Time: 15:45
 */

namespace Meeting\Twig_Extension;


use Twig_Extension;
use Twig_Filter;

/**
 * Série d'extension concernant les textes
 * @package Meeting\Twig_Extension
 */
class TextExtension extends Twig_Extension
{
    /**
     * @return array
     */
    public function getFilters() : array
    {
        return [
            new Twig_Filter('excerpt', [$this, 'excerpt'])
        ];
    }

    /**
     * Renvoie un extrait du contenu
     * @param string $content
     * @param int $maxLength
     * @return string
     */
    public function excerpt(string $content, int $maxLength = 100) : string
    {
        if (mb_strlen($content) > $maxLength)
        {
            $excerpt = mb_substr($content, 0, $maxLength);
            $lastSpace = mb_strrpos($excerpt, ' ');
            return mb_substr($excerpt, 0, $lastSpace). '...';
        }
        return $content;
    }
}