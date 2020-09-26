<li
		<?= $this->app->checkMenuSelection('InstaSettingsController') ?>>
		<?= $this->url->link(t('Instant Actions'), 'InstaSettingsController', 'show', array('plugin' => 'InstantActions','project_id' => $project['id'])) ?>

</li>

