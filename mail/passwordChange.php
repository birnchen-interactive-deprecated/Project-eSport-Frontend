<?php
/**
 * Created by PhpStorm.
 * User: Isabella Neufeld
 * Date: 25.05.2018
 * Time: 12:48
 */

use app\modules\core\models\User;
use yii\helpers\Html;

/**
 * @var User $user
 * @var $password
 */
?>
<main>
    <table cellspacing="0" cellpadding="0" style="font-family: Calibri; font-size: 12pt;">
        <tr>
            <td>Sehr geehrte(r) Herr / Frau <?= $user->getLastName() ?>,<br><br><br></td>
        </tr>
        <tr>
            <td>Ihr Passwort für das bwTarifportal der Baden-Württemberg-Tarif GmbH wurde geändert. Mit dem Klick auf
                den nachstehenden Link werden Sie auf eine Seite geführt, auf der Sie Ihr Passwort eingeben können.<br><br>
            </td>
        </tr>
        <tr>
            <td>
                <a href= <?= Yii::$app->urlManager->createAbsoluteUrl(['site/login']); ?>>Link zum bwTarifportal</a><br><br>
            </td>
        </tr>
        <tr>
            <td><?= Yii::t('app', 'Username') . ': ' . $user->getUsername(); ?><br></td>
        </tr>
        <tr>
            <td><?= Yii::t('app', 'Password') . ': ' . $password ?><br><br></td>
        </tr>
        <tr>
            <td>
                Bei Rückfragen wenden Sie sich bitte an Lydia Tolksdorf, E-Mail: lydia.tolksdorf@bwtarif.de, Telefon:
                0711 7811 7215<br><br><br>
            </td>
        </tr>
        <tr style="font-size: 11pt;">
            <td>
                Baden-Württemberg-Tarif GmbH
            </td>
        </tr>
        <tr style="font-size: 11pt;">
            <td>
                Stockholmer Platz 1
            </td>
        </tr>
        <tr style="font-size: 11pt;">
            <td>
                D-70173 Stuttgart
            </td>
        </tr>
        <tr style="font-size: 11pt;">
            <td>
                www.bwtarif.gmbh/bwTarifportal<br><br>
            </td>
        </tr>
        <tr>
            <td>
                <?= Html::img(Yii::$app->urlManager->createAbsoluteUrl('images/logo_email.png')); ?>
            </td>
        </tr>
        <tr style="font-family: Arial; font-size: 8pt">
            <td>
                Geschäftsführer: Thomas Balser<br>
            </td>
        </tr>
        <tr style="font-family: Arial; font-size: 8pt">
            <td>
                Aufsichtsratsvorsitzender: Prof. Dr. Andreas Moschinski<br>
            </td>
        </tr>
        <tr style="font-family: Arial; font-size: 8pt">
            <td>
                Amtsgericht Stuttgart HRB 763512<br>
            </td>
        </tr>
    </table>
</main>