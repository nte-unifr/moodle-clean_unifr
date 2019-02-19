<?php
defined('MOODLE_INTERNAL') || die();

ob_start();
if (strpos($CFG->wwwroot,'moodle.unifr.ch') === false) {
    $login = "https://moodle-test.unifr.ch/Shibboleth.sso/Login?entityID=https%3A%2F%2Ftestidp.unifr.ch%2Fidp%2Fshibboleth&target=https%3A%2F%2Fmoodle-test.unifr.ch%2Fauth%2Fshibboleth%2Findex.php";
} else {
    $login = "https://moodle.unifr.ch/Shibboleth.sso/Login?entityID=https%3A%2F%2Faai.unifr.ch%2Fidp%2Fshibboleth&target=https%3A%2F%2Fmoodle.unifr.ch%2Fauth%2Fshibboleth%2Findex.php";
}
?>
    <div class="loginform">
        <div class="form-input unifr-form"><a rel="external" href="<?php echo $login ?>"><img src="<?php echo $CFG->wwwroot;?>/theme/clean_unifr/pix/unifr_login.gif" class="unifr_button"></a></div>

<!--			<div class="form-label unifr-label2"><?php print_string('otherAAI','local_unifr_lang') ?></div>-->
        <div class="form-input unifr-button unifr-form"><a rel="external" href="<?php echo $CFG->wwwroot;?>/auth/shibboleth/index.php"><img src="<?php echo $CFG->wwwroot;?>/theme/clean_unifr/pix/switchaai_login.gif" class="unifr_button"></a></div>
<!--			<div class="form-label unifr-label3"><?php print_string('external','local_unifr_lang') ?></div>-->
        <div class="form-input unifr-form"><button class="unifr-normalbutton" type="button" value="Compte standard" onclick="document.location.href='<?php echo $CFG->wwwroot?>/login/index.php?ext=1'">&nbsp;&nbsp;&nbsp;&nbsp;<?php print_string('externalaccount','local_unifr_lang') ?>&nbsp;&nbsp;&nbsp;&nbsp;</button></div>
<!--			<div class="form-label unifr-label3"><?php print_string('guest','local_unifr_lang') ?></div>-->
        <form action="index.php" method="post" id="guestlogin">
        <input type="hidden" name="username" value="guest" />
        <input type="hidden" name="password" value="guest" />
        <div class="form-input unifr-form"><input class="unifr-normalbutton" type="submit" value="<?php print_string("loginguest") ?>" /></div>
        </form>
    </div>
    <p class="logincontact"><?php print_string('logincontact','local_unifr_lang') ?></p><br />
<?php
$wayf .= ob_get_clean();
?>
