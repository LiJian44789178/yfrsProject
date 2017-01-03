<?php
namespace Nw\Widgets\Command;

use Hamcrest\Util;
use Nw\Widgets\Util\FileUtil;
class CreateRepositoryCommand extends BaseCommand
{
    protected $signature = 'nw:repository {repository_name}';

    protected $description = 'create repository';

    public function handle()
    {
        if(FileUtil::createFile($this->getPath(),$this->getArgumentFile(),$this->createContent(),false)) {
            return true;
        }
        return '创建失败,文件存在';
    }

    /**
     * 获取输入命令
     * @return array|string
     */
    private function getArgument()
    {
        return $this->argument('repository_name');
    }

    /**
     * 获取repository文件名称
     * @return string
     */
    private function getArgumentFile()
    {
        return strtoupper( substr($this->getArgument(),0,1) ).substr($this->getArgument(),1).'Repository'.'.php';
    }

    /**
     * 获取类名
     * @return string
     */
    private function getClassName()
    {
        return strtoupper( substr($this->getArgument(),0,1) ).substr($this->getArgument(),1).'Repository';

    }

    /**
     * 获取路径
     * @return string
     */
    private function getPath()
    {
        return app_path().DIRECTORY_SEPARATOR.'Repositories'.DIRECTORY_SEPARATOR;
    }

    /**
     * 创建内容
     * @return string
     */
    private function createContent()
    {
        $output = "<?php\n
namespace App\\Repositories;\n
use Prettus\\Repository\\Eloquent\\BaseRepository;\n
class ".$this->getClassName()." extends BaseRepository
{
    public function model()
    {
        return \"App\\\\Models\\\\".$this->getArgument()."\";
    }
}";
        return $output;
    }
}