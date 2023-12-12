<?php
 die();
?>
20221015 04:07:41: /install.php

20221015 04:07:42: /install.php?m=install&f=step0

20221015 04:07:44: /install.php?m=install&f=step1

20221015 04:07:45: /install.php?m=install&f=step2

20221015 04:08:04: /install.php?m=install&f=step3

20221015 04:08:04: /install.php?m=install&f=step4

20221015 04:08:12: /install.php?m=install&f=step4
  INSERT INTO eps_user SET `account` = 'admin',`realname` = 'admin',`password` = '86f3059b228c8acf99e69734b6bb32cc',`admin` = 'super',`join` = '2022-10-15 04:08:12',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'global',`key` = 'version',`value` = '7.0',`lang` = 'all'

20221015 04:08:12: /install.php?m=install&f=step5
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'lang',`value` = 'zh-cn',`lang` = 'all'

20221015 04:10:38: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = 'admin'
  SELECT * FROM eps_user WHERE account  = 'admin'
  INSERT INTO eps_log SET `account` = 'admin',`date` = '2022-10-15 04:10:38',`ip` = '127.0.0.1',`location` = '本机地址 本机地址  ',`browser` = 'chrome 106',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/106.0.0.0 Safari\\/537.36\"}'
  UPDATE eps_user SET `id` = '1',`account` = 'admin',`password` = '86f3059b228c8acf99e69734b6bb32cc',`realname` = 'admin',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '1',`ip` = '127.0.0.1',`last` = '2022-10-15 04:10:38',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2022-10-15 04:08:12',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = '',`browser` = '',`lang` = 'zh-cn' WHERE account  = 'admin'
  UPDATE eps_user SET  `browser` = 'chrome 106', `os` = 'Windows 7' WHERE id  = '1' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM eps_usergroup AS t1  LEFT JOIN eps_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin' AND  t1.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778238',`lang` = 'all'

20221015 04:10:38: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20221015 04:10:42: /admin.php?m=admin&f=ignore
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'global',`key` = 'ignoreAdminEntry',`value` = '1',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778242',`lang` = 'all'

20221015 04:10:46: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20221015 04:10:51: /admin.php?m=ui&f=themestore&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20221015 04:10:52: /admin.php?m=ui&f=browsetheme&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20221015 04:11:08: /admin.php?m=ui&f=uploadTheme
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20221015 04:11:11: /admin.php?m=ui&f=uploadtheme
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20221015 04:11:13: /admin.php?m=ui&f=uploadtheme
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20221015 04:11:13: /admin.php?m=ui&f=uploadtheme
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20221015 04:11:23: /admin.php?m=ui&f=setTemplate&template=default&theme=tartan&custom=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'desktop',`value` = '{\"name\":\"default\",\"theme\":\"tartan\"}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'parser',`value` = 'raintpl',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'customTheme',`value` = 'tartan',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778283',`lang` = 'all'

20221015 04:11:31: /admin.php?m=ui&f=setTemplate&template=default&theme=default&custom=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'desktop',`value` = '{\"name\":\"default\",\"theme\":\"default\"}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'parser',`value` = 'raintpl',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'customTheme',`value` = 'default',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778291',`lang` = 'all'

20221015 04:11:35: /admin.php?m=ui&f=setTemplate&template=default&theme=clean&custom=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'desktop',`value` = '{\"name\":\"default\",\"theme\":\"clean\"}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'parser',`value` = 'raintpl',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'customTheme',`value` = 'clean',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778295',`lang` = 'all'

20221015 04:11:39: /admin.php?m=ui&f=setTemplate&template=default&theme=wide&custom=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'desktop',`value` = '{\"name\":\"default\",\"theme\":\"wide\"}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'parser',`value` = 'raintpl',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'customTheme',`value` = 'wide',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778299',`lang` = 'all'

