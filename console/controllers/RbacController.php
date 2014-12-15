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
        # create
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
        # assign
        $assignStaff = $auth->createPermission('assignStaff');
        $assignStaff->description = 'assign staff';
        $auth->add($assignStaff);
        # content
        $contentStaff = $auth->createPermission('contentStaff');
        $contentStaff->description = 'content staff';
        $auth->add($contentStaff);
        # reset
        $resetStaff = $auth->createPermission('resetStaff');
        $resetStaff->description = 'reset staff';
        $auth->add($resetStaff);

        # 文章
        # create
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
        $auth->add($trashArticle);

        # 平台
        # create
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
        $auth->add($trashPlatform);

        # 分类
        # create
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
        $auth->add($trashCategory);

        # 账户
        # create
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
        $auth->add($trashAccount);

        # 内容
        # create
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
        $auth->add($trashContent);

        echo "create permission {staff, content, account, article, category, platform} \n";

        #############################################################################
        ## role

        # god
        $god = $auth->createRole('god');
        $god->description = 'god';
        $auth->add($god);
        # staff
        $auth->addChild($god, $createStaff);
        $auth->addChild($god, $updateStaff);
        $auth->addChild($god, $indexStaff);
        $auth->addChild($god, $viewStaff);
        $auth->addChild($god, $freezeStaff);
        $auth->addChild($god, $deleteStaff);
        $auth->addChild($god, $trashStaff);
        $auth->addChild($god, $passwordStaff);
        $auth->addChild($god, $assignStaff);
        $auth->addChild($god, $contentStaff);
        $auth->addChild($god, $resetStaff);
        # article
        $auth->addChild($god, $createArticle);
        $auth->addChild($god, $updateArticle);
        $auth->addChild($god, $indexArticle);
        $auth->addChild($god, $viewArticle);
        $auth->addChild($god, $deleteArticle);
        $auth->addChild($god, $trashArticle);
        # platform
        $auth->addChild($god, $createPlatform);
        $auth->addChild($god, $updatePlatform);
        $auth->addChild($god, $indexPlatform);
        $auth->addChild($god, $viewPlatform);
        $auth->addChild($god, $deletePlatform);
        $auth->addChild($god, $trashPlatform);
        # category
        $auth->addChild($god, $createCategory);
        $auth->addChild($god, $updateCategory);
        $auth->addChild($god, $indexCategory);
        $auth->addChild($god, $viewCategory);
        $auth->addChild($god, $deleteCategory);
        $auth->addChild($god, $trashCategory);
        # account
        $auth->addChild($god, $createAccount);
        $auth->addChild($god, $updateAccount);
        $auth->addChild($god, $indexAccount);
        $auth->addChild($god, $viewAccount);
        $auth->addChild($god, $deleteAccount);
        $auth->addChild($god, $trashAccount);
        # content
        $auth->addChild($god, $createContent);
        $auth->addChild($god, $updateContent);
        $auth->addChild($god, $indexContent);
        $auth->addChild($god, $viewContent);
        $auth->addChild($god, $verifyContent);
        $auth->addChild($god, $deleteContent);
        $auth->addChild($god, $trashContent);

        # leader
        $leader = $auth->createRole('leader');
        $leader->description = '领导';
        $auth->add($leader);
        # staff
        $auth->addChild($leader, $createStaff);
        $auth->addChild($leader, $updateStaff);
        $auth->addChild($leader, $indexStaff);
        $auth->addChild($leader, $viewStaff);
        $auth->addChild($leader, $freezeStaff);
        $auth->addChild($leader, $trashStaff);
        $auth->addChild($leader, $passwordStaff);
        $auth->addChild($leader, $assignStaff);
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

        # editor
        $editor = $auth->createRole('editor');
        $editor->description = '编辑人员';
        $auth->add($editor);
        $auth->addChild($editor, $createContent);

        # inspector
        $inspector = $auth->createRole('inspector');
        $inspector->description = '审核人员';
        $auth->add($inspector);
        $auth->addChild($inspector, $verifyContent);
        $auth->addChild($inspector, $indexContent);
        $auth->addChild($inspector, $viewContent);

        ## grade level
        #         god
        #        leader
        #   editor  inspector
        $auth->addChild($god, $leader);
        $auth->addChild($leader, $editor);
        $auth->addChild($leader, $inspector);

        echo "create four role {god, leader, editor, inspector} \n";

        #############################################################################
        # rule

        # add rule
        $rule = new \backend\rbac\OwnerRule;
        $auth->add($rule);

        # content.update
        $updateOwnContent = $auth->createPermission('updateOwnContent');
        $updateOwnContent->description = '修改本人添加的内容';
        $updateOwnContent->ruleName = $rule->name;
        $auth->add($updateOwnContent);
        # content.delete
        $deleteOwnContent = $auth->createPermission('deleteOwnContent');
        $deleteOwnContent->description = '删除本人添加的内容';
        $deleteOwnContent->ruleName = $rule->name;
        $auth->add($deleteOwnContent);
        # content.trash
        $trashOwnContent = $auth->createPermission('trashOwnContent');
        $trashOwnContent->description = '软删除本人添加的内容';
        $trashOwnContent->ruleName = $rule->name;
        $auth->add($trashOwnContent);
        # content.index
        $indexOwnContent = $auth->createPermission('indexOwnContent');
        $indexOwnContent->description = '查看本人添加的内容列表';
        $indexOwnContent->ruleName = $rule->name;
        $auth->add($indexOwnContent);
        # content.view
        $viewOwnContent = $auth->createPermission('viewOwnContent');
        $viewOwnContent->description = '查看本人添加的内容的详情';
        $viewOwnContent->ruleName = $rule->name;
        $auth->add($viewOwnContent);

        $auth->addChild($updateOwnContent, $auth->getPermission('updateContent'));
        $auth->addChild($deleteOwnContent, $auth->getPermission('deleteContent'));
        $auth->addChild($trashOwnContent, $auth->getPermission('trashContent'));
        $auth->addChild($indexOwnContent, $auth->getPermission('indexContent'));
        $auth->addChild($viewOwnContent, $auth->getPermission('viewContent'));
        $auth->addChild($auth->getRole('editor'), $updateOwnContent);
        $auth->addChild($auth->getRole('editor'), $trashOwnContent);
        $auth->addChild($auth->getRole('editor'), $indexOwnContent);
        $auth->addChild($auth->getRole('editor'), $viewOwnContent);

        echo "create additional rule {index, view, udpate, freeze, trash, delete} \n";

        #############################################################################
        # assign

        $auth->assign($god, 1);       # haoliang
        $auth->assign($leader, 2);  # languo
        $auth->assign($editor, 3);    # lily
        $auth->assign($inspector, 4); # brandon

        echo "assign user to role \n";

    }/*}}}*/

    public function getAuth()
    {/*{{{*/
        if (!$this->_auth)
            $this->_auth =  Yii::$app->authManager;

        return $this->_auth;
    }/*}}}*/

}
