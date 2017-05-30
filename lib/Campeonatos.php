<?php

class Campeonato
{
    var $idcampeonato;
    var $codigo;
    var $nombre;
    var $fechainicio;
    var $fechatermino;
    var $cantidadpartidos;
    
    var $odb;
    
    public function __constructor($nid=0,$scod="",$nom="",$dfecini,$dfecfin,$ncant=0)
    {
        $this->idcampeonato=$nid;
        $this->codigo=$scod;
        $this->nombre=$nom;
        $this->fechainicio=$dfecini;
    }
    
    public function ListaCampeonatosArr()
    { 
            $this->oConexion = new Conexion ();
         
        $oConn=new Conexion();
        if($oConn->conectar())
        $db=$oConn->objconn;
        else 
        return false;
    
        
    /*String query*/  
    $sql="SELECT idcampeonato,codigo,nombre,fechainicio,fechatermino,cantidadpartidos"
            ." FROM campeonato";

    /*Ejecucion*/
    $resultado=$db->query($sql);
    $i=0;
    while($fila = $resultado->fetch_assoc())
    {
        $oCampeonato=new Campeonato($fila["idcampeonato"],
                                    $fila["codigo"],
                                    $fila["nombre"],
                                    $fila["fechainicio"],
                                    $fila["fechatermino"],
                                    $fila["cantidadpartidos"]);
        $arrCampeonato[$i]=$oCampeonato;
        $i++;
    }
    return $arrCampeonato;
    
   
        
        $oCampeonato=new Campeonato();
        return $oCampeonato;
    }
    
    
    
    
    
    
    
    public function ListaCampeonatos()
    { 
        if(!isset($this->oConexion))  
        {
        $oConn=new Conexion();
        if($oConn->conectar())
            $this->odb=$oConn->objconn;
        else 
        return false;
        }
        
    $sql="SELECT idcampeonato,codigo,nombre,fechainicio,fechatermino,cantidadpartidos"
            ." FROM campeonato";

    /*Ejecucion*/
    $resultado= $this->odb->query($sql);
    
    while($fila = $resultado->fetch_assoc())
    {
        $oCampeonato = new Campeonato();
        $arrCampeonato[$i]=$oCampeonato;
        $i++;
    }
    
    if($resultado->fetch_assoc())
    
        $oCampeonato=new Campeonato($fila["idcampeonato"],
                                    $fila["codigo"],
                                    $fila["nombre"],
                                    $fila["fechainicio"],
                                    $fila["fechatermino"],
                                    $fila["cantidadpartidos"]);
        return $oCampeonato;
    }
}
