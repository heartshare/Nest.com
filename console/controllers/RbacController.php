<?php

namespace console\controllers;

use Yii;

/**
 * RbacController class file.
 * @Author haoliang
 * @Date 10.12.2014 17:18
 */
class RbacController extends \yii\console\Controller
{
    private $_auth;

    public function actionInit()
    {/*{{{*/
        $auth = $this->auth;

        $auth->removeAll();
        echo "old rbac data had been deleted \n";

        #############################################################################
        ## permission
        # 员工
        # create/*{{{*/
        $createStaff = $auth->createPermission('createStaff');
        $createStaff->description = 'create staff';
        $auth->add($createStaff);
        # update
        $updateStaff = $auth->createPermission('updateStaff');
        $updateStaff->description = 'update staff';
        $auth->add($updateStaff);
        # index
        $indexStaff = $auth->createPermission('indexStaff');
        $indexStaff->description = 'index staff';
        $auth->add($indexStaff);
        # view
        $viewStaff = $auth->createPermission('viewStaff');
        $viewStaff->description = 'view staff';
        $auth->add($viewStaff);
        # freeze
        $freezeStaff = $auth->createPermission('freezeStaff');
        $freezeStaff->description = 'freeze staff';
        $auth->add($freezeStaff);
        # delete
        $deleteStaff = $auth->createPermission('deleteStaff');
        $deleteStaff->description = 'delete staff';
        $auth->add($deleteStaff);
        # trash
        $trashStaff = $auth->createPermission('trashStaff');
        $trashStaff->description = 'trash staff';
        $auth->add($trashStaff);
        # password
        $passwordStaff = $auth->createPermission('passwordStaff');
        $passwordStaff->description = 'password staff';
        $auth->add($passwordStaff);
        # role
        $roleStaff = $auth->createPermission('roleStaff');
        $roleStaff->description = 'role staff';
        $auth->add($roleStaff);
        # content
        $contentStaff = $auth->createPermission('contentStaff');
        $contentStaff->description = 'content staff';
        $auth->add($contentStaff);
        # reset
        $resetStaff = $auth->createPermission('resetStaff');
        $resetStaff->description = 'reset staff';
        $auth->add($resetStaff);/*}}}*/
        # 文章
        # create/*{{{*/
        $createArticle = $auth->createPermission('createArticle');
        $createArticle->description = 'create staff';
        $auth->add($createArticle);
        # update
        $updateArticle = $auth->createPermission('updateArticle');
        $updateArticle->description = 'update staff';
        $auth->add($updateArticle);
        # index
        $indexArticle = $auth->createPermission('indexArticle');
        $indexArticle->description = 'index staff';
        $auth->add($indexArticle);
        # view
        $viewArticle = $auth->createPermission('viewArticle');
        $viewArticle->description = 'view staff';
        $auth->add($viewArticle);
        # delete
        $deleteArticle = $auth->createPermission('deleteArticle');
        $deleteArticle->description = 'delete staff';
        $auth->add($deleteArticle);
        # trash
        $trashArticle = $auth->createPermission('trashArticle');
        $trashArticle->description = 'trash staff';
        $auth->add($trashArticle);/*}}}*/
        # 平台
        # create/*{{{*/
        $createPlatform = $auth->createPermission('createPlatform');
        $createPlatform->description = 'create staff';
        $auth->add($createPlatform);
        # update
        $updatePlatform = $auth->createPermission('updatePlatform');
        $updatePlatform->description = 'update staff';
        $auth->add($updatePlatform);
        # index
        $indexPlatform = $auth->createPermission('indexPlatform');
        $indexPlatform->description = 'index staff';
        $auth->add($indexPlatform);
        # view
        $viewPlatform = $auth->createPermission('viewPlatform');
        $viewPlatform->description = 'view staff';
        $auth->add($viewPlatform);
        # delete
        $deletePlatform = $auth->createPermission('deletePlatform');
        $deletePlatform->description = 'delete staff';
        $auth->add($deletePlatform);
        # trash
        $trashPlatform = $auth->createPermission('trashPlatform');
        $trashPlatform->description = 'trash staff';
        $auth->add($trashPlatform);/*}}}*/
        # 分类
        # create/*{{{*/
        $createCategory = $auth->createPermission('createCategory');
        $createCategory->description = 'create staff';
        $auth->add($createCategory);
        # update
        $updateCategory = $auth->createPermission('updateCategory');
        $updateCategory->description = 'update staff';
        $auth->add($updateCategory);
        # index
        $indexCategory = $auth->createPermission('indexCategory');
        $indexCategory->description = 'index staff';
        $auth->add($indexCategory);
        # view
        $viewCategory = $auth->createPermission('viewCategory');
        $viewCategory->description = 'view staff';
        $auth->add($viewCategory);
        # delete
        $deleteCategory = $auth->createPermission('deleteCategory');
        $deleteCategory->description = 'delete staff';
        $auth->add($deleteCategory);
        # trash
        $trashCategory = $auth->createPermission('trashCategory');
        $trashCategory->description = 'trash staff';
        $auth->add($trashCategory);/*}}}*/
        # 账户
        # create/*{{{*/
        $createAccount = $auth->createPermission('createAccount');
        $createAccount->description = 'create staff';
        $auth->add($createAccount);
        # update
        $updateAccount = $auth->createPermission('updateAccount');
        $updateAccount->description = 'update staff';
        $auth->add($updateAccount);
        # index
        $indexAccount = $auth->createPermission('indexAccount');
        $indexAccount->description = 'index staff';
        $auth->add($indexAccount);
        # view
        $viewAccount = $auth->createPermission('viewAccount');
        $viewAccount->description = 'view staff';
        $auth->add($viewAccount);
        # delete
        $deleteAccount = $auth->createPermission('deleteAccount');
        $deleteAccount->description = 'delete staff';
        $auth->add($deleteAccount);
        # trash
        $trashAccount = $auth->createPermission('trashAccount');
        $trashAccount->description = 'trash staff';
        $auth->add($trashAccount);/*}}}*/
        # 内容
        # create/*{{{*/
        $createContent = $auth->createPermission('createContent');
        $createContent->description = 'create staff';
        $auth->add($createContent);
        # update
        $updateContent = $auth->createPermission('updateContent');
        $updateContent->description = 'update staff';
        $auth->add($updateContent);
        # index
        $indexContent = $auth->createPermission('indexContent');
        $indexContent->description = 'index staff';
        $auth->add($indexContent);
        # view
        $viewContent = $auth->createPermission('viewContent');
        $viewContent->description = 'view staff';
        $auth->add($viewContent);
        # verify
        $verifyContent = $auth->createPermission('verifyContent');
        $verifyContent->description = 'verify staff';
        $auth->add($verifyContent);
        # delete
        $deleteContent = $auth->createPermission('deleteContent');
        $deleteContent->description = 'delete staff';
        $auth->add($deleteContent);
        # trash
        $trashContent = $auth->createPermission('trashContent');
        $trashContent->description = 'trash staff';
        $auth->add($trashContent);/*}}}*/

        echo "create permission {staff, content, account, article, category, platform} \n";

        #############################################################################
        ## role
        # administrator
        $administrator = $auth->createRole('administrator');
        $administrator->description = '管理员';
        $auth->add($administrator);
        /*{{{*/ #assign permission
        # staff
        $auth->addChild($administrator, $createStaff);
        $auth->addChild($administrator, $updateStaff);
        $auth->addChild($administrator, $indexStaff);
        $auth->addChild($administrator, $viewStaff);
        $auth->addChild($administrator, $freezeStaff);
        $auth->addChild($administrator, $deleteStaff);
        $auth->addChild($administrator, $trashStaff);
        $auth->addChild($administrator, $passwordStaff);
        $auth->addChild($administrator, $roleStaff);
        $auth->addChild($administrator, $contentStaff);
        $auth->addChild($administrator, $resetStaff);
        # article
        $auth->addChild($administrator, $createArticle);
        $auth->addChild($administrator, $updateArticle);
        $auth->addChild($administrator, $indexArticle);
        $auth->addChild($administrator, $viewArticle);
        $auth->addChild($administrator, $deleteArticle);
        $auth->addChild($administrator, $trashArticle);
        # platform
        $auth->addChild($administrator, $createPlatform);
        $auth->addChild($administrator, $updatePlatform);
        $auth->addChild($administrator, $indexPlatform);
        $auth->addChild($administrator, $viewPlatform);
        $auth->addChild($administrator, $deletePlatform);
        $auth->addChild($administrator, $trashPlatform);
        # category
        $auth->addChild($administrator, $createCategory);
        $auth->addChild($administrator, $updateCategory);
        $auth->addChild($administrator, $indexCategory);
        $auth->addChild($administrator, $viewCategory);
        $auth->addChild($administrator, $deleteCategory);
        $auth->addChild($administrator, $trashCategory);
        # account
        $auth->addChild($administrator, $createAccount);
        $auth->addChild($administrator, $updateAccount);
        $auth->addChild($administrator, $indexAccount);
        $auth->addChild($administrator, $viewAccount);
        $auth->addChild($administrator, $deleteAccount);
        $auth->addChild($administrator, $trashAccount);
        # content
        $auth->addChild($administrator, $createContent);
        $auth->addChild($administrator, $updateContent);
        $auth->addChild($administrator, $indexContent);
        $auth->addChild($administrator, $viewContent);
        $auth->addChild($administrator, $verifyContent);
        $auth->addChild($administrator, $deleteContent);
        $auth->addChild($administrator, $trashContent);
        /*}}}*/
        # leader
        $leader = $auth->createRole('leader');
        $leader->description = '总编';
        $auth->add($leader);
        /*{{{*/ # assign permission
        # staff
        $auth->addChild($leader, $createStaff);
        $auth->addChild($leader, $updateStaff);
        $auth->addChild($leader, $indexStaff);
        $auth->addChild($leader, $viewStaff);
        $auth->addChild($leader, $freezeStaff);
        $auth->addChild($leader, $trashStaff);
        $auth->addChild($leader, $passwordStaff);
        $auth->addChild($leader, $roleStaff);
        # article
        $auth->addChild($leader, $createArticle);
        $auth->addChild($leader, $updateArticle);
        $auth->addChild($leader, $indexArticle);
        $auth->addChild($leader, $viewArticle);
        $auth->addChild($leader, $trashArticle);
        # platform
        $auth->addChild($leader, $createPlatform);
        $auth->addChild($leader, $updatePlatform);
        $auth->addChild($leader, $indexPlatform);
        $auth->addChild($leader, $viewPlatform);
        $auth->addChild($leader, $trashPlatform);
        # category
        $auth->addChild($leader, $createCategory);
        $auth->addChild($leader, $updateCategory);
        $auth->addChild($leader, $indexCategory);
        $auth->addChild($leader, $viewCategory);
        $auth->addChild($leader, $trashCategory);
        # account
        $auth->addChild($leader, $createAccount);
        $auth->addChild($leader, $updateAccount);
        $auth->addChild($leader, $indexAccount);
        $auth->addChild($leader, $viewAccount);
        $auth->addChild($leader, $trashAccount);
        # content
        $auth->addChild($leader, $createContent);
        $auth->addChild($leader, $updateContent);
        $auth->addChild($leader, $indexContent);
        $auth->addChild($leader, $viewContent);
        $auth->addChild($leader, $verifyContent);
        $auth->addChild($leader, $trashContent);
        /*}}}*/
        # editor
        $editor = $auth->createRole('editor');
        $editor->description = '编辑人员';
        $auth->add($editor);
        /*{{{*/
        $auth->addChild($editor, $createContent);
        /*}}}*/
        # inspector
        $inspector = $auth->createRole('inspector');
        $inspector->description = '审核人员';
        $auth->add($inspector);
        /*{{{*/
        $auth->addChild($inspector, $verifyContent);
        $auth->addChild($inspector, $indexContent);
        $auth->addChild($inspector, $viewContent);
        /*}}}*/
        # staff [default]
        $staff = $auth->createRole('staff');
        $staff->description = '员工';
        $auth->add($staff);
        /*{{{*/
        $auth->addChild($staff, $indexArticle);
        $auth->addChild($staff, $viewArticle);
        /*}}}*/
        ## grade level
        #         administrator
        #        leader
        #   editor  inspector
        #       staff
        $auth->addChild($administrator, $leader);
        $auth->addChild($leader, $editor);
        $auth->addChild($leader, $inspector);
        $auth->addChild($inspector, $staff);
        $auth->addChild($editor, $staff);

        echo "create four role {administrator, leader, editor, inspector} \n";

        #############################################################################
        # rule

        # add own rule
        $ownerRule = new \backend\rbac\OwnerRule;
        $auth->add($ownerRule);
        # content
        /*{{{*/
        # content.update
        $updateOwnContent = $auth->createPermission('updateOwnContent');
        $updateOwnContent->description = '修改本人添加的内容';
        $updateOwnContent->ruleName = $ownerRule->name;
        $auth->add($updateOwnContent);
        # content.delete
        $deleteOwnContent = $auth->createPermission('deleteOwnContent');
        $deleteOwnContent->description = '删除本人添加的内容';
        $deleteOwnContent->ruleName = $ownerRule->name;
        $auth->add($deleteOwnContent);
        # content.trash
        $trashOwnContent = $auth->createPermission('trashOwnContent');
        $trashOwnContent->description = '软删除本人添加的内容';
        $trashOwnContent->ruleName = $ownerRule->name;
        $auth->add($trashOwnContent);
        # content.index
        $indexOwnContent = $auth->createPermission('indexOwnContent');
        $indexOwnContent->description = '查看本人添加的内容列表';
        $indexOwnContent->ruleName = $ownerRule->name;
        $auth->add($indexOwnContent);
        # content.view
        $viewOwnContent = $auth->createPermission('viewOwnContent');
        $viewOwnContent->description = '查看本人添加的内容的详情';
        $viewOwnContent->ruleName = $ownerRule->name;
        $auth->add($viewOwnContent);
        /*}}}*/
        $auth->addChild($updateOwnContent, $auth->getPermission('updateContent'));
        $auth->addChild($deleteOwnContent, $auth->getPermission('deleteContent'));
        $auth->addChild($trashOwnContent, $auth->getPermission('trashContent'));
        $auth->addChild($viewOwnContent, $auth->getPermission('viewContent'));
        $auth->addChild($auth->getRole('editor'), $updateOwnContent);
        $auth->addChild($auth->getRole('editor'), $trashOwnContent);
        $auth->addChild($auth->getRole('editor'), $indexOwnContent);
        $auth->addChild($auth->getRole('editor'), $viewOwnContent);


        echo "create additional rule {index, view, udpate, freeze, trash, delete} \n";

        # add about-me rule
        $aboutMeRule = new \backend\rbac\AboutMeRule;
        $auth->add($aboutMeRule);
        # staff
        /*{{{*/
        # staff.view
        $viewOwnStaff = $auth->createPermission('viewOwnStaff');
        $viewOwnStaff->description = '查看个人信息';
        $viewOwnStaff->ruleName = $aboutMeRule->name;
        $auth->add($viewOwnStaff);
        # staff.update
        $updateOwnStaff = $auth->createPermission('updateOwnStaff');
        $updateOwnStaff->description = '修改个人信息';
        $updateOwnStaff->ruleName = $aboutMeRule->name;
        $auth->add($updateOwnStaff);
        # staff.password
        $passwordOwnStaff = $auth->createPermission('passwordOwnStaff');
        $passwordOwnStaff->description = '修改个人密码';
        $passwordOwnStaff->ruleName = $aboutMeRule->name;
        $auth->add($passwordOwnStaff);
        /*}}}*/
        $auth->addChild($viewOwnStaff, $auth->getPermission('viewStaff'));
        $auth->addChild($updateOwnStaff, $auth->getPermission('updateStaff'));
        $auth->addChild($passwordOwnStaff, $auth->getPermission('passwordStaff'));
        $auth->addChild($auth->getRole('staff'), $viewOwnStaff);
        $auth->addChild($auth->getRole('staff'), $updateOwnStaff);
        $auth->addChild($auth->getRole('staff'), $passwordOwnStaff);

        echo "create additional rule {view, update, password} \n";

        # add has-category rule
        # 普通用户如果有分类的话, 可以添加/浏览content
        # 特权用户不受限制
        $hasCategoryRule = new \backend\rbac\HasCategoryRule;
        $auth->add($hasCategoryRule);
        # content.index
        $indexOwnContent = $auth->createPermission('indexOwnContent');
        $indexOwnContent->description = '查看内容页';
        $indexOwnContent->ruleName = $hasCategoryRule->name;
        $auth->add($indexOwnContent);
        # content.create
        # todo
        $createOwnContent = $auth->createPermission('createOwnContent');
        $createOwnContent->description = '查看内容页';
        $createOwnContent->ruleName = $hasCategoryRule->name;
        $auth->add($createOwnContent);

        $auth->addChild($indexOwnContent, $auth->getPermission('indexContent'));

        #############################################################################
        # assign

        $auth->assign($administrator, 1);       # haoliang
        $auth->assign($leader, 2);  # languo
        $auth->assign($editor, 3);    # lily
        $auth->assign($inspector, 4); # brandon

        echo "assign user to role \n";

    }/*}}}*/

