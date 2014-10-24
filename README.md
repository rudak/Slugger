twigSlugger
===========

A simple twig extention for generate slugs

#Installation

###Update your composer.json

add the folowing line in the require area

    "rudak/twig-slug-bundle": "dev-master"

###Enable the bundle

Enable the bundle in the kernel, in ```appKernel.php```

    new \Rudak\TwigSlugger\RudakTwigSluggerBundle(),

#How to use it

Just add ```slugit``` after the string you want to transform

##Exemple :

    {{ 'my text to slug'|slugit }}

