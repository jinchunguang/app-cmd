<?php
/**
 * Created by PhpStorm.
 * User: jinchunguang
 * Date: 19-11-20
 * Time: 下午1:57
 */

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateUserCommand extends Command
{
    /**
     * 命令的名称
     * @var string
     */
    protected static $defaultName = 'app:create-user';

    /**
     * 配置命令
     */
    protected function configure()
    {

        $this
            // 运行“php artisan list”时显示的简短描述
            ->setDescription('Creates a new user.')
            // 运行命令时显示的完整命令说明,`php artisan app:create-user --help`时候会显示
            ->setHelp('This command allows you to create a user...');

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
        // 控制台输出
        //-----------------------------------------------

        /**
         * 在每行末尾添加“\n”
         */
        // 将多行输出到控制台
        $output->writeln([
            'User Creator',
            '============',
            '',
        ]);
        // 将单号行输出到控制台
        $output->writeln('Whoa!');

        /**
         * 在每行末尾不添加“\n”
         */
        // 将多行输出到控制台（在每行末尾不添加“\n”）
        $output->write([
            '姓名:',
            'kim',
            '年龄:',
            '25',
        ]);
        // 将单号行输出到控制台（在每行末尾不添加“\n”）
        $output->write(PHP_EOL . 'create a user.');

    }
}