20221015 04:11:53: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20221015 04:11:54: /admin.php?m=tree&f=children&type=article&root=0&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE parent  = '0' AND  type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20221015 04:12:06: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20221015 04:12:22: /admin.php?m=ui&f=themestore&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20221015 04:12:23: /admin.php?m=ui&f=browsetheme&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20221015 04:12:52: /admin.php?m=ui&f=themestore
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20221015 04:12:53: /admin.php?m=ui&f=themestore&type=sales
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20221015 04:12:54: /admin.php?m=ui&f=themestore&type=latest
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20221015 04:12:54: /admin.php?m=ui&f=themestore&type=hot
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20221015 04:12:54: /admin.php?m=ui&f=themestore&type=rand
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20221015 04:12:55: /admin.php?m=ui&f=themestore&type=free
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20221015 04:12:56: /admin.php?m=ui&f=themestore
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20221015 04:13:21: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20221015 04:13:36: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20221015 04:13:40: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20221015 04:13:57: /admin.php?m=tree&f=children&type=article&root=0&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE parent  = '0' AND  type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20221015 04:14:05: /admin.php?m=tree&f=children&type=article&root=0&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE parent  = '0' AND  type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20221015 04:14:06: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20221015 04:14:18: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20221015 04:14:20: /admin.php?m=tree&f=children&type=article&root=0&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE parent  = '0' AND  type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20221015 04:14:25: /admin.php?m=tree&f=children&type=article&category=0
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE alias  = '0' AND  type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '0'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_category WHERE `alias`  = '123' AND  id  != '0' AND  type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  INSERT INTO eps_category SET `parent` = '0',`grade` = '1',`type` = 'article',`postedDate` = '2022-10-15 04:14:25',`name` = '123',`alias` = '123',`order` = '10',`lang` = 'zh-cn'
  UPDATE eps_category SET  `path` = ',1,' WHERE id  = '1' AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778465',`lang` = 'all'

20221015 04:14:26: /admin.php?m=tree&f=children&type=article&root=0&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE parent  = '0' AND  type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20221015 04:14:35: /admin.php?m=tree&f=delete&category=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_category WHERE id IN ('','1','')  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT * FROM eps_category WHERE parent  = '1' AND  type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT id, name FROM eps_category WHERE id IN ('','1','')  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT * FROM eps_category WHERE alias  = '1' AND  type  = '' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '1'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_category WHERE id IN ('','1','')  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM eps_category WHERE path  LIKE ',1,%' AND  eps_category.lang in('zh-cn', 'all') 
  UPDATE eps_category SET  `grade` = `grade` - 1 WHERE id IN ('1') AND  grade  > '0' AND  eps_category.lang in('zh-cn', 'all') 
  UPDATE eps_category SET  `parent` = '0' WHERE parent  = '1' AND  eps_category.lang in('zh-cn', 'all') 
  DELETE FROM eps_category WHERE id  = '1' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, parent FROM eps_category WHERE type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778475',`lang` = 'all'

20221015 04:14:35: /admin.php?m=tree&f=children&type=article&root=0&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE parent  = '0' AND  type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20221015 04:14:36: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20221015 04:14:42: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20221015 04:14:48: /admin.php?m=company&f=setBasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'name',`value` = '',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'desc',`value` = '<p>sdafdsafdsafdasfdasf</p>',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'content',`value` = '',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'setDate',`value` = '2022-10-15 04:14:48',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778488',`lang` = 'all'

20221015 04:16:02: /admin.php?m=company&f=setBasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'name',`value` = '马士兵教育',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'desc',`value` = '<p>sdafdsafdsafdasfdasf</p>',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'content',`value` = '',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'setDate',`value` = '2022-10-15 04:16:02',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778562',`lang` = 'all'

