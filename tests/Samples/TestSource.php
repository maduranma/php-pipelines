<?php
namespace maduranma\Pipelines\Tests\Samples;

use maduranma\Pipelines\PipelineSource;

final class TestSource extends PipelineSource
{
    public function run()
    {
        return ['a'];
    }
}
