Slugger
===========

A simple way for generate slugs (everyvhere in your web app)

#Installation

###Update your composer.json

add the folowing line in the require area

    "rudak/slug-bundle": "dev-master"

###Enable the bundle

Enable the bundle in the kernel, in ```appKernel.php```

    new Rudak\Slug\RudakSlugBundle(),

#How to use it ?

##In Twig templates

Just add ```slugit``` after the string you want to transform

###Exemple :

    {{ 'my text to slug'|slugit }}
    
##In a controller

Access the service of the container like this:
    
    $Slugger = $this->get('rudak.slugger');

Use the service (a static Slug class) like that:

    echo $Slugger::slugit('slug this string please')
    // slug-this-string-please

###Exemple
    
        public function getPostAction()
        {
            $post    = $this->getDoctrine()->getManager()
                            ->getRepository('YourBundle:post')->find(1);
            
            $Slugger = $this->get('rudak.slugger');
            return $this->render('YourBundle:Default:your-view.html.twig', array(
                'titleSlug' => $Slugger::slugit($post->getTitle()),
                'post'      => $post
            ));
        }

