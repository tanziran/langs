<?php

// 在 post.php 和 edit.php 中使用的语言定义
$lang_post = array(

// 帖子验证相关（许多与 edit.php 中的类似）
'No subject'            => '主题必须包含标题。',
'No subject after censoring' => '主题必须包含标题。应用审查过滤器后，您的标题为空。',
'Too long subject'      => '标题不能超过70个字符。',
'No message'            => '您必须输入消息。',
'No message after censoring' => '您必须输入消息。应用审查过滤器后，您的消息为空。',
'Too long message'      => '帖子长度不能超过 %s 个字符。',
'All caps subject'      => '标题不能只包含大写字母。',
'All caps message'      => '帖子内容不能只包含大写字母。',
'Empty after strip'     => '您的帖子似乎只包含空的BBCode。这可能是因为，例如，最内层的引用因超过最大引用深度而被丢弃。',

// 发帖
'Post errors'           => '帖子错误',
'Post errors info'      => '在消息可以发布之前，需要纠正以下错误：',
'Post preview'          => '帖子预览',
'Guest name'            => '姓名', // 针对访客（而不是用户名）
'Post redirect'         => '帖子已发布。正在重定向 …',
'Post a reply'          => '回复帖子',
'Post new topic'        => '发布新主题',
'Hide smilies'          => '在本帖中不显示表情图标',
'Subscribe'             => '订阅本主题',
'Stay subscribed'       => '保持订阅本主题',
'Topic review'          => '主题回顾（最新优先）',
'Flood start'           => '帖子之间至少需要间隔 %s 秒。请等待 %s 秒后再尝试发布。',
'Preview'               => '预览', // 预览消息的提交按钮

'EditPost edit'         => '允许无限制地编辑给定消息',
'Stick first post'      => '将主题的第一篇帖子置顶显示在所有页面',

// 编辑帖子
'Edit post legend'      => '编辑帖子并提交更改',
'Silent edit'           => '静默编辑（在主题视图中不显示“由...编辑”）',
'Edit post'             => '编辑帖子',
'Merge posts'           => '如果前一篇帖子是您的，则与之合并',
'Edit redirect'         => '帖子已更新。正在重定向 …'

);
