<?php
namespace Robo\Contract;

/**
 * Any Robo tasks that implements this interface will
 * be called when the task collection it is added to
 * completes.
 *
 * Tasks that should be cleaned up when the program
 * terminates whenever they are used outside of a
 * task collection should be wrapped in TemporaryManager::temporaryTask().
 * @see Robo\Task\FileSystem\loadTasks::taskTmpDir
 *
 * Tasks that implement RollbackInterface should consider
 * implementing TemporaryInterface instead.
 *
 * Interface CompletionInterface
 * @package Robo\Contract
 */
interface CompletionInterface
{
    /**
     * Revert an operation that can be rolled back
     */
    public function complete();
}