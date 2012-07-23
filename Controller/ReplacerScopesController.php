<?php
App::uses('ReplacerAppController', 'Replacer.Controller');
/**
 * ReplacerScopes Controller
 *
 * @property ReplacerScope $ReplacerScope
 */
class ReplacerScopesController extends ReplacerAppController {



/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ReplacerScope->recursive = 0;
		$this->set('replacerScopes', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->ReplacerScope->id = $id;
		if (!$this->ReplacerScope->exists()) {
			throw new NotFoundException(__('Invalid replacer scope'));
		}
		$this->set('replacerScope', $this->ReplacerScope->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ReplacerScope->create();
			if ($this->ReplacerScope->save($this->request->data)) {
				$this->Session->setFlash(__('The replacer scope has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The replacer scope could not be saved. Please, try again.'));
			}
		}
		$replacerReplacements = $this->ReplacerScope->ReplacerReplacement->find('list');
		$this->set(compact('replacerReplacements'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->ReplacerScope->id = $id;
		if (!$this->ReplacerScope->exists()) {
			throw new NotFoundException(__('Invalid replacer scope'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ReplacerScope->save($this->request->data)) {
				$this->Session->setFlash(__('The replacer scope has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The replacer scope could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ReplacerScope->read(null, $id);
		}
		$replacerReplacements = $this->ReplacerScope->ReplacerReplacement->find('list');
		$this->set(compact('replacerReplacements'));
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
		$this->ReplacerScope->id = $id;
		if (!$this->ReplacerScope->exists()) {
			throw new NotFoundException(__('Invalid replacer scope'));
		}
		if ($this->ReplacerScope->delete()) {
			$this->Session->setFlash(__('Replacer scope deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Replacer scope was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
