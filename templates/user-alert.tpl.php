<?php

/**
 * @file
 * Displays a user alert.
 *
 * Available variables:
 * - $alert_label: The label of the alert, as set in the User Alerts settings.
 * - $body: The user alert message.
 *
 * @ingroup themeable
 */

?>

<div class="user <?php print $nid; ?>">
   <button type="button" class="close" data-dismiss="alert">×</button>
   <?php if ($alert_label) ?><strong> <?php print $alert_label; ?>:</strong><?php endif; ?> <?php print $body; ?>
</div>
