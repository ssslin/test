<?php


/**
 * 文章内容过滤
 *
 * @param $content
 * @return null|string|string[]
 */
 function _filterContent($content,$replaceImg = true)
{
	if ($replaceImg == true)
	{
		preg_match_all('/<img.+src=\"(.*)\"/iU', $content, $temp);
		foreach ($temp[1] as $key => $val) {
			$tt = preg_replace('#http://[a-zA-Z]+\.[a-zA-Z]+\.com#i', '', $val);
			$content = preg_replace('#' . $val . '#i',  template::__imageResizeMax($tt, 600, 100000), $content);
		}
	}
	//去除正文的a标签
	$str1 = preg_replace("/<a[^>]*>/","",$content);
	$newContent = preg_replace("/<\/a>/","", $str1);
	return $newContent;
}

header('Content-Type:text/plain;charset=utf-8');
$str = '<script type="text/javascript" src="dd.js"></script>

测试php正则匹配掉js代码测试php正则匹配掉js代码测试php正则匹配掉js代码测试php正则匹配掉js代码测试php正则匹配掉js代码测试php正则匹配掉js代码

<script type="text/javascript" src="123.js"></script>

<script type="text/javascript">

	var aa = "sdsds";

	alert(aa);

</script>

测试php正则匹配掉js代码';

$_REQUEST['text'] = $str;
function filterText()
{
    $preg = "/<script[\s\S]*?<\/script>/i";
    if (!empty($_REQUEST))
    {
        foreach ($_REQUEST as $v)
        {
            if(preg_match($preg,$v))
            {
                return true;
            }
        }
    }
    return false;
}


$rs = filterText();

var_dump($rs);exit;




$arr = $arr2 = array(
        //$key
    '教学部'=>array(
        array('李某','18','人妖'),  //$vv
        array('高某','20','男'),
        array('张某','21','妖人'),
    ),
    '宣传部'=>array(
        array('李某','18','人妖'),
        array('高某','20','男'),
        array('张某','21','妖人'),
    ),
    '财务部'=>array(
        array('李某','18','人妖'),
        array('高某','20','男'),
        array('张某','21','妖人'),
    ),
);
?>

<?php foreach ($arr as $k=>$v):  ?>
    <table  border="1">
        <?php echo $k;?>
        <?php foreach ($v as $kk=>$vv):?>
            <tr>
                <?php foreach ($vv as $kkk=>$vvv):?>
                    <td>
                        <?php echo $vvv;?>
                    </td>
                <?php endforeach;?>
            </tr>
        <?php endforeach;?>
    </table>
<?php endforeach;?>

<?php while (list($k2,$v2)=each($arr2)):?>
    <table border="2">
        <?php echo $k2;?>
        <?php while (list($kk2,$vv2)=each($v2)):?>
            <tr>
                <?php while (list($kkk2,$vvv2)=each($vv2)):?>
                    <td>
                        <?php echo $vvv2;?>
                    </td>
                <?php endwhile;?>
            </tr>
        <?php endwhile;?>
    </table>
<?php endwhile;?>

<?php
$keyArr = ['教学部','宣传部','财务部'];
$arr= array(
    '教学部'=>array(
        array('李某','18','人妖'),
        array('高某','20','男'),
        array('张某','21','妖人'),
    ),
    '宣传部'=>array(
        array('李某','18','人妖'),
        array('高某','20','男'),
        array('张某','21','妖人'),
    ),
    '财务部'=>array(
        array('李某','18','人妖'),
        array('高某','20','男'),
        array('张某','21','妖人'),
    ),
);





exit;
$mid = false;
if ($mid <0 || $mid == false)
{
    echo 1;
}
else{
    echo 2;
}
exit;


