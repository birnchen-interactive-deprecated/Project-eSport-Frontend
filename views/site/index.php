<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Welcome to Project eSport\'s';

$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);
/* standart meta tags */
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Project eSport - Professional Gaming for every Is a Tournament Site for Player from all Countries and all Skill Levels.',
]); // description

/* Schema.org markup for Google+ */
$this->registerMetaTag([
    'itemprop' => 'name',
    'content' => $this->title,
]); // itemprop:name
$this->registerMetaTag([
    'itemprop' => 'description',
    'content' => 'Project eSport - Professional Gaming for every Is a Tournament Site for Player from all Countries and all Skill Levels.',
]); // itemprop description
$this->registerMetaTag([
    'itemprop' => 'image',
    'content' => 'https://project-esport.gg/images/PeSpLogos/pesp_small_black.png',
]); // itemprop image

/* Twitter Card Data */
$this->registerMetaTag([
    'name' => 'twitter:card',
    'content' => 'summary',
]); // twitter:card - summary
//$this->registerMetaTag([
//    'name' => 'twitter:card',
//    'content' => 'summary_large_image',
//]); // twitter:card - summary_large_immage
$this->registerMetaTag([
    'name' => 'twitter:site',
    'content' => '@esport_project',
]); // twitter:site
$this->registerMetaTag([
    'property' => 'twitter:account_id',
    'content' => '1063431775995727872'
]); // twitter:account_id
$this->registerMetaTag([
    'name' => 'twitter:title',
    'content' => $this->title,
]); // twitter:title
$this->registerMetaTag([
    'name' => 'twitter:description',
    'content' => 'Project eSport - Professional Gaming for every Is a Tournament Site for Player from all Countries and all Skill Levels.',
]); // twitter:description - less then 200 characters
$this->registerMetaTag([
    'name' => 'twitter:creator',
    'content' => '@BirnchenStudios',
]); // twitter:creator - author
$this->registerMetaTag([
    'name' => 'twitter:image:src',
    'content' => 'https://project-esport.gg/images/PeSpLogos/pesp_small_black.png',
]); // twitter:image:src
$this->registerMetaTag([
    'name' => 'twitter:image:alt',
    'content' => 'no pic availabel',
]); // twitter:image:alt

/* Open Graph Data (and facebook) */
$this->registerMetaTag([
    'property' => 'og:title',
    'content' => $this->title,
]); // og:title
$this->registerMetaTag([
    'property' => 'og:type',
    'content' => 'website'
]); // og:type
$this->registerMetaTag([
    'property' => 'og:url',
    'content' => 'https://project-esport.gg',
]); // og:url
$this->registerMetaTag([
    'property' => 'og:image',
    'content' => 'https://project-esport.gg/images/PeSpLogos/pesp_small_black.png',
]); // og:image
$this->registerMetaTag([
    'property' => 'og:description',
    'content' => 'Project eSport - Professional Gaming for every Is a Tournament Site for Player from all Countries and all Skill Levels.',
]); // og:description
$this->registerMetaTag([
    'property' => 'og:site_name',
    'content' => $this->title,
]); // og:sitename

?>
<div class="site-index">
    <div class="welcome">
        Willkommen auf unserer Turnier Website.<br>
        Besuch uns doch bei Fragen auf unserem <a class="dclink" href="https://discord.gg/f6NXNFy">Discord</a> Server.
        <br>
        <br>
        Noch kein Team angelegt??? <br>
        Melde dich auf <a class="dclink" href="https://discord.gg/f6NXNFy">Discord</a> bei <b><i><u>Birnchen | Pierre#5366</u></i></b>.
    </div>
</div>
