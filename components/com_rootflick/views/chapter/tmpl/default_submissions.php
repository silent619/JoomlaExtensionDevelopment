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

?>

<?php foreach ($this->submits as $submit): ?>
<div class="span3">
	<div class="well well-small">
		<h5>
			<?php echo $submit->name; ?>
		</h5>
		<?php if ($submit->image):?>
		<a href="#submit-<?php echo $submit->id; ?>" role="button"
			class="btn" data-toggle="modal"> <img
			src="<?php echo $submit->image; ?>" />
		</a>
		<?php else: ?>
		<a href="#submit-<?php echo $submit->id; ?>" role="button"
			class="btn" data-toggle="modal">View Video
		</a>
		<?php endif; ?>
		<div id="submit-<?php echo $submit->id; ?>" class="modal hide fade"
			tabindex="-1" role="dialog"
			aria-labelledby="submit-<?php echo $submit->id; ?>-label"
			aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true">X</button>
				<h3 id="submit-<?php echo $submit->id; ?>-label">
					<?php echo $submit->name?>
				</h3>
			</div>
			<div class="modal-body">
				<?php echo $submit->video; ?>
				<div class="well well-small">
					<?php echo $submit->description; ?>
				</div>
			</div>
			<div class="modal-footer">
				<div class="pull-left">
					<i class="icon-user"></i><?php echo $submit->username?> | <i class="icon-calendar"></i><?php echo $submit->submit_date; ?>
				</div>
			</div>
		</div>
		<a href="index.php?option=com_rootflick&task=vote.vote&sid=<?php echo $submit->id;?>" class="btn">Submit Vote</a>
		<span class="label label-info"><span class="badge badge-inverse"><?php echo $submit->vote?></span>Votes</span>
	</div>
</div>
<?php endforeach; ?>
<div class="clearfix"></div>