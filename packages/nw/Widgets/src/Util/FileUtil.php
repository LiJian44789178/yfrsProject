<?php
namespace Nw\Widgets\Util;

class FileUtil
{
    /**
     * 检测文件
     * @param $file
     * @return bool
     */
    public static function has($file)
    {
        return file_exists($file);
    }

    /**
     * 创建路径
     * @param $path
     * @return bool
     */
    public static function createPath($path)
    {
        if(!self::has($path)) return mkdir($path,0775,true);
    }

    /**
     * 创建文件
     * @param $path 路径
     * @param $file 文件
     * @param $content 内容
     * @param bool $lock 锁
     * @return int
     */
    public static function createFile($path,$file,$content,$lock=false)
    {
        if(!self::has($path.$file)){
            return file_put_contents($path.$file,$content,$lock);
        }else {
            return false;
        }
    }

    /**
     * 删除文件
     * @param $file
     * @return bool
     */
    public static function deleteFile($file)
    {
        if(self::has($file)) return unlink($file);
    }
}