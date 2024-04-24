<?php

namespace SON;

class Resolver
{
    public function handler(string $class, string $method = null)
    {
        $instance = null;
        $ref = new \ReflectionClass($class);

        $constructor = $ref->getConstructor();
        if (!$constructor) {
            $instance = new $ref->newInstance();
        }

        $parameters = $this->methodResolver($ref, $constructor);

        $instance = $ref->newInstanceArgs($parameters);

        if(!$method) {
            return $instance;
        }
        
    }
    
    private function methodResolver($ref, $method)
    {
        $parameters = [];

        foreach ($method->getParameters() as $param) {

            if ($param->getClass()) {
                $parameters[] = $this->handler($param->getClass()->getName());
                continue;
            }
        }
    }
}