function rand_string($len = 6, $type = '', $addChars = '') {
    $str = '';
    switch ($type) {
        case 0:
            $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz' . $addChars;
            break;
        case 1:
            $chars = str_repeat('0123456789', 3);
            break;
        case 2:
            $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' . $addChars;
            break;
        case 3:
            $chars = 'abcdefghijklmnopqrstuvwxyz' . $addChars;
            break;
        case 4:
            $chars = "们以我到他会作时要动国产的一是工就年阶义发成部民可出能方进在了不和有大这主中人上为来分生对于学下级地个用同行面说种过命度革而多子后自社加小机也经力线本电高量长党得实家定深法表着水理化争现所二起政三好十战无农使性前等反体合斗路图把结第里正新开论之物从当两些还天资事队批点育重其思与间内去因件日利相由压员气业代全组数果期导平各基或月毛然如应形想制心样干都向变关问比展那它最及外没看治提五解系林者米群头意只明四道马认次文通但条较克又公孔领军流入接席位情运器并飞原油放立题质指建区验活众很教决特此常石强极土少已根共直团统式转别造切九你取西持总料连任志观调七么山程百报更见必真保热委手改管处己将修支识病象几先老光专什六型具示复安带每东增则完风回南广劳轮科北打积车计给节做务被整联步类集号列温装即毫知轴研单色坚据速防史拉世设达尔场织历花受求传口断况采精金界品判参层止边清至万确究书术状厂须离再目海交权且儿青才证低越际八试规斯近注办布门铁需走议县兵固除般引齿千胜细影济白格效置推空配刀叶率述今选养德话查差半敌始片施响收华觉备名红续均药标记难存测士身紧液派准斤角降维板许破述技消底床田势端感往神便贺村构照容非搞亚磨族火段算适讲按值美态黄易彪服早班麦削信排台声该击素张密害侯草何树肥继右属市严径螺检左页抗苏显苦英快称坏移约巴材省黑武培著河帝仅针怎植京助升王眼她抓含苗副杂普谈围食射源例致酸旧却充足短划剂宣环落首尺波承粉践府鱼随考刻靠够满夫失包住促枝局菌杆周护岩师举曲春元超负砂封换太模贫减阳扬江析亩木言球朝医校古呢稻宋听唯输滑站另卫字鼓刚写刘微略范供阿块某功套友限项余倒卷创律雨让骨远帮初皮播优占死毒圈伟季训控激找叫云互跟裂粮粒母练塞钢顶策双留误础吸阻故寸盾晚丝女散焊功株亲院冷彻弹错散商视艺灭版烈零室轻血倍缺厘泵察绝富城冲喷壤简否柱李望盘磁雄似困巩益洲脱投送奴侧润盖挥距触星松送获兴独官混纪依未突架宽冬章湿偏纹吃执阀矿寨责熟稳夺硬价努翻奇甲预职评读背协损棉侵灰虽矛厚罗泥辟告卵箱掌氧恩爱停曾溶营终纲孟钱待尽俄缩沙退陈讨奋械载胞幼哪剥迫旋征槽倒握担仍呀鲜吧卡粗介钻逐弱脚怕盐末阴丰雾冠丙街莱贝辐肠付吉渗瑞惊顿挤秒悬姆烂森糖圣凹陶词迟蚕亿矩康遵牧遭幅园腔订香肉弟屋敏恢忘编印蜂急拿扩伤飞露核缘游振操央伍域甚迅辉异序免纸夜乡久隶缸夹念兰映沟乙吗儒杀汽磷艰晶插埃燃欢铁补咱芽永瓦倾阵碳演威附牙芽永瓦斜灌欧献顺猪洋腐请透司危括脉宜笑若尾束壮暴企菜穗楚汉愈绿拖牛份染既秋遍锻玉夏疗尖殖井费州访吹荣铜沿替滚客召旱悟刺脑措贯藏敢令隙炉壳硫煤迎铸粘探临薄旬善福纵择礼愿伏残雷延烟句纯渐耕跑泽慢栽鲁赤繁境潮横掉锥希池败船假亮谓托伙哲怀割摆贡呈劲财仪沉炼麻罪祖息车穿货销齐鼠抽画饲龙库守筑房歌寒喜哥洗蚀废纳腹乎录镜妇恶脂庄擦险赞钟摇典柄辩竹谷卖乱虚桥奥伯赶垂途额壁网截野遗静谋弄挂课镇妄盛耐援扎虑键归符庆聚绕摩忙舞遇索顾胶羊湖钉仁音迹碎伸灯避泛亡答勇频皇柳哈揭甘诺概宪浓岛袭谁洪谢炮浇斑讯懂灵蛋闭孩释乳巨徒私银伊景坦累匀霉杜乐勒隔弯绩招绍胡呼痛峰零柴簧午跳居尚丁秦稍追梁折耗碱殊岗挖氏刃剧堆赫荷胸衡勤膜篇登驻案刊秧缓凸役剪川雪链渔啦脸户洛孢勃盟买杨宗焦赛旗滤硅炭股坐蒸凝竟陷枪黎救冒暗洞犯筒您宋弧爆谬涂味津臂障褐陆啊健尊豆拔莫抵桑坡缝警挑污冰柬嘴啥饭塑寄赵喊垫丹渡耳刨虎笔稀昆浪萨茶滴浅拥穴覆伦娘吨浸袖珠雌妈紫戏塔锤震岁貌洁剖牢锋疑霸闪埔猛诉刷狠忽灾闹乔唐漏闻沈熔氯荒茎男凡抢像浆旁玻亦忠唱蒙予纷捕锁尤乘乌智淡允叛畜俘摸锈扫毕璃宝芯爷鉴秘净蒋钙肩腾枯抛轨堂拌爸循诱祝励肯酒绳穷塘燥泡袋朗喂铝软渠颗惯贸粪综墙趋彼届墨碍启逆卸航衣孙龄岭骗休借" . $addChars;
            break;
        default :
            // 默认去掉了容易混淆的字符oOLl和数字01，要添加请使用addChars参数
            $chars = 'ABCDEFGHIJKMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz23456789' . $addChars;
            break;
    }
    if ($len > 10) { //位数过长重复字符串一定次数
        $chars = $type == 1 ? str_repeat($chars, $len) : str_repeat($chars, 5);
    }
    if ($type != 4) {
        $chars = str_shuffle($chars);
        $str = substr($chars, 0, $len);
    } else {
        // 中文随机字
        for ($i = 0; $i < $len; $i++) {
            $str .= msubstr($chars, floor(mt_rand(0, mb_strlen($chars, 'utf-8') - 1)), 1);
        }
    }
    return $str;
}