20221015 04:16:36: /admin.php?m=company&f=setBasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'name',`value` = '马士兵教育',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'desc',`value` = '<p>马士兵（北京）教育科技有限公司是由马士兵老师创立的IT职业教育机构 [3]&nbsp; ，一直坚持“内容为王、质量第一、服务为首”的宗旨,致力于为用户提供高质量的教学内容和更人性化的教学服务。 [2]&nbsp; 公司总部位于北京海淀，分别在北京、长沙设有运营中心。同时在上海、长沙设有线下教学中心 [1-3</p>',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'content',`value` = '<p>马士兵自研一站式IT技术学习平台，学习平台包含：全品类IT课程、个性化学习路线定制、全程督学服务、沉浸式交互学习、专业的学习辅助工具、AI人工智能教辅系统等服务。从学员 入学多维度评测、个性化学习路线定制、智能系统自动排课、班主任督学、360°全方位在线答疑系统、学习辅助工具、在线练习靶场、模拟面试、就业指导等服务内容。马士兵学习平台紧跟市场需求，不断优化升级探索教育“黑科技”，保持对前瞻性技术的研发和量产能力</p>',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'setDate',`value` = '2022-10-15 04:16:36',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778596',`lang` = 'all'

20221015 04:17:19: /admin.php?m=company&f=setBasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'name',`value` = '马士兵教育',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'desc',`value` = '<p>马士兵（北京）教育科技有限公司是由马士兵老师创立的IT职业教育机构 [3]&nbsp; ，一直坚持“内容为王、质量第一、服务为首”的宗旨,致力于为用户提供高质量的教学内容和更人性化的教学服务。 [2]&nbsp; 公司总部位于北京海淀，分别在北京、长沙设有运营中心。同时在上海、长沙设有线下教学中心 [1-3</p>',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'content',`value` = '<p>马士兵自研一站式IT技术学习平台，学习平台包含：全品类IT课程、个性化学习路线定制、全程督学服务、沉浸式交互学习、专业的学习辅助工具、AI人工智能教辅系统等服务。从学员 入学多维度评测、个性化学习路线定制、智能系统自动排课、班主任督学、360°全方位在线答疑系统、学习辅助工具、在线练习靶场、模拟面试、就业指导等服务内容。马士兵学习平台紧跟市场需求，不断优化升级探索教育“黑科技”，保持对前瞻性技术的研发和量产能力</p><p><br/></p><p>企业文化</p><p>编辑</p><p>播报</p><p>企业愿景：成为一个长远发展、兼容并蓄、让学生和员工信赖支持的教育综合服务平台</p><p>企业使命：让在线教育回归教学本质，传承知识，传播理念，传递价值；为社会以及用人单位培养更多专业强、品德好的高素质人才； [2]&nbsp;</p><p>企业价值观：</p><p>个人链：诚实 专注 坚韧 正直</p><p>关系链：信任 协作 尊重 激情 [2]&nbsp;&nbsp;</p><p><br/></p>',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'setDate',`value` = '2022-10-15 04:17:19',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778639',`lang` = 'all'

