<?php
$url = isset($url) ? $url : array('action' => 'index');
?>
<div class="row-fluid">
	<div class="span12">
		<div class="clearfix filter">
			<?php
			echo $this->Form->create(false, array(
				'class' => 'inline',
				'url' => $url,
			));

			$this->Form->templates(array(
				'label' => false,
				'class' => 'span11',
				'submitContainer' => '<div class="input submit span2">{{content}}</div>'
			));

			echo $this->Form->input('chooser', array(
				'type' => 'hidden',
				'value' => isset($this->request->query['chooser']),
			));

			echo $this->Form->input('filter', array(
				'title' => __d('croogo', 'Search'),
				'placeholder' => __d('croogo', 'Search...'),
				'div' => 'input text span3',
				'tooltip' => false,
			));

			if(!isset($this->request->query['chooser'])){

				echo $this->Form->input('type', array(
					'options' => $nodeTypes,
					'empty' => __d('croogo', 'Type'),
					'div' => 'input select span2',
				));

				echo $this->Form->input('status', array(
					'options' => array(
						'1' => __d('croogo', 'Published'),
						'0' => __d('croogo', 'Unpublished'),
					),
					'empty' => __d('croogo', 'Status'),
					'div' => 'input select span2',
				));

				echo $this->Form->input('promote', array(
					'options' => array(
						'1' => __d('croogo', 'Yes'),
						'0' => __d('croogo', 'No'),
					),
					'empty' => __d('croogo', 'Promoted'),
					'div' => 'input select span2',
				));

			}

			echo $this->Form->submit(__d('croogo', 'Filter'), array('class' => 'btn'));
			echo $this->Form->end();
			?>
		</div>
	</div>
</div>
