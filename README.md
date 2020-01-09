# php-pipelines
php-pipelines it's a very small library that provides PHP a piped-style coding for
cleanness and readability of the code.

## Installation
**Requirements**: (PHP 5 >= 5.3.0, PHP 7)

As a package is not available yet to be installed with **composer**, just
download this classes and load them with any autoloader or manually.

## Usage
A pipeline is basically composed of three parts:
- **Source** is where you should read or get data, not passed by arguments, to
provide to the pipes.
- **Stages** (or pipes) is where you transform and process that data.
- **End** is where you save or return the result of all the transformation

In order to achieve that, you always need one `PipelineSource` and one
`PipelineEnd`. In between those you'll provide none, one or multiple
`PipelineStage`.

It should be borne in mind that two Pipelines coud share a _Source_ or an _End_,
for example if reading the same data for two separate processes.

**Pipeline Example**
```
$source = new ReadNumbersFromDatabase();
$stage1 = new AddOne();
$stage2 = new SubstractTwenty();
$end = new SaveNumbersToDatabase();

$result = $source->next($stage1)
                 ->next($stage2)
                 ->next($end)
                 ->end(); // It's not necessary to return anything
```

To extend one of the three elements just do it like so:

**PipelineSource**
```
<?php
use maduranma\Pipelines\PipelineSource;

final class SourceName() extends PipelineSource
{
    public run() // Sources shouldn't take any argument
    {
        return DB::all();
    }
}
```

**PipelineStage**
```
<?php
use maduranma\Pipelines\PipelineStage;

final class StageName() extends PipelineStage
{
    private ModifyData()
    {
        // Do something
    }

    public run($args)
    {
        return $this->ModifyData($args);
    }
}
```

**PipelineEnd**
```
<?php
use maduranma\Pipelines\PipelineEnd;

final class EndName() extends PipelineEnd
{
    public run($args)
    {
        DB::save($args);
        // You can return a result or anything here
    }
}
```

## Contributing
Pull requests and changes are welcome. Open an
[issue](https://github.com/maduranma/php-pipelines/issues) if you want to
suggest major changes or new features.

Please, respect the coding style and maximum of 80 columns, and don't forget to
provide or modify tests if required.

## License
[MIT](https://choosealicense.com/licenses/mit/)
