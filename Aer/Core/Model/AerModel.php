<?php
namespace Aer\Core\Model;


class AerModel
{

    //Table associated with the model
    protected static $table;
    protected static $primary_key = "id";
    protected static $fillable;

    public function json(){
        return json_encode($this);
    }

    public static function all(){
        $instance = new static();
        return get_class($instance);
    }


    public static function find($record_id){
        $instance = new static();
        $table = $instance::$table;
        $primary_key = $instance::$primary_key;

        $sql = "SELECT *
FROM {$table}
WHERE {$primary_key} = :id";
        $result = db_query($sql, array(":id" => $record_id));
        $class = get_class($instance);
        $obj = new $class;

        foreach ($result as $record) {
            foreach(get_object_vars($record) as $key => $val){
                if($key == $primary_key){
                    $obj->id = $val;
                }
                $obj->$key = $val;
            }
        }

        return $obj;
    }

}