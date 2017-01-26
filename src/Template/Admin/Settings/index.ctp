<?php
$this->extend('/Common/Admin/add');
$this->Html->addCrumb('Settings', null);
$this->start('form');
echo $this->Form->create($settings, [
    'novalidate' => true,
    'align' => $this->Awesome->boostrapFromLayout
]);


if (!empty($settings)) {
    foreach ($settings->toArray() as $key => $listOne) {
        echo $this->Form->input($key . '.id');
        if ($listOne->input_type == 'checkbox') {
            echo '<div class="form-group">
            <label class="col-lg-4 control-label">' . $listOne->title . ' </label>
            <div class="switchery-demo col-lg-8">
                ' . $this->Form->checkbox($key . '.value', [
                'data-plugin' => "switchery",
                'data-color' => "#5d9cec"
            ]) .
            '</div>
        </div>';
        } else {
            echo $this->Form->input($key . '.value', ['type' => $listOne->input_type, 'label' => $listOne->title]);
        }
    }
}



$this->end();

