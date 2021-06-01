<?php

namespace JaguarJack\Generate\Build;

use JaguarJack\Generate\Build\MethodCall;
use PhpParser\Node\Identifier;
use PhpParser\Node\Stmt\Return_;

class ClassMethod extends Method
{
    protected $call;

    /**
     * 设置方法名称
     *
     * @time 2021年06月01日
     * @param string $name
     * @throws \JaguarJack\Generate\Exceptions\TypeNotFoundException
     * @return ClassMethod
     */
    public static function name(string $name)
    {
        return new self($name);
    }


    /**
     *
     * @time 2021年06月01日
     * @return \PhpParser\Node|\PhpParser\Node\Stmt\ClassMethod
     */
    public function fetch()
    {
        return $this->getNode();
    }


    /**
     *
     *
     * @time 2021年06月01日
     * @param \PhpParser\Builder\Param|\PhpParser\Node\Param|Params $param
     * @return ClassMethod
     */
    public function addParam($param)
    {
        return parent::addParam($param->fetch()); // TODO: Change the autogenerated stub
    }

    public function return()
    {
        if ($this->call) {
            return $this->addStmt(new Return_(
                $this->call
            ));
        }
    }

    /**
     * 添加方法体
     *
     * @time 2021年06月01日
     * @param $expression
     * @return ClassMethod
     */
    public function addMethodBody($expression): ClassMethod
    {
        return $this->addStmt($expression);
    }


    public function call($variable, $identifier, $args = [])
    {
        if (! $this->call) {
            $this->call = new MethodCall(
                $variable, $identifier, $args
            );
        } else {
            $this->call = new MethodCall(
                $this->call, $identifier, $args
            );
        };

        return $this;
    }
}