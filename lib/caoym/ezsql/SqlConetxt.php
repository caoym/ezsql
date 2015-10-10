<?php
/**
 * $Id$
 * @author caoym(caoyangmin@gmail.com)
 */
namespace caoym\ezsql;

/**
 * @author caoym
 */
class SqlConetxt{
    
    /**
     * 拼接sql语句，并自动插入空格
     * @param string $sql 表达式
     */
    public function appendSql($sql, $addSpace=true){
        if($this->sql == ''){
            $this->sql = $sql;
        }else{
            if($addSpace){
                $this->sql = $this->sql.' '.$sql;
            }else{
                $this->sql = $this->sql.$sql;
            }
        }
    }
    /**
     * 增加绑定变量值
     * @param array $params 变量
     */
    public function appendParams($params){
        $this->params = array_merge($this->params, $params);
    }
    public $sql='';
    public $params=[];
}