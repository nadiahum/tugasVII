<?php 

	class FormController{
		private $IsiForm;
		private $modelTema;

		public function getIsiForm(){
			$this->IsiForm = new FormView();
			$this->IsiForm->isiForm();

		}

		public function getHasilForm(){
			$this->modelTema = new FormModel();
			$tema = $this->modelTema->random();

			$this->IsiForm = new FormView();
			$this->IsiForm->hasilForm($tema);
		}

	}

 ?>