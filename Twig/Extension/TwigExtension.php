<?php

namespace Rudak\Slug\Twig\Extension;

use Rudak\Slug\Utils\Slug;

class TwigExtension extends \Twig_Extension
{

    public function getName()
    {
        return 'RudakTwigSluggerExtensionBundle';
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('slugit', array($this, 'slugit')),
        );
    }

    /**
     * Renvoie le slug d'une chaine $str rentrée en parametre
     *
     * @param string a slugger
     * @return string contenant le slug
     */
    public function slugit($str)
    {
        return Slug::slugit($str);
    }

}