20221015 04:17:53: /admin.php?m=company&f=setBasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'name',`value` = '马士兵教育',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'desc',`value` = '<p>马士兵（北京）教育科技有限公司是由马士兵老师创立的IT职业教育机构 [3]&nbsp; ，一直坚持“内容为王、质量第一、服务为首”的宗旨,致力于为用户提供高质量的教学内容和更人性化的教学服务。 [2]&nbsp; 公司总部位于北京海淀，分别在北京、长沙设有运营中心。同时在上海、长沙设有线下教学中心 [1-3</p>',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'content',`value` = '<p>马士兵自研一站式IT技术学习平台，学习平台包含：全品类IT课程、个性化学习路线定制、全程督学服务、沉浸式交互学习、专业的学习辅助工具、AI人工智能教辅系统等服务。从学员 入学多维度评测、个性化学习路线定制、智能系统自动排课、班主任督学、360°全方位在线答疑系统、学习辅助工具、在线练习靶场、模拟面试、就业指导等服务内容。马士兵学习平台紧跟市场需求，不断优化升级探索教育“黑科技”，保持对前瞻性技术的研发和量产能力</p><p><br/></p><p>企业文化</p><p>编辑</p><p>播报</p><p>企业愿景：成为一个长远发展、兼容并蓄、让学生和员工信赖支持的教育综合服务平台</p><p>企业使命：让在线教育回归教学本质，传承知识，传播理念，传递价值；为社会以及用人单位培养更多专业强、品德好的高素质人才； [2]&nbsp;</p><p>企业价值观：</p><p>个人链：诚实 专注 坚韧 正直</p><p>关系链：信任 协作 尊重 激情&nbsp;</p><p><br/></p><p>课程特色</p><p>编辑</p><p>播报</p><p>MCA互联网高级架构师课程</p><p>MCA互联网高级架构师课程是马士兵教育历时3年研发的JAVA架构师大师课，课程体系庞大，完整的知识体系课程 打造货真价实的架构师能力，适合各阶段的学员进行选择，老师会根据学员的学历、年龄、兴趣习惯、工作经验、工作地点和学习目标等信息，量身定做一份最合适学员的学习线路，并为其学习路线提供有效的学习建议&nbsp;</p><p>Java高级工程师课程</p><p>Java高级工程师课程是由马士兵教育打造的立足就业、自主研发课程，包含了40+门课程，2300+节课时，540+小时的体系课程。从Java零基础深入浅出，到分布式微服务阶段的全体系课程，适合打算从零开始学习的学员。</p><p>Python全栈课程</p><p>Python全栈课程是马士兵教育历时两年半研发的一套理论结合实战、项目为王的课程，课程共42个阶段。</p><p>内容全面：417个知识点、42个课程阶段、10大企业级项目贯穿始终</p><p>专属路线：定制化学习路线，随到随学</p><p>实战结合：十大实战项目，学练用结合</p><p>服务保证：10大服务体系+讲师8对1指导+班主任+自助问答系统+自研学习平台&nbsp;</p><p>Python数据挖掘分析师课程</p><p>Python数据挖掘分析师课程是马士兵教育历时2年研发的Python数据挖掘和分析课程，课程体系包括：数据挖掘、数据分析。 数据分析部分：主要运用大量的分析工具（Numpy，Pandas，Seaborn，Tableau，SPSS，Matplotlib等）来获得数据表象所反映的客观规律。 [2]&nbsp;</p><p>AIoT智慧物联网</p><p>AIoT课程是马士兵教育历时2年研发的一套理论结合实战、项目为王的课程，课程共90个阶段，完整的知识体系课程打造出货真价实的AIoT智慧物联网研发工程师，适合各阶段的学员进行选择。老师会根据学员的学历、年龄、兴趣习惯、工作经验、工作地点和学习目标等信息，量身定做一份最合适学员的学习线路，并为其学习路线提供有效的学习建议，专属八对一服务。&nbsp;</p><p>AI人工智能工程师课程</p><p>AI人工智能工程师课程是马士兵教育是马士兵教育请北大博士后卢菁以及专业老师，历时2年精心打造的AI人工智能完整知识体系课程。旨在打造货真价实的AI人工智能工程师实战能力，适合本科及以上学员进行学习。&nbsp;&nbsp;</p><p>网络安全大师课</p><p>网络安全大师课是马士兵教育联合安全业界知名企业以及拥有多年授课经验的讲师共同研发而成，课程内容系统、丰富，知识点和技能覆盖全面，旨在打造具备实战、就业能力的网络安全工程师，适合各个阶段的学员学习。&nbsp;&nbsp;</p><p>&nbsp;<br/></p><p><br/></p>',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'setDate',`value` = '2022-10-15 04:17:53',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778673',`lang` = 'all'

