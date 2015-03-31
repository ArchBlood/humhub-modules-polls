<?php

/**
 * This view is shown when a user clicks on the "Polls" Navigation Items in the
 * Space Navigation.
 *
 * Its shows an FormWidget to create a new poll and a stream widget which shows
 * all existing polls.
 *
 * @package humhub.modules.polls.views
 * @since 0.5
 */
?>

<?php $this->widget('application.modules.polls.widgets.PollFormWidget', array('contentContainer' => $this->contentContainer)); ?>

<?php
$this->widget('application.modules.polls.widgets.PollsStreamWidget', array(
    'contentContainer' => $this->contentContainer,
    'streamAction' => '//polls/poll/stream',
    'messageStreamEmpty' => ($this->contentContainer->canWrite()) ?
            Yii::t('PollsModule.widgets_views_stream', '<b>There are no polls yet!</b><br>Be the first and create one...') :
            Yii::t('SpaceModule.views_space_index', '<b>There are no polls yet!</b>'),
    'messageStreamEmptyCss' => ($this->contentContainer->canWrite()) ?
            'placeholder-empty-stream' :
            '',
));
?>