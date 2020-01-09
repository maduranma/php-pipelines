<?php
namespace maduranma\Pipelines;

interface IPipelineStage extends IPipelineElement
{
    /**
     * Transform data obtained from the previous Pipeline Element.
     *
     * @param mixed $args Data from the previous Pipeline Element.
     * @return mixed Arguments for the next Pipeline Element.
     */
    public function run($args);
    
    /**
     * Assign the arguments for the next pipeline element resulting of it's
     * run() function.
     *
     * @param IPipelineElement $stage
     * @return mixed
     */
    public function next(IPipelineElement $stage);
}
