<?php
/**
 * Created by PhpStorm.
 * User: jinchunguang
 * Date: 19-11-20
 * Time: 下午1:57
 */

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Command\LockableTrait;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DeleteUserCommand extends Command
{
    use LockableTrait;

    /**
     * 命令的名称
     * @var string
     */
    protected static $defaultName = 'app:delete-user';


    /**
     * 配置命令
     */
    protected function configure()
    {
        $this
            // ->setHidden(true)// 命令在控制台隐藏,实际上是可以执行的
            ->setDescription('Delete a new user.')
            ->setHelp('This command allows you to delete a user...');
    }

    /**
     * 执行的逻辑
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //-----------------------------------------------
        // 控制台输出着色和样式
        //-----------------------------------------------

        // green text
        $output->writeln('<info>foo</info>');

        // yellow text
        $output->writeln('<comment>foo</comment>');

        // black text on a cyan background
        $output->writeln('<question>foo</question>');

        // white text on a red background
        $output->writeln('<error>foo</error>');

        // green text
        $output->writeln('<fg=green>foo</>');

        // black text on a cyan background
        $output->writeln('<fg=black;bg=cyan>foo</>');

        // bold text on a yellow background
        $output->writeln('<bg=yellow;options=bold>foo</>');

        // bold text with underscore
        $output->writeln('<options=bold,underscore>foo</>');


        //-----------------------------------------------
        // 防止重复执行控制台命令
        //-----------------------------------------------

        // 控制台加锁
        if (!$this->lock()) {
            $output->writeln('The command is already running in another process.');
            //return 0;
        }

        // 主动控制台释放锁
        // $this->lock(null, true);
        //如果没有显式释放，Symfony会释放锁,命令执行结束时自动执行
        $this->release();


    }

}
