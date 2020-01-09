<?php
namespace maduranma\Pipelines;

abstract class PipelineSource implements IPipelineSource
{
    public function next(IPipelineElement $stage)
    {
        $stage->args = $this->run();
        return $stage;
    }
    
    public abstract function run();
}
