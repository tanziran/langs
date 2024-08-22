<?php

// 在 profile.php 和 register.php 中使用的语言定义
$lang_prof_reg = array(

'Email legend'                =>  '输入有效的电子邮件地址',
'Email legend 2'              =>  '输入并确认有效的电子邮件地址',
'Localisation legend'         =>  '设置您的位置选项',
'Time zone'                   =>  '时区',
'Time zone info'              =>  '为了使论坛能够正确显示时间，您必须选择您所在地区的时区。如果夏令时生效，您还应该选择提供的选项，将时间提前1小时。',
'DST'                         =>  '夏令时生效（将时间提前1小时）。',
'Time format'                 =>  '时间格式',
'Date format'                 =>  '日期格式',
'Default'                     =>  '默认',
'Language'                    =>  '语言',
'Email setting info'          =>  '选择您是否希望您的电子邮件地址对其他用户可见，以及是否允许其他用户通过论坛（表单电子邮件）向您发送电子邮件。',
'Email setting 1'             =>  '向其他用户展示您的电子邮件地址。',
'Email setting 2'             =>  '隐藏您的电子邮件地址，但允许表单电子邮件。',
'Email setting 3'             =>  '隐藏您的电子邮件地址并禁止表单电子邮件。',
'Privacy options legend'      =>  '设置您的隐私选项',
'Confirm pass'                =>  '确认密码',
'Save user/pass'              =>  '在访问间保存用户名和密码。',
'Save user/pass info'         =>  '此选项设置论坛是否应在访问间“记住”您。如果启用，您将不必每次访问论坛时都登录。您将自动登录。推荐。',

'Username Error'              =>  '用户名必须以字母开头，并且可以包含字母、数字、空格和下划线。',
'Username too short'          =>  '用户名至少需要2个字符长。请选择另一个（更长的）用户名。',
'Username too long'           =>  '用户名不得超过25个字符长。请选择另一个（更短的）用户名。',
'Username guest'              =>  '用户名 "guest" 是保留的。请选择另一个用户名。',
'Username IP'                 =>  '用户名不能以IP地址的形式。请选择另一个用户名。',
'Username reserved chars'     =>  '用户名不能同时包含所有字符 \', " 和 [ 或 ] 。请选择另一个用户名。',
'Username BBCode'             =>  '用户名不能包含论坛使用的任何文本格式化标签（BBCode）。请选择另一个用户名。',
'Banned username'             =>  '您输入的用户名在此论坛中被禁止。请选择另一个用户名。',
'Pass too short'              =>  '密码至少需要9个字符长。请选择另一个（更长的）密码。',
'Pass not match'              =>  '密码不匹配。',
'Banned email'                =>  '您输入的电子邮件地址在此论坛中被禁止。请选择另一个电子邮件地址。',
'Dupe email'                  =>  '有人已经使用那个电子邮件地址注册。请选择另一个电子邮件地址。',
'Sig too long'                =>  '签名不能超过 %1$s 个字符。请将您的签名减少 %2$s 个字符。',
'Sig too many lines'          =>  '签名不能超过 %s 行。',
'Bad ICQ'                     =>  '您输入了无效的ICQ UIN。请返回并更正。',

'UTC-12:00'                   =>  '(UTC-12:00) 国际日期变更线西',
'UTC-11:00'                   =>  '(UTC-11:00) 纽埃、萨摩亚',
'UTC-10:00'                   =>  '(UTC-10:00) 夏威夷-阿留申、库克群岛',
'UTC-09:30'                   =>  '(UTC-09:30) 马克萨斯群岛',
'UTC-09:00'                   =>  '(UTC-09:00) 阿拉斯加、甘比尔岛',
'UTC-08:30'                   =>  '(UTC-08:30) 皮特凯恩群岛',
'UTC-08:00'                   =>  '(UTC-08:00) 太平洋',
'UTC-07:00'                   =>  '(UTC-07:00) 山地',
'UTC-06:00'                   =>  '(UTC-06:00) 中部',
'UTC-05:00'                   =>  '(UTC-05:00) 东部',
'UTC-04:00'                   =>  '(UTC-04:00) 大西洋',
'UTC-03:30'                   =>  '(UTC-03:30) 纽芬兰',
'UTC-03:00'                   =>  '(UTC-03:00) 亚马逊、中格陵兰',
'UTC-02:00'                   =>  '(UTC-02:00) 中大西洋',
'UTC-01:00'                   =>  '(UTC-01:00) 亚速尔群岛、佛得角、西格陵兰',
'UTC'                         =>  '(UTC) 西欧、格林尼治',
'UTC+01:00'                   =>  '(UTC+01:00) 中欧、西非',
'UTC+02:00'                   =>  '(UTC+02:00) 东欧、中非',
'UTC+03:00'                   =>  '(UTC+03:00) 莫斯科、圣彼得堡、东非',
'UTC+03:30'                   =>  '(UTC+03:30) 伊朗',
'UTC+04:00'                   =>  '(UTC+04:00) 海湾、伊热夫斯克、萨马拉',
'UTC+04:30'                   =>  '(UTC+04:30) 阿富汗',
'UTC+05:00'                   =>  '(UTC+05:00) 巴基斯坦、叶卡捷琳堡',
'UTC+05:30'                   =>  '(UTC+05:30) 印度、斯里兰卡',
'UTC+05:45'                   =>  '(UTC+05:45) 尼泊尔',
'UTC+06:00'                   =>  '(UTC+06:00) 孟加拉国、不丹、新西伯利亚',
'UTC+06:30'                   =>  '(UTC+06:30) 科科斯群岛、缅甸',
'UTC+07:00'                   =>  '(UTC+07:00) 柬埔寨、老挝、泰国、克拉斯诺亚尔斯克',
'UTC+08:00'                   =>  '(UTC+08:00) 大中华区、澳大利亚西部、伊尔库茨克',
'UTC+08:45'                   =>  '(UTC+08:45) 西澳大利亚州东南部',
'UTC+09:00'                   =>  '(UTC+09:00) 日本、韩国、雅库茨克',
'UTC+09:30'                   =>  '(UTC+09:30) 澳大利亚中部',
'UTC+10:00'                   =>  '(UTC+10:00) 澳大利亚东部、符拉迪沃斯托克、马加丹',
'UTC+10:30'                   =>  '(UTC+10:30) 豪勋爵岛',
'UTC+11:00'                   =>  '(UTC+11:00) 所罗门群岛、楚科奇',
'UTC+11:30'                   =>  '(UTC+11:30) 诺福克岛',
'UTC+12:00'                   =>  '(UTC+12:00) 新西兰、斐济、堪察加',
'UTC+12:45'                   =>  '(UTC+12:45) 查塔姆群岛',
'UTC+13:00'                   =>  '(UTC+13:00) 汤加、凤凰群岛',
'UTC+14:00'                   =>  '(UTC+14:00) 莱恩群岛'

);