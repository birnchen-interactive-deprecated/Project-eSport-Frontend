<?php
/**
 * Created by PhpStorm.
 * User: Pierre Köhler
 * Date: 03.04.2019
 * Time: 16:11
 */

namespace app\controllers;

use app\components\BaseController;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Response;
use app\modules\core\models\SubTeam;
use app\modules\core\models\PlayerParticipating;
use app\modules\core\models\TeamParticipating;
use app\modules\core\models\Tournament;


class RocketleagueController extends BaseController
{
    public function actionNewsDetails($pos)
    {
        $data = Yii::$app->cache->get('RSS_FEED_RL');

        if (false === $data) {

            $curl = curl_init('https://steamcommunity.com/games/252950/rss/');
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $rssFeed = curl_exec($curl);

            $xml = simplexml_load_string($rssFeed);

            $data = [];

            $key = 0;
            foreach ($xml->channel->item as $item) {

                if (3 === $key) {
                    break;
                }

                $data[$key++] = [
                    'title' => $item->title->__toString(),
                    'html' => $item->description->__toString(),
                ];

            }

            $cacheDuration = 300; // Einheit = Sekunden
            Yii::$app->cache->set('RSS_FEED_RL', $data, $cacheDuration);
        }

        return $this->render('newsDetails',
            [
                'data' => $data,
                'pos' => $pos,
            ]);

        return $this->render('newsDetails');
    }

    public function actionTournaments()
    {
        if (is_array($_POST) && isset($_POST['tournamentId'])) {

            if (isset($_POST['user'])) {

                $turnierId = (int)$_POST['tournamentId'];
                $userId = (int)$_POST['user'];

                if ($_POST['submitText'] === 'Registrieren') {

                    $newPlayer = new PlayerParticipating();
                    $newPlayer->tournament_id = $turnierId;
                    $newPlayer->user_id = $userId;
                    $newPlayer->insert();

                } else if ($_POST['submitText'] === 'Abmelden') {
                    $playerParticipating = PlayerParticipating::findPlayerParticipating($turnierId, $userId);
                    if (NULL !== $playerParticipating) {
                        $playerParticipating->delete();
                    }
                } else if ($_POST['submitText'] === 'Check-In') {
                    $playerParticipating = PlayerParticipating::findPlayerParticipating($turnierId, $userId);
                    if (NULL !== $playerParticipating) {
                        $playerParticipating->checked_in = true;
                        $playerParticipating->update();
                    }
                } else if ($_POST['submitText'] === 'Check-Out') {
                    $playerParticipating = PlayerParticipating::findPlayerParticipating($turnierId, $userId);
                    if (NULL !== $playerParticipating) {
                        $playerParticipating->checked_in = null;
                        $playerParticipating->update();
                    }
                }

            } else if (isset($_POST['subTeam'])) {

                $turnierId = (int)$_POST['tournamentId'];
                $subTeamId = (int)$_POST['subTeam'];

                if ($_POST['submitText'] === 'Registrieren') {

                    $newSubTeam = new TeamParticipating();
                    $newSubTeam->tournament_id = $turnierId;
                    $newSubTeam->sub_team_id = $subTeamId;
                    $newSubTeam->insert();

                } else if ($_POST['submitText'] === 'Abmelden') {
                    $teamParticipating = TeamParticipating::findTeamParticipating($turnierId, $subTeamId);
                    if (NULL !== $teamParticipating) {
                        $teamParticipating->delete();
                    }
                } else if ($_POST['submitText'] === 'Check-In') {
                    $teamParticipating = TeamParticipating::findTeamParticipating($turnierId, $subTeamId);
                    if (NULL !== $teamParticipating) {
                        $teamParticipating->checked_in = true;
                        $teamParticipating->update();
                    }
                } else if ($_POST['submitText'] === 'Check-Out') {
                    $teamParticipating = TeamParticipating::findTeamParticipating($turnierId, $subTeamId);
                    if (NULL !== $teamParticipating) {
                        $teamParticipating->checked_in = null;
                        $teamParticipating->update();
                    }
                }

            }

        }

        $tournamentList = Tournament::getRLTournaments();

        return $this->render('tournamentsOverview',
            [
                'tournamentList' => $tournamentList,
            ]
        );

    }

    public function actionTournamentDetails($id = null)
    {
        $tournament = Tournament::getTournamentById($id);
        $ruleSet = $tournament->getRules();

        $participatingEntrys = $tournament->getParticipants()->all();

        return $this->render('tournamentDetails',
            [
                'tournament' => $tournament,
                'ruleSet' => $ruleSet,
                'participatingEntrys' => $participatingEntrys
            ]
        );
    }
    /**
     * @return string
     */
    public function actionTeamsOverview()
    {
        $teamHierarchy = SubTeam::getTeamHierarchyByGame(1);

        return $this->render('teamsOverview',
            [
                'teamHierarchy' => $teamHierarchy,
            ]
        );
    }
}