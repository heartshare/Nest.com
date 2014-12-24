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
        # content.view
        $viewOwnContent = $auth->createPermission('viewOwnContent');
        $viewOwnContent->description = '查看本人添加的内容的详情';
        $viewOwnContent->ruleName = $ownerRule->name;
        $auth->add($viewOwnContent);
        /*}}}*/
        $auth->addChild($updateOwnContent, $updateContent);
        $auth->addChild($deleteOwnContent, $deleteContent);
        $auth->addChild($trashOwnContent, $trashContent);
        $auth->addChild($viewOwnContent, $viewContent);

        echo "create owner rule for content.{index, view, udpate, freeze, trash, delete} \n";

        # add about-me rule
        $aboutMeRule = new \backend\rbac\AboutMeRule;
        $auth->add($aboutMeRule);
        # staff
        /*{{{*/
        # staff.view
        $viewAboutMeStaff = $auth->createPermission('viewAboutMeStaff');
        $viewAboutMeStaff->description = '查看个人信息';
        $viewAboutMeStaff->ruleName = $aboutMeRule->name;
        $auth->add($viewAboutMeStaff);
        # staff.update
        $updateAboutMeStaff = $auth->createPermission('updateAboutMeStaff');
        $updateAboutMeStaff->description = '修改个人信息';
        $updateAboutMeStaff->ruleName = $aboutMeRule->name;
        $auth->add($updateAboutMeStaff);
        # staff.password
        $passwordAboutMeStaff = $auth->createPermission('passwordAboutMeStaff');
        $passwordAboutMeStaff->description = '修改个人密码';
        $passwordAboutMeStaff->ruleName = $aboutMeRule->name;
        $auth->add($passwordAboutMeStaff);
        /*}}}*/
        $auth->addChild($viewAboutMeStaff, $viewStaff);
        $auth->addChild($updateAboutMeStaff, $updateStaff);
        $auth->addChild($passwordAboutMeStaff, $passwordStaff);

        echo "create about-me rule for staff.{view, update, password} \n";

        # add has-category rule
        # 普通用户如果有分类的话, 可以添加/浏览content
        # 特权用户不受限制
        $hasCategoryRule = new \backend\rbac\HasCategoryRule;
        $auth->add($hasCategoryRule);
        /*{{{*/
        # content.index
        $indexHasCategoryContent = $auth->createPermission('indexHasCategoryContent');
        $indexHasCategoryContent->description = '查看内容列表';
        $indexHasCategoryContent->ruleName = $hasCategoryRule->name;
        $auth->add($indexHasCategoryContent);
        # content.create
        $createHasCategoryContent = $auth->createPermission('createHasCategoryContent');
        $createHasCategoryContent->description = '添加被分配分类下的内容';
        $createHasCategoryContent->ruleName = $hasCategoryRule->name;
        $auth->add($createHasCategoryContent);
        /*}}}*/
        $auth->addChild($indexHasCategoryContent, $indexContent);
        $auth->addChild($createHasCategoryContent, $createContent);

        echo "create has-category rule for content.{index,create}";

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
        /*{{{*/ # assign rule
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
        /*{{{*/ # assign rule
        /*}}}*/
        # editor
        $editor = $auth->createRole('editor');
        $editor->description = '编辑人员';
        $auth->add($editor);
        /*{{{*/
        $auth->addChild($editor, $createContent);
        /*}}}*/
        /*{{{*/ # assign rule
        $auth->addChild($editor, $updateOwnContent);
        $auth->addChild($editor, $trashOwnContent);
        $auth->addChild($editor, $viewOwnContent);
        $auth->addChild($editor, $indexHasCategoryContent);
        $auth->addChild($editor, $createHasCategoryContent);
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
        /*{{{*/ # assign rule
        $auth->addChild($inspector, $indexHasCategoryContent);
        /*}}}*/
        # staff [default]
        $staff = $auth->createRole('staff');
        $staff->description = '员工';
        $auth->add($staff);
        /*{{{*/
        $auth->addChild($staff, $indexArticle);
        $auth->addChild($staff, $viewArticle);
        /*}}}*/
        /*{{{*/ # assign rule
        $auth->addChild($staff, $viewAboutMeStaff);
        $auth->addChild($staff, $updateAboutMeStaff);
        $auth->addChild($staff, $passwordAboutMeStaff);
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
        # assign

        $auth->assign($administrator, 1);
        $auth->assign($leader, 2);
        $auth->assign($editor, 3);
        $auth->assign($inspector, 4);

        echo "assign user to role \n";

    }/*}}}*/

    public function getAuth()
    {/*{{{*/
        if (!$this->_auth)
            $this->_auth =  Yii::$app->authManager;

        return $this->_auth;
    }/*}}}*/

}
