<?php

/* @var $this yii\web\View
 * @var $teamHierarchy array
 */

use yii\helpers\Html;

$this->title = 'Team Details';
?>

<div class="site-rl-team-details">

    <?php foreach($teamHierarchy as $hierarchy ):
        $mainTeam = $hierarchy['mainTeam'];
        $mainTeamOwner = $mainTeam->getOwner()->one()->getUsername();
        $mainTeamImage = '/images/teams/mainTeams/' . $mainTeam->getId() . '.png';
        $mainTeamImage = (!file_exists($_SERVER['DOCUMENT_ROOT'] . $mainTeamImage)) ? '/images/userAvatar/default.png' : $mainTeamImage;
        ?>

        <div class="teamEntry clearfix">

            <div class="teamHeader col-lg-12">
                <?= Html::a($mainTeam->getName() , ['/teams/team-details', 'id' => $mainTeam->getId()]); ?>
                <span class="mainTeamOwner"> (Owner: <?= Html::a($mainTeamOwner , ['/user/details', 'id' => $mainTeam->getOwnerId()]); ?>)</span>
            </div>

            <div class="col-sm-4 teamLogo">
                <?= Html::img($mainTeamImage); ?>
            </div>
            <div class="col-sm-8">
                
                <?php foreach ($hierarchy['subTeams'] as $tournamentMode => $subTeams): ?>
                    
                    <div class="col-sm-6 col-lg-6 modeContainer">
                        <div class="modeName">Turniermodus: <?= $tournamentMode; ?></div>
                        <?php foreach ($subTeams as $key => $subHierarchy):
                			$subTeam = $subHierarchy['subTeam'];
                			$subTeamName = $subTeam->getName();
                			$subTeamManager = $subTeam->GetTeamCaptain()->one()->getUsername(); ?>

                            <div class="subTeam">
                                <?= Html::a($subTeamName , ['/teams/sub-team-details', 'id' => $subTeam->getId()]); ?>
                                <span class="subTeamOwner"> (Captain: <?= Html::a($subTeamManager , ['/user/details', 'id' => $subTeam->getTeamCaptainId()]); ?>)</span>
                            </div>

                            <?php if (false): ?>
                            <?php foreach ($subHierarchy['subTeamMember'] as $key => $subTeamMember) :
                				$userClass = $subTeamMember->getUser()->one();
                				$userName = $userClass->getUsername();
                				$substitudeText = ($subTeamMember->getIsSubstitute()) ? 'substitude' : 'player'; ?>

                                <div class="subTeaMember">
                                    <?= Html::a($userName , ['/user/details', 'id' => $userClass->getId()]); ?>
                                    <span class="playerPosition"> <?= ' (' . $substitudeText . ')'; ?></span>
                                </div>

                            <?php  endforeach; ?>
                            <?php endif; ?>

                        <?php endforeach; ?>
                    
                    </div>

                <?php  endforeach; ?>

            </div>
        </div>
    <?php  endforeach; ?>

</div>