<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,
    # using unsigned integer to stand for some meaning, 
    # when insert/update/list/view record
    'enumData'                      => [

        # article
        'is_draft'       => ['正式内容', '草稿'],
        'staff_visible'  => ["全部不可见", "兼职可见", "全职可见", "所有人可见"],
        'is_top'         => ['普通', '置顶'],

        # content
        'is_important'   => ["否", "是"],
        'is_verified'    => ["未审核", "通过", "不通过"],
        'rate'           => ["普通", "不错", "赞"],
        'is_published'   => ["未发布", "成功", "失败"],
        'time_kind'      => ["兼职", "全职"],

        # staff
        'is_disabled'    => ["否", "是"],
        'staff_category' => [
            'can_browse' => '查看所有人内容',
            'can_verify' => '审核分类下所有人的内容',
            'can_curd'   => '增删改查个人内容',
        ],

        'is_trashed'     => ['否', '是'],

        'boolean' => ['否', '是'],
    ],
    # whole website logo
    'company' => 'Nest',
    # use uniqid(uniqueImg) to generate unique file name for upload
    'uniqueImg' => 'img',
    # upload dir, do not end with /
    'uploadDir' => 'uploads',
];
