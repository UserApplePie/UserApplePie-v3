<?php
/**
* Account Privacy Settings View
*
* UserApplePie
* @author David (DaVaR) Sargent <davar@userapplepie.com>
* @version 4.3.0
*/

use Libs\Language, Libs\Form;
?>

<div class="col-lg-9 col-md-8 col-sm-12">
	<div class="card mb-3">
		<div class="card-header h4">
			<?=$title;?>
		</div>
		<div class="card-body">
			<p><?=$welcomeMessage;?></p>
			<div class='card border-secondary mb-3'>
				<div class='card-header'>
					<?=Language::show('ps_email_settings', 'Members'); ?>
				</div>
					<?php echo Form::open(array('method' => 'post')); ?>
						<table class='table table-striped table-hover responsive'>
							<tr><th align='left'><?=Language::show('ps_setting', 'Members'); ?></th><th align='right'><?=Language::show('ps_enable', 'Members'); ?></th></tr>
							<tr>
								<td align='left'><?=Language::show('ps_admin_mail', 'Members'); ?></td>
								<td align='right'><input type='checkbox' id='pme' name='privacy_massemail' value='true' <?=$pme_checked?>></td>
							</tr>
							<tr>
								<td align='left'><?=Language::show('ps_pm_mail', 'Members'); ?></td>
								<td align='right'><input type='checkbox' id='ppm' name='privacy_pm' value='true' <?=$ppm_checked?>></td>
							</tr>
						</table>
			</div>
			<div class='card border-secondary mb-3'>
				<div class='card-header'>
					<?=Language::show('ps_profile_settings', 'Members'); ?>
				</div>
				<div class='card-body'>
					<?=Language::show('ps_profile_settings_description', 'Members'); ?><br><br>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<div class="input-group-text"><?=Language::show('ps_profile_settings', 'Members'); ?> </div>
						</div>
						<select class='custom-select' id='privacy_profile' name='privacy_profile'>
								<option value='Public' <?php if($privacy_profile == "Public") echo "selected";?> >Public (Default)</option>
								<option value='Members' <?php if($privacy_profile == "Members") echo "selected";?> >Members Only</option>
								<option value='Friends' <?php if($privacy_profile == "Friends") echo "selected";?> >Friends Only</option>
						</select>
						<div class="input-group-append">
							<div class="input-group-text"><span class="badge badge-danger"><?=Language::show('required', 'Members'); ?></span></div>
						</div>
					</div>
				</div>
			</div>
				<input type="hidden" name="token_editprivacy" value="<?=$csrfToken;?>" />
				<input type="submit" name="submit" class="btn btn-success" value="<?=Language::show('ps_button', 'Members'); ?>">
			<?php echo Form::close(); ?>
    </div>
  </div>
</div>
