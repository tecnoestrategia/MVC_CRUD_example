<?php/*** @author TecnoEstrategia <develop@tecnoestrategia.com>* @copyright TecnoEstrategia* @license GPL* @license http://opensource.org/licenses/gpl-license.php GNU Public License* @link https://github.com/tecnoestrategia This source code* This is a Summary.A simple class to make a model (in this case the index front/default model) */class index extends DataBase {  public function ShowAll(){		try	{			$sql ="select * from general";			$stmt = $this->pdo->prepare($sql);			$stmt->execute(array($data));			return $stmt->fetchAll(PDO::FETCH_OBJ);		  }		catch (Exception $e){			die($e->getMessage());		  }	   }  public function ShowId($id){		try	{			$sql = "select * from general where id_general = $id ";			$stmt = $this->pdo->prepare($sql);			$stmt->execute(array($data));			return $stmt->fetch(PDO::FETCH_OBJ);		  }		catch (Exception $e){			die($e->getMessage());		  }	   }};?>