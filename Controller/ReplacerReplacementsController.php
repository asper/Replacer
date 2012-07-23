<?php
App::uses('ReplacerAppController', 'Replacer.Controller');
/**
 * ReplacerReplacements Controller
 *
 * @property ReplacerReplacement $ReplacerReplacement
 */
class ReplacerReplacementsController extends ReplacerAppController {



/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ReplacerReplacement->recursive = 0;
		$this->set('replacerReplacements', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->ReplacerReplacement->id = $id;
		if (!$this->ReplacerReplacement->exists()) {
			throw new NotFoundException(__('Invalid replacer replacement'));
		}
		$this->set('replacerReplacement', $this->ReplacerReplacement->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ReplacerReplacement->create();
			if ($this->ReplacerReplacement->save($this->request->data)) {
				$this->Session->setFlash(__('The replacer replacement has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The replacer replacement could not be saved. Please, try again.'));
			}
		}
		$replacerScopes = $this->ReplacerReplacement->ReplacerScope->find('list');
		$this->set(compact('replacerScopes'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->ReplacerReplacement->id = $id;
		if (!$this->ReplacerReplacement->exists()) {
			throw new NotFoundException(__('Invalid replacer replacement'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ReplacerReplacement->save($this->request->data)) {
				$this->Session->setFlash(__('The replacer replacement has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The replacer replacement could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ReplacerReplacement->read(null, $id);
		}
		$replacerScopes = $this->ReplacerReplacement->ReplacerScope->find('list');
		$this->set(compact('replacerScopes'));
	}

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->ReplacerReplacement->id = $id;
		if (!$this->ReplacerReplacement->exists()) {
			throw new NotFoundException(__('Invalid replacer replacement'));
		}
		if ($this->ReplacerReplacement->delete()) {
			$this->Session->setFlash(__('Replacer replacement deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Replacer replacement was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
