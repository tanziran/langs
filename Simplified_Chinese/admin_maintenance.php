<?php

// 在 admin_maintenance.php 中使用的语言定义
$lang_admin_maintenance = array(

'Maintenance head'                => '论坛维护',
'Rebuild index subhead'            => '重建搜索索引',
'Rebuild index info'             => '如果您手动在数据库中添加、编辑或删除了帖子，或者您在搜索时遇到问题，您应该重建搜索索引。为了获得最佳性能，在重建期间应该将论坛置于%s状态。<strong>重建搜索索引可能需要很长时间，并将在重建过程中增加服务器负载！</strong>',
'Posts per cycle label'           => '每个周期的帖子数',
'Posts per cycle help'            => '每个页面查看处理的帖子数量。例如，如果您输入300，那么将处理三百个帖子，然后页面将刷新。这是为了防止在重建过程中脚本超时。',
'Starting post label'             => '起始帖子ID',
'Starting post help'              => '开始重建的帖子ID。默认值是数据库中的第一个可用ID。通常您不需要更改这个。',
'Empty index label'               => '清空索引',
'Empty index help'                => '如果您希望在重建之前清空搜索索引，请选择此项（见下文）。',
'Rebuild completed info'          => '一旦过程完成，您将被重定向回此页面。如果您被迫中断重建过程，请记下最后处理的帖子ID，并在“起始帖子ID”中输入该ID+1（“清空索引”不能被选中）以继续。',
'Rebuild index'                   => '重建索引',
'Rebuilding search index'         => '正在重建搜索索引',
'Rebuilding index info'           => '正在重建索引。这可能是一个冲咖啡的好时机：）',
'Processing post'                 => '正在处理帖子 <strong>%s</strong> …',
'Click here'                      => '点击这里',
'Javascript redirect failed'      => '自动重定向未成功。%s 以继续 …',
'Posts must be integer message'   => '每个周期的帖子必须是正整数。',
'Days must be integer message'    => '修剪的天数必须是正整数。',
'No old topics message'           => '没有 %s 天旧的主题。请减少“天数”的值，然后重试。',
'Posts pruned redirect'           => '帖子已修剪。正在重定向 …',
'Prune head'                     => '修剪',
'Prune subhead'                   => '修剪旧帖子',
'Days old label'                  => '天数',
'Days old help'                   => '一个主题被认为是“旧的”需要多少天。例如，如果您输入30，那么任何不包含至少30天内的帖子的主题都将被删除。',
'Prune sticky label'              => '修剪置顶主题',
'Prune sticky help'                => '启用时，置顶主题也将被修剪。',
'Prune from label'                => '从论坛修剪',
'All forums'                       => '所有论坛',
'Prune from help'                 => '您希望从哪个论坛修剪帖子。',
'Prune info'                      => '使用此功能时请小心。<strong>修剪的帖子永远无法恢复。</strong>为了获得最佳性能，在修剪期间应该将论坛置于%s状态。',
'Confirm prune subhead'            => '确认修剪帖子',
'Confirm prune info'             => '您确定要修剪所有超过 %s 天的主题从 %s（%s 个主题）吗。',
'Confirm prune warn'              => '警告！修剪帖子将永久删除它们。',

);