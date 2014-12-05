<?php
    class Usuario{
        private $name;

        public function setUsuario(){
            $this->name="YJZ1";
            return $this->name;
        }

        public function getUsuario(){
            echo"<br> Mostrar usuario: ".$this->name;
        }

        public function consultaGeneral(){
            $sql1="SELECT * FROM usuario WHERE Estatus = 1";
            $resul= mysql_query ($sql1) or die ("Error al buscar los usuarios");
            echo "<div class=table-responsive>";
            echo"<table class=\"table table-striped\">";
            echo"<tr><td colspan=5 align='center'><stromp>Lista de alumnos</stromp></td></tr>";
            echo"<tr><td>Id</td><td>Nombre</td><td>Apellido P</td><td>Apellido M</td><td>Nivel</td>";
            while ($field=mysql_fetch_array($resul)){
                $this->Id=$field['Id'];
                $this->Nombre=utf8_decode($field['Nombre']);
                $this->ApellidoPaterno=utf8_decode($field['ApellidoPaterno']);
                $this->ApellidoMaterno=utf8_decode($field['ApellidoMaterno']);
                $this->Nivel=$field['Nivel'];
                switch($this->Nivel){
                    case 1:
                        $type="Administrador";
                        break;
                    case 2:
                        $type="Maestro";
                        break;
                    case 3:
                        $type="Alumno";
                        break;
                }
                echo"<tr><td>$this->Id</td><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$type</td>";
            }
            echo"</table></div>";
        }
    }