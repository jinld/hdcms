<?php if(!defined('HDPHP_PATH'))EXIT;
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('1','webname','HDCMS内容管理系统','站点配置','网站名称','文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('2','icp','京ICP备12048441号-3','站点配置','ICP备案号','文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('3','html_path','html','站点配置','静态html目录','文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('4','copyright','Copyright © 2012-2013 HDCMS 后盾网 版权所有','站点配置','网站版权信息','文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('5','keywords','php培训,php实训,后盾网','站点配置','网站关键词','文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('6','description','后盾网顶尖PHP培训 内容全面 全程实战!业内顶级讲师亲自授课,千余课时独家视频教程免费下载,超百G原创视频资源,实力不容造假!010-64825057','站点配置','网站描述','多行文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('8','email','houdunwangxj@gmail.com','站点配置','管理员邮箱','文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('9','backup_dir','backup','高级设置','数据备份目录','文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('10','web_open','1','站点配置','网站开关','布尔(1/0)')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('15','auth_key','houdunwang.com','安全设置','cookie加密KEY','文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('16','upload_path','upload','上传配置','上传目录','文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('17','upload_img_path','img','上传配置','上传图片目录','文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('18','allow_type','jpg,jpeg,png,bmp,gif','上传配置','允许上传文件类型','文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('19','allow_size','2048000','上传配置','允许上传大小（字节）','数字')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('20','water_on','0','水印设置','上传文件加水印','布尔(1/0)')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('115','member_verify','0','会员设置','会员注册是否需要审核','布尔(1/0)')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('116','reg_show_code','1','会员设置','会员注册是否显示验证码','布尔(1/0)')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('119','reg_email','1','会员设置','注册成功是否发邮件','布尔(1/0)')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('120','reg_interval','0','会员设置','2次注册间隔间间','数字')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('121','member_group','2','会员设置','默认会员组','数字')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('122','admin_list_row','15','高级设置','后台列表页数据显示行数','数字')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('123','token_on','0','安全设置','表单使用令牌验证','布尔(1/0)')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('124','log_key','houdunwang.com','安全设置','日志文件加密KEY','文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('125','session_name','hdsid','安全设置','SESSION_NAME值','文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('126','super_admin_key','SUPER_ADMIN','安全设置','站长令牌名称','文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('127','tel','010-64825057','站点配置','联系电话','文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('128','water_text','houdunwang.com','水印设置','水印文字','文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('129','water_text_size','16','水印设置','文字大小','数字')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('130','water_img','./data/water/water.png','水印设置','水印图像','文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('131','water_pct','0','水印设置','水印图片透明度','数字')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('132','water_quality','90','水印设置','图片压缩比','数字')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('133','water_pos','1','水印设置','水印位置','数字')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('134','del_content_model','1','高级设置','删除文章先放入回收站','布尔(1/0)')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('136','down_remove_pic_size','500','高级设置','下载远程资源允许最大值','数字')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('137','comment_status','1','会员设置','评论需要审核','布尔(1/0)')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('138','favicon_width','180','会员设置','会员头像宽度','数字')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('139','favicon_height','180','会员设置','会员头像高度','数字')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('140','upload_img_max_width','650','高级设置','图片超过这个尺寸进行缩放','数字')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('141','upload_img_max_height','650','高级设置','图片超过这个尺寸进行缩放','数字')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('142','down_remote_pic','0','内容相关','下载远程图片','布尔(1/0)')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('143','auto_desc','1','内容相关','截取内容为摘要','布尔(1/0)')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('144','auto_thumb','0','内容相关','提取内容图片为缩略图','布尔(1/0)')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('145','upload_img_max_width','2000','内容相关','上传图片宽度超过此值，进行缩放','数字')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('146','upload_img_max_height','2000','内容相关','上传图片高度超过此值，进行缩放','数字')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('147','member_content_status','1','会员设置','会员发表文章需要审核','布尔(1/0)')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('148','default_user_group','2','会员设置','新注册会员初始组','数字')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('149','member_open','0','会员设置','开启会员中心','布尔(1/0)')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('150','web_close_message','网站暂时关闭，请稍候访问','站点配置','网站关闭提示信息','文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('151','web_style','guanwang','私有配置','网站模板','文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('152','qq','','站点配置','QQ号','文本')");
$db->exe("REPLACE INTO ".$db_prefix."config (`id`,`name`,`value`,`type`,`title`,`show_type`) VALUES('153','weibo','houdunwangxj@gmail.com','站点配置','新浪微博','文本')");
