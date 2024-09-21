<?php

// 在 db_update.php 中使用的语言定义

$lang_update = array(

'Update'                    => '更新 FluxBB',
'Update message'            => '您的 FluxBB 数据库已过时，必须升级才能继续。如果您是论坛管理员，请按照以下说明完成升级。',
'Note'                      => '备注：',
'Members message'           => '此过程仅适用于论坛管理员。如果您是会员，不用担心 - 论坛很快就能恢复！',
'Administrator only'        => '此步骤仅适用于论坛管理员！',
'Database password info'    => '执行数据库更新，请输入安装 FluxBB 时使用的数据库密码。如果您记不得了，这存储在您的 \'config.php\' 文件中。',
'Database password note'    => '如果您使用的是 SQLite（因此没有数据库密码），请使用数据库文件名代替。这必须与您的配置文件中给出的数据库文件名完全匹配。',
'Database password'         => '数据库密码',
'Maintenance'               => '维护',
'Maintenance message info'  => '在更新过程中将向用户显示的消息。此文本不会像普通帖子一样解析，因此可能包含 HTML。',
'Maintenance message'       => '维护消息',

'You are running error'     => '您正在运行 %1$s 版本 %2$s。FluxBB %3$s 至少需要 %1$s %4$s 才能正常运行。在继续之前，您必须升级您的 %1$s 安装。',
'Version mismatch error'    => '版本不匹配。数据库 \'%s\' 似乎没有运行此更新脚本支持的 FluxBB 数据库架构。',
'Invalid file error'        => '数据库文件名无效。使用 SQLite 时，数据库文件名必须与您的 \'%s\' 中出现的完全相同。',
'Invalid password error'    => '数据库密码无效。要升级 FluxBB，您必须准确输入在您的 \'%s\' 中出现的数据库密码。',
'No password error'         => '未提供数据库密码',
'Script runs error'         => '似乎更新脚本已被其他人运行。如果不是这种情况，请手动删除文件 \'%s\' 然后重试。',
'No update error'           => '您的论坛已经和这个脚本一样最新',

'Intro 1'                   => '此脚本将更新您的论坛数据库。更新过程可能需要从几秒钟到几个小时，这取决于服务器的速度和论坛数据库的大小。在继续之前不要忘记备份数据库。',
'Intro 2'                   => '您是否阅读了文档中的更新说明？如果没有，请从那里开始。',
'No charset conversion'     => '<strong>重要！</strong> FluxBB 检测到此 PHP 环境不支持执行从 ISO-8859-1 以外的字符集转换为 UTF-8 所需的编码机制。这意味着如果当前字符集不是 ISO-8859-1，FluxBB 将无法将您的论坛数据库转换为 UTF-8，您将需要手动执行。可以在更新说明中找到手动字符集转换的说明。',
'Enable conversion'         => '<strong>启用转换：</strong> 当启用后，此更新脚本将在对数据库进行所需的结构更改后，将数据库中的所有文本从当前字符集转换为 UTF-8。如果您是从版本 1.2 升级，此转换是必需的。',
'Current character set'     => '<strong>当前字符集：</strong> 如果您的论坛主要语言是英语，您可以将其保留为默认值。然而，如果您的论坛是非英语的，您应该输入论坛使用的主语言包的字符集。<em>弄错这个可能会破坏您的数据库，所以不要乱猜！</em> 注意：即使旧数据库是 UTF-8，这也是必需的。',
'Charset conversion'        => '字符集转换',
'Enable conversion label'   => '<strong>启用转换</strong>（执行数据库字符集转换）。',
'Current character set label' => '当前字符集',
'Current character set info'  => '对于英语论坛接受默认值，否则为论坛主语言包的字符集。',
'Start update'              => '开始更新',
'Error converting users'    => '转换用户时出错',
'Error info 1'              => '转换某些用户时出现错误。当从 FluxBB v1.2 转换时，如果多个用户注册了非常相似的用户名，例如 "bob" 和 "böb"，可能会发生这种情况。',
'Error info 2'              => '以下是未能转换的用户列表。请为每个用户选择一个新用户名。被重命名的用户将自动收到电子邮件通知他们更改。',
'New username'              => '新用户名',
'Required'                  => '(必填)',
'Correct errors'            => '需要纠正以下错误：',
'Rename users'              => '重命名用户',
'Successfully updated'      => '您的论坛数据库已成功更新。您现在可以 %s。',
'go to index'               => '转到论坛首页',

'Unable to lock error'      => '无法写入更新锁。请确保 PHP 有写入访问权限到目录 \'%s\' 并且没有其他人目前正在运行更新脚本。',

'Converting'                => '正在转换 %s …',
'Converting item'           => '正在转换 %1$s %2$s …',
'Preparsing item'           => '正在预解析 %1$s %2$s …',
'Rebuilding index item'     => '正在为 %1$s %2$s 重建索引',
'Click here'                => '点击这里',
'Automatic redirect failed' => '自动重定向未成功。%s 继续 …',

'ban'                   => '封禁',
'categories'            => '分类',
'censor words'          => '审查词语',
'configuration'         => '配置',
'forums'                => '论坛',
'groups'                => '组',
'post'                  => '帖子',
'report'                => '报告',
'topic'                 => '主题',
'user'                  => '用户',
'signature'             => '签名',

'Username too short error'      => '用户名至少需要2个字符长。请选择另一个（更长的）用户名。',
'Username too long error'       => '用户名不得超过25个字符长。请选择另一个（更短的）用户名。',
'Username Guest reserved error' => '用户名 guest 是保留的。请选择另一个用户名。',
'Username IP format error'      => '用户名不能以 IP 地址的形式。请选择另一个用户名。',
'Username bad characters error' => '用户名不能同时包含所有字符 \', " 和 [ 或 ]。请选择另一个用户名。',
'Username BBCode error'         => '用户名不能包含论坛使用的任何文本格式化标签（BBCode）。请选择另一个用户名。',
'Username duplicate error'      => '有人已经注册了用户名 %s。您输入的用户名与之太相似。用户名必须至少在一个字母或数字上不同。请选择一个不同的用户名。',

);
