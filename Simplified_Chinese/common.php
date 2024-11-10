<?php

// 常用字符串的语言定义
$lang_common = array(

// 文本方向和编码
'lang_direction'               =>  'ltr',  // ltr (从左到右) 或 rtl (从右到左)
'lang_identifier'              =>  'zh',

// 数字格式化
'lang_decimal_point'           =>  '.',
'lang_thousands_sep'           =>  ',',

// 通知
'Bad request'                  =>  '错误的请求。您点击的链接不正确或已过时。',
'No view'                      =>  '您没有权限查看这些论坛。',
'No permission'                =>  '您没有权限访问此页面。',
'Bad referrer'                 =>  '错误的 csrf_hash。您是从未经授权的来源被引导到此页面的。',
'Bad csrf hash'                =>  '错误的 csrf_hash。您是从未经授权的来源被引导到此页面的。',
'No cookie'                    =>  '您似乎已成功登录，但未设置 cookie。请检查您的设置，如果适用，请为此网站启用 cookie。',
'Pun include extension'        =>  '无法从模板 %2$s 处理用户包含 %1$s。"%3$s" 文件不允许',
'Pun include directory'        =>  '无法从模板 %2$s 处理用户包含 %1$s。不允许目录遍历',
'Pun include error'            =>  '无法从模板 %2$s 处理用户包含 %1$s。在模板目录或用户包含目录中均未找到该文件',

'Hidden text'                  =>  '隐藏文本',
'Show'                         =>  '显示',
'Hide'                         =>  '隐藏',

// 其他
'Announcement'                 =>  '公告',
'Options'                      =>  '选项',
'Submit'                       =>  '提交',  // 提交按钮的“名称”
'Ban message'                  =>  '您被禁止在此论坛发言。',
'Ban message ip'               =>  '您的 IP 地址在此论坛上被禁止。',
'Ban message 2'                =>  '禁止期至',
'Ban message 3'                =>  '禁止您的管理员或版主留下了以下信息：',
'Ban message 4'                =>  '如有任何疑问，请联系论坛管理员',
'Never'                        =>  '从不',
'Today'                        =>  '今天',
'Yesterday'                    =>  '昨天',
'Info'                         =>  '信息',  // 一个常见的表格标题
'Go back'                      =>  '返回',
'Maintenance'                  =>  '维护',
'Redirecting'                  =>  '正在重定向',
'Click redirect'               =>  '如果您不想等待更长时间（或者如果您的浏览器没有自动转发您），请单击此处',
'on'                           =>  '开启',  // 例如 "BBCode 已开启"
'off'                          =>  '关闭',
'Invalid email'                =>  '您输入的电子邮件地址无效。',
'Required'                     =>  '（必填）',
'required field'               =>  '是此表单中的必填字段。',  // 用于 JavaScript 表单验证
'Last post'                    =>  '最后发帖',
'by'                           =>  '由',  // 例如 最后由某用户发帖
'New posts'                    =>  '新帖子',  // 指向第一个新帖子的链接
'New posts info'               =>  '查看此主题中的第一条新帖子。',  // 新帖子链接的弹出文本
'Username'                     =>  '用户名',
'Password'                     =>  '密码',
'Email'                        =>  '电子邮件',
'Send email'                   =>  '发送电子邮件',
'Moderated by'                 =>  '版主',
'Registered'                   =>  '已注册',
'Subject'                      =>  '主题',
'Message'                      =>  '消息',
'Topic'                        =>  '主题',
'Forum'                        =>  '论坛',
'Posts'                        =>  '帖子',
'Replies'                      =>  '回复',
'Pages'                        =>  '页面：',
'Page'                         =>  '第 %s 页',
'BBCode'                       =>  'BBCode：',  // 您可能不应该更改这个
'url tag'                      =>  '[url] 标签：',
'img tag'                      =>  '[img] 标签：',
'Smilies'                      =>  '表情符号：',
'and'                          =>  '和',
'Image link'                   =>  '图片',  // 当“显示图片”被禁用时，代替图片显示（例如 <image>）
'wrote'                        =>  '写道：',  // 用于 [quote] 的
'Mailer'                       =>  '%s',  // 例如，发出电子邮件的签名中的“MyForums Mailer”
'Important information'        =>  '重要信息',
'Write message legend'         =>  '撰写您的消息并提交',
'Previous'                     =>  '上一个',
'Next'                         =>  '下一个',
'Spacer'                       =>  '…',  // 分页的省略号

// 标题
'Title'                        =>  '标题',
'Member'                       =>  '成员',  // 默认头衔
'Moderator'                    =>  '版主',
'Administrator'                =>  '管理员',
'Banned'                       =>  '禁止',
'Guest'                        =>  '访客',

// 用于 include/parser.php
'BBCode error no opening tag'  =>  '找到了 [/%1$s] 却没有匹配的 [%1$s]',
'BBCode error invalid nesting' =>  '[%1$s] 在 [%2$s] 内被打开，这是不允许的',
'BBCode error invalid self-nesting' =>  '[%s] 在自身内被打开，这是不允许的',
'BBCode error no closing tag'  =>  '找到了 [%1$s] 却没有匹配的 [/%1$s]',
'BBCode error empty attribute' =>  '[%s] 标签有空白的属性部分',
'BBCode error tag not allowed' =>  '您不允许使用 [%s] 标签',
'BBCode error tag url not allowed' =>  '您不允许发布链接',
'BBCode list size error'       =>  '您的列表太长，无法解析，请使其更短！',

// 用于每个页面顶部的导航器
'Index'                        =>  '首页',
'User list'                    =>  '用户列表',
'Rules'                        =>  '规则',
'Search'                       =>  '搜索',
'Register'                     =>  '注册',
'Login'                        =>  '登录',
'Not logged in'                =>  '您尚未登录。',
'Profile'                      =>  '个人资料',
'Logout'                       =>  '退出',
'Logged in as'                 =>  '登录为',
'Admin'                        =>  '管理',
'Last visit'                   =>  '上次访问：%s',
'Topic searches'               =>  '主题：',
'New posts header'             =>  '新',
'Active topics'                =>  '活跃',
'Unanswered topics'            =>  '未回答',
'Posted topics'                =>  '已发布',
'Show new posts'               =>  '查找自您上次访问以来有新帖子的主题。',
'Show active topics'           =>  '查找有近期帖子的主题。',
'Show unanswered topics'       =>  '查找没有回复的主题。',
'Show posted topics'           =>  '查找您已发布过的主题。',
'Mark all as read'             =>  '标记所有主题为已读',
'Mark forum read'              =>  '标记此论坛为已读',
'Title separator'              =>  ' / ',
'PM'                           =>  '私信',
'PMsend'                       =>  '发送私信',
'PMnew'                        =>  '新私信',
'PMmess'                       =>  '您有新的私信（%s 条信息）。',

'Warn'                         =>  '警告',
'WarnMess'                     =>  '您有一个新的警告！',

// 用于页面底部
'Board footer'                 =>  '论坛底部',
'Jump to'                      =>  '跳转到',
'Go'                           =>  ' 去 ',  // 论坛跳转的提交按钮
'Moderate topic'               =>  '版主主题',
'All'                          =>  '全部',
'Move topic'                   =>  '移动主题',
'Open topic'                   =>  '打开主题',
'Close topic'                  =>  '关闭主题',
'Unstick topic'                =>  '取消置顶主题',
'Stick topic'                  =>  '置顶主题',
'Moderate forum'               =>  '版主论坛',
'Powered by' => 'Powered by %s<br />Modified by &#x56;&#x69;&#x73;&#x6D;&#x61;&#x6E; - Simplified Chinese Language Pack by tanziran',

// 调试信息
'Debug table'                  =>  '调试信息',
'Querytime'                    =>  '生成耗时 %1$s 秒，执行了 %2$s 次查询',
'Memory usage'                 =>  '内存使用：%1$s',
'Peak usage'                   =>  '(峰值：%1$s)',
'Query times'                  =>  '时间 (秒)',
'Query'                        =>  '查询',
'Total query time'             =>  '总查询时间：%s',

// 用于 extern.php 的 RSS 订阅
'RSS description'              =>  '%s 的最新主题。',
'RSS description topic'        =>  '%s 中的最新帖子。',
'RSS reply'                    =>  'Re: ',  // 主题标题将附加到此字符串（表示回复）
'RSS active topics feed'       =>  'RSS 活跃主题订阅',
'Atom active topics feed'      =>  'Atom 活跃主题订阅',
'RSS forum feed'               =>  'RSS 论坛订阅',
'Atom forum feed'              =>  'Atom 论坛订阅',
'RSS topic feed'               =>  'RSS 主题订阅',
'Atom topic feed'              =>  'Atom 主题订阅',

'After time'                   =>   '稍后添加',
'After time s'                 =>   ' 秒',
'After time i'                 =>   ' 分钟',
'After time H'                 =>   ' 小时',
'After time d'                 =>   ' 天',

// 头部的管理员相关信息
'New reports'                 =>  '有新报告',
'Maintenance mode enabled'    =>  '已启用维护模式！',

// 文件大小单位
'Size unit B'                 =>  '%s 字节',
'Size unit KiB'               =>  '%s 千字节',
'Size unit MiB'               =>  '%s 兆字节',
'Size unit GiB'               =>  '%s 吉字节',
'Size unit TiB'               =>  '%s 太字节',
'Size unit PiB'               =>  '%s 拍字节',
'Size unit EiB'               =>  '%s 艾字节',

);
