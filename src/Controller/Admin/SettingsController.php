<?php

namespace Settings\Controller\Admin;

use Settings\Controller\AppController;

class SettingsController extends AppController {

    public function initialize() {
        parent::initialize();
    }

    public function index() {
        $this->Crud->action()->disable();


        if ($this->request->is(['Post', 'Put'])) {
            $status = true;
            foreach ($this->request->data() as $data) {
                $userEntity = $this->Settings->newEntity($data);

                if (!$result = $this->Settings->save($userEntity)) {
                    $status = false;
                   // break;

                    //return $this->redirect(['action' => 'index']);
                }
            }
            if ($status) {
                $this->Flash->set(__('Settings has been updated.'), [
                    'params' => ['class' => 'alert alert-success alert-dismissible']
                ]);
                return $this->redirect(['action' => 'index']);
            }
        }

        $settings = $this->paginate();
        //pr($settings);die;
        $this->set(['settings' => $settings]);
    }

}
