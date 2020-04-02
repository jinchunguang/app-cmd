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

class UpdateUserCommand extends Command
{
    /**
     * 命令的名称
     * @var string
     */
    protected static $defaultName = 'app:update-user';

    /**
     * 配置命令
     */
    protected function configure()
    {

        $this
            ->setDescription('Update a new user.')
            ->setHelp('This command allows you to update a user...')
            // 配置参数
            ->addArgument('username', InputArgument::REQUIRED, 'The username of the user.');
    }

    /**
     * 执行任务
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {

        //-----------------------------------------------
        // 控制台输入
        //-----------------------------------------------
        $output->writeln([
            'User Creator',
            '============',
            '',
        ]);

        // 使用getArgument()来获取参数值参数值
        $output->writeln('Username: '.$input->getArgument('username'));
    }


}
