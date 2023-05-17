<?php

namespace Hlx\Process\Exceptions;

use Hlx\Contracts\Process\ProcessResult;
use Symfony\Component\Console\Exception\RuntimeException;

class ProcessFailedException extends RuntimeException
{
    /**
     * The process result instance.
     *
     * @var \Hlx\Contracts\Process\ProcessResult
     */
    public $result;

    /**
     * Create a new exception instance.
     *
     * @param  \Hlx\Contracts\Process\ProcessResult  $result
     * @return void
     */
    public function __construct(ProcessResult $result)
    {
        $this->result = $result;

        parent::__construct(
            sprintf('The process "%s" failed.', $result->command()),
            $result->exitCode() ?? 1,
        );
    }
}
