<?php

namespace JaguarJack\Generate\Build;


class Params extends \PhpParser\Builder\Param
{
    /**
     * 设置名称
     *
     * @time 2021年06月01日
     * @param $name
     * @return Params
     */
    public static function name($name): Params
    {
        return new self($name);
    }

    /**
     * 节点
     *
     * @time 2021年06月01日
     * @return \PhpParser\Node|\PhpParser\Node\Param
     */
    public function fetch()
    {
        return $this->getNode();
    }

    /**
     * 设置默认值
     *
     * @time 2021年06月01日
     * @param mixed $value
     * @throws \JaguarJack\Generate\Exceptions\TypeNotFoundException
     * @return Params
     */
    public function setDefault($value): Params
    {
        return parent::setDefault(Value::fetch($value)); // TODO: Change the autogenerated stub
    }

    /**
     * 设置 null
     *
     * @time 2021年06月01日
     * @throws \JaguarJack\Generate\Exceptions\TypeNotFoundException
     * @return Params
     */
    public function setDefaultNull(): Params
    {
        return parent::setDefault(Value::fetch(null));
    }

    /**
     * 设置 false
     *
     * @time 2021年06月01日
     * @throws \JaguarJack\Generate\Exceptions\TypeNotFoundException
     * @return Params
     */
    public function setDefaultFalse(): Params
    {
        return parent::setDefault(Value::fetch(false));
    }


    /**
     * 设置 true
     *
     * @time 2021年06月01日
     * @throws \JaguarJack\Generate\Exceptions\TypeNotFoundException
     * @return Params
     */
    public function setDefaultTrue(): Params
    {
        return parent::setDefault(Value::fetch(true));
    }

}