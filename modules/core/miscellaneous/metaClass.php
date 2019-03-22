<?php
/**
 * Create by Hand (Sublime Text 3)
 * User: Captain
 * Date: 21.03.2019
 * Time: 21:00
 */

namespace app\modules\core\miscellaneous;

class MetaClass {
	
	public function __construct() {

	}

	public function writeMetaUser($view, $model, $nationality) {
		/* standart meta tags */
		$view->registerMetaTag([
		    'name' => 'description',
		    'content' => $model->username.' ist ein Spieler aus '.$nationality->getName().'.',
		]);

		/* Schema.org markup for Google+ */
		$view->registerMetaTag([
		    'itemprop' => 'name',
		    'content' => $model->username.'\'s Player profile',
		]); // itempro:name
		$view->registerMetaTag([
		    'itemprop' => 'description',
		    'content' => $model->username.' ist ein Spieler aus '.$nationality->getName().'.',
		]); // itemprop description
		$view->registerMetaTag([
		    'itemprop' => 'image',
		    'content' => 'https://project-esport.gg/images/UserAvatar/'.$model->user_id.'.png',
		]); // itemprop image

		/* Twitter Card Data */
		$view->registerMetaTag([
		    'name' => 'twitter:card',
		    'content' => 'summary',
		]); // twitter:card - summary
		//$view->registerMetaTag([
		//    'name' => 'twitter:card',
		//    'content' => 'summary_large_image',
		//]);
		$view->registerMetaTag([
		    'name' => 'twitter:site',
		    'content' => '@esport_project',
		]); // twitter:site
		$view->registerMetaTag([
		    'property' => 'twitter:account_id',
		    'content' => '1063431775995727872'
		]); // twitter:account_id
		$view->registerMetaTag([
		    'name' => 'twitter:title',
		    'content' => $model->username.'\'s Player profile',
		]); // twitter:title
		$view->registerMetaTag([
		    'name' => 'twitter:description',
		    'content' => $model->username.' ist ein Spieler aus '.$nationality->getName().'.',
		]); // twitter:description - less then 200 characters
		$view->registerMetaTag([
		    'name' => 'twitter:creator',
		    'content' => '@BirnchenStudios',
		]); // twitter:creator - author
		$view->registerMetaTag([
		    'name' => 'twitter:image:src',
		    'content' => 'https://project-esport.gg/images/userAvatar/'.$model->user_id.'.png',
		]); // twitter:image:src
		$view->registerMetaTag([
		    'name' => 'twitter:image:alt',
		    'content' => 'no profile pic availabel',
		]); // twitter:image:alt

		/* Open Graph Data (and facebook) */
		$view->registerMetaTag([
		    'property' => 'og:title',
		    'content' => $model->username.'\'s Player profile',
		]); // og:title
		$view->registerMetaTag([
		    'property' => 'og:type',
		    'content' => 'website'
		]); // og:type
		$view->registerMetaTag([
		    'property' => 'og:url',
		    'content' => 'https://project-esport.gg/user/details?id='.$model->user_id,
		]); // og:url
		$view->registerMetaTag([
		    'property' => 'og:image',
		    'content' => 'https://project-esport.gg/images/UserAvatar/'.$model->user_id.'.png',
		]); // og:image
		$view->registerMetaTag([
		    'property' => 'og:description',
		    'content' => $model->username.' ist ein Spieler aus '.$nationality->getName().'.',
		]); // og:description
		$view->registerMetaTag([
		    'property' => 'og:site_name',
		    'content' => 'Player\'s profile',
		]); // og:sitename
	}

	public function writeMetaIndex($view, $title) {
        /* standart meta tags */
        $view->registerMetaTag([
            'name' => 'description',
            'content' => 'Project eSport - Professional Gaming for everyone - Is a Tournament Site for Player from all Countries and all Skill Levels.',
        ]); // description

        /* Schema.org markup for Google+ */
        $view->registerMetaTag([
            'itemprop' => 'name',
            'content' => $title,
        ]); // itemprop:name
        $view->registerMetaTag([
            'itemprop' => 'description',
            'content' => 'Project eSport - Professional Gaming for everyone - Is a Tournament Site for Player from all Countries and all Skill Levels.',
        ]); // itemprop description
        $view->registerMetaTag([
            'itemprop' => 'image',
            'content' => 'https://project-esport.gg/images/PeSpLogos/pesp_large_black.png',
        ]); // itemprop image

        /* Twitter Card Data */
        /*$view->registerMetaTag([
            'name' => 'twitter:card',
            'content' => 'summary',
        ]);*/ // twitter:card - summary
        $view->registerMetaTag([
            'name' => 'twitter:card',
            'content' => 'summary_large_image',
        ]); // twitter:card - summary_large_immage
        $view->registerMetaTag([
            'name' => 'twitter:site',
            'content' => '@esport_project',
        ]); // twitter:site
        $view->registerMetaTag([
            'property' => 'twitter:account_id',
            'content' => '1063431775995727872'
        ]); // twitter:account_id
        $view->registerMetaTag([
            'name' => 'twitter:title',
            'content' => $title,
        ]); // twitter:title
        $view->registerMetaTag([
            'name' => 'twitter:description',
            'content' => 'Project eSport - Professional Gaming for everyone - Is a Tournament Site for Player from all Countries and all Skill Levels.',
        ]); // twitter:description - less then 200 characters
        $view->registerMetaTag([
            'name' => 'twitter:creator',
            'content' => '@BirnchenStudios',
        ]); // twitter:creator - author
        $view->registerMetaTag([
            'name' => 'twitter:image:src',
            'content' => 'https://project-esport.gg/images/PeSpLogos/pesp_large_black.png',
        ]); // twitter:image:src
        $view->registerMetaTag([
            'name' => 'twitter:image:alt',
            'content' => 'no pic availabel',
        ]); // twitter:image:alt

        /* Open Graph Data (and facebook) */
        $view->registerMetaTag([
            'property' => 'og:title',
            'content' => $title,
        ]); // og:title
        $view->registerMetaTag([
            'property' => 'og:type',
            'content' => 'website'
        ]); // og:type
        $view->registerMetaTag([
            'property' => 'og:url',
            'content' => 'https://project-esport.gg',
        ]); // og:url
        $view->registerMetaTag([
            'property' => 'og:image',
            'content' => 'https://project-esport.gg/images/PeSpLogos/pesp_large_black.png',
        ]); // og:image
        $view->registerMetaTag([
            'property' => 'og:description',
            'content' => 'Project eSport - Professional Gaming for everyone - Is a Tournament Site for Player from all Countries and all Skill Levels.',
        ]); // og:description
        $view->registerMetaTag([
            'property' => 'og:site_name',
            'content' => $title,
        ]); // og:sitename
    }
}