<?php
/**
 * Created by PhpStorm.
 * User: jinchunguang
 * Date: 19-11-20
 * Time: 下午1:57
 */

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class QueryUserCommand extends Command
{
    /**
     * 命令的名称
     * @var string
     */
    protected static $defaultName = 'app:query-user';


    /**
     * 配置命令
     */
    protected function configure()
    {

        $this
            ->setDescription('Query a new user.')
            ->setHelp('This command allows you to query a user...');
    }

    /**
     * 该方法在interact()和execute() 方法之前执行
     * 初始化其余命令方法中使用的变量
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(__METHOD__ . "\t" . '初始化工作');
    }

    /**
     * 此方法在之后initialize()和之前执行execute()
     * 检查某些选项/参数是否丢失，并以交互方式向用户询问。执行此命令后，缺少选项/参数将导致错误。
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function interact(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(__METHOD__ . "\t" . '检查某些选项/参数是否丢失');
    }

    /**
     * 此方法在interact()和之后执行initialize()
     * 执行的逻辑。
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(__METHOD__ . "\t" . '执行任务');
    }

}
