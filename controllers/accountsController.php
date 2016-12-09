<?php 
/**
 * Controlador de cuentas
 */
class accountsController extends AppController {
	/**
	 * Contructor de la clase
	 * @return type
	 */
	public function __construct(){
		parent::__construct();
	}
	/**
	 * Lista los tipos de usuarios
	 * @return type
	 */
	public function index(){
		//opcion 1
		$options= array(
			
			);

		$this->set("accounts", 
			$this->accounts->find(
				"accounts", 
				"all", 
				$options
				)
			);
	}

	/**
	 * Funcion para agregar un nuevo tipo
	 * @return type
	 */
	public function add(){

		if ($_SESSION["type_name"]=="Administradores") {
			if ($_POST) {
				//$pass = new Password();
				//$_POST["password"] = $pass->getPassword($_POST["password"]);
				if ($this->accounts->save("accounts", $_POST)){
					$this->redirect(array("controller"=>"accounts"));
				}else{
					$this->redirect(array("controller"=>"users","method"=>"add"));				
				}
			}
			$this->set("accounts", $this->accounts->find("accounts"));
		}else{
			$this->redirect(array("controller"=>"users"));
			}
		}
		/**
		 * metodo para crear una cuenta
		 * @param type $id 
		 * @return type
		 */

	public function edit($id){
		if ($_POST) {
			
			
			if ($this->accounts->update("accounts", $_POST)) {
				$this->redirect(array("controller"=> "accounts"));
			}else{
				$this->redirect(
					array(
						"controller"=> "accounts",
						"method"=>"edit/".$_POST["id"])
					);
			}
		}
		$options = array(
			"conditions"=>"id=".$id
			);
		$this->set(
			"account",
			$this->accounts->find("accounts", "first", $options)
		);
		$this->set("accounts", $this->accounts->find("accounts"));
		
	}
	/**
	 * metodo para editar cuentas
	 * @param type $id 
	 * @return type
	 */

	public function delete($id){
		$options = "accounts.id=".$id;
		if($this->accounts->delete("accounts", $options)){
			$this->redirect(array("controller"=>"accounts"));
		}

	}
	/***/
}