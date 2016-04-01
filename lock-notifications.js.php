<?php

require_once 'common.inc.php';

$notificationList = $cache->getCache('notification-list');
if (empty($notificationList)) {
	exit;
}
$selectors = array();
foreach ($notificationList as $notification) {
	$selectors[] = "#notification-preferences .comm-event-option[data-category='$notification']";
}

?>

var canvashack = {
	lockNotifications: function() {
		$("<?= implode(', ', $selectors) ?>").addClass('canvashack-lock-notifications')
	}
};