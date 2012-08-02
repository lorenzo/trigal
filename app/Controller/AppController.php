<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
   /**
    * List of global controller components
    *
    * @cakephp
    * @var array
    */
    public $components = array(
        // Enable CRUD actions
        'Crud.Crud' => array(
            'validateId' => 'numeric',
            'actions' => array('index', 'add', 'edit', 'view', 'delete')
        ),
        'Paginator' => array(
            'settings' => array(
                'limit' => 200,
                'maxLimit' => 500,
                'paramType' => 'querystring'
            )
        ),
        'RequestHandler',
        'DebugKit.Toolbar' => array('panels' => array('history' => false))
    );

    public $helpers = array(
        'Session',
        'Html' => array('className' => 'TwitterBootstrap.BootstrapHtml'),
        'Form' => array('className' => 'TwitterBootstrap.BootstrapForm'),
        'Paginator' => array('className' => 'TwitterBootstrap.BootstrapPaginator'),
    );

    public function beforeFilter() {
        $this->request->addDetector('delete', array('callback' => function($request) {
            return $request->is('post');
        }));
    }

    /**
    * Dispatches the controller action.  Checks that the action exists and isn't private.
    *
    * If Cake raises MissingActionException we attempt to execute Crud plugin
    *
    * @param CakeRequest $request
    * @return mixed The resulting response.
    * @throws PrivateActionException When actions are not public or prefixed by _
    * @throws MissingActionException When actions are not defined and scaffolding and CRUD is not enabled.
    */
    public function invokeAction(CakeRequest $request) {
        try {
            return parent::invokeAction($request);
        } catch (MissingActionException $e) {
            // Check for any dispatch components
            if (!empty($this->dispatchComponents)) {
                // Iterate dispatchComponents
                foreach ($this->dispatchComponents as $component => $enabled) {
                    // Skip them if they aren't enabled
                    if (empty($enabled)) {
                        continue;
                    }

                    // Skip if isActionMapped isn't defined in the Component
                    if (!method_exists($this->{$component}, 'isActionMapped')) {
                        continue;
                    }

                    // Skip if the action isn't mapped
                    if (!$this->{$component}->isActionMapped($request->params['action'])) {
                        continue;
                    }

                    // Skip if executeAction isn't defined in the Component
                    if (!method_exists($this->{$component}, 'executeAction')) {
                        continue;
                    }

                    // Execute the callback, should return CakeResponse object
                    return $this->{$component}->executeAction();
                }
            }

            // No additional callbacks, re-throw the normal Cake exception
            throw $e;
        }
    }

    public function beforeRender() {
        if (in_array($this->request->action, array('add', 'edit'))) {
            foreach ($this->{$this->modelClass}->getAssociated() as $m => $m) {
                $model = $this->{$this->modelClass}->{$m};
                if ($model->hasField($model->displayField)) {
                    $this->set(strtolower(Inflector::pluralize($m)), $model->find('list'));    
                }
            }
        }
    }

}