20221015 04:18:31: /admin.php?m=company&f=setBasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'name',`value` = '马士兵教育',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'desc',`value` = '<p>马士兵（北京）教育科技有限公司是由马士兵老师创立的IT职业教育机构，一直坚持“内容为王、质量第一、服务为首”的宗旨,致力于为用户提供高质量的教学内容和更人性化的教学服务。公司总部位于北京海淀，分别在北京、长沙设有运营中心。同时在上海、长沙设有线下教学中心,<span style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">马士兵自研一站式IT技术学习平台，学习平台包含：全品类IT课程、个性化学习路线定制、全程督学服务、沉浸式交互学习、专业的学习辅助工具、AI人工智能教辅系统等服务。从学员 入学多维度评测、个性化学习路线定制、智能系统自动排课、班主任督学、360°全方位在线答疑系统、学习辅助工具、在线练习靶场、模拟面试、就业指导等服务内容。马士兵学习平台紧跟市场需求，不断优化升级探索教育“黑科技”，保持对前瞻性技术的研发和量产能力</span></p>',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'content',`value` = '<p>马士兵自研一站式IT技术学习平台，学习平台包含：全品类IT课程、个性化学习路线定制、全程督学服务、沉浸式交互学习、专业的学习辅助工具、AI人工智能教辅系统等服务。从学员 入学多维度评测、个性化学习路线定制、智能系统自动排课、班主任督学、360°全方位在线答疑系统、学习辅助工具、在线练习靶场、模拟面试、就业指导等服务内容。马士兵学习平台紧跟市场需求，不断优化升级探索教育“黑科技”，保持对前瞻性技术的研发和量产能力</p><p><br/></p><p>企业文化</p><p>编辑</p><p>播报</p><p>企业愿景：成为一个长远发展、兼容并蓄、让学生和员工信赖支持的教育综合服务平台</p><p>企业使命：让在线教育回归教学本质，传承知识，传播理念，传递价值；为社会以及用人单位培养更多专业强、品德好的高素质人才； [2]&nbsp;</p><p>企业价值观：</p><p>个人链：诚实 专注 坚韧 正直</p><p>关系链：信任 协作 尊重 激情&nbsp;</p><p><br/></p><p>课程特色</p><p>编辑</p><p>播报</p><p>MCA互联网高级架构师课程</p><p>MCA互联网高级架构师课程是马士兵教育历时3年研发的JAVA架构师大师课，课程体系庞大，完整的知识体系课程 打造货真价实的架构师能力，适合各阶段的学员进行选择，老师会根据学员的学历、年龄、兴趣习惯、工作经验、工作地点和学习目标等信息，量身定做一份最合适学员的学习线路，并为其学习路线提供有效的学习建议&nbsp;</p><p>Java高级工程师课程</p><p>Java高级工程师课程是由马士兵教育打造的立足就业、自主研发课程，包含了40+门课程，2300+节课时，540+小时的体系课程。从Java零基础深入浅出，到分布式微服务阶段的全体系课程，适合打算从零开始学习的学员。</p><p>Python全栈课程</p><p>Python全栈课程是马士兵教育历时两年半研发的一套理论结合实战、项目为王的课程，课程共42个阶段。</p><p>内容全面：417个知识点、42个课程阶段、10大企业级项目贯穿始终</p><p>专属路线：定制化学习路线，随到随学</p><p>实战结合：十大实战项目，学练用结合</p><p>服务保证：10大服务体系+讲师8对1指导+班主任+自助问答系统+自研学习平台&nbsp;</p><p>Python数据挖掘分析师课程</p><p>Python数据挖掘分析师课程是马士兵教育历时2年研发的Python数据挖掘和分析课程，课程体系包括：数据挖掘、数据分析。 数据分析部分：主要运用大量的分析工具（Numpy，Pandas，Seaborn，Tableau，SPSS，Matplotlib等）来获得数据表象所反映的客观规律。 [2]&nbsp;</p><p>AIoT智慧物联网</p><p>AIoT课程是马士兵教育历时2年研发的一套理论结合实战、项目为王的课程，课程共90个阶段，完整的知识体系课程打造出货真价实的AIoT智慧物联网研发工程师，适合各阶段的学员进行选择。老师会根据学员的学历、年龄、兴趣习惯、工作经验、工作地点和学习目标等信息，量身定做一份最合适学员的学习线路，并为其学习路线提供有效的学习建议，专属八对一服务。&nbsp;</p><p>AI人工智能工程师课程</p><p>AI人工智能工程师课程是马士兵教育是马士兵教育请北大博士后卢菁以及专业老师，历时2年精心打造的AI人工智能完整知识体系课程。旨在打造货真价实的AI人工智能工程师实战能力，适合本科及以上学员进行学习。&nbsp;&nbsp;</p><p>网络安全大师课</p><p>网络安全大师课是马士兵教育联合安全业界知名企业以及拥有多年授课经验的讲师共同研发而成，课程内容系统、丰富，知识点和技能覆盖全面，旨在打造具备实战、就业能力的网络安全工程师，适合各个阶段的学员学习。&nbsp;&nbsp;</p><p>&nbsp;<br/></p><p><br/></p>',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'setDate',`value` = '2022-10-15 04:18:31',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778711',`lang` = 'all'