    public function getAuth()
    {/*{{{*/
 i4.233.187.31 0.docs.google.com
64.233.187.31 0.drive.google.com
64.233.187.31 1.docs.google.com
64.233.187.31 1.drive.google.com
64.233.187.31 10.docs.google.com
64.233.187.31 10.drive.google.com
64.233.187.31 11.docs.google.com
64.233.187.31 11.drive.google.com
64.233.187.31 12.docs.google.com
64.233.187.31 12.drive.google.com
64.233.187.31 13.docs.google.com
64.233.187.31 13.drive.google.com
64.233.187.31 14.docs.google.com
64.233.187.31 14.drive.google.com
64.233.187.31 15.docs.google.com
64.233.187.31 15.drive.google.com
64.233.187.31 16.docs.google.com
64.233.187.31 16.drive.google.com
64.233.187.31 2.docs.google.com
64.233.187.31 2.drive.google.com
64.233.187.31 3.docs.google.com
64.233.187.31 3.drive.google.com
64.233.187.31 4.docs.google.com
64.233.187.31 4.drive.google.com
64.233.187.31 5.docs.google.com
64.233.187.31 5.drive.google.com
64.233.187.31 6.docs.google.com
64.233.187.31 6.drive.google.com
64.233.187.31 7.docs.google.com
64.233.187.31 7.drive.google.com
64.233.187.31 8.docs.google.com
64.233.187.31 8.drive.google.com
64.233.187.31 9.docs.google.com
64.233.187.31 9.drive.google.com
64.233.187.31 admin.google.com
64.233.187.31 ads.google.com
64.233.187.31 answers.google.com
64.233.187.31 appengine.google.com
64.233.187.31 apps.google.com
64.233.187.31 appspot.l.google.com
64.233.187.31 bks0.books.google.com
64.233.187.31 bks1.books.google.com
64.233.187.31 bks10.books.google.com
64.233.187.31 bks2.books.google.com
64.233.187.31 bks3.books.google.com
64.233.187.31 bks4.books.google.com
64.233.187.31 bks5.books.google.com
64.233.187.31 bks6.books.google.com
64.233.187.31 bks7.books.google.com
64.233.187.31 bks8.books.google.com
64.233.187.31 bks9.books.google.com
64.233.187.31 blogsearch.google.com
64.233.187.31 books.google.com
64.233.187.31 browserchannel-docs.l.google.com
64.233.187.31 browserchannel-spreadsheets.l.google.com
64.233.187.31 browsersync.google.com
64.233.187.31 browsersync.l.google.com
64.233.187.31 buzz.google.com
64.233.187.31 cache.l.google.com
64.233.187.31 cache.pack.google.com
64.233.187.31 calendar.google.com
64.233.187.31 cbk0.google.com
64.233.187.31 cbk1.google.com
64.233.187.31 cbk2.google.com
64.233.187.31 cbk3.google.com
64.233.187.31 cbks0.google.com
64.233.187.31 cbks1.google.com
64.233.187.31 cbks2.google.com
64.233.187.31 cbks3.google.com
64.233.187.31 chart.apis.google.com
64.233.187.31 chrome.google.com
64.233.187.31 cloud.google.com
64.233.187.31 code.google.com
64.233.187.31 code.l.google.com
64.233.187.31 csi.l.google.com
64.233.187.31 desktop.google.com
64.233.187.31 desktop.l.google.com
64.233.187.31 desktop2.google.com
64.233.187.31 developers.google.com
64.233.187.31 ditu.google.com
64.233.187.31 dl.google.com
64.233.187.31 dl.l.google.com
64.233.187.31 dl-ssl.google.com
64.233.187.31 docs.google.com
64.233.187.31 docs0.google.com
64.233.187.31 docs1.google.com
64.233.187.31 docs2.google.com
64.233.187.31 docs3.google.com
64.233.187.31 docs4.google.com
64.233.187.31 docs5.google.com
64.233.187.31 docs6.google.com
64.233.187.31 docs7.google.com
64.233.187.31 docs8.google.com
64.233.187.31 docs9.google.com
64.233.187.31 drive.google.com
64.233.187.31 drive0.google.com
64.233.187.31 drive1.google.com
64.233.187.31 drive2.google.com
64.233.187.31 drive3.google.com
64.233.187.31 drive4.google.com
64.233.187.31 drive5.google.com
64.233.187.31 drive6.google.com
64.233.187.31 drive7.google.com
64.233.187.31 drive8.google.com
64.233.187.31 drive9.google.com
64.233.187.31 earth.google.com
64.233.187.31 encrypted.google.com
64.233.187.31 encrypted-tbn.l.google.com
64.233.187.31 encrypted-tbn0.google.com
64.233.187.31 encrypted-tbn1.google.com
64.233.187.31 encrypted-tbn2.google.com
64.233.187.31 encrypted-tbn3.google.com
64.233.187.31 feedburner.google.com
64.233.187.31 feedproxy.google.com
64.233.187.31 finance.google.com
64.233.187.31 fusion.google.com
64.233.187.31 geoauth.google.com
64.233.187.31 gg.google.com
64.233.187.31 ghs.google.com
64.233.187.31 ghs.l.google.com
64.233.187.31 ghs46.google.com
64.233.187.31 ghs46.l.google.com
64.233.187.31 googleapis.l.google.com
64.233.187.31 googleapis-ajax.google.com
64.233.187.31 googleapis-ajax.l.google.com
64.233.187.31 googlecode.l.google.com
64.233.187.31 google-public-dns-a.google.com
64.233.187.31 google-public-dns-b.google.com
64.233.187.31 goto.google.com
64.233.187.31 groups.google.com
64.233.187.31 groups.l.google.com
64.233.187.31 groups-beta.google.com
64.233.187.31 gxc.google.com
64.233.187.31 id.google.com
64.233.187.31 id.l.google.com
64.233.187.31 images.google.com
64.233.187.31 images.l.google.com
64.233.187.31 investor.google.com
64.233.187.31 jmt0.google.com
64.233.187.31 kh.google.com
64.233.187.31 kh.l.google.com
64.233.187.31 khm.google.com
64.233.187.31 khm.l.google.com
64.233.187.31 khm0.google.com
64.233.187.31 khm1.google.com
64.233.187.31 khm2.google.com
64.233.187.31 khm3.google.com
64.233.187.31 khmdb.google.com
64.233.187.31 khms.google.com
64.233.187.31 khms.l.google.com
64.233.187.31 khms0.google.com
64.233.187.31 khms1.google.com
64.233.187.31 khms2.google.com
64.233.187.31 khms3.google.com
64.233.187.31 labs.google.com
64.233.187.31 large-uploads.l.google.com
64.233.187.31 lh2.google.com
64.233.187.31 lh2.l.google.com
64.233.187.31 lh3.google.com
64.233.187.31 lh4.google.com
64.233.187.31 lh5.google.com
64.233.187.31 lh6.google.com
64.233.187.31 linkhelp.clients.google.com
64.233.187.31 local.google.com
64.233.187.31 m.google.com
64.233.187.31 map.google.com
64.233.187.31 maps.google.com
64.233.187.31 maps.l.google.com
64.233.187.31 maps-api-ssl.google.com
64.233.187.31 mars.google.com
64.233.187.31 mobile.l.google.com
64.233.187.31 mobile-gtalk.l.google.com
64.233.187.31 mobilemaps.clients.google.com
64.233.187.31 mt.google.com
64.233.187.31 mt.l.google.com
64.233.187.31 mt0.google.com
64.233.187.31 mt1.google.com
64.233.187.31 mt2.google.com
64.233.187.31 mt3.google.com
64.233.187.31 mtalk.google.com
64.233.187.31 mts.google.com
64.233.187.31 mts.l.google.com
64.233.187.31 mts0.google.com
64.233.187.31 mts1.google.com
64.233.187.31 mts2.google.com
64.233.187.31 mts3.google.com
64.233.187.31 music.google.com
64.233.187.31 music-streaming.l.google.com
64.233.187.31 mw1.google.com
64.233.187.31 mw2.google.com
64.233.187.31 news.google.com
64.233.187.31 news.l.google.com
64.233.187.31 pack.google.com
64.233.187.31 photos.google.com
64.233.187.31 photos-ugc.l.google.com
64.233.187.31 picasa.google.com
64.233.187.31 picasaweb.google.com
64.233.187.31 picasaweb.l.google.com
64.233.187.31 places.google.com
64.233.187.31 play.google.com
64.233.187.31 productforums.google.com
64.233.187.31 profiles.google.com
64.233.187.31 reader.google.com
64.233.187.31 safebrowsing.cache.l.google.com
64.233.187.31 safebrowsing.clients.google.com
64.233.187.31 safebrowsing.google.com
64.233.187.31 safebrowsing-cache.google.com
64.233.187.31 sb.google.com
64.233.187.31 sb.l.google.com
64.233.187.31 sb-ssl.google.com
64.233.187.31 sb-ssl.l.google.com
64.233.187.31 scholar.google.com
64.233.187.31 scholar.l.google.com
64.233.187.31 script.google.com
64.233.187.31 services.google.com
64.233.187.31 sites.google.com
64.233.187.31 sketchup.google.com
64.233.187.31 sketchup.l.google.com
64.233.187.31 spreadsheet.google.com
64.233.187.31 spreadsheets.google.com
64.233.187.31 spreadsheets.l.google.com
64.233.187.31 spreadsheets0.google.com
64.233.187.31 spreadsheets1.google.com
64.233.187.31 spreadsheets2.google.com
64.233.187.31 spreadsheets3.google.com
64.233.187.31 spreadsheets4.google.com
64.233.187.31 spreadsheets5.google.com
64.233.187.31 spreadsheets6.google.com
64.233.187.31 spreadsheets7.google.com
64.233.187.31 spreadsheets8.google.com
64.233.187.31 spreadsheets9.google.com
64.233.187.31 spreadsheets-china.l.google.com
64.233.187.31 suggestqueries.google.com
64.233.187.31 suggestqueries.l.google.com
64.233.187.31 support.google.com
64.233.187.31 tbn0.google.com
64.233.187.31 tbn1.google.com
64.233.187.31 tbn2.google.com
64.233.187.31 tbn3.google.com
64.233.187.31 toolbar.google.com
64.233.187.31 toolbarqueries.clients.google.com
64.233.187.31 toolbarqueries.google.com
64.233.187.31 toolbarqueries.l.google.com
64.233.187.31 tools.google.com
64.233.187.31 tools.l.google.com
64.233.187.31 translate.google.com
64.233.187.31 trends.google.com
64.233.187.31 upload.docs.google.com
64.233.187.31 upload.drive.google.com
64.233.187.31 uploads.code.google.com
64.233.187.31 uploadsj.clients.google.com
64.233.187.31 v3.cache1.c.docs.google.com
64.233.187.31 video.google.com
64.233.187.31 video-stats.l.google.com
64.233.187.31 voice.google.com
64.233.187.31 wallet.google.com
64.233.187.31 wire.l.google.com
64.233.187.31 writely.google.com
64.233.187.31 writely.l.google.com
64.233.187.31 writely-china.l.google.com
64.233.187.31 writely-com.l.google.com
64.233.187.31 www.l.google.com
64.233.187.31 www2.l.google.com
64.233.187.31 www3.l.google.com
64.233.187.31 www4.l.google.com
64.233.187.31 ytstatic.l.google.com
64.233.187.31 keep.google.com
64.233.187.31 0.client-channel.google.com
64.233.187.31 1.client-channel.google.com
64.233.187.31 2.client-channel.google.com
64.233.187.31 3.client-channel.google.com
64.233.187.31 4.client-channel.google.com
64.233.187.31 5.client-channel.google.com
64.233.187.31 6.client-channel.google.com
64.233.187.31 7.client-channel.google.com
64.233.187.31 8.client-channel.google.com
64.233.187.31 9.client-channel.google.com
64.233.187.31 10.client-channel.google.com
64.233.187.31 11.client-channel.google.com
64.233.187.31 12.client-channel.google.com
64.233.187.31 13.client-channel.google.com
64.233.187.31 14.client-channel.google.com
64.233.187.31 15.client-channel.google.com
64.233.187.31 16.client-channel.google.com
64.233.187.31 17.client-channel.google.com
64.233.187.31 18.client-channel.google.com
64.233.187.31 19.client-channel.google.com
64.233.187.31 20.client-channel.google.com
64.233.187.31 21.client-channel.google.com
64.233.187.31 22.client-channel.google.com
64.233.187.31 23.client-channel.google.com
64.233.187.31 24.client-channel.google.com
64.233.187.31 25.client-channel.google.com
64.233.187.31 26.client-channel.google.com
64.233.187.31 27.client-channel.google.com
64.233.187.31 28.client-channel.google.com
64.233.187.31 29.client-channel.google.com
64.233.187.31 android.clients.google.com
64.233.187.31 www.google.com
64.233.187.31 accounts.l.google.com
64.233.187.31 checkout.l.google.com
64.233.187.31 sandbox.google.com
64.233.187.31 wifi.google.com
64.233.187.31 wifi.l.google.com
64.233.187.31 clients.l.google.com
64.233.187.31 clients1.google.com
64.233.187.31 clients2.google.com
64.233.187.31 clients3.google.com
64.233.187.31 clients4.google.com
64.233.187.31 clients5.google.com
64.233.187.31 clients7.google.com
64.233.178.115 checkout.google.com
64.233.189.84 accounts.google.com
64.233.187.31 m.google.com
64.233.189.112 adwords.google.com
64.233.187.31 talk.google.com
64.233.187.31 google.com
64.233.187.31 domains.google.com
64.233.187.31 gmail.google.com
64.233.187.31 android-china.l.google.com
64.233.187.31 www-china.l.google.com
64.233.187.31 www1-china.l.google.com
64.233.187.31 www2-china.l.google.com
64.233.187.31 www3-china.l.google.com
64.233.187.31 www4-china.l.google.com
64.233.187.31 android.l.google.com
64.233.187.31 googlehosted.l.google.com
64.233.187.31 talkx.l.google.com
64.233.187.31 talk.l.google.com
64.233.187.31 ext.google.com
64.233.187.31 pki.google.com
64.233.187.31 uploads.clients.google.com
64.233.187.31 uploads.client.google.com
64.233.187.31 upload.clients.google.com
64.233.187.31 upload.client.google.com
64.233.187.31 upload.google.com
64.233.187.31 upload.docs.google.com
64.233.187.31 upload.drive.google.com
64.233.187.31 upload.video.google.com
64.233.187.31 uploads.code.google.com
64.233.187.31 uploads.clients.google.com
64.233.187.31 ytimg.l.google.com
64.233.187.31 history.google.com
64.233.187.31 wildcard-talkgadget.l.google.com
64.233.187.31 stun.l.google.com
64.233.187.31 alt1.stun.l.google.com
64.233.187.31 alt2.stun.l.google.com
64.233.187.31 alt3.stun.l.google.com
64.233.187.31 alt4.stun.l.google.com
64.233.187.31 alt5.stun.l.google.com
64.233.187.31 relay.google.com
64.233.187.31 bks9.books.google.com
64.233.187.31 calendar.google.com
64.233.187.31 google-public-dns-a.google.com
64.233.187.31 image.google.com
64.233.187.31 mapsengine.google.com
64.233.187.31 mts0.google.com
64.233.187.31 security.google.com
64.233.187.31 toolbarqueries.clients.google.com
64.233.187.31 trends.google.com
64.233.187.31 www-google-analytics.l.google.com
64.233.187.31 r13---sn-nwj7knel.c.docs.google.com
64.233.187.31 inbox.google.com
64.233.187.31 hangouts.google.com
64.233.187.31 hangout.google.com
64.233.187.31 console.developers.google.com
64.233.187.31 plus.google.com
64.233.187.31 plus.url.google.com
64.233.187.31 plusone.google.com
64.233.189.83 mail.google.com
74.125.69.189 filetransferenabled.mail.google.com
74.125.69.189 chatenabled.mail.google.com
74.125.69.189 isolated.mail.google.com
64.233.187.31 apis.google.com
64.233.187.31 clients6.google.com
64.233.187.95 talkgadget.google.com
64.233.187.95 0.talkgadget.google.com
64.233.187.95 chromoting-oauth.talkgadget.google.com
64.233.187.95 chromoting-host.talkgadget.google.com
64.233.187.95 chromoting-client.talkgadget.google.com
64.233.187.132 0-open-opensocial.googleusercontent.com
64.233.187.132 0-focus-opensocial.googleusercontent.com
64.233.187.132 1-focus-opensocial.googleusercontent.com
64.233.187.132 1-open-opensocial.googleusercontent.com
64.233.187.132 1-ps.googleusercontent.com
64.233.187.132 2-focus-opensocial.googleusercontent.com
64.233.187.132 2-open-opensocial.googleusercontent.com
64.233.187.132 2-ps.googleusercontent.com
64.233.187.132 3-focus-opensocial.googleusercontent.com
64.233.187.132 3-ps.googleusercontent.com
64.233.187.132 3hdrrlnlknhi77nrmsjnjr152ueo3soc-a-calendar-opensocial.googleusercontent.com
64.233.187.132 3-open-opensocial.googleusercontent.com
64.233.187.132 4-ps.googleusercontent.com
64.233.187.132 4fjvqid3r3oq66t548clrdj52df15coc-a-oz-opensocial.googleusercontent.com
64.233.187.132 53rd6p0catml6vat6qra84rs0del836d-a-oz-opensocial.googleusercontent.com
64.233.187.132 59cbv4l9s05pbaks9v77vc3mengeqors-a-oz-opensocial.googleusercontent.com
64.233.187.132 8kubpeu8314p2efdd7jlv09an9i2ljdo-a-oz-opensocial.googleusercontent.com
64.233.187.132 adstvca8k2ooaknjjmv89j22n9t676ve-a-oz-opensocial.googleusercontent.com
64.233.187.132 a-oz-opensocial.googleusercontent.com
64.233.187.132 blogger.googleusercontent.com
64.233.187.132 bt26mravu2qpe56n8gnmjnpv2inl84bf-a-oz-opensocial.googleusercontent.com
64.233.187.132 clients1.googleusercontent.com
64.233.187.132 clients2.googleusercontent.com
64.233.187.132 clients3.googleusercontent.com
64.233.187.132 clients4.googleusercontent.com
64.233.187.132 clients5.googleusercontent.com
64.233.187.132 clients6.googleusercontent.com
64.233.187.132 clients7.googleusercontent.com
64.233.187.132 code-opensocial.googleusercontent.com
64.233.187.132 debh8vg7vd93bco3prdajidmm7dhql3f-a-oz-opensocial.googleusercontent.com
64.233.187.132 doc-00-7o-docs.googleusercontent.com
64.233.187.132 doc-08-7o-docs.googleusercontent.com
64.233.187.132 doc-0c-7o-docs.googleusercontent.com
64.233.187.132 doc-0g-7o-docs.googleusercontent.com
64.233.187.132 doc-0s-7o-docs.googleusercontent.com
64.233.187.132 doc-10-7o-docs.googleusercontent.com
64.233.187.132 doc-14-7o-docs.googleusercontent.com
64.233.187.132 feedback.googleusercontent.com
64.233.187.132 googlehosted.l.googleusercontent.com
64.233.187.132 gp0.googleusercontent.com
64.233.187.132 gp1.googleusercontent.com
64.233.187.132 gp2.googleusercontent.com
64.233.187.132 gp3.googleusercontent.com
64.233.187.132 gp4.googleusercontent.com
64.233.187.132 gp5.googleusercontent.com
64.233.187.132 gp6.googleusercontent.com
64.233.187.132 hsco54a20sh11q9jkmb51ad2n3hmkmrg-a-oz-opensocial.googleusercontent.com
64.233.187.132 i8brh95qor6r54nkl52hidj2ggcs4jgm-a-oz-opensocial.googleusercontent.com
64.233.187.132 images1-focus-opensocial.googleusercontent.com
64.233.187.132 images2-focus-opensocial.googleusercontent.com
64.233.187.132 images3-focus-opensocial.googleusercontent.com
64.233.187.132 images4-focus-opensocial.googleusercontent.com
64.233.187.132 images5-focus-opensocial.googleusercontent.com
64.233.187.132 images6-focus-opensocial.googleusercontent.com
64.233.187.132 images7-focus-opensocial.googleusercontent.com
64.233.187.132 images8-focus-opensocial.googleusercontent.com
64.233.187.132 images9-focus-opensocial.googleusercontent.com
64.233.187.132 images-docs-opensocial.googleusercontent.com
64.233.187.132 images-oz-opensocial.googleusercontent.com
64.233.187.132 k6v18tjr24doa89b55o3na41kn4v73eb-a-oz-opensocial.googleusercontent.com
64.233.187.132 lh1.googleusercontent.com
64.233.187.132 lh2.googleusercontent.com
64.233.187.132 lh3.googleusercontent.com
64.233.187.132 lh4.googleusercontent.com
64.233.187.132 lh5.googleusercontent.com
64.233.187.132 lh6.googleusercontent.com
64.233.187.132 mail-attachment.googleusercontent.com
64.233.187.132 music.googleusercontent.com
64.233.187.132 music-onebox.googleusercontent.com
64.233.187.132 oauth.googleusercontent.com
64.233.187.132 ob7f2qc0i50kbjnc81vkhgmb5hsv7a8l-a-oz-opensocial.googleusercontent.com
64.233.187.132 ode25pfjgmvpquh3b1oqo31ti5ibg5fr-a-calendar.opensocial.googleusercontent.com
64.233.187.132 qhie5b8u979rnch1q0hqbrmbkn9estf7-a-oz-opensocial.googleusercontent.com
64.233.187.132 r70rmsn4s0rhk6cehcbbcbfbs31pu0va-a-oz-opensocial.googleusercontent.com
64.233.187.132 rbjhe237k979f79d87gmenp3gejfonu9-a-oz-opensocial.googleusercontent.com
64.233.187.132 s1.googleusercontent.com
64.233.187.132 s2.googleusercontent.com
64.233.187.132 s3.googleusercontent.com
64.233.187.132 s4.googleusercontent.com
64.233.187.132 s5.googleusercontent.com
64.233.187.132 s6.googleusercontent.com
64.233.187.132 spreadsheets-opensocial.googleusercontent.com
64.233.187.132 static.googleusercontent.com
64.233.187.132 t.doc-0-0-sj.sj.googleusercontent.com
64.233.187.132 themes.googleusercontent.com
64.233.187.132 translate.googleusercontent.com
64.233.187.132 u807isd5egseeabjccgcns005p2miucq-a-oz-opensocial.googleusercontent.com
64.233.187.132 upt14k1i2veesusrda9nfotcrbp9d7p5-a-oz-opensocial.googleusercontent.com
64.233.187.132 webcache.googleusercontent.com
64.233.187.132 www.googleusercontent.com
64.233.187.132 www-calendar-opensocial.googleusercontent.com
64.233.187.132 www-fc-opensocial.googleusercontent.com
64.233.187.132 www-focus-opensocial.googleusercontent.com
64.233.187.132 www-gm-opensocial.googleusercontent.com
64.233.187.132 www-kix-opensocial.googleusercontent.com
64.233.187.132 www-open-opensocial.googleusercontent.com
64.233.187.132 www-opensocial.googleusercontent.com
64.233.187.132 www-opensocial-sandbox.googleusercontent.com
64.233.187.132 www-oz-opensocial.googleusercontent.com
64.233.187.132 www-hangouts-opensocial.googleusercontent.com
64.233.187.132 www-onepick-opensocial.googleusercontent.com
64.233.187.132 books.googleusercontent.com
64.233.187.132 ci0.googleusercontent.com
64.233.187.132 ci1.googleusercontent.com
64.233.187.132 ci2.googleusercontent.com
64.233.187.132 ci3.googleusercontent.com
64.233.187.132 ci4.googleusercontent.com
64.233.187.132 ci5.googleusercontent.com
64.233.187.132 ci6.googleusercontent.com
64.233.187.132 doc-0g-9c-docs.googleusercontent.com
64.233.187.132 storage-ugc.l.googleusercontent.com
64.233.187.132 9gbg8d94v5ctadt6ar5f0cgi03hatscu-a-hangout-opensocial.googleusercontent.com
64.233.187.132 video.googleusercontent.com
64.233.187.132 www-calendar-opensocial.googleusercontent.com
74.125.22.133 4fjvqid3r3oq66t548clrdj52df15coc-a-oz-opensocial.googleusercontent.com
64.233.187.132 4lam9a1ki27mb9p1h5q3furvvf58ss02-a-gm-opensocial.googleusercontent.com
64.233.187.132 ode25pfjgmvpquh3b1oqo31ti5ibg5fr-a-calendar.opensocial.googleusercontent.com
64.233.187.132 3hdrrlnlknhi77nrmsjnjr152ueo3soc-a-calendar-opensocial.googleusercontent.com
64.233.187.132 doc-01-7o-docs.googleusercontent.com
64.233.187.132 doc-02-7o-docs.googleusercontent.com
64.233.187.132 doc-03-7o-docs.googleusercontent.com
64.233.187.132 doc-04-7o-docs.googleusercontent.com
64.233.187.132 doc-05-7o-docs.googleusercontent.com
64.233.187.132 doc-06-7o-docs.googleusercontent.com
64.233.187.132 doc-07-7o-docs.googleusercontent.com
64.233.187.132 doc-09-7o-docs.googleusercontent.com
64.233.187.132 doc-0a-7o-docs.googleusercontent.com
64.233.187.132 doc-0b-7o-docs.googleusercontent.com
64.233.187.132 doc-0d-7o-docs.googleusercontent.com
64.233.187.132 doc-0e-7o-docs.googleusercontent.com
64.233.187.132 doc-0f-7o-docs.googleusercontent.com
64.233.187.132 doc-0h-7o-docs.googleusercontent.com
64.233.187.132 doc-0i-7o-docs.googleusercontent.com
64.233.187.132 doc-0j-7o-docs.googleusercontent.com
64.233.187.132 doc-0k-7o-docs.googleusercontent.com
64.233.187.132 doc-0l-7o-docs.googleusercontent.com
64.233.187.132 doc-0m-7o-docs.googleusercontent.com
64.233.187.132 doc-0n-7o-docs.googleusercontent.com
64.233.187.132 doc-0o-7o-docs.googleusercontent.com
64.233.187.132 doc-0p-7o-docs.googleusercontent.com
64.233.187.132 doc-0q-7o-docs.googleusercontent.com
64.233.187.132 doc-0r-7o-docs.googleusercontent.com
64.233.187.132 doc-0s-7o-docs.googleusercontent.com
64.233.187.132 doc-0t-7o-docs.googleusercontent.com
64.233.187.132 doc-00-bc-docs.googleusercontent.com
64.233.187.132 doc-01-bc-docs.googleusercontent.com
64.233.187.132 doc-02-bc-docs.googleusercontent.com
64.233.187.132 doc-03-bc-docs.googleusercontent.com
64.233.187.132 doc-04-bc-docs.googleusercontent.com
64.233.187.132 doc-05-bc-docs.googleusercontent.com
64.233.187.132 doc-06-bc-docs.googleusercontent.com
64.233.187.132 doc-07-bc-docs.googleusercontent.com
64.233.187.132 doc-08-bc-docs.googleusercontent.com
64.233.187.132 doc-09-bc-docs.googleusercontent.com
64.233.187.132 doc-10-bc-docs.googleusercontent.com
64.233.187.132 doc-0a-bc-docs.googleusercontent.com
64.233.187.132 doc-0b-bc-docs.googleusercontent.com
64.233.187.132 doc-0c-bc-docs.googleusercontent.com
64.233.187.132 doc-0d-bc-docs.googleusercontent.com
64.233.187.132 doc-0e-bc-docs.googleusercontent.com
64.233.187.132 doc-0f-bc-docs.googleusercontent.com
64.233.187.132 doc-0g-bc-docs.googleusercontent.com
64.233.187.132 doc-0h-bc-docs.googleusercontent.com
64.233.187.132 doc-0i-bc-docs.googleusercontent.com
64.233.187.132 doc-0j-bc-docs.googleusercontent.com
64.233.187.132 doc-0k-bc-docs.googleusercontent.com
64.233.187.132 doc-0l-bc-docs.googleusercontent.com
64.233.187.132 doc-0m-bc-docs.googleusercontent.com
64.233.187.132 doc-0n-bc-docs.googleusercontent.com
64.233.187.132 doc-0o-bc-docs.googleusercontent.com
64.233.187.132 doc-0p-bc-docs.googleusercontent.com
64.233.187.132 doc-0q-bc-docs.googleusercontent.com
64.233.187.132 doc-0r-bc-docs.googleusercontent.com
64.233.187.132 doc-0s-bc-docs.googleusercontent.com
64.233.187.132 doc-0t-bc-docs.googleusercontent.com
64.233.187.132 doc-00-1s-docs.googleusercontent.com
64.233.187.132 doc-01-1s-docs.googleusercontent.com
64.233.187.132 doc-02-1s-docs.googleusercontent.com
64.233.187.132 doc-03-1s-docs.googleusercontent.com
64.233.187.132 doc-04-1s-docs.googleusercontent.com
64.233.187.132 doc-05-1s-docs.googleusercontent.com
64.233.187.132 doc-06-1s-docs.googleusercontent.com
64.233.187.132 doc-07-1s-docs.googleusercontent.com
64.233.187.132 doc-08-1s-docs.googleusercontent.com
64.233.187.132 doc-09-1s-docs.googleusercontent.com
64.233.187.132 doc-10-1s-docs.googleusercontent.com
64.233.187.132 doc-0a-1s-docs.googleusercontent.com
64.233.187.132 doc-0b-1s-docs.googleusercontent.com
64.233.187.132 doc-0c-1s-docs.googleusercontent.com
64.233.187.132 doc-0d-1s-docs.googleusercontent.com
64.233.187.132 doc-0e-1s-docs.googleusercontent.com
64.233.187.132 doc-0f-1s-docs.googleusercontent.com
64.233.187.132 doc-0g-1s-docs.googleusercontent.com
64.233.187.132 doc-0h-1s-docs.googleusercontent.com
64.233.187.132 doc-0i-1s-docs.googleusercontent.com
64.233.187.132 doc-0j-1s-docs.googleusercontent.com
64.233.187.132 doc-0k-1s-docs.googleusercontent.com
64.233.187.132 doc-0l-1s-docs.googleusercontent.com
64.233.187.132 doc-0m-1s-docs.googleusercontent.com
64.233.187.132 doc-0n-1s-docs.googleusercontent.com
64.233.187.132 doc-0o-1s-docs.googleusercontent.com
64.233.187.132 doc-0p-1s-docs.googleusercontent.com
64.233.187.132 doc-0q-1s-docs.googleusercontent.com
64.233.187.132 doc-0r-1s-docs.googleusercontent.com
64.233.187.132 doc-0s-1s-docs.googleusercontent.com
64.233.187.132 doc-0t-1s-docs.googleusercontent.com
64.233.187.132 doc-04-80-docs.googleusercontent.com
64.233.187.132 doc-08-6g-docs.googleusercontent.com
64.233.187.132 doc-0k-bk-docs.googleusercontent.com
64.233.187.132 doc-10-6g-docs.googleusercontent.com
64.233.187.132 doc-10-00-docs.googleusercontent.com
64.233.187.132 images1-esmobile-opensocial.googleusercontent.com
64.233.187.132 images2-esmobile-opensocial.googleusercontent.com
64.233.187.132 images3-esmobile-opensocial.googleusercontent.com
64.233.187.132 images4-esmobile-opensocial.googleusercontent.com
64.233.187.132 images5-esmobile-opensocial.googleusercontent.com
64.233.187.132 images6-esmobile-opensocial.googleusercontent.com
64.233.187.132 images7-esmobile-opensocial.googleusercontent.com
64.233.187.132 images8-esmobile-opensocial.googleusercontent.com
64.233.187.132 images9-esmobile-opensocial.googleusercontent.com
64.233.187.132 images-lso-opensocial.googleusercontent.com
64.233.187.132 images-blogger-opensocial.googleusercontent.com
64.233.187.132 images-pos-opensocial.googleusercontent.com
64.233.187.132 lh0.googleusercontent.com
64.233.187.132 sp0.googleusercontent.com
64.233.187.132 sp1.googleusercontent.com
64.233.187.132 sp2.googleusercontent.com
64.233.187.132 sp3.googleusercontent.com
64.233.187.132 sp4.googleusercontent.com
64.233.187.132 sp5.googleusercontent.com
64.233.187.132 sp6.googleusercontent.com
64.233.187.132 sp7.googleusercontent.com
64.233.187.132 sp8.googleusercontent.com
64.233.187.132 sp9.googleusercontent.com
64.233.187.132 lh1.ggpht.com
64.233.187.132 lh2.ggpht.com
64.233.187.132 lh3.ggpht.com
64.233.187.132 lh4.ggpht.com
64.233.187.132 lh5.ggpht.com
64.233.187.132 lh6.ggpht.com
64.233.187.132 nt0.ggpht.com
64.233.187.132 nt1.ggpht.com
64.233.187.132 nt2.ggpht.com
64.233.187.132 nt3.ggpht.com
64.233.187.132 nt4.ggpht.com
64.233.187.132 nt5.ggpht.com
64.233.187.132 lh0.ggpht.com
64.233.187.132 nt6.ggpht.com
64.233.187.132 yt0.ggpht.com
64.233.187.132 yt1.ggpht.com
64.233.187.132 yt2.ggpht.com
64.233.187.132 yt3.ggpht.com
64.233.187.132 yt4.ggpht.com
64.233.187.132 yt5.ggpht.com
64.233.187.132 yt6.ggpht.com
64.233.187.132 gm0.ggpht.com
64.233.187.132 gm1.ggpht.com
64.233.187.132 gm2.ggpht.com
64.233.187.132 gm3.ggpht.com
64.233.187.132 gm4.ggpht.com
64.233.187.132 gm5.ggpht.com
64.233.187.132 gm6.ggpht.com
64.233.187.132 geo0.ggpht.com
64.233.187.132 geo1.ggpht.com
64.233.187.132 geo2.ggpht.com
64.233.187.132 geo3.ggpht.com
64.233.187.132 geo4.ggpht.com
64.233.187.132 geo5.ggpht.com
64.233.187.132 geo6.ggpht.com
64.233.187.120 csi.gstatic.com
64.233.187.120 g0.gstatic.com
64.233.187.120 g1.gstatic.com
64.233.187.120 g2.gstatic.com
64.233.187.120 g3.gstatic.com
64.233.187.120 maps.gstatic.com
64.233.187.120 mt0.gstatic.com
64.233.187.120 mt1.gstatic.com
64.233.187.120 mt2.gstatic.com
64.233.187.120 mt3.gstatic.com
64.233.187.120 mt4.gstatic.com
64.233.187.120 mt5.gstatic.com
64.233.187.120 mt6.gstatic.com
64.233.187.120 mt7.gstatic.com
64.233.187.120 ssl.gstatic.com
64.233.187.120 t0.gstatic.com
64.233.187.120 t1.gstatic.com
64.233.187.120 t2.gstatic.com
64.233.187.120 t3.gstatic.com
64.233.187.120 www.gstatic.com
64.233.187.120 fonts.gstatic.com
64.233.187.120 encrypted-tbn0.gstatic.com
64.233.187.120 encrypted-tbn1.gstatic.com
64.233.187.120 encrypted-tbn2.gstatic.com
64.233.187.120 encrypted-tbn3.gstatic.com
64.233.187.120 encrypted-tbn4.gstatic.com
64.233.187.120 encrypted-tbn5.gstatic.com
64.233.187.120 encrypted-tbn6.gstatic.com
64.233.187.120 g4.gstatic.com
64.233.187.120 g5.gstatic.com
64.233.187.120 g6.gstatic.com
64.233.187.120 g7.gstatic.com
64.233.187.120 t4.gstatic.com
64.233.187.120 t5.gstatic.com
64.233.187.120 t6.gstatic.com
64.233.187.120 t7.gstatic.com
64.233.187.95 googleapis.com
64.233.187.95 ajax.googleapis.com
64.233.187.95 chart.googleapis.com
64.233.187.95 fonts.googleapis.com
64.233.187.95 maps.googleapis.com
64.233.187.95 mt0.googleapis.com
64.233.187.95 mt1.googleapis.com
64.233.187.95 mt2.googleapis.com
64.233.187.95 mt3.googleapis.com
64.233.187.95 mts0.googleapis.com
64.233.187.95 mts1.googleapis.com
64.233.187.95 mts2.googleapis.com
64.233.187.95 mts3.googleapis.com
64.233.187.95 redirector-bigcache.googleapis.com
64.233.187.95 bigcache.googleapis.com
64.233.187.95 translate.googleapis.com
64.233.187.95 www.googleapis.com
64.233.187.95 content.googleapis.com
64.233.187.95 commondatastorage.googleapis.com
64.233.187.95 storage.googleapis.com
64.233.187.95 android.googleapis.com
64.233.187.95 play.googleapis.com
64.233.187.95 doc-0a9v4-0agdq-s-googleusercontent.commondatastorage.googleapis.com
64.233.187.95 static.panoramio.com.storage.googleapis.com
64.233.187.95 mts0.googleapis.com
64.233.187.95 mts1.googleapis.com
64.233.187.95 mts2.googleapis.com
64.233.187.95 mts3.googleapis.com
64.233.187.95 plus.googleapis.com
64.233.187.95 youtube.googleapis.com
64.233.189.141 appspot.com
64.233.189.141 chrometophone.appspot.com
64.233.189.141 evolutionofweb.appspot.com
64.233.189.141 googcloudlabs.appspot.com
64.233.189.141 gv-gadget.appspot.com
64.233.189.141 moderator.appspot.com
64.233.189.141 newsfeed-dot-latest-dot-rovio-ad-engine.appspot.com
64.233.189.141 productideas.appspot.com
64.233.189.141 project-slingshot-gp.appspot.com
64.233.189.141 r2303.latest.project-slingshot-hr.appspot.com
64.233.189.141 r3085-dot-latest-dot-project-slingshot-gp.appspot.com
64.233.189.141 r3091-dot-latest-dot-project-slingshot-gp.appspot.com
64.233.189.141 r3101-dot-latest-dot-project-slingshot-gp.appspot.com
64.233.189.141 r3269-dot-latest-dot-project-slingshot-gp.appspot.com
64.233.189.141 r3432-dot-latest-dot-project-slingshot-hr.appspot.com
64.233.189.141 r4681-dot-latest-dot-project-slingshot-hr.appspot.com
64.233.189.141 r7647-dot-latest-dot-project-slingshot-hr.appspot.com
64.233.189.141 wcproxyx.appspot.com
64.233.189.141 balsamiqgdrive.appspot.com
64.233.189.141 www.appspot.com
64.233.189.141 codereview.appspot.com
64.233.189.141 google-developers.appspot.com
64.233.189.141 betaspike.appspot.com
64.233.189.141 chrome-devtools-frontend.appspot.com
64.233.189.141 feedly-beta.appspot.com
64.233.189.141 lfe-alpo-gm.appspot.com
64.233.189.141 m-dot-betaspike.appspot.com
64.233.189.141 r2303.latest.project-slingshot-hr.appspot.com
74.125.70.141 chromerestclient.appspot.com
64.233.189.82 autoproxy-gfwlist.googlecode.com
64.233.189.82 chromium.googlecode.com
64.233.189.82 closure-library.googlecode.com
64.233.189.82 earth-api-samples.googlecode.com
64.233.189.82 gmaps-samples-flash.googlecode.com
64.233.189.82 google-code-feed-gadget.googlecode.com
64.233.189.82 smarthosts.googlecode.com
64.233.189.82 goagent.googlecode.com
64.233.189.82 imoutohost.googlecode.com
64.233.189.82 huhamhire-hosts.googlecode.com
64.233.189.82 haoutil.googlecode.com
64.233.187.31 r1---sn-a5m7znee.c.android.clients.google.com
64.233.187.31 r2---sn-a5m7znee.c.android.clients.google.com
64.233.187.31 r3---sn-a5m7znee.c.android.clients.google.com
64.233.187.31 r4---sn-a5m7znee.c.android.clients.google.com
64.233.187.31 r5---sn-a5m7znee.c.android.clients.google.com
64.233.187.31 r6---sn-a5m7znee.c.android.clients.google.com
64.233.187.31 r7---sn-a5m7znee.c.android.clients.google.com
64.233.187.31 r8---sn-a5m7znee.c.android.clients.google.com
64.233.187.31 r9---sn-a5m7znee.c.android.clients.google.com
64.233.187.31 r10---sn-a5m7znee.c.android.clients.google.com
64.233.187.31 r11---sn-a5m7znee.c.android.clients.google.com
64.233.187.31 r12---sn-a5m7znee.c.android.clients.google.com
64.233.187.31 r13---sn-a5m7znee.c.android.clients.google.com
64.233.187.31 r14---sn-a5m7znee.c.android.clients.google.com
64.233.187.31 r15---sn-a5m7znee.c.android.clients.google.com
64.233.187.31 r16---sn-a5m7znee.c.android.clients.google.com
64.233.187.31 r17---sn-a5m7znee.c.android.clients.google.com
64.233.187.31 r18---sn-a5m7znee.c.android.clients.google.com
64.233.187.31 r19---sn-a5m7znee.c.android.clients.google.com
64.233.187.31 r20---sn-a5m7znee.c.android.clients.google.com
64.233.187.31 r1---sn-a5m7zne7.c.android.clients.google.com
64.233.187.31 r2---sn-a5m7zne7.c.android.clients.google.com
64.233.187.31 r3---sn-a5m7zne7.c.android.clients.google.com
64.233.187.31 r4---sn-a5m7zne7.c.android.clients.google.com
64.233.187.31 r5---sn-a5m7zne7.c.android.clients.google.com
64.233.187.31 r6---sn-a5m7zne7.c.android.clients.google.com
64.233.187.31 r7---sn-a5m7zne7.c.android.clients.google.com
64.233.187.31 r8---sn-a5m7zne7.c.android.clients.google.com
64.233.187.31 r9---sn-a5m7zne7.c.android.clients.google.com
64.233.187.31 r10---sn-a5m7zne7.c.android.clients.google.com
64.233.187.31 r11---sn-a5m7zne7.c.android.clients.google.com
64.233.187.31 r12---sn-a5m7zne7.c.android.clients.google.com
64.233.187.31 r13---sn-a5m7zne7.c.android.clients.google.com
64.233.187.31 r14---sn-a5m7zne7.c.android.clients.google.com
64.233.187.31 r15---sn-a5m7zne7.c.android.clients.google.com
64.233.187.31 r16---sn-a5m7zne7.c.android.clients.google.com
64.233.187.31 r17---sn-a5m7zne7.c.android.clients.google.com
64.233.187.31 r18---sn-a5m7zne7.c.android.clients.google.com
64.233.187.31 r19---sn-a5m7zne7.c.android.clients.google.com
64.233.187.31 r20---sn-a5m7zne7.c.android.clients.google.com
64.233.187.31 r1---pek01s02.c.android.clients.google.com
64.233.187.31 r2---pek01s02.c.android.clients.google.com
64.233.187.31 r3---pek01s02.c.android.clients.google.com
64.233.187.31 r4---pek01s02.c.android.clients.google.com
64.233.187.31 r5---pek01s02.c.android.clients.google.com
64.233.187.31 r6---pek01s02.c.android.clients.google.com
64.233.187.31 r7---pek01s02.c.android.clients.google.com
64.233.187.31 r8---pek01s02.c.android.clients.google.com
64.233.187.31 r9---pek01s02.c.android.clients.google.com
64.233.187.31 r10---pek01s02.c.android.clients.google.com
64.233.187.31 r11---pek01s02.c.android.clients.google.com
64.233.187.31 r12---pek01s02.c.android.clients.google.com
64.233.187.31 r13---pek01s02.c.android.clients.google.com
64.233.187.31 r14---pek01s02.c.android.clients.google.com
64.233.187.31 r15---pek01s02.c.android.clients.google.com
64.233.187.31 r16---pek01s02.c.android.clients.google.com
64.233.187.31 r17---pek01s02.c.android.clients.google.com
64.233.187.31 r18---pek01s02.c.android.clients.google.com
64.233.187.31 r19---pek01s02.c.android.clients.google.com
64.233.187.31 r20---pek01s02.c.android.clients.google.com
64.233.187.31 r1---sn-i3b7sn7d.c.android.clients.google.com
64.233.187.31 r2---sn-i3b7sn7d.c.android.clients.google.com
64.233.187.31 r3---sn-i3b7sn7d.c.android.clients.google.com
64.233.187.31 r4---sn-i3b7sn7d.c.android.clients.google.com
64.233.187.31 r5---sn-i3b7sn7d.c.android.clients.google.com
64.233.187.31 r6---sn-i3b7sn7d.c.android.clients.google.com
64.233.187.31 r7---sn-i3b7sn7d.c.android.clients.google.com
64.233.187.31 r8---sn-i3b7sn7d.c.android.clients.google.com
64.233.187.31 r9---sn-i3b7sn7d.c.android.clients.google.com
64.233.187.31 r10---sn-i3b7sn7d.c.android.clients.google.com
64.233.187.31 r11---sn-i3b7sn7d.c.android.clients.google.com
64.233.187.31 r12---sn-i3b7sn7d.c.android.clients.google.com
64.233.187.31 r13---sn-i3b7sn7d.c.android.clients.google.com
64.233.187.31 r14---sn-i3b7sn7d.c.android.clients.google.com
64.233.187.31 r15---sn-i3b7sn7d.c.android.clients.google.com
64.233.187.31 r16---sn-i3b7sn7d.c.android.clients.google.com
64.233.187.31 r17---sn-i3b7sn7d.c.android.clients.google.com
64.233.187.31 r18---sn-i3b7sn7d.c.android.clients.google.com
64.233.187.31 r19---sn-i3b7sn7d.c.android.clients.google.com
64.233.187.31 r20---sn-i3b7sn7d.c.android.clients.google.com
64.233.187.31 r1---sn-30a7en7d.c.android.clients.google.com
64.233.187.31 r2---sn-30a7en7d.c.android.clients.google.com
64.233.187.31 r3---sn-30a7en7d.c.android.clients.google.com
64.233.187.31 r4---sn-30a7en7d.c.android.clients.google.com
64.233.187.31 r5---sn-30a7en7d.c.android.clients.google.com
64.233.187.31 r6---sn-30a7en7d.c.android.clients.google.com
64.233.187.31 r7---sn-30a7en7d.c.android.clients.google.com
64.233.187.31 r8---sn-30a7en7d.c.android.clients.google.com
64.233.187.31 r9---sn-30a7en7d.c.android.clients.google.com
64.233.187.31 r10---sn-30a7en7d.c.android.clients.google.com
64.233.187.31 r11---sn-30a7en7d.c.android.clients.google.com
64.233.187.31 r12---sn-30a7en7d.c.android.clients.google.com
64.233.187.31 r13---sn-30a7en7d.c.android.clients.google.com
64.233.187.31 r14---sn-30a7en7d.c.android.clients.google.com
64.233.187.31 r15---sn-30a7en7d.c.android.clients.google.com
64.233.187.31 r16---sn-30a7en7d.c.android.clients.google.com
64.233.187.31 r17---sn-30a7en7d.c.android.clients.google.com
64.233.187.31 r18---sn-30a7en7d.c.android.clients.google.com
64.233.187.31 r19---sn-30a7en7d.c.android.clients.google.com
64.233.187.31 r20---sn-30a7en7d.c.android.clients.google.com
64.233.187.31 r1---sn-npo7ene7.c.android.clients.google.com
64.233.187.31 r2---sn-npo7ene7.c.android.clients.google.com
64.233.187.31 r3---sn-npo7ene7.c.android.clients.google.com
64.233.187.31 r4---sn-npo7ene7.c.android.clients.google.com
64.233.187.31 r5---sn-npo7ene7.c.android.clients.google.com
64.233.187.31 r6---sn-npo7ene7.c.android.clients.google.com
64.233.187.31 r7---sn-npo7ene7.c.android.clients.google.com
64.233.187.31 r8---sn-npo7ene7.c.android.clients.google.com
64.233.187.31 r9---sn-npo7ene7.c.android.clients.google.com
64.233.187.31 r10---sn-npo7ene7.c.android.clients.google.com
64.233.187.31 r12---sn-npo7ene7.c.android.clients.google.com
64.233.187.31 r13---sn-npo7ene7.c.android.clients.google.com
64.233.187.31 r14---sn-npo7ene7.c.android.clients.google.com
64.233.187.31 r15---sn-npo7ene7.c.android.clients.google.com
64.233.187.31 r16---sn-npo7ene7.c.android.clients.google.com
64.233.187.31 r17---sn-npo7ene7.c.android.clients.google.com
64.233.187.31 r18---sn-npo7ene7.c.android.clients.google.com
64.233.187.31 r19---sn-npo7ene7.c.android.clients.google.com
64.233.187.31 r20---sn-npo7ene7.c.android.clients.google.com
64.233.187.31 r1---sn-npo7enee.c.android.clients.google.com
64.233.187.31 r2---sn-npo7enee.c.android.clients.google.com
64.233.187.31 r3---sn-npo7enee.c.android.clients.google.com
64.233.187.31 r4---sn-npo7enee.c.android.clients.google.com
64.233.187.31 r5---sn-npo7enee.c.android.clients.google.com
64.233.187.31 r6---sn-npo7enee.c.android.clients.google.com
64.233.187.31 r7---sn-npo7enee.c.android.clients.google.com
64.233.187.31 r8---sn-npo7enee.c.android.clients.google.com
64.233.187.31 r9---sn-npo7enee.c.android.clients.google.com
64.233.187.31 r10---sn-npo7enee.c.android.clients.google.com
64.233.187.31 r11---sn-npo7enee.c.android.clients.google.com
64.233.187.31 r12---sn-npo7enee.c.android.clients.google.com
64.233.187.31 r13---sn-npo7enee.c.android.clients.google.com
64.233.187.31 r14---sn-npo7enee.c.android.clients.google.com
64.233.187.31 r15---sn-npo7enee.c.android.clients.google.com
64.233.187.31 r16---sn-npo7enee.c.android.clients.google.com
64.233.187.31 r17---sn-npo7enee.c.android.clients.google.com
64.233.187.31 r18---sn-npo7enee.c.android.clients.google.com
64.233.187.31 r19---sn-npo7enee.c.android.clients.google.com
64.233.187.31 r20---sn-npo7enee.c.android.clients.google.com
64.233.187.31 r1---sn-npo7enel.c.android.clients.google.com
64.233.187.31 r2---sn-npo7enel.c.android.clients.google.com
64.233.187.31 r3---sn-npo7enel.c.android.clients.google.com
64.233.187.31 r4---sn-npo7enel.c.android.clients.google.com
64.233.187.31 r5---sn-npo7enel.c.android.clients.google.com
64.233.187.31 r6---sn-npo7enel.c.android.clients.google.com
64.233.187.31 r7---sn-npo7enel.c.android.clients.google.com
64.233.187.31 r8---sn-npo7enel.c.android.clients.google.com
64.233.187.31 r9---sn-npo7enel.c.android.clients.google.com
64.233.187.31 r19---sn-npo7enel.c.android.clients.google.com
64.233.187.31 r11---sn-npo7enel.c.android.clients.google.com
64.233.187.31 r12---sn-npo7enel.c.android.clients.google.com
64.233.187.31 r13---sn-npo7enel.c.android.clients.google.com
64.233.187.31 r14---sn-npo7enel.c.android.clients.google.com
64.233.187.31 r15---sn-npo7enel.c.android.clients.google.com
64.233.187.31 r16---sn-npo7enel.c.android.clients.google.com
64.233.187.31 r17---sn-npo7enel.c.android.clients.google.com
64.233.187.31 r18---sn-npo7enel.c.android.clients.google.com
64.233.187.31 r19---sn-npo7enel.c.android.clients.google.com
64.233.187.31 r20---sn-npo7enel.c.android.clients.google.com
64.233.187.31 r1---sn-npo7enes.c.android.clients.google.com
64.233.187.31 r2---sn-npo7enes.c.android.clients.google.com
64.233.187.31 r3---sn-npo7enes.c.android.clients.google.com
64.233.187.31 r4---sn-npo7enes.c.android.clients.google.com
64.233.187.31 r5---sn-npo7enes.c.android.clients.google.com
64.233.187.31 r6---sn-npo7enes.c.android.clients.google.com
64.233.187.31 r7---sn-npo7enes.c.android.clients.google.com
64.233.187.31 r8---sn-npo7enes.c.android.clients.google.com
64.233.187.31 r9---sn-npo7enes.c.android.clients.google.com
64.233.187.31 r10---sn-npo7enes.c.android.clients.google.com
64.233.187.31 r11---sn-npo7enes.c.android.clients.google.com
64.233.187.31 r12---sn-npo7enes.c.android.clients.google.com
64.233.187.31 r13---sn-npo7enes.c.android.clients.google.com
64.233.187.31 r14---sn-npo7enes.c.android.clients.google.com
64.233.187.31 r15---sn-npo7enes.c.android.clients.google.com
64.233.187.31 r16---sn-npo7enes.c.android.clients.google.com
64.233.187.31 r17---sn-npo7enes.c.android.clients.google.com
64.233.187.31 r18---sn-npo7enes.c.android.clients.google.com
64.233.187.31 r19---sn-npo7enes.c.android.clients.google.com
64.233.187.31 r20---sn-npo7enes.c.android.clients.google.com
208.117.236.134 r1---sn-25g7sm76.googlevideo.com
208.117.236.135 r2---sn-25g7sm76.googlevideo.com
208.117.236.136 r3---sn-25g7sm76.googlevideo.com
208.117.236.137 r4---sn-25g7sm76.googlevideo.com
208.117.236.138 r5---sn-25g7sm76.googlevideo.com
208.117.236.139 r6---sn-25g7sm76.googlevideo.com
208.117.236.140 r7---sn-25g7sm76.googlevideo.com
208.117.236.141 r8---sn-25g7sm76.googlevideo.com
208.117.236.142 r9---sn-25g7sm76.googlevideo.com
208.117.236.143 r10---sn-25g7sm76.googlevideo.com
208.117.236.144 r11---sn-25g7sm76.googlevideo.com
208.117.236.145 r12---sn-25g7sm76.googlevideo.com
208.117.236.146 r13---sn-25g7sm76.googlevideo.com
208.117.236.147 r14---sn-25g7sm76.googlevideo.com
208.117.236.148 r15---sn-25g7sm76.googlevideo.com
208.117.236.149 r16---sn-25g7sm76.googlevideo.com
208.117.236.150 r17---sn-25g7sm76.googlevideo.com
208.117.236.151 r18---sn-25g7sm76.googlevideo.com
208.117.236.152 r19---sn-25g7sm76.googlevideo.com
208.117.236.153 r20---sn-25g7sm76.googlevideo.com
173.194.15.6 r1---sn-4g57kndy.googlevideo.com
173.194.15.7 r2---sn-4g57kndy.googlevideo.com
173.194.15.8 r3---sn-4g57kndy.googlevideo.com
173.194.15.9 r4---sn-4g57kndy.googlevideo.com
173.194.15.10 r5---sn-4g57kndy.googlevideo.com
173.194.15.11 r6---sn-4g57kndy.googlevideo.com
173.194.15.12 r7---sn-4g57kndy.googlevideo.com
173.194.15.13 r8---sn-4g57kndy.googlevideo.com
173.194.15.14 r9---sn-4g57kndy.googlevideo.com
173.194.15.15 r10---sn-4g57kndy.googlevideo.com
173.194.15.16 r11---sn-4g57kndy.googlevideo.com
173.194.15.17 r12---sn-4g57kndy.googlevideo.com
173.194.15.18 r13---sn-4g57kndy.googlevideo.com
173.194.15.19 r14---sn-4g57kndy.googlevideo.com
173.194.15.20 r15---sn-4g57kndy.googlevideo.com
173.194.15.21 r16---sn-4g57kndy.googlevideo.com
173.194.15.22 r17---sn-4g57kndy.googlevideo.com
173.194.15.23 r18---sn-4g57kndy.googlevideo.com
173.194.15.24 r19---sn-4g57kndy.googlevideo.com
173.194.15.25 r20---sn-4g57kndy.googlevideo.com
4.35.153.204 r1---sn-a8au-a5me.googlevideo.com
4.35.153.205 r2---sn-a8au-a5me.googlevideo.com
4.35.153.206 r3---sn-a8au-a5me.googlevideo.com
4.35.153.207 r4---sn-a8au-a5me.googlevideo.com
4.35.153.208 r5---sn-a8au-a5me.googlevideo.com
4.35.153.209 r6---sn-a8au-a5me.googlevideo.com
4.35.153.210 r7---sn-a8au-a5me.googlevideo.com
4.35.153.211 r8---sn-a8au-a5me.googlevideo.com
208.117.240.166 r1---sn-ab5e6m7d.googlevideo.com
208.117.240.167 r2---sn-ab5e6m7d.googlevideo.com
208.117.240.168 r3---sn-ab5e6m7d.googlevideo.com
208.117.240.169 r4---sn-ab5e6m7d.googlevideo.com
208.117.240.170 r5---sn-ab5e6m7d.googlevideo.com
208.117.240.171 r6---sn-ab5e6m7d.googlevideo.com
208.117.240.172 r7---sn-ab5e6m7d.googlevideo.com
208.117.240.173 r8---sn-ab5e6m7d.googlevideo.com
208.117.240.174 r9---sn-ab5e6m7d.googlevideo.com
208.117.240.175 r10---sn-ab5e6m7d.googlevideo.com
208.117.240.176 r11---sn-ab5e6m7d.googlevideo.com
208.117.240.177 r12---sn-ab5e6m7d.googlevideo.com
208.117.240.178 r13---sn-ab5e6m7d.googlevideo.com
208.117.240.179 r14---sn-ab5e6m7d.googlevideo.com
208.117.240.180 r15---sn-ab5e6m7d.googlevideo.com
208.117.240.181 r16---sn-ab5e6m7d.googlevideo.com
208.117.240.182 r17---sn-ab5e6m7d.googlevideo.com
208.117.240.183 r18---sn-ab5e6m7d.googlevideo.com
208.117.240.184 r19---sn-ab5e6m7d.googlevideo.com
208.117.240.185 r20---sn-ab5e6m7d.googlevideo.com
208.117.240.38 r1---sn-ab5e6m7l.googlevideo.com
208.117.240.39 r2---sn-ab5e6m7l.googlevideo.com
208.117.240.40 r3---sn-ab5e6m7l.googlevideo.com
208.117.240.41 r4---sn-ab5e6m7l.googlevideo.com
208.117.240.42 r5---sn-ab5e6m7l.googlevideo.com
208.117.240.43 r6---sn-ab5e6m7l.googlevideo.com
208.117.240.44 r7---sn-ab5e6m7l.googlevideo.com
208.117.240.45 r8---sn-ab5e6m7l.googlevideo.com
208.117.240.46 r9---sn-ab5e6m7l.googlevideo.com
208.117.240.47 r10---sn-ab5e6m7l.googlevideo.com
208.117.240.48 r11---sn-ab5e6m7l.googlevideo.com
208.117.240.49 r12---sn-ab5e6m7l.googlevideo.com
208.117.240.50 r13---sn-ab5e6m7l.googlevideo.com
208.117.240.51 r14---sn-ab5e6m7l.googlevideo.com
208.117.240.52 r15---sn-ab5e6m7l.googlevideo.com
208.117.240.53 r16---sn-ab5e6m7l.googlevideo.com
208.117.240.54 r17---sn-ab5e6m7l.googlevideo.com
208.117.240.55 r18---sn-ab5e6m7l.googlevideo.com
208.117.240.56 r19---sn-ab5e6m7l.googlevideo.com
208.117.240.57 r20---sn-ab5e6m7l.googlevideo.com
208.117.240.230 r1---sn-ab5e6m7r.googlevideo.com
208.117.240.231 r2---sn-ab5e6m7r.googlevideo.com
208.117.240.232 r3---sn-ab5e6m7r.googlevideo.com
208.117.240.233 r4---sn-ab5e6m7r.googlevideo.com
208.117.240.234 r5---sn-ab5e6m7r.googlevideo.com
208.117.240.235 r6---sn-ab5e6m7r.googlevideo.com
208.117.240.236 r7---sn-ab5e6m7r.googlevideo.com
208.117.240.237 r8---sn-ab5e6m7r.googlevideo.com
208.117.240.238 r9---sn-ab5e6m7r.googlevideo.com
208.117.240.239 r10---sn-ab5e6m7r.googlevideo.com
208.117.240.240 r11---sn-ab5e6m7r.googlevideo.com
208.117.240.241 r12---sn-ab5e6m7r.googlevideo.com
208.117.240.242 r13---sn-ab5e6m7r.googlevideo.com
208.117.240.243 r14---sn-ab5e6m7r.googlevideo.com
208.117.240.244 r15---sn-ab5e6m7r.googlevideo.com
208.117.240.245 r16---sn-ab5e6m7r.googlevideo.com
208.117.240.246 r17---sn-ab5e6m7r.googlevideo.com
208.117.240.247 r18---sn-ab5e6m7r.googlevideo.com
208.117.240.248 r19---sn-ab5e6m7r.googlevideo.com
208.117.240.249 r20---sn-ab5e6m7r.googlevideo.com
208.117.240.102 r1---sn-ab5e6m7z.googlevideo.com
208.117.240.103 r2---sn-ab5e6m7z.googlevideo.com
208.117.240.104 r3---sn-ab5e6m7z.googlevideo.com
208.117.240.105 r4---sn-ab5e6m7z.googlevideo.com
208.117.240.106 r5---sn-ab5e6m7z.googlevideo.com
208.117.240.107 r6---sn-ab5e6m7z.googlevideo.com
208.117.240.108 r7---sn-ab5e6m7z.googlevideo.com
208.117.240.109 r8---sn-ab5e6m7z.googlevideo.com
208.117.240.110 r9---sn-ab5e6m7z.googlevideo.com
208.117.240.111 r10---sn-ab5e6m7z.googlevideo.com
208.117.240.112 r11---sn-ab5e6m7z.googlevideo.com
208.117.240.113 r12---sn-ab5e6m7z.googlevideo.com
208.117.240.114 r13---sn-ab5e6m7z.googlevideo.com
208.117.240.115 r14---sn-ab5e6m7z.googlevideo.com
208.117.240.116 r15---sn-ab5e6m7z.googlevideo.com
208.117.240.117 r16---sn-ab5e6m7z.googlevideo.com
208.117.240.118 r17---sn-ab5e6m7z.googlevideo.com
208.117.240.119 r18---sn-ab5e6m7z.googlevideo.com
208.117.240.120 r19---sn-ab5e6m7z.googlevideo.com
208.117.240.121 r20---sn-ab5e6m7z.googlevideo.com
208.117.248.70 r1---sn-hp576m7s.googlevideo.com
208.117.248.71 r2---sn-hp576m7s.googlevideo.com
208.117.248.72 r3---sn-hp576m7s.googlevideo.com
208.117.248.73 r4---sn-hp576m7s.googlevideo.com
208.117.248.74 r5---sn-hp576m7s.googlevideo.com
208.117.248.75 r6---sn-hp576m7s.googlevideo.com
208.117.248.76 r7---sn-hp576m7s.googlevideo.com
208.117.248.77 r8---sn-hp576m7s.googlevideo.com
208.117.248.78 r9---sn-hp576m7s.googlevideo.com
208.117.248.79 r10---sn-hp576m7s.googlevideo.com
208.117.248.80 r11---sn-hp576m7s.googlevideo.com
208.117.248.81 r12---sn-hp576m7s.googlevideo.com
208.117.248.82 r13---sn-hp576m7s.googlevideo.com
208.117.248.83 r14---sn-hp576m7s.googlevideo.com
208.117.248.84 r15---sn-hp576m7s.googlevideo.com
208.117.248.85 r16---sn-hp576m7s.googlevideo.com
208.117.248.86 r17---sn-hp576m7s.googlevideo.com
208.117.248.87 r18---sn-hp576m7s.googlevideo.com
208.117.248.88 r19---sn-hp576m7s.googlevideo.com
208.117.248.89 r20---sn-hp576m7s.googlevideo.com
209.116.150.204 r1---sn-mv-a5m6.googlevideo.com
209.116.150.205 r2---sn-mv-a5m6.googlevideo.com
209.116.150.206 r3---sn-mv-a5m6.googlevideo.com
209.116.150.207 r4---sn-mv-a5m6.googlevideo.com
209.116.150.208 r5---sn-mv-a5m6.googlevideo.com
209.116.150.209 r6---sn-mv-a5m6.googlevideo.com
209.116.150.210 r7---sn-mv-a5m6.googlevideo.com
209.116.150.211 r8---sn-mv-a5m6.googlevideo.com
208.117.239.134 r1---sn-nwj7km76.googlevideo.com
208.117.239.135 r2---sn-nwj7km76.googlevideo.com
208.117.239.136 r3---sn-nwj7km76.googlevideo.com
208.117.239.137 r4---sn-nwj7km76.googlevideo.com
208.117.239.138 r5---sn-nwj7km76.googlevideo.com
208.117.239.139 r6---sn-nwj7km76.googlevideo.com
208.117.239.140 r7---sn-nwj7km76.googlevideo.com
208.117.239.141 r8---sn-nwj7km76.googlevideo.com
208.117.239.142 r9---sn-nwj7km76.googlevideo.com
208.117.239.143 r10---sn-nwj7km76.googlevideo.com
208.117.239.144 r11---sn-nwj7km76.googlevideo.com
208.117.239.145 r12---sn-nwj7km76.googlevideo.com
208.117.239.146 r13---sn-nwj7km76.googlevideo.com
208.117.239.147 r14---sn-nwj7km76.googlevideo.com
208.117.239.148 r15---sn-nwj7km76.googlevideo.com
208.117.239.149 r16---sn-nwj7km76.googlevideo.com
208.117.239.150 r17---sn-nwj7km76.googlevideo.com
208.117.239.151 r18---sn-nwj7km76.googlevideo.com
208.117.239.152 r19---sn-nwj7km76.googlevideo.com
208.117.239.153 r20---sn-nwj7km76.googlevideo.com
208.117.239.166 r1---sn-nwj7km7d.googlevideo.com
208.117.239.167 r2---sn-nwj7km7d.googlevideo.com
208.117.239.168 r3---sn-nwj7km7d.googlevideo.com
208.117.239.169 r4---sn-nwj7km7d.googlevideo.com
208.117.239.170 r5---sn-nwj7km7d.googlevideo.com
208.117.239.171 r6---sn-nwj7km7d.googlevideo.com
208.117.239.172 r7---sn-nwj7km7d.googlevideo.com
208.117.239.173 r8---sn-nwj7km7d.googlevideo.com
208.117.239.174 r9---sn-nwj7km7d.googlevideo.com
208.117.239.175 r10---sn-nwj7km7d.googlevideo.com
208.117.239.176 r11---sn-nwj7km7d.googlevideo.com
208.117.239.177 r12---sn-nwj7km7d.googlevideo.com
208.117.239.178 r13---sn-nwj7km7d.googlevideo.com
208.117.239.179 r14---sn-nwj7km7d.googlevideo.com
208.117.239.180 r15---sn-nwj7km7d.googlevideo.com
208.117.239.181 r16---sn-nwj7km7d.googlevideo.com
208.117.239.182 r17---sn-nwj7km7d.googlevideo.com
208.117.239.183 r18---sn-nwj7km7d.googlevideo.com
208.117.239.184 r19---sn-nwj7km7d.googlevideo.com
208.117.239.185 r20---sn-nwj7km7d.googlevideo.com
208.117.239.6 r1---sn-nwj7km7e.googlevideo.com
208.117.239.7 r2---sn-nwj7km7e.googlevideo.com
208.117.239.8 r3---sn-nwj7km7e.googlevideo.com
208.117.239.9 r4---sn-nwj7km7e.googlevideo.com
208.117.239.10 r5---sn-nwj7km7e.googlevideo.com
208.117.239.11 r6---sn-nwj7km7e.googlevideo.com
208.117.239.12 r7---sn-nwj7km7e.googlevideo.com
208.117.239.13 r8---sn-nwj7km7e.googlevideo.com
208.117.239.14 r9---sn-nwj7km7e.googlevideo.com
208.117.239.15 r10---sn-nwj7km7e.googlevideo.com
208.117.239.16 r11---sn-nwj7km7e.googlevideo.com
208.117.239.17 r12---sn-nwj7km7e.googlevideo.com
208.117.239.18 r13---sn-nwj7km7e.googlevideo.com
208.117.239.19 r14---sn-nwj7km7e.googlevideo.com
208.117.239.20 r15---sn-nwj7km7e.googlevideo.com
208.117.239.21 r16---sn-nwj7km7e.googlevideo.com
208.117.239.22 r17---sn-nwj7km7e.googlevideo.com
208.117.239.23 r18---sn-nwj7km7e.googlevideo.com
208.117.239.24 r19---sn-nwj7km7e.googlevideo.com
208.117.239.25 r20---sn-nwj7km7e.googlevideo.com
208.117.239.198 r1---sn-nwj7km7k.googlevideo.com
208.117.239.199 r2---sn-nwj7km7k.googlevideo.com
208.117.239.200 r3---sn-nwj7km7k.googlevideo.com
208.117.239.201 r4---sn-nwj7km7k.googlevideo.com
208.117.239.202 r5---sn-nwj7km7k.googlevideo.com
208.117.239.203 r6---sn-nwj7km7k.googlevideo.com
208.117.239.204 r7---sn-nwj7km7k.googlevideo.com
208.117.239.205 r8---sn-nwj7km7k.googlevideo.com
208.117.239.206 r9---sn-nwj7km7k.googlevideo.com
208.117.239.207 r10---sn-nwj7km7k.googlevideo.com
208.117.239.208 r11---sn-nwj7km7k.googlevideo.com
208.117.239.209 r12---sn-nwj7km7k.googlevideo.com
208.117.239.210 r13---sn-nwj7km7k.googlevideo.com
208.117.239.211 r14---sn-nwj7km7k.googlevideo.com
208.117.239.212 r15---sn-nwj7km7k.googlevideo.com
208.117.239.213 r16---sn-nwj7km7k.googlevideo.com
208.117.239.214 r17---sn-nwj7km7k.googlevideo.com
208.117.239.215 r18---sn-nwj7km7k.googlevideo.com
208.117.239.216 r19---sn-nwj7km7k.googlevideo.com
208.117.239.217 r20---sn-nwj7km7k.googlevideo.com
208.117.239.38 r1---sn-nwj7km7l.googlevideo.com
208.117.239.39 r2---sn-nwj7km7l.googlevideo.com
208.117.239.40 r3---sn-nwj7km7l.googlevideo.com
208.117.239.41 r4---sn-nwj7km7l.googlevideo.com
208.117.239.42 r5---sn-nwj7km7l.googlevideo.com
208.117.239.43 r6---sn-nwj7km7l.googlevideo.com
208.117.239.44 r7---sn-nwj7km7l.googlevideo.com
208.117.239.45 r8---sn-nwj7km7l.googlevideo.com
208.117.239.46 r9---sn-nwj7km7l.googlevideo.com
208.117.239.47 r10---sn-nwj7km7l.googlevideo.com
208.117.239.48 r11---sn-nwj7km7l.googlevideo.com
208.117.239.49 r12---sn-nwj7km7l.googlevideo.com
208.117.239.50 r13---sn-nwj7km7l.googlevideo.com
208.117.239.51 r14---sn-nwj7km7l.googlevideo.com
208.117.239.52 r15---sn-nwj7km7l.googlevideo.com
208.117.239.53 r16---sn-nwj7km7l.googlevideo.com
208.117.239.54 r17---sn-nwj7km7l.googlevideo.com
208.117.239.55 r18---sn-nwj7km7l.googlevideo.com
208.117.239.56 r19---sn-nwj7km7l.googlevideo.com
208.117.239.57 r20---sn-nwj7km7l.googlevideo.com
208.117.239.230 r1---sn-nwj7km7r.googlevideo.com
208.117.239.231 r2---sn-nwj7km7r.googlevideo.com
208.117.239.232 r3---sn-nwj7km7r.googlevideo.com
208.117.239.233 r4---sn-nwj7km7r.googlevideo.com
208.117.239.234 r5---sn-nwj7km7r.googlevideo.com
208.117.239.235 r6---sn-nwj7km7r.googlevideo.com
208.117.239.236 r7---sn-nwj7km7r.googlevideo.com
208.117.239.237 r8---sn-nwj7km7r.googlevideo.com
208.117.239.238 r9---sn-nwj7km7r.googlevideo.com
208.117.239.239 r10---sn-nwj7km7r.googlevideo.com
208.117.239.240 r11---sn-nwj7km7r.googlevideo.com
208.117.239.241 r12---sn-nwj7km7r.googlevideo.com
208.117.239.242 r13---sn-nwj7km7r.googlevideo.com
208.117.239.243 r14---sn-nwj7km7r.googlevideo.com
208.117.239.244 r15---sn-nwj7km7r.googlevideo.com
208.117.239.245 r16---sn-nwj7km7r.googlevideo.com
208.117.239.246 r17---sn-nwj7km7r.googlevideo.com
208.117.239.247 r18---sn-nwj7km7r.googlevideo.com
208.117.239.248 r19---sn-nwj7km7r.googlevideo.com
208.117.239.249 r20---sn-nwj7km7r.googlevideo.com
208.117.239.70 r1---sn-nwj7km7s.googlevideo.com
208.117.239.71 r2---sn-nwj7km7s.googlevideo.com
208.117.239.72 r3---sn-nwj7km7s.googlevideo.com
208.117.239.73 r4---sn-nwj7km7s.googlevideo.com
208.117.239.74 r5---sn-nwj7km7s.googlevideo.com
208.117.239.75 r6---sn-nwj7km7s.googlevideo.com
208.117.239.76 r7---sn-nwj7km7s.googlevideo.com
208.117.239.77 r8---sn-nwj7km7s.googlevideo.com
208.117.239.78 r9---sn-nwj7km7s.googlevideo.com
208.117.239.79 r10---sn-nwj7km7s.googlevideo.com
208.117.239.80 r11---sn-nwj7km7s.googlevideo.com
208.117.239.81 r12---sn-nwj7km7s.googlevideo.com
208.117.239.82 r13---sn-nwj7km7s.googlevideo.com
208.117.239.83 r14---sn-nwj7km7s.googlevideo.com
208.117.239.84 r15---sn-nwj7km7s.googlevideo.com
208.117.239.85 r16---sn-nwj7km7s.googlevideo.com
208.117.239.86 r17---sn-nwj7km7s.googlevideo.com
208.117.239.87 r18---sn-nwj7km7s.googlevideo.com
208.117.239.88 r19---sn-nwj7km7s.googlevideo.com
208.117.239.89 r20---sn-nwj7km7s.googlevideo.com
208.117.239.102 r1---sn-nwj7km7z.googlevideo.com
208.117.239.103 r2---sn-nwj7km7z.googlevideo.com
208.117.239.104 r3---sn-nwj7km7z.googlevideo.com
208.117.239.105 r4---sn-nwj7km7z.googlevideo.com
208.117.239.106 r5---sn-nwj7km7z.googlevideo.com
208.117.239.107 r6---sn-nwj7km7z.googlevideo.com
208.117.239.108 r7---sn-nwj7km7z.googlevideo.com
208.117.239.109 r8---sn-nwj7km7z.googlevideo.com
208.117.239.110 r9---sn-nwj7km7z.googlevideo.com
208.117.239.111 r10---sn-nwj7km7z.googlevideo.com
208.117.239.112 r11---sn-nwj7km7z.googlevideo.com
208.117.239.113 r12---sn-nwj7km7z.googlevideo.com
208.117.239.114 r13---sn-nwj7km7z.googlevideo.com
208.117.239.115 r14---sn-nwj7km7z.googlevideo.com
208.117.239.116 r15---sn-nwj7km7z.googlevideo.com
208.117.239.117 r16---sn-nwj7km7z.googlevideo.com
208.117.239.118 r17---sn-nwj7km7z.googlevideo.com
208.117.239.119 r18---sn-nwj7km7z.googlevideo.com
208.117.239.120 r19---sn-nwj7km7z.googlevideo.com
208.117.239.121 r20---sn-nwj7km7z.googlevideo.com
208.117.251.38 r1---sn-p5qlsm7l.googlevideo.com
208.117.251.39 r2---sn-p5qlsm7l.googlevideo.com
208.117.251.40 r3---sn-p5qlsm7l.googlevideo.com
208.117.251.41 r4---sn-p5qlsm7l.googlevideo.com
208.117.251.42 r5---sn-p5qlsm7l.googlevideo.com
208.117.251.43 r6---sn-p5qlsm7l.googlevideo.com
208.117.251.44 r7---sn-p5qlsm7l.googlevideo.com
208.117.251.45 r8---sn-p5qlsm7l.googlevideo.com
208.117.251.46 r9---sn-p5qlsm7l.googlevideo.com
208.117.251.47 r10---sn-p5qlsm7l.googlevideo.com
208.117.251.48 r11---sn-p5qlsm7l.googlevideo.com
208.117.251.49 r12---sn-p5qlsm7l.googlevideo.com
208.117.251.50 r13---sn-p5qlsm7l.googlevideo.com
208.117.251.51 r14---sn-p5qlsm7l.googlevideo.com
208.117.251.52 r15---sn-p5qlsm7l.googlevideo.com
208.117.251.53 r16---sn-p5qlsm7l.googlevideo.com
208.117.251.54 r17---sn-p5qlsm7l.googlevideo.com
208.117.251.55 r18---sn-p5qlsm7l.googlevideo.com
208.117.251.56 r19---sn-p5qlsm7l.googlevideo.com
208.117.251.57 r20---sn-p5qlsm7l.googlevideo.com
173.194.138.198 r1---sn-q0c7dn7r.googlevideo.com
173.194.138.199 r2---sn-q0c7dn7r.googlevideo.com
173.194.138.200 r3---sn-q0c7dn7r.googlevideo.com
173.194.138.201 r4---sn-q0c7dn7r.googlevideo.com
173.194.138.202 r5---sn-q0c7dn7r.googlevideo.com
173.194.138.203 r6---sn-q0c7dn7r.googlevideo.com
173.194.138.204 r7---sn-q0c7dn7r.googlevideo.com
173.194.138.205 r8---sn-q0c7dn7r.googlevideo.com
173.194.138.206 r9---sn-q0c7dn7r.googlevideo.com
173.194.138.207 r10---sn-q0c7dn7r.googlevideo.com
173.194.138.208 r11---sn-q0c7dn7r.googlevideo.com
173.194.138.209 r12---sn-q0c7dn7r.googlevideo.com
173.194.138.210 r13---sn-q0c7dn7r.googlevideo.com
173.194.138.211 r14---sn-q0c7dn7r.googlevideo.com
173.194.138.212 r15---sn-q0c7dn7r.googlevideo.com
173.194.138.213 r16---sn-q0c7dn7r.googlevideo.com
173.194.138.214 r17---sn-q0c7dn7r.googlevideo.com
173.194.138.215 r18---sn-q0c7dn7r.googlevideo.com
173.194.138.216 r19---sn-q0c7dn7r.googlevideo.com
173.194.138.217 r20---sn-q0c7dn7r.googlevideo.com
208.117.252.134 r1---sn-q4f7dm76.googlevideo.com
208.117.252.135 r2---sn-q4f7dm76.googlevideo.com
208.117.252.136 r3---sn-q4f7dm76.googlevideo.com
208.117.252.137 r4---sn-q4f7dm76.googlevideo.com
208.117.252.138 r5---sn-q4f7dm76.googlevideo.com
208.117.252.139 r6---sn-q4f7dm76.googlevideo.com
208.117.252.140 r7---sn-q4f7dm76.googlevideo.com
208.117.252.141 r8---sn-q4f7dm76.googlevideo.com
208.117.252.142 r9---sn-q4f7dm76.googlevideo.com
208.117.252.143 r10---sn-q4f7dm76.googlevideo.com
208.117.252.144 r11---sn-q4f7dm76.googlevideo.com
208.117.252.145 r12---sn-q4f7dm76.googlevideo.com
208.117.252.146 r13---sn-q4f7dm76.googlevideo.com
208.117.252.147 r14---sn-q4f7dm76.googlevideo.com
208.117.252.148 r15---sn-q4f7dm76.googlevideo.com
208.117.252.149 r16---sn-q4f7dm76.googlevideo.com
208.117.252.150 r17---sn-q4f7dm76.googlevideo.com
208.117.252.151 r18---sn-q4f7dm76.googlevideo.com
208.117.252.152 r19---sn-q4f7dm76.googlevideo.com
208.117.252.153 r20---sn-q4f7dm76.googlevideo.com
208.117.252.166 r1---sn-q4f7dm7d.googlevideo.com
208.117.252.167 r2---sn-q4f7dm7d.googlevideo.com
208.117.252.168 r3---sn-q4f7dm7d.googlevideo.com
208.117.252.169 r4---sn-q4f7dm7d.googlevideo.com
208.117.252.170 r5---sn-q4f7dm7d.googlevideo.com
208.117.252.171 r6---sn-q4f7dm7d.googlevideo.com
208.117.252.172 r7---sn-q4f7dm7d.googlevideo.com
208.117.252.173 r8---sn-q4f7dm7d.googlevideo.com
208.117.252.174 r9---sn-q4f7dm7d.googlevideo.com
208.117.252.175 r10---sn-q4f7dm7d.googlevideo.com
208.117.252.176 r11---sn-q4f7dm7d.googlevideo.com
208.117.252.177 r12---sn-q4f7dm7d.googlevideo.com
208.117.252.178 r13---sn-q4f7dm7d.googlevideo.com
208.117.252.179 r14---sn-q4f7dm7d.googlevideo.com
208.117.252.180 r15---sn-q4f7dm7d.googlevideo.com
208.117.252.181 r16---sn-q4f7dm7d.googlevideo.com
208.117.252.182 r17---sn-q4f7dm7d.googlevideo.com
208.117.252.183 r18---sn-q4f7dm7d.googlevideo.com
208.117.252.184 r19---sn-q4f7dm7d.googlevideo.com
208.117.252.185 r20---sn-q4f7dm7d.googlevideo.com
173.194.141.215 r1---sn-q4f7sn7d.googlevideo.com
173.194.141.216 r2---sn-q4f7sn7d.googlevideo.com
173.194.141.217 r3---sn-q4f7sn7d.googlevideo.com
173.194.141.218 r4---sn-q4f7sn7d.googlevideo.com
173.194.141.219 r5---sn-q4f7sn7d.googlevideo.com
173.194.141.220 r6---sn-q4f7sn7d.googlevideo.com
173.194.141.135 r1---sn-q4f7sn7e.googlevideo.com
173.194.141.136 r2---sn-q4f7sn7e.googlevideo.com
173.194.141.137 r3---sn-q4f7sn7e.googlevideo.com
173.194.141.138 r4---sn-q4f7sn7e.googlevideo.com
173.194.141.139 r5---sn-q4f7sn7e.googlevideo.com
173.194.141.140 r6---sn-q4f7sn7e.googlevideo.com
173.194.141.231 r1---sn-q4f7sn7k.googlevideo.com
173.194.141.232 r2---sn-q4f7sn7k.googlevideo.com
173.194.141.233 r3---sn-q4f7sn7k.googlevideo.com
173.194.141.234 r4---sn-q4f7sn7k.googlevideo.com
173.194.141.235 r5---sn-q4f7sn7k.googlevideo.com
173.194.141.236 r6---sn-q4f7sn7k.googlevideo.com
173.194.141.151 r1---sn-q4f7sn7l.googlevideo.com
173.194.141.152 r2---sn-q4f7sn7l.googlevideo.com
173.194.141.153 r3---sn-q4f7sn7l.googlevideo.com
173.194.141.154 r4---sn-q4f7sn7l.googlevideo.com
173.194.141.155 r5---sn-q4f7sn7l.googlevideo.com
173.194.141.156 r6---sn-q4f7sn7l.googlevideo.com
173.194.141.247 r1---sn-q4f7sn7r.googlevideo.com
173.194.141.248 r2---sn-q4f7sn7r.googlevideo.com
173.194.141.249 r3---sn-q4f7sn7r.googlevideo.com
173.194.141.250 r4---sn-q4f7sn7r.googlevideo.com
173.194.141.251 r5---sn-q4f7sn7r.googlevideo.com
173.194.141.252 r6---sn-q4f7sn7r.googlevideo.com
173.194.141.167 r1---sn-q4f7sn7s.googlevideo.com
173.194.141.168 r2---sn-q4f7sn7s.googlevideo.com
173.194.141.169 r3---sn-q4f7sn7s.googlevideo.com
173.194.141.170 r4---sn-q4f7sn7s.googlevideo.com
173.194.141.171 r5---sn-q4f7sn7s.googlevideo.com
173.194.141.172 r6---sn-q4f7sn7s.googlevideo.com
208.117.255.134 r1---sn-vgqsem7e.googlevideo.com
208.117.255.135 r2---sn-vgqsem7e.googlevideo.com
208.117.255.136 r3---sn-vgqsem7e.googlevideo.com
208.117.255.137 r4---sn-vgqsem7e.googlevideo.com
208.117.255.138 r5---sn-vgqsem7e.googlevideo.com
208.117.255.139 r6---sn-vgqsem7e.googlevideo.com
208.117.255.140 r7---sn-vgqsem7e.googlevideo.com
208.117.255.141 r8---sn-vgqsem7e.googlevideo.com
208.117.255.142 r9---sn-vgqsem7e.googlevideo.com
208.117.255.143 r10---sn-vgqsem7e.googlevideo.com
208.117.255.144 r11---sn-vgqsem7e.googlevideo.com
208.117.255.145 r12---sn-vgqsem7e.googlevideo.com
208.117.255.146 r13---sn-vgqsem7e.googlevideo.com
208.117.255.147 r14---sn-vgqsem7e.googlevideo.com
208.117.255.148 r15---sn-vgqsem7e.googlevideo.com
208.117.255.149 r16---sn-vgqsem7e.googlevideo.com
208.117.255.150 r17---sn-vgqsem7e.googlevideo.com
208.117.255.151 r18---sn-vgqsem7e.googlevideo.com
208.117.255.152 r19---sn-vgqsem7e.googlevideo.com
208.117.255.153 r20---sn-vgqsem7e.googlevideo.com
208.117.255.166 r1---sn-vgqsem7l.googlevideo.com
208.117.255.167 r2---sn-vgqsem7l.googlevideo.com
208.117.255.168 r3---sn-vgqsem7l.googlevideo.com
208.117.255.169 r4---sn-vgqsem7l.googlevideo.com
208.117.255.170 r5---sn-vgqsem7l.googlevideo.com
208.117.255.171 r6---sn-vgqsem7l.googlevideo.com
208.117.255.172 r7---sn-vgqsem7l.googlevideo.com
208.117.255.173 r8---sn-vgqsem7l.googlevideo.com
208.117.255.174 r9---sn-vgqsem7l.googlevideo.com
208.117.255.175 r10---sn-vgqsem7l.googlevideo.com
208.117.255.176 r11---sn-vgqsem7l.googlevideo.com
208.117.255.177 r12---sn-vgqsem7l.googlevideo.com
208.117.255.178 r13---sn-vgqsem7l.googlevideo.com
208.117.255.179 r14---sn-vgqsem7l.googlevideo.com
208.117.255.180 r15---sn-vgqsem7l.googlevideo.com
208.117.255.181 r16---sn-vgqsem7l.googlevideo.com
208.117.255.182 r17---sn-vgqsem7l.googlevideo.com
208.117.255.183 r18---sn-vgqsem7l.googlevideo.com
208.117.255.184 r19---sn-vgqsem7l.googlevideo.com
208.117.255.185 r20---sn-vgqsem7l.googlevideo.com
208.117.236.134 r1---sn-25g7sm76.c.youtube.com
208.117.236.135 r2---sn-25g7sm76.c.youtube.com
208.117.236.136 r3---sn-25g7sm76.c.youtube.com
208.117.236.137 r4---sn-25g7sm76.c.youtube.com
208.117.236.138 r5---sn-25g7sm76.c.youtube.com
208.117.236.139 r6---sn-25g7sm76.c.youtube.com
208.117.236.140 r7---sn-25g7sm76.c.youtube.com
208.117.236.141 r8---sn-25g7sm76.c.youtube.com
208.117.236.142 r9---sn-25g7sm76.c.youtube.com
208.117.236.143 r10---sn-25g7sm76.c.youtube.com
208.117.236.144 r11---sn-25g7sm76.c.youtube.com
208.117.236.145 r12---sn-25g7sm76.c.youtube.com
208.117.236.146 r13---sn-25g7sm76.c.youtube.com
208.117.236.147 r14---sn-25g7sm76.c.youtube.com
208.117.236.148 r15---sn-25g7sm76.c.youtube.com
208.117.236.149 r16---sn-25g7sm76.c.youtube.com
208.117.236.150 r17---sn-25g7sm76.c.youtube.com
208.117.236.151 r18---sn-25g7sm76.c.youtube.com
208.117.236.152 r19---sn-25g7sm76.c.youtube.com
208.117.236.153 r20---sn-25g7sm76.c.youtube.com
173.194.15.6 r1---sn-4g57kndy.c.youtube.com
173.194.15.7 r2---sn-4g57kndy.c.youtube.com
173.194.15.8 r3---sn-4g57kndy.c.youtube.com
173.194.15.9 r4---sn-4g57kndy.c.youtube.com
173.194.15.10 r5---sn-4g57kndy.c.youtube.com
173.194.15.11 r6---sn-4g57kndy.c.youtube.com
173.194.15.12 r7---sn-4g57kndy.c.youtube.com
173.194.15.13 r8---sn-4g57kndy.c.youtube.com
173.194.15.14 r9---sn-4g57kndy.c.youtube.com
173.194.15.15 r10---sn-4g57kndy.c.youtube.com
173.194.15.16 r11---sn-4g57kndy.c.youtube.com
173.194.15.17 r12---sn-4g57kndy.c.youtube.com
173.194.15.18 r13---sn-4g57kndy.c.youtube.com
173.194.15.19 r14---sn-4g57kndy.c.youtube.com
173.194.15.20 r15---sn-4g57kndy.c.youtube.com
173.194.15.21 r16---sn-4g57kndy.c.youtube.com
173.194.15.22 r17---sn-4g57kndy.c.youtube.com
173.194.15.23 r18---sn-4g57kndy.c.youtube.com
173.194.15.24 r19---sn-4g57kndy.c.youtube.com
173.194.15.25 r20---sn-4g57kndy.c.youtube.com
4.35.153.204 r1---sn-a8au-a5me.c.youtube.com
4.35.153.205 r2---sn-a8au-a5me.c.youtube.com
4.35.153.206 r3---sn-a8au-a5me.c.youtube.com
4.35.153.207 r4---sn-a8au-a5me.c.youtube.com
4.35.153.208 r5---sn-a8au-a5me.c.youtube.com
4.35.153.209 r6---sn-a8au-a5me.c.youtube.com
4.35.153.210 r7---sn-a8au-a5me.c.youtube.com
4.35.153.211 r8---sn-a8au-a5me.c.youtube.com
208.117.240.166 r1---sn-ab5e6m7d.c.youtube.com
208.117.240.167 r2---sn-ab5e6m7d.c.youtube.com
208.117.240.168 r3---sn-ab5e6m7d.c.youtube.com
208.117.240.169 r4---sn-ab5e6m7d.c.youtube.com
208.117.240.170 r5---sn-ab5e6m7d.c.youtube.com
208.117.240.171 r6---sn-ab5e6m7d.c.youtube.com
208.117.240.172 r7---sn-ab5e6m7d.c.youtube.com
208.117.240.173 r8---sn-ab5e6m7d.c.youtube.com
208.117.240.174 r9---sn-ab5e6m7d.c.youtube.com
208.117.240.175 r10---sn-ab5e6m7d.c.youtube.com
208.117.240.176 r11---sn-ab5e6m7d.c.youtube.com
208.117.240.177 r12---sn-ab5e6m7d.c.youtube.com
208.117.240.178 r13---sn-ab5e6m7d.c.youtube.com
208.117.240.179 r14---sn-ab5e6m7d.c.youtube.com
208.117.240.180 r15---sn-ab5e6m7d.c.youtube.com
208.117.240.181 r16---sn-ab5e6m7d.c.youtube.com
208.117.240.182 r17---sn-ab5e6m7d.c.youtube.com
208.117.240.183 r18---sn-ab5e6m7d.c.youtube.com
208.117.240.184 r19---sn-ab5e6m7d.c.youtube.com
208.117.240.185 r20---sn-ab5e6m7d.c.youtube.com
208.117.240.38 r1---sn-ab5e6m7l.c.youtube.com
208.117.240.39 r2---sn-ab5e6m7l.c.youtube.com
208.117.240.40 r3---sn-ab5e6m7l.c.youtube.com
208.117.240.41 r4---sn-ab5e6m7l.c.youtube.com
208.117.240.42 r5---sn-ab5e6m7l.c.youtube.com
208.117.240.43 r6---sn-ab5e6m7l.c.youtube.com
208.117.240.44 r7---sn-ab5e6m7l.c.youtube.com
208.117.240.45 r8---sn-ab5e6m7l.c.youtube.com
208.117.240.46 r9---sn-ab5e6m7l.c.youtube.com
208.117.240.47 r10---sn-ab5e6m7l.c.youtube.com
208.117.240.48 r11---sn-ab5e6m7l.c.youtube.com
208.117.240.49 r12---sn-ab5e6m7l.c.youtube.com
208.117.240.50 r13---sn-ab5e6m7l.c.youtube.com
208.117.240.51 r14---sn-ab5e6m7l.c.youtube.com
208.117.240.52 r15---sn-ab5e6m7l.c.youtube.com
208.117.240.53 r16---sn-ab5e6m7l.c.youtube.com
208.117.240.54 r17---sn-ab5e6m7l.c.youtube.com
208.117.240.55 r18---sn-ab5e6m7l.c.youtube.com
208.117.240.56 r19---sn-ab5e6m7l.c.youtube.com
208.117.240.57 r20---sn-ab5e6m7l.c.youtube.com
208.117.240.230 r1---sn-ab5e6m7r.c.youtube.com
208.117.240.231 r2---sn-ab5e6m7r.c.youtube.com
208.117.240.232 r3---sn-ab5e6m7r.c.youtube.com
208.117.240.233 r4---sn-ab5e6m7r.c.youtube.com
208.117.240.234 r5---sn-ab5e6m7r.c.youtube.com
208.117.240.235 r6---sn-ab5e6m7r.c.youtube.com
208.117.240.236 r7---sn-ab5e6m7r.c.youtube.com
208.117.240.237 r8---sn-ab5e6m7r.c.youtube.com
208.117.240.238 r9---sn-ab5e6m7r.c.youtube.com
208.117.240.239 r10---sn-ab5e6m7r.c.youtube.com
208.117.240.240 r11---sn-ab5e6m7r.c.youtube.com
208.117.240.241 r12---sn-ab5e6m7r.c.youtube.com
208.117.240.242 r13---sn-ab5e6m7r.c.youtube.com
208.117.240.243 r14---sn-ab5e6m7r.c.youtube.com
208.117.240.244 r15---sn-ab5e6m7r.c.youtube.com
208.117.240.245 r16---sn-ab5e6m7r.c.youtube.com
208.117.240.246 r17---sn-ab5e6m7r.c.youtube.com
208.117.240.247 r18---sn-ab5e6m7r.c.youtube.com
208.117.240.248 r19---sn-ab5e6m7r.c.youtube.com
208.117.240.249 r20---sn-ab5e6m7r.c.youtube.com
208.117.240.102 r1---sn-ab5e6m7z.c.youtube.com
208.117.240.103 r2---sn-ab5e6m7z.c.youtube.com
208.117.240.104 r3---sn-ab5e6m7z.c.youtube.com
208.117.240.105 r4---sn-ab5e6m7z.c.youtube.com
208.117.240.106 r5---sn-ab5e6m7z.c.youtube.com
208.117.240.107 r6---sn-ab5e6m7z.c.youtube.com
208.117.240.108 r7---sn-ab5e6m7z.c.youtube.com
208.117.240.109 r8---sn-ab5e6m7z.c.youtube.com
208.117.240.110 r9---sn-ab5e6m7z.c.youtube.com
208.117.240.111 r10---sn-ab5e6m7z.c.youtube.com
208.117.240.112 r11---sn-ab5e6m7z.c.youtube.com
208.117.240.113 r12---sn-ab5e6m7z.c.youtube.com
208.117.240.114 r13---sn-ab5e6m7z.c.youtube.com
208.117.240.115 r14---sn-ab5e6m7z.c.youtube.com
208.117.240.116 r15---sn-ab5e6m7z.c.youtube.com
208.117.240.117 r16---sn-ab5e6m7z.c.youtube.com
208.117.240.118 r17---sn-ab5e6m7z.c.youtube.com
208.117.240.119 r18---sn-ab5e6m7z.c.youtube.com
208.117.240.120 r19---sn-ab5e6m7z.c.youtube.com
208.117.240.121 r20---sn-ab5e6m7z.c.youtube.com
208.117.248.70 r1---sn-hp576m7s.c.youtube.com
208.117.248.71 r2---sn-hp576m7s.c.youtube.com
208.117.248.72 r3---sn-hp576m7s.c.youtube.com
208.117.248.73 r4---sn-hp576m7s.c.youtube.com
208.117.248.74 r5---sn-hp576m7s.c.youtube.com
208.117.248.75 r6---sn-hp576m7s.c.youtube.com
208.117.248.76 r7---sn-hp576m7s.c.youtube.com
208.117.248.77 r8---sn-hp576m7s.c.youtube.com
208.117.248.78 r9---sn-hp576m7s.c.youtube.com
208.117.248.79 r10---sn-hp576m7s.c.youtube.com
208.117.248.80 r11---sn-hp576m7s.c.youtube.com
208.117.248.81 r12---sn-hp576m7s.c.youtube.com
208.117.248.82 r13---sn-hp576m7s.c.youtube.com
208.117.248.83 r14---sn-hp576m7s.c.youtube.com
208.117.248.84 r15---sn-hp576m7s.c.youtube.com
208.117.248.85 r16---sn-hp576m7s.c.youtube.com
208.117.248.86 r17---sn-hp576m7s.c.youtube.com
208.117.248.87 r18---sn-hp576m7s.c.youtube.com
208.117.248.88 r19---sn-hp576m7s.c.youtube.com
208.117.248.89 r20---sn-hp576m7s.c.youtube.com
209.116.150.204 r1---sn-mv-a5m6.c.youtube.com
209.116.150.205 r2---sn-mv-a5m6.c.youtube.com
209.116.150.206 r3---sn-mv-a5m6.c.youtube.com
209.116.150.207 r4---sn-mv-a5m6.c.youtube.com
209.116.150.208 r5---sn-mv-a5m6.c.youtube.com
209.116.150.209 r6---sn-mv-a5m6.c.youtube.com
209.116.150.210 r7---sn-mv-a5m6.c.youtube.com
209.116.150.211 r8---sn-mv-a5m6.c.youtube.com
208.117.239.134 r1---sn-nwj7km76.c.youtube.com
208.117.239.135 r2---sn-nwj7km76.c.youtube.com
208.117.239.136 r3---sn-nwj7km76.c.youtube.com
208.117.239.137 r4---sn-nwj7km76.c.youtube.com
208.117.239.138 r5---sn-nwj7km76.c.youtube.com
208.117.239.139 r6---sn-nwj7km76.c.youtube.com
208.117.239.140 r7---sn-nwj7km76.c.youtube.com
208.117.239.141 r8---sn-nwj7km76.c.youtube.com
208.117.239.142 r9---sn-nwj7km76.c.youtube.com
208.117.239.143 r10---sn-nwj7km76.c.youtube.com
208.117.239.144 r11---sn-nwj7km76.c.youtube.com
208.117.239.145 r12---sn-nwj7km76.c.youtube.com
208.117.239.146 r13---sn-nwj7km76.c.youtube.com
208.117.239.147 r14---sn-nwj7km76.c.youtube.com
208.117.239.148 r15---sn-nwj7km76.c.youtube.com
208.117.239.149 r16---sn-nwj7km76.c.youtube.com
208.117.239.150 r17---sn-nwj7km76.c.youtube.com
208.117.239.151 r18---sn-nwj7km76.c.youtube.com
208.117.239.152 r19---sn-nwj7km76.c.youtube.com
208.117.239.153 r20---sn-nwj7km76.c.youtube.com
208.117.239.166 r1---sn-nwj7km7d.c.youtube.com
208.117.239.167 r2---sn-nwj7km7d.c.youtube.com
208.117.239.168 r3---sn-nwj7km7d.c.youtube.com
208.117.239.169 r4---sn-nwj7km7d.c.youtube.com
208.117.239.170 r5---sn-nwj7km7d.c.youtube.com
208.117.239.171 r6---sn-nwj7km7d.c.youtube.com
208.117.239.172 r7---sn-nwj7km7d.c.youtube.com
208.117.239.173 r8---sn-nwj7km7d.c.youtube.com
208.117.239.174 r9---sn-nwj7km7d.c.youtube.com
208.117.239.175 r10---sn-nwj7km7d.c.youtube.com
208.117.239.176 r11---sn-nwj7km7d.c.youtube.com
208.117.239.177 r12---sn-nwj7km7d.c.youtube.com
208.117.239.178 r13---sn-nwj7km7d.c.youtube.com
208.117.239.179 r14---sn-nwj7km7d.c.youtube.com
208.117.239.180 r15---sn-nwj7km7d.c.youtube.com
208.117.239.181 r16---sn-nwj7km7d.c.youtube.com
208.117.239.182 r17---sn-nwj7km7d.c.youtube.com
208.117.239.183 r18---sn-nwj7km7d.c.youtube.com
208.117.239.184 r19---sn-nwj7km7d.c.youtube.com
208.117.239.185 r20---sn-nwj7km7d.c.youtube.com
208.117.239.6 r1---sn-nwj7km7e.c.youtube.com
208.117.239.7 r2---sn-nwj7km7e.c.youtube.com
208.117.239.8 r3---sn-nwj7km7e.c.youtube.com
208.117.239.9 r4---sn-nwj7km7e.c.youtube.com
208.117.239.10 r5---sn-nwj7km7e.c.youtube.com
208.117.239.11 r6---sn-nwj7km7e.c.youtube.com
208.117.239.12 r7---sn-nwj7km7e.c.youtube.com
208.117.239.13 r8---sn-nwj7km7e.c.youtube.com
208.117.239.14 r9---sn-nwj7km7e.c.youtube.com
208.117.239.15 r10---sn-nwj7km7e.c.youtube.com
208.117.239.16 r11---sn-nwj7km7e.c.youtube.com
208.117.239.17 r12---sn-nwj7km7e.c.youtube.com
208.117.239.18 r13---sn-nwj7km7e.c.youtube.com
208.117.239.19 r14---sn-nwj7km7e.c.youtube.com
208.117.239.20 r15---sn-nwj7km7e.c.youtube.com
208.117.239.21 r16---sn-nwj7km7e.c.youtube.com
208.117.239.22 r17---sn-nwj7km7e.c.youtube.com
208.117.239.23 r18---sn-nwj7km7e.c.youtube.com
208.117.239.24 r19---sn-nwj7km7e.c.youtube.com
208.117.239.25 r20---sn-nwj7km7e.c.youtube.com
208.117.239.198 r1---sn-nwj7km7k.c.youtube.com
208.117.239.199 r2---sn-nwj7km7k.c.youtube.com
208.117.239.200 r3---sn-nwj7km7k.c.youtube.com
208.117.239.201 r4---sn-nwj7km7k.c.youtube.com
208.117.239.202 r5---sn-nwj7km7k.c.youtube.com
208.117.239.203 r6---sn-nwj7km7k.c.youtube.com
208.117.239.204 r7---sn-nwj7km7k.c.youtube.com
208.117.239.205 r8---sn-nwj7km7k.c.youtube.com
208.117.239.206 r9---sn-nwj7km7k.c.youtube.com
208.117.239.207 r10---sn-nwj7km7k.c.youtube.com
208.117.239.208 r11---sn-nwj7km7k.c.youtube.com
208.117.239.209 r12---sn-nwj7km7k.c.youtube.com
208.117.239.210 r13---sn-nwj7km7k.c.youtube.com
208.117.239.211 r14---sn-nwj7km7k.c.youtube.com
208.117.239.212 r15---sn-nwj7km7k.c.youtube.com
208.117.239.213 r16---sn-nwj7km7k.c.youtube.com
208.117.239.214 r17---sn-nwj7km7k.c.youtube.com
208.117.239.215 r18---sn-nwj7km7k.c.youtube.com
208.117.239.216 r19---sn-nwj7km7k.c.youtube.com
208.117.239.217 r20---sn-nwj7km7k.c.youtube.com
208.117.239.38 r1---sn-nwj7km7l.c.youtube.com
208.117.239.39 r2---sn-nwj7km7l.c.youtube.com
208.117.239.40 r3---sn-nwj7km7l.c.youtube.com
208.117.239.41 r4---sn-nwj7km7l.c.youtube.com
208.117.239.42 r5---sn-nwj7km7l.c.youtube.com
208.117.239.43 r6---sn-nwj7km7l.c.youtube.com
208.117.239.44 r7---sn-nwj7km7l.c.youtube.com
208.117.239.45 r8---sn-nwj7km7l.c.youtube.com
208.117.239.46 r9---sn-nwj7km7l.c.youtube.com
208.117.239.47 r10---sn-nwj7km7l.c.youtube.com
208.117.239.48 r11---sn-nwj7km7l.c.youtube.com
208.117.239.49 r12---sn-nwj7km7l.c.youtube.com
208.117.239.50 r13---sn-nwj7km7l.c.youtube.com
208.117.239.51 r14---sn-nwj7km7l.c.youtube.com
208.117.239.52 r15---sn-nwj7km7l.c.youtube.com
208.117.239.53 r16---sn-nwj7km7l.c.youtube.com
208.117.239.54 r17---sn-nwj7km7l.c.youtube.com
208.117.239.55 r18---sn-nwj7km7l.c.youtube.com
208.117.239.56 r19---sn-nwj7km7l.c.youtube.com
208.117.239.57 r20---sn-nwj7km7l.c.youtube.com
208.117.239.230 r1---sn-nwj7km7r.c.youtube.com
208.117.239.231 r2---sn-nwj7km7r.c.youtube.com
208.117.239.232 r3---sn-nwj7km7r.c.youtube.com
208.117.239.233 r4---sn-nwj7km7r.c.youtube.com
208.117.239.234 r5---sn-nwj7km7r.c.youtube.com
208.117.239.235 r6---sn-nwj7km7r.c.youtube.com
208.117.239.236 r7---sn-nwj7km7r.c.youtube.com
208.117.239.237 r8---sn-nwj7km7r.c.youtube.com
208.117.239.238 r9---sn-nwj7km7r.c.youtube.com
208.117.239.239 r10---sn-nwj7km7r.c.youtube.com
208.117.239.240 r11---sn-nwj7km7r.c.youtube.com
208.117.239.241 r12---sn-nwj7km7r.c.youtube.com
208.117.239.242 r13---sn-nwj7km7r.c.youtube.com
208.117.239.243 r14---sn-nwj7km7r.c.youtube.com
208.117.239.244 r15---sn-nwj7km7r.c.youtube.com
208.117.239.245 r16---sn-nwj7km7r.c.youtube.com
208.117.239.246 r17---sn-nwj7km7r.c.youtube.com
208.117.239.247 r18---sn-nwj7km7r.c.youtube.com
208.117.239.248 r19---sn-nwj7km7r.c.youtube.com
208.117.239.249 r20---sn-nwj7km7r.c.youtube.com
208.117.239.70 r1---sn-nwj7km7s.c.youtube.com
208.117.239.71 r2---sn-nwj7km7s.c.youtube.com
208.117.239.72 r3---sn-nwj7km7s.c.youtube.com
208.117.239.73 r4---sn-nwj7km7s.c.youtube.com
208.117.239.74 r5---sn-nwj7km7s.c.youtube.com
208.117.239.75 r6---sn-nwj7km7s.c.youtube.com
208.117.239.76 r7---sn-nwj7km7s.c.youtube.com
208.117.239.77 r8---sn-nwj7km7s.c.youtube.com
208.117.239.78 r9---sn-nwj7km7s.c.youtube.com
208.117.239.79 r10---sn-nwj7km7s.c.youtube.com
208.117.239.80 r11---sn-nwj7km7s.c.youtube.com
208.117.239.81 r12---sn-nwj7km7s.c.youtube.com
208.117.239.82 r13---sn-nwj7km7s.c.youtube.com
208.117.239.83 r14---sn-nwj7km7s.c.youtube.com
208.117.239.84 r15---sn-nwj7km7s.c.youtube.com
208.117.239.85 r16---sn-nwj7km7s.c.youtube.com
208.117.239.86 r17---sn-nwj7km7s.c.youtube.com
208.117.239.87 r18---sn-nwj7km7s.c.youtube.com
208.117.239.88 r19---sn-nwj7km7s.c.youtube.com
208.117.239.89 r20---sn-nwj7km7s.c.youtube.com
208.117.239.102 r1---sn-nwj7km7z.c.youtube.com
208.117.239.103 r2---sn-nwj7km7z.c.youtube.com
208.117.239.104 r3---sn-nwj7km7z.c.youtube.com
208.117.239.105 r4---sn-nwj7km7z.c.youtube.com
208.117.239.106 r5---sn-nwj7km7z.c.youtube.com
208.117.239.107 r6---sn-nwj7km7z.c.youtube.com
208.117.239.108 r7---sn-nwj7km7z.c.youtube.com
208.117.239.109 r8---sn-nwj7km7z.c.youtube.com
208.117.239.110 r9---sn-nwj7km7z.c.youtube.com
208.117.239.111 r10---sn-nwj7km7z.c.youtube.com
208.117.239.112 r11---sn-nwj7km7z.c.youtube.com
208.117.239.113 r12---sn-nwj7km7z.c.youtube.com
208.117.239.114 r13---sn-nwj7km7z.c.youtube.com
208.117.239.115 r14---sn-nwj7km7z.c.youtube.com
208.117.239.116 r15---sn-nwj7km7z.c.youtube.com
208.117.239.117 r16---sn-nwj7km7z.c.youtube.com
208.117.239.118 r17---sn-nwj7km7z.c.youtube.com
208.117.239.119 r18---sn-nwj7km7z.c.youtube.com
208.117.239.120 r19---sn-nwj7km7z.c.youtube.com
208.117.239.121 r20---sn-nwj7km7z.c.youtube.com
208.117.251.38 r1---sn-p5qlsm7l.c.youtube.com
208.117.251.39 r2---sn-p5qlsm7l.c.youtube.com
208.117.251.40 r3---sn-p5qlsm7l.c.youtube.com
208.117.251.41 r4---sn-p5qlsm7l.c.youtube.com
208.117.251.42 r5---sn-p5qlsm7l.c.youtube.com
208.117.251.43 r6---sn-p5qlsm7l.c.youtube.com
208.117.251.44 r7---sn-p5qlsm7l.c.youtube.com
208.117.251.45 r8---sn-p5qlsm7l.c.youtube.com
208.117.251.46 r9---sn-p5qlsm7l.c.youtube.com
208.117.251.47 r10---sn-p5qlsm7l.c.youtube.com
208.117.251.48 r11---sn-p5qlsm7l.c.youtube.com
208.117.251.49 r12---sn-p5qlsm7l.c.youtube.com
208.117.251.50 r13---sn-p5qlsm7l.c.youtube.com
208.117.251.51 r14---sn-p5qlsm7l.c.youtube.com
208.117.251.52 r15---sn-p5qlsm7l.c.youtube.com
208.117.251.53 r16---sn-p5qlsm7l.c.youtube.com
208.117.251.54 r17---sn-p5qlsm7l.c.youtube.com
208.117.251.55 r18---sn-p5qlsm7l.c.youtube.com
208.117.251.56 r19---sn-p5qlsm7l.c.youtube.com
208.117.251.57 r20---sn-p5qlsm7l.c.youtube.com
173.194.138.198 r1---sn-q0c7dn7r.c.youtube.com
173.194.138.199 r2---sn-q0c7dn7r.c.youtube.com
173.194.138.200 r3---sn-q0c7dn7r.c.youtube.com
173.194.138.201 r4---sn-q0c7dn7r.c.youtube.com
173.194.138.202 r5---sn-q0c7dn7r.c.youtube.com
173.194.138.203 r6---sn-q0c7dn7r.c.youtube.com
173.194.138.204 r7---sn-q0c7dn7r.c.youtube.com
173.194.138.205 r8---sn-q0c7dn7r.c.youtube.com
173.194.138.206 r9---sn-q0c7dn7r.c.youtube.com
173.194.138.207 r10---sn-q0c7dn7r.c.youtube.com
173.194.138.208 r11---sn-q0c7dn7r.c.youtube.com
173.194.138.209 r12---sn-q0c7dn7r.c.youtube.com
173.194.138.210 r13---sn-q0c7dn7r.c.youtube.com
173.194.138.211 r14---sn-q0c7dn7r.c.youtube.com
173.194.138.212 r15---sn-q0c7dn7r.c.youtube.com
173.194.138.213 r16---sn-q0c7dn7r.c.youtube.com
173.194.138.214 r17---sn-q0c7dn7r.c.youtube.com
173.194.138.215 r18---sn-q0c7dn7r.c.youtube.com
173.194.138.216 r19---sn-q0c7dn7r.c.youtube.com
173.194.138.217 r20---sn-q0c7dn7r.c.youtube.com
208.117.252.134 r1---sn-q4f7dm76.c.youtube.com
208.117.252.135 r2---sn-q4f7dm76.c.youtube.com
208.117.252.136 r3---sn-q4f7dm76.c.youtube.com
208.117.252.137 r4---sn-q4f7dm76.c.youtube.com
208.117.252.138 r5---sn-q4f7dm76.c.youtube.com
208.117.252.139 r6---sn-q4f7dm76.c.youtube.com
208.117.252.140 r7---sn-q4f7dm76.c.youtube.com
208.117.252.141 r8---sn-q4f7dm76.c.youtube.com
208.117.252.142 r9---sn-q4f7dm76.c.youtube.com
208.117.252.143 r10---sn-q4f7dm76.c.youtube.com
208.117.252.144 r11---sn-q4f7dm76.c.youtube.com
208.117.252.145 r12---sn-q4f7dm76.c.youtube.com
208.117.252.146 r13---sn-q4f7dm76.c.youtube.com
208.117.252.147 r14---sn-q4f7dm76.c.youtube.com
208.117.252.148 r15---sn-q4f7dm76.c.youtube.com
208.117.252.149 r16---sn-q4f7dm76.c.youtube.com
208.117.252.150 r17---sn-q4f7dm76.c.youtube.com
208.117.252.151 r18---sn-q4f7dm76.c.youtube.com
208.117.252.152 r19---sn-q4f7dm76.c.youtube.com
208.117.252.153 r20---sn-q4f7dm76.c.youtube.com
208.117.252.166 r1---sn-q4f7dm7d.c.youtube.com
208.117.252.167 r2---sn-q4f7dm7d.c.youtube.com
208.117.252.168 r3---sn-q4f7dm7d.c.youtube.com
208.117.252.169 r4---sn-q4f7dm7d.c.youtube.com
208.117.252.170 r5---sn-q4f7dm7d.c.youtube.com
208.117.252.171 r6---sn-q4f7dm7d.c.youtube.com
208.117.252.172 r7---sn-q4f7dm7d.c.youtube.com
208.117.252.173 r8---sn-q4f7dm7d.c.youtube.com
208.117.252.174 r9---sn-q4f7dm7d.c.youtube.com
208.117.252.175 r10---sn-q4f7dm7d.c.youtube.com
208.117.252.176 r11---sn-q4f7dm7d.c.youtube.com
208.117.252.177 r12---sn-q4f7dm7d.c.youtube.com
208.117.252.178 r13---sn-q4f7dm7d.c.youtube.com
208.117.252.179 r14---sn-q4f7dm7d.c.youtube.com
208.117.252.180 r15---sn-q4f7dm7d.c.youtube.com
208.117.252.181 r16---sn-q4f7dm7d.c.youtube.com
208.117.252.182 r17---sn-q4f7dm7d.c.youtube.com
208.117.252.183 r18---sn-q4f7dm7d.c.youtube.com
208.117.252.184 r19---sn-q4f7dm7d.c.youtube.com
208.117.252.185 r20---sn-q4f7dm7d.c.youtube.com
173.194.141.215 r1---sn-q4f7sn7d.c.youtube.com
173.194.141.216 r2---sn-q4f7sn7d.c.youtube.com
173.194.141.217 r3---sn-q4f7sn7d.c.youtube.com
173.194.141.218 r4---sn-q4f7sn7d.c.youtube.com
173.194.141.219 r5---sn-q4f7sn7d.c.youtube.com
173.194.141.220 r6---sn-q4f7sn7d.c.youtube.com
173.194.141.135 r1---sn-q4f7sn7e.c.youtube.com
173.194.141.136 r2---sn-q4f7sn7e.c.youtube.com
173.194.141.137 r3---sn-q4f7sn7e.c.youtube.com
173.194.141.138 r4---sn-q4f7sn7e.c.youtube.com
173.194.141.139 r5---sn-q4f7sn7e.c.youtube.com
173.194.141.140 r6---sn-q4f7sn7e.c.youtube.com
173.194.141.231 r1---sn-q4f7sn7k.c.youtube.com
173.194.141.232 r2---sn-q4f7sn7k.c.youtube.com
173.194.141.233 r3---sn-q4f7sn7k.c.youtube.com
173.194.141.234 r4---sn-q4f7sn7k.c.youtube.com
173.194.141.235 r5---sn-q4f7sn7k.c.youtube.com
173.194.141.236 r6---sn-q4f7sn7k.c.youtube.com
173.194.141.151 r1---sn-q4f7sn7l.c.youtube.com
173.194.141.152 r2---sn-q4f7sn7l.c.youtube.com
173.194.141.153 r3---sn-q4f7sn7l.c.youtube.com
173.194.141.154 r4---sn-q4f7sn7l.c.youtube.com
173.194.141.155 r5---sn-q4f7sn7l.c.youtube.com
173.194.141.156 r6---sn-q4f7sn7l.c.youtube.com
173.194.141.247 r1---sn-q4f7sn7r.c.youtube.com
173.194.141.248 r2---sn-q4f7sn7r.c.youtube.com
173.194.141.249 r3---sn-q4f7sn7r.c.youtube.com
173.194.141.250 r4---sn-q4f7sn7r.c.youtube.com
173.194.141.251 r5---sn-q4f7sn7r.c.youtube.com
173.194.141.252 r6---sn-q4f7sn7r.c.youtube.com
173.194.141.167 r1---sn-q4f7sn7s.c.youtube.com
173.194.141.168 r2---sn-q4f7sn7s.c.youtube.com
173.194.141.169 r3---sn-q4f7sn7s.c.youtube.com
173.194.141.170 r4---sn-q4f7sn7s.c.youtube.com
173.194.141.171 r5---sn-q4f7sn7s.c.youtube.com
173.194.141.172 r6---sn-q4f7sn7s.c.youtube.com
208.117.255.134 r1---sn-vgqsem7e.c.youtube.com
208.117.255.135 r2---sn-vgqsem7e.c.youtube.com
208.117.255.136 r3---sn-vgqsem7e.c.youtube.com
208.117.255.137 r4---sn-vgqsem7e.c.youtube.com
208.117.255.138 r5---sn-vgqsem7e.c.youtube.com
208.117.255.139 r6---sn-vgqsem7e.c.youtube.com
208.117.255.140 r7---sn-vgqsem7e.c.youtube.com
208.117.255.141 r8---sn-vgqsem7e.c.youtube.com
208.117.255.142 r9---sn-vgqsem7e.c.youtube.com
208.117.255.143 r10---sn-vgqsem7e.c.youtube.com
208.117.255.144 r11---sn-vgqsem7e.c.youtube.com
208.117.255.145 r12---sn-vgqsem7e.c.youtube.com
208.117.255.146 r13---sn-vgqsem7e.c.youtube.com
208.117.255.147 r14---sn-vgqsem7e.c.youtube.com
208.117.255.148 r15---sn-vgqsem7e.c.youtube.com
208.117.255.149 r16---sn-vgqsem7e.c.youtube.com
208.117.255.150 r17---sn-vgqsem7e.c.youtube.com
208.117.255.151 r18---sn-vgqsem7e.c.youtube.com
208.117.255.152 r19---sn-vgqsem7e.c.youtube.com
208.117.255.153 r20---sn-vgqsem7e.c.youtube.com
208.117.255.166 r1---sn-vgqsem7l.c.youtube.com
208.117.255.167 r2---sn-vgqsem7l.c.youtube.com
208.117.255.168 r3---sn-vgqsem7l.c.youtube.com
208.117.255.169 r4---sn-vgqsem7l.c.youtube.com
208.117.255.170 r5---sn-vgqsem7l.c.youtube.com
208.117.255.171 r6---sn-vgqsem7l.c.youtube.com
208.117.255.172 r7---sn-vgqsem7l.c.youtube.com
208.117.255.173 r8---sn-vgqsem7l.c.youtube.com
208.117.255.174 r9---sn-vgqsem7l.c.youtube.com
208.117.255.175 r10---sn-vgqsem7l.c.youtube.com
208.117.255.176 r11---sn-vgqsem7l.c.youtube.com
208.117.255.177 r12---sn-vgqsem7l.c.youtube.com
208.117.255.178 r13---sn-vgqsem7l.c.youtube.com
208.117.255.179 r14---sn-vgqsem7l.c.youtube.com
208.117.255.180 r15---sn-vgqsem7l.c.youtube.com
208.117.255.181 r16---sn-vgqsem7l.c.youtube.com
208.117.255.182 r17---sn-vgqsem7l.c.youtube.com
208.117.255.183 r18---sn-vgqsem7l.c.youtube.com
208.117.255.184 r19---sn-vgqsem7l.c.youtube.com
208.117.255.185 r20---sn-vgqsem7l.c.youtube.com
# OTHERS
64.233.187.31 accounts.youtube.com
64.233.187.31 s.youtube.com
64.233.187.31 apiblog.youtube.com
64.233.187.31 help.youtube.com
64.233.187.31 insight.youtube.com
64.233.187.31 m.youtube.com
64.233.187.31 www.youtube.com
64.233.187.31 uploads.stage.gdata.youtube.com
64.233.187.31 i.ytimg.com
64.233.187.31 i1.ytimg.com
64.233.187.31 i2.ytimg.com
64.233.187.31 i3.ytimg.com
64.233.187.31 i4.ytimg.com
64.233.187.31 s.ytimg.com
64.233.187.31 upload.youtube.com
64.233.187.31 manifest.googlevideo.com
64.233.187.31 redirector.googlevideo.com
64.233.187.31 googlesource.com
64.233.187.31 android.googlesource.com
64.233.187.31 gerrit.googlesource.com
64.233.187.31 chromium.googlesource.com
64.233.187.31 kernel.googlesource.com
64.233.187.31 gwt.googlesource.com
64.233.187.31 www.googlesource.com
64.233.187.31 google-opensource.blogspot.com
64.233.187.31 googleblog.blogspot.com
64.233.187.31 googlechinablog.blogspot.com
64.233.187.31 googlechromereleases.blogspot.com
64.233.187.31 magnifier.blogspot.com
64.233.187.31 1.bp.blogspot.com
64.233.187.31 2.bp.blogspot.com
64.233.187.31 3.bp.blogspot.com
64.233.187.31 4.bp.blogspot.com
64.233.187.31 golang.org
64.233.187.31 blog.golang.org
64.233.187.31 tip.golang.org
64.233.187.31 play.golang.org
64.233.187.31 tour.golang.org
64.233.187.31 base0.googlehosted.com
64.233.187.31 base1.googlehosted.com
64.233.187.31 base2.googlehosted.com
64.233.187.31 base3.googlehosted.com
64.233.187.31 base4.googlehosted.com
64.233.187.31 base5.googlehosted.com
64.233.187.31 auth.keyhole.com
64.233.187.31 chrome.angrybirds.com
64.233.187.31 developer.android.com
64.233.187.31 source.android.com
64.233.187.31 domains.googlesyndication.com
64.233.187.31 earthengine.googlelabs.com
64.233.187.31 feeds.feedburner.com
64.233.187.31 g.co
64.233.187.31 goo.gl
64.233.187.31 listen.googlelabs.com
64.233.187.31 m.googlemail.com
64.233.187.31 market.android.com
64.233.187.31 ngrams.googlelabs.com
64.233.187.31 www.googleadservices.com
64.233.187.31 www.googlelabs.com
64.233.187.31 www.orkut.com
64.233.187.31 www.blogger.com
64.233.187.31 accounts.blogger.com
64.233.187.31 www.panoramio.com
64.233.187.31 panoramio.com
64.233.187.31 static.panoramio.com
64.233.187.31 tpc.googlesyndication.com
64.233.187.31 uberproxy.corp.google.com
64.233.187.31 developer.chrome.com
74.125.224.30 ssl.google-analytics.com
74.125.224.30 www.google-analytics.com
64.233.187.31 www.gmail.com
64.233.187.31 proxy.googlezip.net
64.233.187.31 googledrive.com
64.233.187.31 www.gwtproject.org
64.233.187.31 www.chromium.org
64.233.187.31 chromium.org
64.233.187.31 codereview.chromium.org
64.233.187.31 dev.chromium.org
64.233.187.31 gmail.com
64.233.187.31 m.gmail.com
64.233.187.31 www.webmproject.org       if (!$this->_auth)
            $this->_auth =  Yii::$app->authManager;

        return $this->_auth;
    }/*}}}*/

}
