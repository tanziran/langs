<?php

// 在 admin_bans.php 中使用的语言定义
$lang_admin_bans = array(

'No user message'          => '没有注册该用户名的用户。如果你想添加一个不特定于任何用户名的禁令，只需留空用户名。',
'No user ID message'       => '没有注册该ID的用户。',
'User is admin message'    => '用户 %s 是管理员，不能被禁止。如果你想禁止一个管理员，你必须先降级他/她。',
'User is mod message'      => '用户 %s 是版主，不能被禁止。如果你想禁止一个版主，你必须先降级他/她。',
'Must enter message'      => '你必须输入一个用户名、IP地址或电子邮件地址（至少一个）。',
'Cannot ban guest message' => '不能禁止访客用户。',
'Invalid IP message'       => '你输入的IP/IP范围无效。',
'Invalid e-mail message'  => '你输入的电子邮件地址（例如 user@domain.com）或部分电子邮件地址域（例如 domain.com）无效。',
'Duplicate domain message'=> '域 %s 已经被禁止。',
'Duplicate e-mail message'=> '电子邮件地址 %s 已经被禁止。',
'Invalid date message'     => '你输入的过期日期无效。',
'Invalid date reasons'     => '格式应为 YYYY-MM-DD，日期必须至少在将来的一天。',
'Ban added redirect'      => '禁令已添加。正在重定向…',
'Ban edited redirect'     => '禁令已编辑。正在重定向…',
'Ban removed redirect'     => '禁令已移除。正在重定向…',

'New ban head'            => '新禁令',
'Add ban subhead'         => '添加禁令',
'Username label'          => '用户名',
'Username help'           => '要禁止的用户名（不区分大小写）。',
'Username advanced help'  => '要禁止的用户名（不区分大小写）。下一页将允许你输入自定义IP和电子邮件。如果你想禁止特定的IP/IP范围或电子邮件，请留空。',

'Ban search head'         => '禁令搜索',
'Ban search subhead'      => '输入搜索条件',
'Ban search info'        => '在数据库中搜索禁令。你可以输入一个或多个搜索项。接受星号 (*) 作为通配符。要显示所有禁令，请所有字段都留空。',
'Date help'               => '(yyyy-mm-dd)',
'Message label'           => '消息',
'Expire after label'     => '过期后',
'Expire before label'    => '过期前',
'Order by label'         => '排序依据',
'Order by username'       => '用户名',
'Order by ip'             => 'IP',
'Order by e-mail'        => '电子邮件',
'Order by expire'        => '过期日期',
'Ascending'               => '升序',
'Descending'              => '降序',
'Submit search'            => '提交搜索',

'E-mail label'            => '电子邮件',
'E-mail help'             => '你想禁止的电子邮件或电子邮件域（例如 someone@somewhere.com, somewhere.com, .com 或 com）。有关更多信息，请参阅权限中的“允许被禁止的电子邮件地址”。',
'IP label'                => 'IP地址/IP范围',
'IP help'                 => '你想禁止的IP地址或IP范围（例如 150.11.110.1 或 150.11.110）。用空格分隔地址。如果已经输入了IP，那么它是数据库中该用户的最后已知IP。',
'IP help link'             => '点击 %s 查看该用户的IP统计信息。',
'Ban advanced head'       => '高级禁令设置',
'Ban advanced subhead'    => '用IP和电子邮件补充禁令',
'Ban message label'       => '禁令消息',
'Ban message help'        => '当被禁止的用户访问论坛时，将向他/她显示的消息。',
'Message expiry subhead'   => '禁令消息和到期',
'Ban IP range info'       => '禁止IP范围时应该非常小心，因为有多个用户可能匹配相同的部分IP。',
'Expire date label'       => '到期日期',
'Expire date help'        => '这个禁令应该自动移除的日期（格式：yyyy-mm-dd）。留空以手动移除。',

'Results head'            => '搜索结果',
'Results username head'   => '用户名',
'Results e-mail head'     => '电子邮件',
'Results IP address head' => 'IP/IP范围',
'Results expire head'     => '到期',
'Results message head'    => '消息',
'Results banned by head'  => '禁止者',
'Results actions head'    => '操作',
'No match'                => '无匹配',
'Unknown'                 => '未知',

);