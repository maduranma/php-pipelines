<?php
namespace maduranma\Pipelines\Tests\Samples;

use maduranma\Pipelines\PipelineStage;

final class TestStage1 extends PipelineStage
{
    public function run($args)
    {
        return [...$args, 'b'];
    }
}
