<?php
/**
 * Created by PhpStorm.
 * User: Evil25
 * Date: 22/05/2018
 * Time: 18:28
 */

class ManageDb
{
    private $tblname;
    private $columnvalue; // this var must be an associative array

    public function __construct($tblname,$columnvalue)
    {
        $this->tblname = $tblname;
        if(is_array($columnvalue)){
            $this->columnvalue = $columnvalue;
        }else{
            $this->columnvalue = false;
        }
    }
    public function Insert(){
        $keys = implode(",",array_keys($this->columnvalue));
        $values = implode(",",array_values($this->columnvalue));
        $sql = "Insert Into ".$this->tblname." (".$keys.") Values(".$values.")";
        return $sql;
    }
    public function Update($condition){
        $keys = array_keys($this->columnvalue);
        $values = array_values($this->columnvalue);
        $sql = "Update ".$this->tblname." SET ";
        if(count($keys) == count($values)){
            for($i=0;$i<count($keys);$i++){
                $sql .= $keys[$i]." = ".$values[$i];
                if($i != count($keys)-1){
                    $sql .= " ,";
                }
            }
            if(is_array($condition)){
                $keys = array_keys($condition);
                $sql .= " WHERE ";
                for($i=0;$i<count($condition);$i++){
                    if($i==0){
                        $sql .= $keys[$i] ." = ".$condition[$keys[$i]];
                    }else{
                        $sql .= " AND ".$keys[$i] ." = ".$condition[$keys[$i]];
                    }

                }
                return $sql;
            }
            return null;
        }
        return null;

    }
    public function Delete($condition){
        $keys = array_keys($condition);
        $sql = "DELETE FROM ".$this->tblname." WHERE ";
        for($i=0;$i<count($condition);$i++){
            if($i==0){
                $sql.= $keys[$i]." = ".$condition[$keys[$i]];
            }else{
                $sql.= " AND ". $keys[$i]." = ".$condition[$keys[$i]];
            }
        }
        return $sql;
    }
    public function Select($column = null,$condition=null){
        if($column == null and $condition == null){
            $sql = "SELECT * FROM ".$this->tblname;
            return $sql;
        }else if ($column != null and $condition == null){
            if(is_array($column )){
                $sql = "SELECT";
                for($i=0;$i<count($column);$i++){
                    $sql.=" ".$column[$i];
                    if($i < count($column)-1 ){
                        $sql.=", ";
                    }
                }
                $sql .= " FROM ".$this->tblname;
                return $sql;
            }else{
                return null;
            }
        }else if($column == null and $condition != null){
            if(is_array($condition)){
                $i = 0;
                $sql = "SELECT * FROM ".$this->tblname." WHERE";
                foreach ($condition as $key=>$value) {
                    $sql.=" ".$key." = ".$value;
                    $i++;
                    if($i<count($condition)){
                        $sql.= " AND";
                    }
                }
                return $sql;
            }else{
                return null;
            }
        }else if($column != null and $condition != null){
            if(is_array($column) and is_array($condition)){
                $sql = "SELECT";
                for($i=0;$i<count($column);$i++){
                    $sql.=" ".$column[$i];
                    if($i < count($column)-1 ){
                        $sql.=", ";
                    }
                }
                $sql .= " FROM ".$this->tblname." WHERE ";
                $i=0;
                foreach ($condition as $key=>$value) {
                    $sql.=" ".$key." = ".$value;
                    $i++;
                    if($i<count($condition)){
                        $sql.= " AND";
                    }
                }

                return $sql;
            }else{
                return null;
            }
        }
    }
}