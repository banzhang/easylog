<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * EasyLog的处理器接口，所有的处理器都要实现这个接口统本身仅支持
 * syslog,和filelog
 *
 * PHP version 5
 * @category   Log
 * @package    EasyLog\Handler
 * @author     yihui <yihui@chunshiban.com>
 * @copyright  2017-2018 team.chunshiban.com
 * @license    https://en.wikipedia.org/wiki/MIT_License MIT License
 * @version    SVN:$Id$
 * @link       http://code.chunshiban.com/package/Easylog/Handler/
 * @see        EasyLog, FileLog::process()
 * @since      File available since Release 0.1.0
 * @deprecated File not deprecated
 */

/**
 * This is a "Docblock Comment," also known as a "docblock."  The class'
 * docblock, below, contains a complete description of how to write these.
 */

namespace EasyLog\Handler;

/**
 * EasyLog的文件日志处理器
 *
 * PHP version 5>=5.3.0
 * @category   Log
 * @package    EasyLog
 * @author     yihui <yihui@chunshiban.com>
 * @copyright  2017-2018 team.chunshiban.com
 * @license    https://en.wikipedia.org/wiki/MIT_License MIT License
 * @version    Release: @EasyLog_0.1.0@
 * @link       http://code.chunshiban.com/package/easylog/
 * @see        EasyLog, FileLog::FileLog()
 * @since      File available since Release 0.1.0
 * @deprecated File not deprecated
 */
class FileHandler implements HandlerInterface {
    
    /**
     * @param int    $level 日志的等级
     * @param string $msg   已经拼装好的日志消息
     * @return bool
     * @throw
     * @access public
     * @static
     * @see FileLog::process()
     * @since Method available since Release 0.1.0
     * @deprecated Method not deprecated
     */
    public function process($level, $msg) {
        return false;
    }
}
