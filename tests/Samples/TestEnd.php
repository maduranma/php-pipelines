<?php
namespace maduranma\Pipelines\Tests\Samples;

use maduranma\Pipelines\PipelineEnd;

final class TestEnd extends PipelineEnd
{
    public function run($args)
    {
        return [...$args, 'd'];
    }
}
