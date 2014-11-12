<?php 
	class clsDatos{
		// Atributo privado CONEXION
		private $conexion;
		// Todas las clases tienen un constructor y un destructor
		// Funcion Contructor
		public function _contruct()
		{
			// Esto es para no hacer una conexion
			$db_servidor = "localhost";
			$db_usuario = "root";
			$db_clave = "Ciracus1988";
			$db_basedatos = "mvc";

			$this -> conexion = mysql_connect( $db_servidor, $db_usuario, $db_clave );
			mysql_select_db( $db_basedatos, $this -> conexion );
		} 

		// Funcion Contructor
		public function _destruct()
		{
			// Automaticamente destruye
		}

		// Function filtro con parametro
		public function filtro( $sql )
		{
			$result = mysql_query( $sql, $this -> conexion )
			return $result;
		}

		// Funcion para cerrar filtro
		public function cerrarFiltro( $datos )
		{	
			// liberamos el buffer de memoria y asi hara mas rapido el servidor
			mysql_free_result( $datos );
		}

		// Convertir los datos que saquemos de la base de datos en un arreglo
		public function proximo( $datos )
		{
			$arreglo = mysql_fetch_array( $datos );
			return $arreglo;
		}

		// Hacer consultas en la DB modificar, consultas, eliminar y crear 
		public function ejecutar( $sql )
		{
			mysql_query( $sql, $this -> conexion );
		}

		// Cerrar conexion
		public function cerrarConexion()
		{
			mysql_close( $this -> conexion );
		}
	}
?>