20221015 04:19:11: /admin.php?m=company&f=setcontact
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'company',`key` = 'contact',`value` = '{\"contacts\":\"\\u4e07\\u91cc\\u8001\\u5e08\\u5927\\u5e05\\u6bd4\",\"phone\":\"\",\"fax\":\"\",\"email\":\"\",\"qq\":\"\",\"skype\":\"\",\"weixin\":\"\",\"weibo\":\"\",\"wangwang\":\"\",\"site\":\"\",\"address\":\"\"}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778751',`lang` = 'all'

20221015 04:20:24: /admin.php?m=tree&f=children&type=article&root=0&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE parent  = '0' AND  type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20221015 04:20:32: /admin.php?m=tree&f=children&type=article&category=0
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE alias  = '0' AND  type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '0'  AND  eps_category.lang in('zh-cn', 'all') 
  INSERT INTO eps_category SET `parent` = '0',`grade` = '1',`type` = 'article',`postedDate` = '2022-10-15 04:20:32',`name` = '课程',`alias` = '',`order` = '10',`lang` = 'zh-cn'
  UPDATE eps_category SET  `path` = ',2,' WHERE id  = '2' AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778832',`lang` = 'all'

20221015 04:20:34: /admin.php?m=tree&f=children&type=article&root=0&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE parent  = '0' AND  type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20221015 04:20:53: /admin.php?m=article&f=create&type=article&category=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778853',`lang` = 'all'