/**
 * 生成随机邮箱
 *
 * @param $phone
 * @return string
 */
 function _getRandEmail($phone)
{
    $str = rand_string(6,0,$phone);
    $suffix = 'x.virtual';
    $email = $str.'@'.$suffix;
    return  $email;
}
$phone = 13312345678;
$str = _getRandEmail($phone);
 var_dump($str);exit;


function buildParams($arr,$strName)
{
    if (empty($strName))
    {
        return '';
    }
    $newStr = '&';
    foreach ($arr as $k=>$v)
    {
        $newStr.= $strName."[$k]=$v".'&';
    }
    $newStr = trim($newStr,'&');
    return $newStr;
}


function fliter2($arr,$arrName){
    $arrNew = array();
    foreach($arr as $k=>$v){
        $name = $arrName."[$k]";
        $arrNew[] = "{$name}={$v}";
    }
    $outStr = "";
    if(!empty($arrNew)){
        $outStr = implode("&",$arrNew);
    }
    return $outStr;
}

$arr = array(1,2,3);
$str = 'test';

$newStr = buildParams($arr,$str);

var_dump($newStr);exit;



$arr = ['one','two','three'];
$new = each($arr);
print_r($new);exit;
phpinfo();exit;
$fxxq = '1111';
 function getFxxqName($fxxq)
{
    $fxxqName = '';
    if (!empty($fxxq))
    {
        $fxxqArr = str_split($fxxq);
        $fxxqName =  $fxxqArr[0].'室'. $fxxqArr[1].'厅'. $fxxqArr[2].'卫'. $fxxqArr[3].'阳台';
    }
    return $fxxqName;
}

var_dump(getFxxqName(1111));exit;

$a =array(100,80,50,10,0);
$b = array("c","f","q","e","z");

print_r($a);
print_r($b);

array_multisort($a,$b);
print_r($a);
print_r($b);
exit;
$array[] = array("age"=>20,"name"=>"li");
$array[] = array("age"=>21,"name"=>"ai");
$array[] = array("age"=>20,"name"=>"ci");
$array[] = array("age"=>22,"name"=>"di");
print_r($array);
foreach ($array as $key=>$value){
 $age[$key] = $value['age'];
 $name[$key] = $value['name'];
}

array_multisort($age,SORT_NUMERIC,SORT_DESC,$name,SORT_STRING,SORT_ASC,$array);
print_r($array);

exit;

$time = array();
$dates = array(7,30,180);
foreach ($dates as $v)
{
    $time[$v]=getStartTimeEndTime($v);
}

