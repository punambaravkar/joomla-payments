<?php
/**
 *  @copyright  Copyright (c) 2009-2015 TechJoomla. All rights reserved.
 *  @license    GNU General Public License version 2, or later
 */

// no direct access
	defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.formvalidation');
$document =JFactory::getDocument();
	if($vars->custom_email=="")
		$email = JText::_('NO_ADDRS');
	else
		$email = $vars->custom_email;

?>
<script type="text/javascript">
function myValidate(f)
{
if (document.formvalidator.isValid(f)) {
		f.check.value='<?php echo JSession::getFormToken(); ?>';
		return true;
	}
	else {
		var msg = 'Some values are not acceptable.  Please retry.';
		alert(msg);
	}
	return false;
}

</script>
<div class="tjcpg-wrapper">
<form action="<?php echo $vars->url; ?>" name="adminForm" id="adminForm" onSubmit="return myValidate(this);" class="form-validate form-horizontal"  method="post">
	<div>
		<!--
		<div class="control-group">
			<label for="cardfname" class="control-label"><?php  echo JText::_('PLG_PAYMENT_COD_ORDER_INFO_LEB');?></label>
			<div class="controls">	<?php  echo JText::sprintf('PLG_PAYMENT_COD_ORDER_INFO_MSG', $vars->custom_name);?></div>
		</div>

		<div class="control-group">
			<label for="cardlname" class="control-label"><?php echo JText::_('PLG_PAYMENT_COD_COMMENT'); ?></label>
			<div class="controls">
				<textarea id='comment' name='comment' class="inputbox" rows='3' maxlength='135' size='28'><?php if(isset($vars->comment)){ echo $vars->comment; } ?></textarea>

			</div>
		</div>

		<div class="control-group">
			<label for="cardaddress1" class="control-label"><?php //echo JText::_('PLG_PAYMENT_COD_PAY_PRO') ?></label>
			<div class="controls"><?php  //echo $email;?>
					<input type='hidden' name='mail_addr' value="<?php //echo $email;?>" />
			</div>
		</div>
		-->
			<div class="form-actions">
					<input type='hidden' name='order_id' value="<?php echo $vars->order_id;?>" />
					<input type='hidden' name="total" value="<?php echo sprintf('%02.2f',$vars->amount) ?>" />
					<input type="hidden" name="user_id" size="10" value="<?php echo $vars->user_id;?>" />
					<input type='hidden' name='return' value="<?php echo $vars->return;?>" >
					<input type="hidden" name="plugin_payment_method" value="onsite" />

					<div class="" style="text-align:center;">
						<input type='submit' name='btn_check' id='btn_check' class="btn btn-success btn-large"  value="<?php echo JText::_('PLG_PAYMENT_COD_SUBMIT'); ?>">
					</div>
				</div>

	</div>
</form>
</div>
