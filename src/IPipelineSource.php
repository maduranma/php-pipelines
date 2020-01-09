<?php
namespace maduranma\Pipelines;

interface IPipelineSource extends IPipelineElement
{
    /**
     * Read or get data from any source.
     * @return mixed Returns the necessary data for the Stages.
     */
    public function run();
    
    /**
     * Assign the arguments for the next pipeline element resulting of it's
     * run() function.
     *
     * @param IPipelineElement $stage
     * @return mixed
     */
    public function next(IPipelineElement $stage);
}