function  getStartTimeEndTime($n=7)
{
    $beginTime = time();
    $startDay = date('Y-m-d',$beginTime);
    $startTime = strtotime($startDay);
    $endTime = strtotime("-$n day",$startTime);
    $startDayTime = date('Y-m-d H:i:s',$startTime);
    $endDayTime = date('Y-m-d H:i:s',$endTime);
    $timeZone = array(
        'startTime'=>$endTime,
        'endTime'=>$startTime,
        'startDayTime'=>$endDayTime,
        'endDayTime'=>$startDayTime,
    );
    return $timeZone;
}
var_dump($time);
exit;

$beginTime = time();
$startDay = date('Y-m-d',$beginTime);
$startTime = strtotime($startDay);
$endTime = strtotime("+7 day",$startTime)-1;
$startDayTime = date('Y-m-d H:i:s',$startTime);
$endDayTime = date('Y-m-d H:i:s',$endTime);
var_dump($startDayTime,$endDayTime);exit;

exit;
$endDay = date('Y-m-d');
$endTime = strtotime($endDay);
$startTime = strtotime("-6 day",$endTime);
$startDayTime = date('Y-m-d H:i:s',$startTime);
$endTime = $endTime+3600*24-1;
$endDayTime = date('Y-m-d H:i:s',$endTime);
var_dump($startDayTime,$endDayTime);exit;

$t1 ='12:00';

$arr= ['12:00','12:00','12:30'];

if (!in_array($t1,$arr,true))
{
    echo $t1.'在数组'.json_encode($arr).'里';
}
else
{
    echo $t1.'不在数组'.json_encode($arr).'里';
}
exit;
$a = -500.00;
if ($a>0)
{
    echo 12;
}
else
{
    echo 34;
}

exit;
class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        self::who();
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}
B::test();exit;

$a=1;

if ($a<=1)
{
    echo 1233;exit;
}
echo 23223;
exit;
$time = '00:00';
if (!empty($time))
{
    echo 1;
}
else
{
    echo 2;
}
exit;

$arr1 = array();
$arr2 = array();
$arr3 = array(1);
$arr4 = array_merge($arr1,$arr2,$arr3);

var_dump($arr4);
exit;

$time1 = '01:00:00';
$time2 = '11:00:00';

var_dump(strtotime($time1));exit;
$buff = array();
for($i=strtotime($time1) ;$i<=strtotime($time2) ; $i=$i+60*30){
    $buff[]=date("H:i:s",$i);
}
print_r($buff);
die;


/**
 * 计算当前时间开始之后的7天
 *
 * @return array = ['星期'=>'日期'];
 * 注意：周天的key是0
 */
function get_current_week($time = '',$format = 'n.d')
{
    $time = empty($time)?time():$time;
    //取得当天星期
    $week = date('w',$time);
    $date = [];
    for ($i=0;$i<7;$i++)
    {
        $limit_time = '+'.$week+$i-$week.' days';
        $time_stamp = strtotime($limit_time,$time);
        //当前星期
        $w = date('w',$time_stamp);
        $date[$w] = date($format,$time_stamp);
    }
    return $date;
}

$arr = get_current_week();
var_dump($arr);exit;
$today = date('n.d');
$tomorrow = date('n.d',strtotime('+1 days'));
$today_arr =[$today=>'今天'];
$tomorrow_arr =[$tomorrow=>'明天'];
var_dump($today_arr,$tomorrow_arr);
$new_arr = array_flip($arr);
foreach ($new_arr as $k=>&$v)
{
    $v = get_cn_week($v);
    if ($today == $k)
    {
        $new_arr[$k] = $today_arr[$today];
    }
    if ($tomorrow == $k)
    {
        $new_arr[$k] = $tomorrow_arr[$tomorrow];
    }
}

function get_cn_week($week)
{
    $weekText = '周';
    switch ($week)
    {
        case 0:
        default:
            $weekText .= '天';
            break;
        case 1:
            $weekText .= '一';
            break;
        case 2:
            $weekText .= '二';
            break;
        case 3:
            $weekText .= '三';
            break;
        case 4:
            $weekText .= '四';
            break;
        case 5:
            $weekText .= '五';
            break;
        case 6:
            $weekText .= '六';
            break;
    }
    return $weekText;
}
var_dump($new_arr);