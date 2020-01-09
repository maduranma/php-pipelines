<?php
namespace maduranma\Pipelines;

abstract class PipelineStage implements IPipelineStage
{
    public $args;
    
    public function next(IPipelineElement $stage)
    {
        $stage->args = $this->run($this->args);
        return $stage;
    }
    
    public abstract function run($args);
}