20221015 04:20:59: /admin.php?m=article&f=create&type=article&category=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO eps_article SET `author` = '万里',`source` = 'original',`titleColor` = '',`title` = '网络安全大师课',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = '<p>网络安全大师课</p><p>网络安全大师课是马士兵教育联合安全业界知名企业以及拥有多年授课经验的讲师共同研发而成，课程内容系统、丰富，知识点和技能覆盖全面，旨在打造具备实战、就业能力的网络安全工程师，适合各个阶段的学员学习。</p><p><br/></p>',`addedDate` = '2022-10-15 04:20',`status` = 'normal',`submission` = '0',`editedDate` = '2022-10-15 04:20:59',`type` = 'article',`addedBy` = 'admin',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '1' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '1',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '1' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '1' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('1') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '32593',`value` = '网',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32476',`value` = '络',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23433',`value` = '安',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20840',`value` = '全',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22823',`value` = '大',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24072',`value` = '师',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35838',`value` = '课',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26159',`value` = '是',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39532',`value` = '马',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22763',`value` = '士',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20853',`value` = '兵',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25945',`value` = '教',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32946',`value` = '育',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32852',`value` = '联',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21512',`value` = '合',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19994',`value` = '业',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30028',`value` = '界',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30693',`value` = '知',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21517',`value` = '名',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20225',`value` = '企',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20197',`value` = '以',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21450',`value` = '及',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25317',`value` = '拥',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26377',`value` = '有',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22810',`value` = '多',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24180',`value` = '年',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25480',`value` = '授',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32463',`value` = '经',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39564',`value` = '验',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30340',`value` = '的',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35762',`value` = '讲',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20849',`value` = '共',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21516',`value` = '同',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30740',`value` = '研',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21457',`value` = '发',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32780',`value` = '而',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25104',`value` = '成',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65292',`value` = '，',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31243',`value` = '程',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20869',`value` = '内',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23481',`value` = '容',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31995',`value` = '系',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32479',`value` = '统',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12289',`value` = '、',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20016',`value` = '丰',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23500',`value` = '富',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35782',`value` = '识',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28857',`value` = '点',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21644',`value` = '和',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25216',`value` = '技',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33021',`value` = '能',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35206',`value` = '覆',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30422',`value` = '盖',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38754',`value` = '面',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26088',`value` = '旨',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22312',`value` = '在',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25171',`value` = '打',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36896',`value` = '造',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20855',`value` = '具',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22791',`value` = '备',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23454',`value` = '实',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25112',`value` = '战',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23601',`value` = '就',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21147',`value` = '力',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24037',`value` = '工',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36866',`value` = '适',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21508',`value` = '各',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20010',`value` = '个',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38454',`value` = '阶',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27573',`value` = '段',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23398',`value` = '学',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21592',`value` = '员',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20064',`value` = '习',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12290',`value` = '。',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '1',`objectType` = 'article',`title` = ' 32593 32476 23433 20840 22823 24072 35838',`status` = 'normal',`addedDate` = '2022-10-15 04:20:00',`editedDate` = '2022-10-15 04:20:59',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 32593 32476 23433 20840 22823 24072 35838 32593 32476 23433 20840 22823 24072 35838 26159 39532 22763 20853 25945 32946 32852 21512 23433 20840 19994 30028 30693 21517 20225 19994 20197 21450 25317 26377 22810 24180 25480 35838 32463 39564 30340 35762 24072 20849 21516 30740 21457 32780 25104 65292 35838 31243 20869 23481 31995 32479 12289 20016 23500 65292 30693 35782 28857 21644 25216 33021 35206 30422 20840 38754 65292 26088 22312 25171 36896 20855 22791 23454 25112 12289 23601 19994 33021 21147 30340 32593 32476 23433 20840 24037 31243 24072 65292 36866 21512 21508 20010 38454 27573 30340 23398 21592 23398 20064 12290',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778859',`lang` = 'all'

20221015 04:22:11: /admin.php?m=article&f=create&type=article&category=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778931',`lang` = 'all'

20221015 04:22:13: /admin.php?m=article&f=create&type=article&category=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = 'CobaltStrike安装和生成木马',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = '<p>1</p>',`addedDate` = '2022-10-15 04:21',`status` = 'normal',`submission` = '0',`editedDate` = '2022-10-15 04:22:13',`type` = 'article',`addedBy` = 'admin',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '2' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '2',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '2' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '23433',`value` = '安',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35013',`value` = '装',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21644',`value` = '和',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29983',`value` = '生',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25104',`value` = '成',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26408',`value` = '木',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39532',`value` = '马',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '2',`objectType` = 'article',`title` = ' cobaltstrike 23433 35013 21644 29983 25104 26408 39532',`status` = 'normal',`addedDate` = '2022-10-15 04:21:00',`editedDate` = '2022-10-15 04:22:13',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |1|__',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778933',`lang` = 'all'

20221015 04:22:22: /admin.php?m=article&f=create&type=article&category=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = '利用蚁剑上线到CS远控工具',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = '<p>2</p>',`addedDate` = '2022-10-15 04:22',`status` = 'normal',`submission` = '0',`editedDate` = '2022-10-15 04:22:22',`type` = 'article',`addedBy` = 'admin',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '3' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '3',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '3' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '21033',`value` = '利',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29992',`value` = '用',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34433',`value` = '蚁',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21073',`value` = '剑',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19978',`value` = '上',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32447',`value` = '线',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21040',`value` = '到',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36828',`value` = '远',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25511',`value` = '控',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24037',`value` = '工',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20855',`value` = '具',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '3',`objectType` = 'article',`title` = ' 21033 29992 34433 21073 19978 32447 21040 cs___ 36828 25511 24037 20855',`status` = 'normal',`addedDate` = '2022-10-15 04:22:00',`editedDate` = '2022-10-15 04:22:22',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |2|__',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778942',`lang` = 'all'

