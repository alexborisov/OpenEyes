<?php
/*
_____________________________________________________________________________
(C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
(C) OpenEyes Foundation, 2011
This file is part of OpenEyes.
OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
_____________________________________________________________________________
http://www.openeyes.org.uk   info@openeyes.org.uk
--
*/

?><div id="theatreList">
<?php
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
//$cs->registerCSSFile('/css/theatre.css', 'all');
$cs->registerCoreScript('jquery');
$cs->registerCoreScript('jquery.ui');
$cs->registerCSSFile('/css/jqueryui/theme/jquery-ui.css', 'all');
//$cs->registerScriptFile($baseUrl.'/js/jquery.multi-open-accordion-1.5.2.min.js');

if (empty($theatres)) { ?>
<h2 class="theatre">No theatre schedules match your search criteria.</h2>
</div>
<?php
} else {
?>
<div>
<?php
	$panels = array();
	$firstTheatreShown = false;
	foreach ($theatres as $name => $dates) { ?>
<h2 class="theatre<?php if (!$firstTheatreShown) { echo ' firstTheatre'; } ?>"><?php echo $name; ?></h2>
<?php
		$firstTheatreShown = true;
		foreach ($dates as $date => $sessions) {
            		$timestamp = strtotime($date); ?>
<h3 class="date"><a href="#"><?php
			echo date('d ', $timestamp);
            		echo substr(date('F', $timestamp), 0, 3);
            		echo date(' Y', $timestamp);
            		echo ' - ' . date('l', $timestamp);
?></a></h3>
<div>
    <table>
    <tr>
        <th class="first">Session</th>
        <th class="repeat leftAlign">Patient (Age)</th>
        <th class="repeat leftAlign">[Eye] Operation</th>
        <th class="repeat">Duration</th>
        <th class="repeat">Ward</th>
        <th class="repeat">Anaesthetic</th>
        <th class="last">Alerts</th>
    </tr>
<?php
			$lastSession = $sessions[0];
            		foreach ($sessions as $session) {
                		if ($session['sessionId'] != $lastSession['sessionId']) { ?>
    <tr><th class="sessionComments" colspan="7">Session Comments</th></tr>
    <tr><td colspan="7" class="sessionComments leftAlign">

<?php

$form = $this->beginWidget('CActiveForm', array(
        'id'=>'commentsForm' . $session['sessionId'],
        'enableAjaxValidation'=>false,
        'htmlOptions' => array('class'=>'sliding')
));

echo CHtml::hiddenField('id', $session['sessionId']);
echo CHtml::textArea('comments', $session['comments'], array('rows'=>2, 'cols'=>80));
echo CHtml::button('Edit comments', array('id' => 'editComments' . $session['sessionId'], 'name' => $session['sessionId']));

$this->endWidget();

?>
    </td></tr>
    <tr>
        <th class="footer" colspan="7">Time unallocated: <?php
                    echo '<span';
                    if ($lastSession['timeAvailable'] < 0) {
                        echo ' class="full"';
                    }
                    echo ">{$lastSession['timeAvailable']}"; ?> min</span></th>
    </tr>
<?php		$lastSession = $session;
	}
?>
    <tr>
        <td class="session"><?php echo substr($session['startTime'], 0, 5) . '-' . substr($session['endTime'], 0, 5); ?></td>
        <td class="patient leftAlign"><?php echo !empty($session['procedures']) ? $session['patientName'] . ' (' . $session['patientAge'] . ')' : ''; ?></td>
        <td class="operation leftAlign"><?php echo !empty($session['procedures']) ? '['.$session['eye'].'] '.$session['procedures'] : 'No procedures'?></td>
        <td class="duration"><?php echo $session['operationDuration']; ?></td>
        <td class="ward"><?php echo $session['ward']; ?></td>
        <td class="anaesthetic"><?php echo !empty($session['procedures']) ? $session['anaesthetic'] : ''; ?></td>
        <td class="alerts"><div class="alert gender invisible <?php echo $session['patientGender']; ?>"></div><?php
        if (!empty($session['operationComments'])) { ?><div class="alert comments invisble"><img class="invisible" src="/images/icon_comments.gif" alt="comments"title="<?php echo $session['operationComments']; ?>" /></div><?php
        } ?></td>
    </tr>
<?php
            } ?>
    <tr><th class="sessionComments" colspan="7">Session Comments</th></tr>
    <tr><td colspan="7" class="sessionComments leftAlign">

<?php

$form = $this->beginWidget('CActiveForm', array(
        'id'=>'commentsForm' . $session['sessionId'],
        'enableAjaxValidation'=>false,
        'htmlOptions' => array('class'=>'sliding')
));

echo CHtml::hiddenField('id', $session['sessionId']);
echo CHtml::textArea('comments', $session['comments'], array('rows'=>2, 'cols'=>80));
echo CHtml::button('Edit comments', array('id' => 'editComments' . $session['sessionId'], 'name' => $session['sessionId']));

$this->endWidget();

?>
    </td></tr>
    <tr>
    <th class="footer" colspan="7">Time unallocated: <?php
                    echo '<span';
                    if ($session['timeAvailable'] < 0) {
                       echo ' class="full"';
                    }
                    echo ">{$session['timeAvailable']}"; ?> min</span></th>
    </tr>
    </table>
</div>
<?php
	}
}
?>
    </div>
</div>
<div class="cleartall"></div>
<script type="text/javascript">
	$('input[id^="editComments"]').click(function() {
		$.ajax({
			'url': '<?php echo Yii::app()->createUrl('waitingList/updateSessionComments'); ?>',
			'type': 'POST',
			'data': $('#commentsForm' + this.name).serialize(),
			'success': function(data) {
				return true;
			}
		});

		return true;
	});
</script>
<?php
}
