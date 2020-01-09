<?php
namespace maduranma\Pipelines\Tests;

use PHPUnit\Framework\TestCase;

use maduranma\Pipelines\Tests\Samples\
{TestEnd, TestSource, TestStage1, TestStage2};

final class PipelineTest extends TestCase
{
    public function testPipeline()
    {
        $expected = ['a', 'b', 'c', 'd'];
        
        $result = (new TestSource())->next(new TestStage1())
                                    ->next(new TestStage2())
                                    ->next(new TestEnd())
                                    ->end();
        
        $this->assertEquals($expected, $result);
    }
}
