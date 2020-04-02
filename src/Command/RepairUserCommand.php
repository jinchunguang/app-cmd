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
use Symfony\Component\Console\Style\SymfonyStyle;

class RepairUserCommand extends Command
{
    /**
     * 命令的名称
     * @var string
     */
    protected static $defaultName = 'app:repair-user';


    /**
     * 配置命令
     */
    protected function configure()
    {

        $this
            ->setDescription('Repair a new user.')
            ->setHelp('This command allows you to repair a user...');
    }

    /**
     * 执行的逻辑
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $io = new SymfonyStyle($input, $output);
        $len = 1000;
        // 获取参数,控制台不可见
        $pwd=$io->askHidden('请输入口令?', function ($password) {
            if (empty($password)) {
                throw new \RuntimeException('口令不能为空.');
            }
            return $password;
        });

        // 错误输出
        $confirm = $io->confirm('请再次确认你输入的口令为:'.$pwd,false);
        if(!$confirm){
            // 显示错误
            $io->getErrorStyle()->warning('操作取消');
            return $confirm;
        }

        // 第二个参数为默认值
        $len=$io->ask('请输入进度条长度?',$len);


        // 命令的标题
        $io->title('进度条测试');
        $io->progressStart($len);
        for ($i = 0; $i <= $len; $i++) {
            usleep(100*1000);
            $io->progressAdvance(1);
        }
        $io->progressFinish();

    }

}
