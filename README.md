Yii 2 Advanced Application Template
===================================

Yii 2 Advanced Application Template is a skeleton Yii 2 application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.


INIT PROJECT
------------

After you clone this project to new directory, cd in it, and follow these steps to make it run.

1. 安装项目运行所需要的包: `compoer update`
2. 初始化开发环境: `./init`
3. 建立数据库, 设置数据库连接信息, 见 common/config/main-local.php
4. 通过 migrate 创建表: `./yii migrate/up`
5. 创建 rbac 表结构: `./yii migrate/up --migrationPath=@yii/rbac/migrations`
6. 创建 rbac 数据: `./yii migrate rbac/init`

