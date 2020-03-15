<?php
namespace vendor;

class VendorPhpQuery{

    /**
     * 注意：不支持选择器 :nth-of-type(1)
     * <br>支持 :eq(0) 和 :nth-child(1)
     * <br>另外，->find('.class1, .class2') 返回的结果是按逗号分割顺序查找的，不是按HTML位置顺序的(jQuery和浏览器是按HTML位置顺序的)。
     * @param string $html
     * @param string $charset
     * @return \phpQueryObject|\QueryTemplatesSource|\QueryTemplatesParse|\QueryTemplatesSourceQuery
     */
    static function document($html, $charset=null)
    {
        vendor('phpQuery/phpQuery.php');
        return \phpQuery::newDocumentHTML($html, $charset);
    }
    
}