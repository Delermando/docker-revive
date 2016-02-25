<?php /* Smarty version 2.6.18, created on 2016-02-25 21:47:34
         compiled from welcome-step.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ox_wizard_steps', 'welcome-step.html', 3, false),array('function', 't', 'welcome-step.html', 6, false),)), $this); ?>
<div class="install-wizard">
  <div class="welcomeStep">
    <?php echo $this->_plugins['function']['ox_wizard_steps'][0][0]->wizardSteps(array('steps' => $this->_tpl_vars['oWizard']->getSteps(),'current' => $this->_tpl_vars['oWizard']->getCurrentStep()), $this);?>


    <div class="content">
      <h2><?php echo OA_Admin_Template::_function_t(array('str' => 'WelcomeTitle'), $this);?>
 <?php echo $this->_tpl_vars['oxVersion']; ?>
</h2>

      <p><?php if ($this->_tpl_vars['isUpgrade']): ?><?php echo OA_Admin_Template::_function_t(array('str' => 'UpgradeIntro'), $this);?>
<?php else: ?><?php echo OA_Admin_Template::_function_t(array('str' => 'InstallIntro'), $this);?>
<?php endif; ?></p>
      <p><?php echo OA_Admin_Template::_function_t(array('str' => 'InstallerHelpIntro'), $this);?>
</p>
      <p><?php echo OA_Admin_Template::_function_t(array('str' => 'TermsIntro'), $this);?>
</p>

      <div class="terms">
        <pre>
<?php echo $this->_tpl_vars['LICENSE']; ?>

        </pre>
      </div>

      <form action="" method="post">
          <input type="hidden" name="action" value="welcome" >
          <div class="controls">
            <input type="submit" id="continue" value="<?php echo OA_Admin_Template::_function_t(array('str' => 'BtnAgree'), $this);?>
" name="continue"/>
          </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
<!--
<?php echo '
  $(document).ready(function() {
    $(".welcomeStep").welcomeStep({
        '; ?>

            'message' : '<?php echo $this->_tpl_vars['loaderMessage']; ?>
'
        <?php echo '
    });
  });
'; ?>

-->
</script>