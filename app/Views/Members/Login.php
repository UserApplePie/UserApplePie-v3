<?php
/**
* Account Login View
*
* UserApplePie
* @author David (DaVaR) Sargent <davar@userapplepie.com>
* @version 4.3.0
*/

use Libs\Language;
?>

<div class="col-lg-12 col-md-12 col-sm-12">
	<div class="card mb-3">
		<div class="card-header h4">
			<?=$title;?>
		</div>
		<div class="card-body">
			<p><?=$welcomeMessage;?></p>

      <form class="form" method="post">
          <div class="col-xs-12">
              <div class="form-group">
								<div class="input-group mb-3">
									<div class='input-group-prepend'>
										<span class='input-group-text'>
											<?=Language::show('login_field_username', 'Auth')?>
										</span>
									</div>
                	<input  class="form-control" type="text" id="username" name="username" placeholder="<?=Language::show('login_field_username', 'Auth')?>">
								</div>
              </div>
							<div class="form-group">
								<div class="input-group mb-3">
									<div class='input-group-prepend'>
										<span class='input-group-text'>
											<?=Language::show('login_field_password', 'Auth')?>
										</span>
									</div>
									<input class="form-control" type="password" id="password" name="password" placeholder="<?=Language::show('login_field_password', 'Auth')?>">
								</div>
							</div>
              <div class="form-inline">
                  <label class="control-label"><?=Language::show('login_field_rememberme', 'Auth')?></label>
                  <input class="form-control" type="checkbox" id="rememberMe" name="rememberMe">
              </div>
              <input type="hidden" name="token_login" value="<?=$csrfToken;?>" />
							<!-- UBP Name Protection -->
							<input type="text" name="ubp_name" value="" class="hidden" />
              <button class="btn btn-primary" type="submit" name="submit"><?=Language::show('login_button', 'Auth')?></button>
          </div>

      </form>

		</div>
		<div class="card-footer text-muted">
					<a class="btn btn-primary btn-sm" name="" href="<?=DIR?>Register"><?=Language::show('register_button', 'Auth')?></a>
					<a class="btn btn-primary btn-sm" name="" href="<?=DIR?>Forgot-Password"><?=Language::show('forgotpass_button', 'Auth')?></a>
					<a class="btn btn-primary btn-sm" name="" href="<?=DIR?>Resend-Activation-Email"><?=Language::show('resendactivation_button', 'Auth')?></a>
    </div>
  </div>
</div>