20221015 04:22:29: /admin.php?m=article&f=create&type=article&category=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = '内网信息收集获取关键信息',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = '<p>3</p>',`addedDate` = '2022-10-15 04:22',`status` = 'normal',`submission` = '0',`editedDate` = '2022-10-15 04:22:29',`type` = 'article',`addedBy` = 'admin',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '4' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '4',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '4' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '20869',`value` = '内',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32593',`value` = '网',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20449',`value` = '信',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24687',`value` = '息',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25910',`value` = '收',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38598',`value` = '集',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33719',`value` = '获',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21462',`value` = '取',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20851',`value` = '关',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38190',`value` = '键',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '4',`objectType` = 'article',`title` = ' 20869 32593 20449 24687 25910 38598 33719 21462 20851 38190 20449 24687',`status` = 'normal',`addedDate` = '2022-10-15 04:22:00',`editedDate` = '2022-10-15 04:22:29',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |3|__',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778949',`lang` = 'all'

20221015 04:22:36: /admin.php?m=article&f=create&type=article&category=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = 'windows电脑密码收集和破解',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = '<p>4</p>',`addedDate` = '2022-10-15 04:22',`status` = 'normal',`submission` = '0',`editedDate` = '2022-10-15 04:22:36',`type` = 'article',`addedBy` = 'admin',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '5' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '5',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '5' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '30005',`value` = '电',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33041',`value` = '脑',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23494',`value` = '密',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30721',`value` = '码',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25910',`value` = '收',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38598',`value` = '集',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21644',`value` = '和',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30772',`value` = '破',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35299',`value` = '解',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '5',`objectType` = 'article',`title` = ' windows 30005 33041 23494 30721 25910 38598 21644 30772 35299',`status` = 'normal',`addedDate` = '2022-10-15 04:22:00',`editedDate` = '2022-10-15 04:22:36',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |4|__',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778956',`lang` = 'all'

20221015 04:22:44: /admin.php?m=article&f=create&type=article&category=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = '搭建socks隧道进入内网',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = '<p>5</p>',`addedDate` = '2022-10-15 04:22',`status` = 'normal',`submission` = '0',`editedDate` = '2022-10-15 04:22:44',`type` = 'article',`addedBy` = 'admin',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '6' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '6',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '6' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '6' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('6') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '25645',`value` = '搭',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24314',`value` = '建',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38567',`value` = '隧',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36947',`value` = '道',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36827',`value` = '进',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20837',`value` = '入',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20869',`value` = '内',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32593',`value` = '网',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '6',`objectType` = 'article',`title` = ' 25645 24314 socks 38567 36947 36827 20837 20869 32593',`status` = 'normal',`addedDate` = '2022-10-15 04:22:00',`editedDate` = '2022-10-15 04:22:44',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |5|__',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665778964',`lang` = 'all'

20221015 04:23:19: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20221015 04:23:25: /admin.php?m=tree&f=children&type=express&root=0&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE parent  = '0' AND  type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20221015 04:23:27: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20221015 04:23:48: /admin.php?m=site&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'status',`value` = 'normal',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'pauseTip',`value` = '<p>站点维护中……</p>',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'type',`value` = 'portal',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'mobileTemplate',`value` = 'close',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'gzipOutput',`value` = 'close',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'name',`value` = '马士兵教育',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'copyright',`value` = '',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'modules',`value` = 'article,product',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'keywords',`value` = '',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'indexKeywords',`value` = '',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'slogan',`value` = '',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'meta',`value` = '',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'desc',`value` = '',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'icpSN',`value` = '',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'icpLink',`value` = 'http://www.miitbeian.gov.cn',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'policeSN',`value` = '',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'policeLink',`value` = 'http://www.miitbeian.gov.cn',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1665779028',`lang` = 'all'

