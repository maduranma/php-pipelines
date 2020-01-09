<?php
namespace maduranma\Pipelines;

interface IPipelineEnd extends IPipelineElement
{
    /**
     * Contains the code to be executed as the end of the pipeline, should be
     * used to save data or return it.
     *
     * @return mixed Returns the result of the pipeline (if required).
     */
    public function run($args);
    
    /**
     * Run the the last item on the pipeline ($this->run() function).
     *
     * @return mixed Returns $this->run() result, if any.
     */
    public function end();
}
