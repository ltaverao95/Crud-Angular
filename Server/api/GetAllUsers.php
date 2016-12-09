<?php 

	include_once("../Utils/Response/ResponseDTO.php");
	include_once("../BLL/Interfaces/IDataBaseServicesBLL.php");
	include_once("../BLL/Implementations/DataBaseServicesBLL.php");
	include_once("../BLL/Interfaces/IUserBLL.php");
	include_once("../DAL/Implementations/UserDAL.php");
	include_once("../BLL/Implementations/UserBLL.php");
	include_once("../DTO/UserDTO.php");

	$responseDTO = new ResponseDTO();

	try
	{
		$userBLL = new UserBLL();

		$responseDTO = $userBLL->GetAllUsers(); 
	}
	catch (Exception $e)
	{
		$responseDTO->SetMessageErrorAndStackTrace("Ocurrió un problema mientras se obtenían los datos", $e->getMessage());
	}

	echo json_encode($responseDTO);

?>