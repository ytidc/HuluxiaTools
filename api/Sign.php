<?php
include('login.php');
$cat_id = $_GET['cat_id'];
echo '<a href="https://github.com/xiguac/HuluxiaTools">葫芦侠自动签到Api</a>';
echo "<br \>签到流程开始……<br \>";
$time1 = time();
echo HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=".$uuid."&cat_id=".$cat_id);
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=43");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=81");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=16");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=44");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=96");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=70");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=111");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=4");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=29");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=102");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=71");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=105");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=107");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=90");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=2");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=115");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=112");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=21");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=110");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=101");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=56");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=3");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=88");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=76");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=57");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=92");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=98");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=58");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=82");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=77");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=63");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=11");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=22");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=23");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=113");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=103");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=116");
// HttpGet("http://floor.huluxia.com/user/signin/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=".$ukey."&device_code=000000000000000-0000-0000-0000-000000000000&cat_id=108");
$time2 = time();
$time = (int)$time2-$time1;
exit("签到流程已完成！耗时：".$time."秒");
?>
