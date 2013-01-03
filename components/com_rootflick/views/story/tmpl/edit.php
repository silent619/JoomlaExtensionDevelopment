<?php
/**
 
 * @package		Joomla25.Bizform
 * @subpackage	Components
 * @author		Chad Windnagle
 * @link		http://www.chadwindnagle.com
 * @license		License GNU General Public License version 2 or later
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Load the tooltip behavior.
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.keepalive');
JHtml::_('formbehavior.chosen', 'select');

?>

<script type="text/javascript">
	Joomla.submitbutton = function(task) {
		if (task == 'chapter.cancel' || document.formvalidator.isValid(document.id('rootflick-form'))) {
			<?php echo $this->form->getField('description')->save(); ?>
			Joomla.submitform(task, document.getElementById('rootflick-form'));
		} else {
			alert('<?php echo $this->escape(JText::_('JGLOBAL_VALIDATION_FORM_FAILED'));?>');
		}
	}
</script>  


<div id="j-sidebar-container" class="span2">
	<h3>My sidebar</h3>
</div>
<div id="j-main-container" class="span8">
	
<form action="<?php echo JRoute::_('index.php?option=com_rootflick&layout=edit&id='.(int) $this->item->id); ?>" 
	method="post" name="adminForm" class="form-validate" id="rootflick-form">
		<fieldset class="adminform">
			<ul class="adminformlist">
				<?php foreach ($this->form->getFieldset() as $field): ?>
					<li><?php echo $field->label; ?>
					<?php echo $field->input; ?></li>
				<?php endforeach ?>
			</ul>
		</fieldset>
	<input type="hidden" name="task" value="" />
	<?php echo JHtml::_('form.token'); ?>
</form>
	
</div>