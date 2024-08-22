<?php

// 在 admin_options.php 中使用的语言定义
$lang_admin_options = array(

'Bad HTTP Referer message'       => 'HTTP_REFERER 错误。如果您已将这些论坛从一位置移动到另一位置或更改了域名，您需要在数据库中手动更新基础 URL（在 config 表中查找 o_base_url）然后通过删除 /cache 目录下的所有 .php 文件清空缓存。',
'Must enter title message'       => '您必须输入一个论坛标题。',
'Invalid e-mail message'         => '您输入的管理员电子邮件地址无效。',
'Invalid webmaster e-mail message' => '您输入的站长电子邮件地址无效。',
'SMTP passwords did not match'   => '您需要两次完全相同地输入 SMTP 密码以进行更改。',
'Enter announcement here'       => '在这里输入您的公告。',
'Enter rules here'              => '在这里输入您的规则。',
'Default maintenance message'    => '论坛暂时关闭进行维护。请稍后再试。',
'Timeout error message'          => '"在线超时" 的值必须小于 "访问超时" 的值。',
'Options updated redirect'       => '选项已更新。正在重定向 …',

// 基本设置部分
'Essentials subhead'            => '基本设置',
'Board title label'             => '论坛标题',
'Board title help'              => '此公告板的标题（显示在每个页面的顶部）。此字段<strong>不得</strong>包含 HTML。',
'Board desc label'              => '论坛描述',
'Board desc help'               => '此公告板的简短描述（显示在每个页面的顶部）。此字段可以包含 HTML。',
'Base URL label'                => '基础 URL',
'Base URL help'                 => '论坛的完整 URL，不带尾随斜杠（例如 http://www.mydomain.com/forums）。这<strong>必须</strong>正确以便所有管理和版主功能正常工作。如果您收到 "Bad referer" 错误，它可能是错误的。',
'Base URL problem'              => '您的安装不支持国际化域名的自动转换。由于您的基础 URL 包含特殊字符，您<strong>必须</strong>使用在线转换器以避免 "Bad referer" 错误。',
'Timezone label'                => '默认时区',
'Timezone help'                 => '来宾和尝试注册论坛的用户的默认时区。',
'DST label'                     => '调整为夏令时',
'DST help'                      => '检查是否实行夏令时（时间提前1小时）。',
'Language label'                => '默认语言',
'Language help'                 => '来宾和尚未在他们的个人资料中更改默认设置的用户，默认语言。如果您删除了语言包，这必须更新。',
'Default style label'           => '默认风格',
'Default style help'            => '来宾和尚未在他们的个人资料中更改默认设置的用户的默认风格。',

// 基本设置部分的时区选项
'UTC-12:00'                    => '(UTC-12:00) 国际日期变更线西',
'UTC-11:00'                    => '(UTC-11:00) 纽埃、萨摩亚',
'UTC-10:00'                    => '(UTC-10:00) 夏威夷-阿留申、库克群岛',
'UTC-09:30'                    => '(UTC-09:30) 马尔克萨斯群岛',
'UTC-09:00'                    => '(UTC-09:00) 阿拉斯加、甘比尔岛',
'UTC-08:30'                    => '(UTC-08:30) 皮特凯恩群岛',
'UTC-08:00'                    => '(UTC-08:00) 太平洋',
'UTC-07:00'                    => '(UTC-07:00) 山地',
'UTC-06:00'                    => '(UTC-06:00) 中部',
'UTC-05:00'                    => '(UTC-05:00) 东部',
'UTC-04:00'                    => '(UTC-04:00) 大西洋',
'UTC-03:30'                    => '(UTC-03:30) 纽芬兰',
'UTC-03:00'                    => '(UTC-03:00) 亚马逊、中格陵兰',
'UTC-02:00'                    => '(UTC-02:00) 中大西洋',
'UTC-01:00'                    => '(UTC-01:00) 亚速尔群岛、佛得角、东格陵兰',
'UTC'                          => '(UTC) 西欧、格林尼治',
'UTC+01:00'                    => '(UTC+01:00) 中欧、西非',
'UTC+02:00'                    => '(UTC+02:00) 东欧、中非',
'UTC+03:00'                    => '(UTC+03:00) 莫斯科、圣彼得堡、东非',
'UTC+03:30'                    => '(UTC+03:30) 伊朗',
'UTC+04:00'                    => '(UTC+04:00) 海湾、伊热夫斯克、萨马拉',
'UTC+04:30'                    => '(UTC+04:30) 阿富汗',
'UTC+05:00'                    => '(UTC+05:00) 巴基斯坦、叶卡捷琳堡',
'UTC+05:30'                    => '(UTC+05:30) 印度、斯里兰卡',
'UTC+05:45'                    => '(UTC+05:45) 尼泊尔',
'UTC+06:00'                    => '(UTC+06:00) 孟加拉国、不丹、新西伯利亚',
'UTC+06:30'                    => '(UTC+06:30) 科科斯群岛、缅甸',
'UTC+07:00'                    => '(UTC+07:00) 印度、克拉斯诺亚尔斯克',
'UTC+08:00'                    => '(UTC+08:00) 大中华区、澳大利亚西部、伊尔库茨克',
'UTC+08:45'                    => '(UTC+08:45) 西澳大利亚州东南部',
'UTC+09:00'                    => '(UTC+09:00) 日本、韩国、雅库茨克',
'UTC+09:30'                    => '(UTC+09:30) 澳大利亚中部',
'UTC+10:00'                    => '(UTC+10:00) 澳大利亚东部、符拉迪沃斯托克、马加丹',
'UTC+10:30'                    => '(UTC+10:30) 豪勋爵岛',
'UTC+11:00'                    => '(UTC+11:00) 所罗门群岛、楚科奇',
'UTC+11:30'                    => '(UTC+11:30) 诺福克岛',
'UTC+12:00'                    => '(UTC+12:00) 新西兰、斐济、堪察加',
'UTC+12:45'                    => '(UTC+12:45) 查塔姆群岛',
'UTC+13:00'                    => '(UTC+13:00) 汤加、凤凰群岛',
'UTC+14:00'                    => '(UTC+14:00) 莱恩群岛',

// 超时设置部分
'Timeouts subhead'              => '时间和超时',
'Time format label'             => '时间格式',
'PHP manual'                   => 'PHP 手册',
'Time format help'              => '[当前格式：%s]。查看 %s 获取格式化选项。',
'Date format label'             => '日期格式',
'Date format help'              => '[当前格式：%s]。查看 %s 获取格式化选项。',
'Visit timeout label'           => '访问超时',
'Visit timeout help'            => '用户在更新他/她的最后访问数据之前必须空闲的秒数（主要影响新消息指示器）。',
'Online timeout label'           => '在线超时',
'Online timeout help'           => '用户在从在线用户列表中移除之前必须空闲的秒数。',
'Redirect time label'           => '重定向时间',
'Redirect time help'            => '重定向时等待的秒数。如果设置为 0，则不显示重定向页面（不推荐）。',

// 显示设置部分
'Display subhead'               => '显示',
'Version number label'          => '版本号',
'Version number help'           => '在页脚显示 FluxBB 版本号。',
'Info in posts label'           => '帖子中的用户信息',
'Info in posts help'            => '在主题视图中在用户名下方显示有关发布者的信息。受影响的信息包括位置、注册日期、帖子计数和联系链接（电子邮件和 URL）。',
'Post count label'               => '用户帖子计数',
'Post count help'              => '显示用户发表的帖子数量（影响主题视图、个人资料和用户列表）。',
'Smilies label'                 => '帖子中的表情符号',
'Smilies help'                  => '转换帖子中的表情符号为小图标。',
'Smilies sigs label'            => '签名中的表情符号',
'Smilies sigs help'             => '在用户签名中转换表情符号为小图标。',
'Clickable links label'          => '使链接可点击',
'Clickable links help'           => '启用后，FluxBB 将自动检测帖子中的任何 URL 并使它们成为可点击的超链接。',
'Topic review label'            => '主题回顾',
'Topic review help'             => '发表时显示的帖子的最大数量（最新帖子优先）。设置为 0 以禁用。',
'Topics per page label'         => '每页主题数',
'Topics per page help'          => '论坛中每个页面显示的主题的默认数量。用户可以个性化此设置。',
'Posts per page label'          => '每页帖子数',
'Posts per page help'           => '主题中每个页面显示的帖子的默认数量。用户可以个性化此设置。',
'Indent label'                  => '缩进大小',
'Indent help'                   => '如果设置为 8，则在显示 [code][/code] 标签内的文本时将使用常规制表符。否则，将使用这么多空格来缩进文本。',
'Quote depth label'             => '最大引用深度',
'Quote depth help'              => '引用标签可以包含在其他引用标签内的最多层次，超出此限制的标签将被丢弃。',

// 功能部分
'Features subhead'              => '功能',
'Quick post label'             => '快速回复',
'Quick post help'              => '启用后，FluxBB 将在主题底部添加一个快速回复表单。这样用户可以直接从主题视图发表帖子。',
'Users online label'           => '在线用户',
'Users online help'            => '在首页显示当前浏览论坛的访客和注册用户的信息。',
'Censor words label'            => '审查词语',
'Censor words help'             => '启用此功能以在论坛中审查特定词语。查看 %s 了解更多信息。',
'Signatures label'              => '签名',
'Signatures help'               => '允许用户在帖子上附加签名。',
'User has posted label'         => '用户早期发表过',
'User has posted help'          => '此功能在 viewforum.php 中的主题前显示一个点，以表示当前登录用户之前在此主题中发表过。如果服务器负载较高，请禁用此功能。',
'Topic views label'             => '主题浏览次数',
'Topic views help'              => '跟踪主题的浏览次数。如果繁忙论坛的服务器负载较高，请禁用此功能。',
'Quick jump label'              => '快速跳转',
'Quick jump help'               => '启用快速跳转（跳转到论坛）下拉列表。',
'GZip label'                    => 'GZip 输出',
'GZip help'                     => '如果启用，FluxBB 将对发送到浏览器的输出进行 gzip 压缩。这将减少带宽使用，但会稍微增加 CPU 使用。此功能需要 PHP 配置了 zlib（--with-zlib）。注意：如果您已经设置了 Apache 模块 mod_gzip 或 mod_deflate 来压缩 PHP 脚本，您应该禁用此功能。',
'Search all label'              => '搜索所有论坛',
'Search all help'               => '禁用后，搜索将仅限于一次在一个论坛中进行。如果由于大量搜索导致服务器负载较高，请禁用此功能。',
'Menu items label'             => '附加菜单项',
'Menu items help'              => '通过在此文本框中输入 HTML 超链接，可以在所有页面顶部的导航菜单中添加任意数量的项目。添加新链接的格式为 X = <a href="URL">LINK</a>，其中 X 是链接应该插入的位置（例如，0 表示在开头插入，2 表示在 "用户列表" 后插入）。用换行符分隔条目。',

// 订阅源部分
'Feed subhead'                 => '聚合',
'Default feed label'           => '默认订阅源类型',
'Default feed help'            => '选择要显示的聚合源类型。注意：选择无将不会禁用订阅源，只会默认隐藏它们。',
'None'                          => '无',
'RSS'                           => 'RSS',
'Atom'                          => 'Atom',
'Feed TTL label'               => '订阅源缓存持续时间',
'Feed TTL help'                => '可以缓存订阅源以减少资源使用。',
'No cache'                      => '不缓存',
'Minutes'                       => '%d 分钟',

// 报告部分
'Reports subhead'              => '报告',
'Reporting method label'       => '报告方法',
'Internal'                      => '内部',
'By e-mail'                     => '电子邮件',
'Both'                          => '两者',
'Reporting method help'        => '选择处理主题/帖子报告的方法。您可以选择主题/帖子报告是通过内部报告系统处理，还是发送电子邮件给邮件列表上的地址（见下文），或两者兼有。',
'Mailing list label'           => '邮件列表',
'Mailing list help'            => '用逗号分隔的订阅者列表。在此列表上的人将是报告的接收者。',

// 头像部分
'Avatars subhead'               => '头像',
'Use avatars label'            => '使用头像',
'Use avatars help'             => '启用后，用户将能够上传头像，头像将在他们的标题下显示。',
'Upload directory label'        => '上传目录',
'Upload directory help'         => '头像的上传目录（相对于 FluxBB 根目录）。PHP 必须对此目录具有写权限。',
'Max width label'              => '最大宽度',
'Max width help'               => '允许的头像最大宽度（像素）（建议为 60）。',
'Max height label'             => '最大高度',
'Max height help'              => '允许的头像最大高度（像素）（建议为 60）。',
'Max size label'               => '最大大小',
'Max size help'                => '允许的头像最大大小（字节）（建议为 10240）。',

// 电子邮件部分
'E-mail subhead'               => '电子邮件',
'Admin e-mail label'          => '管理员邮箱',
'Admin e-mail help'           => '论坛管理员的电子邮件地址。',
'Webmaster e-mail label'        => '站长邮箱',
'Webmaster e-mail help'         => '所有由论坛发送的电子邮件将使用此地址作为发件人地址。',
'Forum subscriptions label'     => '论坛订阅',
'Forum subscriptions help'      => '允许用户订阅论坛（当有人创建新主题时接收电子邮件）。',
'Topic subscriptions label'     => '主题订阅',
'Topic subscriptions help'      => '允许用户订阅主题（当有人回复时接收电子邮件）。',
'SMTP address label'           => 'SMTP 服务器地址',
'SMTP address help'            => '用于发送电子邮件的外部 SMTP 服务器地址。如果您的 SMTP 服务器不在默认端口 25 上运行，您可以指定自定义端口号（例如：mail.myhost.com:3580）。留空则使用本地邮件程序。',
'SMTP username label'          => 'SMTP 用户名',
'SMTP username help'           => 'SMTP 服务器的用户名。只有在 SMTP 服务器需要时才输入用户名（大多数服务器<strong>不需要</strong>身份验证）。',
'SMTP password label'          => 'SMTP 密码',
'SMTP change password help'     => '如果您想更改或删除当前存储的密码，请选中此项。',
'SMTP password help'           => 'SMTP 服务器的密码。只有在 SMTP 服务器需要时才输入密码（大多数服务器<strong>不需要</strong>身份验证）。请两次输入密码以确认。',
'SMTP SSL label'               => '使用 SSL 加密 SMTP',
'SMTP SSL help'                => '使用 SSL 加密到 SMTP 服务器的连接。只有在您的 SMTP 服务器要求并且您的 PHP 版本支持 SSL 时才使用。必须设置 TLS 为 <b>否</b>。',

// 注册部分
'Registration subhead'         => '注册',
'Allow new label'             => '允许新注册',
'Allow new help'              => '控制此论坛是否接受新注册。仅在特殊情况下禁用。',
'Verify label'                => '验证注册',
'Verify help'                 => '启用后，用户注册时会收到一封电子邮件，其中包含一个随机密码。然后他们可以登录并在个人资料中更改密码（如果他们认为合适）。此功能还要求用户在更改注册时使用的电子邮件地址时进行验证。这是避免注册滥用并确保所有用户在个人资料中拥有“正确”的电子邮件地址的有效方法。',
'Report new label'             => '报告新注册',
'Report new help'             => '启用后，当新用户在论坛中注册时，FluxBB 将通知邮件列表上的用户（见上文）。',
'Use rules label'               => '使用论坛规则',
'Use rules help'              => '启用后，用户在注册时必须同意一套规则（在下方输入）。规则将始终通过每个页面顶部导航表中的链接获得。',
'Rules label'                  => '在此处输入您的规则',
'Rules help'                  => '在这里，您可以输入任何规则或其他信息，用户在注册时必须查看并接受。如果您在上面启用了规则，则必须在此处输入某些内容，否则将被禁用。此文本不会像普通帖子一样解析，因此可能包含 HTML。',

'E-mail default label'         => '默认电子邮件设置',
'E-mail default help'        => '选择新用户注册的默认隐私设置。',
'Display e-mail label'        => '向其他用户显示电子邮件地址。',
'Hide allow form label'       => '隐藏电子邮件地址但允许表单电子邮件。',
'Hide both label'            => '隐藏电子邮件地址并禁止表单电子邮件。',

// 公告部分
'Announcement subhead'         => '公告',
'Display announcement label'  => '显示公告',
'Display announcement help'   => '启用此功能以在论坛中显示以下消息。',
'Announcement message label'  => '公告消息',
'Announcement message help'   => '此文本不会像普通帖子一样解析，因此可能包含 HTML。',

// 维护部分
'Maintenance subhead'          => '维护',
'Maintenance mode label'      => '维护模式',
'Maintenance mode help'       => '启用后，只有管理员才能访问论坛。如果论坛需要暂时关闭进行维护，请使用此功能。<strong>警告！不要在论坛处于维护模式时注销。</strong> 您将无法再次登录。',
'Maintenance message label'    => '维护消息',
'Maintenance message help'     => '当论坛处于维护模式时，将向用户显示此消息。如果留空，将使用默认消息。此文本不会像普通帖子一样解析，因此可能包含 HTML。',

);