<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

/**
 * @package OX_Admin_UI
 */
class OX_UI_WizardSteps
{
    /**
     * Renders wizard steps progress. Given param should be an associative array
     * of stepId => stepName entries.
     * eg. * ('step1'=> 'Welcome!', 'step2' => 'Do sth', 'step3' => 'Done')
     *
     * @param array $aSteps
     */
    public static function wizardSteps($aParams, &$smarty)
    {
        $currentStepId = $aParams['current'];
        $aSteps = $aParams['steps'];
        $addStepNo = isset($aParams['addStepNumber']) ? $aParams['addStepNumber'] : true;

        $aWizardSteps = array();
        $stepCount = count($aSteps);
        $i = 0;
        if ($aSteps) {
            foreach ($aSteps as $stepId => $stepName) {
                $currentReached = $currentReached ? $currentReached : $stepId == $currentStepId;
                $current = $stepId == $currentStepId;

                if ($current && $i > 0) {
                    $aWizardSteps[$i-1]['beforeCurrent'] = true;
                }

                $aStep = array(
                    'id' => $stepId,
                    'name' => $addStepNo ? ($i+1).'. '.$stepName : $stepName,
                    'current' => $current,
                    'done' => !$currentReached,
                    'beforeCurrent' => false //this will be updated when current is reached
                );

                $aWizardSteps[] = $aStep;
                $i++;
            }
        }

        $smarty->assign('_aSteps', $aWizardSteps);
        $result = $smarty->fetch(MAX_PATH . '/www/admin/templates/wizard-steps.html');
        $smarty->clear_assign('_aSteps');

        return $result;
    }
}
