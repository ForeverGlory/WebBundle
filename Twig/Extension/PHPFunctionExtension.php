<?php

/*
 * This file is part of the current project.
 * 
 * (c) ForeverGlory <http://foreverglory.me/>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Glory\Bundle\WebBundle\Twig\Extension;

/**
 * FuncExtension
 *
 * PHP系统函数
 * 
 * @author ForeverGlory <foreverglory@qq.com>
 */
class PHPFunctionExtension extends \Twig_Extension
{

    protected $disable_functions = [
        'system',
        'exec',
        'shell_exec',
        'proc_open',
        'phpinfo',
        'passthru',
        'popen',
        'pclose',
        'dl',
        'curl_exec',
        'multi_exec',
        'chmod',
        'gzinflate',
        'set_time_limit',
        'file',
        'file_put_contents',
        'file_get_contents'
    ];
    protected $enable_functions = [
        //@see http://php.net/manual/zh/book.strings.php
        'addcslashes', //以 C 语言风格使用反斜线转义字符串中的字符
        'addslashes', //使用反斜线引用字符串
        'bin2hex', //将二进制数据转换成十六进制表示
        'chop', //rtrim 的别名
        'chr', //返回指定的字符
        'chunk_split', //将字符串分割成小块
        'convert_cyr_string', //将字符由一种 Cyrillic 字符转换成另一种
        'convert_uudecode', //解码一个 uuencode 编码的字符串
        'convert_uuencode', //使用 uuencode 编码一个字符串
        'count_chars', //返回字符串所用字符的信息
        'crc32', //计算一个字符串的 crc32 多项式
        'crypt', //单向字符串散列
        //'echo', //输出一个或多个字符串
        'explode', //使用一个字符串分割另一个字符串
        'fprintf', //将格式化后的字符串写入到流
        'get_html_translation_table', //返回使用 htmlspecialchars 和 htmlentities 后的转换表
        'hebrev', //将逻辑顺序希伯来文（logical-Hebrew）转换为视觉顺序希伯来文（visual-Hebrew）
        'hebrevc', //将逻辑顺序希伯来文（logical-Hebrew）转换为视觉顺序希伯来文（visual-Hebrew），并且转换换行符
        'hex2bin', //Decodes a hexadecimally encoded binary string
        'html_entity_decode', //Convert all HTML entities to their applicable characters
        'htmlentities', //Convert all applicable characters to HTML entities
        'htmlspecialchars_decode', //Convert special HTML entities back to characters
        'htmlspecialchars', //Convert special characters to HTML entities
        'implode', //Join array elements with a string
        'join', //别名 implode
        'lcfirst', //Make a string's first character lowercase
        'levenshtein', //Calculate Levenshtein distance between two strings
        'localeconv', //Get numeric formatting information
        'ltrim', //Strip whitespace (or other characters) from the beginning of a string
        'md5_file', //计算指定文件的 MD5 散列值
        'md5', //计算字符串的 MD5 散列值
        'metaphone', //Calculate the metaphone key of a string
        'money_format', //Formats a number as a currency string
        'nl_langinfo', //Query language and locale information
        'nl2br', //在字符串所有新行之前插入 HTML 换行标记
        'number_format', //Format a number with grouped thousands
        'ord', //返回字符的 ASCII 码值
        'parse_str', //将字符串解析成多个变量
        //'print', //输出字符串
        'printf', //输出格式化字符串
        'quoted_printable_decode', //Convert a quoted-printable string to an 8 bit string
        'quoted_printable_encode', //Convert a 8 bit string to a quoted-printable string
        'quotemeta', //Quote meta characters
        'rtrim', //删除字符串末端的空白字符（或者其他字符）
        'setlocale', //Set locale information
        'sha1_file', //计算文件的 sha1 散列值
        'sha1', //计算字符串的 sha1 散列值
        'similar_text', //计算两个字符串的相似度
        'soundex', //Calculate the soundex key of a string
        'sprintf', //Return a formatted string
        'sscanf', //Parses input from a string according to a format
        'str_getcsv', //解析 CSV 字符串为一个数组
        'str_ireplace', //str_replace 的忽略大小写版本
        'str_pad', //使用另一个字符串填充字符串为指定长度
        'str_repeat', //重复一个字符串
        'str_replace', //子字符串替换
        'str_rot13', //对字符串执行 ROT13 转换
        'str_shuffle', //随机打乱一个字符串
        'str_split', //将字符串转换为数组
        'str_word_count', //返回字符串中单词的使用情况
        'strcasecmp', //二进制安全比较字符串（不区分大小写）
        'strchr', //别名 strstr
        'strcmp', //二进制安全字符串比较
        'strcoll', //基于区域设置的字符串比较
        'strcspn', //获取不匹配遮罩的起始子字符串的长度
        'strip_tags', //从字符串中去除 HTML 和 PHP 标记
        'stripcslashes', //反引用一个使用 addcslashes 转义的字符串
        'stripos', //查找字符串首次出现的位置（不区分大小写）
        'stripslashes', //反引用一个引用字符串
        'stristr', //strstr 函数的忽略大小写版本
        'strlen', //获取字符串长度
        'strnatcasecmp', //使用“自然顺序”算法比较字符串（不区分大小写）
        'strnatcmp', //使用自然排序算法比较字符串
        'strncasecmp', //二进制安全比较字符串开头的若干个字符（不区分大小写）
        'strncmp', //二进制安全比较字符串开头的若干个字符
        'strpbrk', //在字符串中查找一组字符的任何一个字符
        'strpos', //查找字符串首次出现的位置
        'strrchr', //查找指定字符在字符串中的最后一次出现
        'strrev', //反转字符串
        'strripos', //计算指定字符串在目标字符串中最后一次出现的位置（不区分大小写）
        'strrpos', //计算指定字符串在目标字符串中最后一次出现的位置
        'strspn', //计算字符串中全部字符都存在于指定字符集合中的第一段子串的长度。
        'strstr', //查找字符串的首次出现
        'strtok', //标记分割字符串
        'strtolower', //将字符串转化为小写
        'strtoupper', //将字符串转化为大写
        'strtr', //转换指定字符
        'substr_compare', //二进制安全比较字符串（从偏移位置比较指定长度）
        'substr_count', //计算字串出现的次数
        'substr_replace', //替换字符串的子串
        'substr', //返回字符串的子串
        'trim', //去除字符串首尾处的空白字符（或者其他字符）
        'ucfirst', //将字符串的首字母转换为大写
        'ucwords', //将字符串中每个单词的首字母转换为大写
        'vfprintf', //将格式化字符串写入流
        'vprintf', //输出格式化字符串
        'vsprintf', //返回格式化字符串
        'wordwrap', //打断字符串为指定数量的字串
    ];

    public function __construct(array $disable = [], array $enable = [])
    {
        $this->disable_functions = array_merge($this->disable_functions, $disable);
        $this->enable_functions = array_merge($this->enable_functions, $enable);
    }

    public function getFunctions()
    {
        $twigFuncs = [];
        $functions = get_defined_functions();
        foreach ($functions['internal'] as $function) {
            if (!in_array($function, $this->disable_functions) && in_array($function, $this->enable_functions)) {
                $twigFuncs[] = new \Twig_SimpleFunction($function, $function);
            }
        }
        return $twigFuncs;
    }

    public function getName()
    {
        return 'glory_web.phpfunction';
    }

}
