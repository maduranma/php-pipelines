<?php
namespace maduranma\Pipelines;

abstract class PipelineEnd implements IPipelineEnd
{
    public $args;
    
    public function end()
    {
        return $this->run($this->args);
    }
    
    public abstract function run($args);
}
