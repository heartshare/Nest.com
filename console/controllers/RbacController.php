<?php

namespace console\controllers;

use Yii;

use yii\console\Controller;

/**
 * RbacController class file.
 * @Author haoliang
 * @Date 10.12.2014 17:18
 */
class RbacController extends Controller
{
    private $_auth;

    public function actionInit()
    {/*{{{*/
        $auth = $this->auth;
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
        # password
        $passwordStaff = $auth->createPermission('passwordStaff');
        $passwordStaff->description = 'password staff';
        $auth->add($passwordStaff);

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

        #############################################################################
        ## role

        # god
        $god = $auth->createRole('god');
        $god->description = 'god created the world';
        $auth->add($god);
        # staff
        $auth->addChild($god, $createStaff);
        $auth->addChild($god, $updateStaff);
        $auth->addChild($god, $indexStaff);
        $auth->addChild($god, $viewStaff);
        $auth->addChild($god, $freezeStaff);
        $auth->addChild($god, $deleteStaff);
        $auth->addChild($god, $passwordStaff);
        # article
        $auth->addChild($god, $createArticle);
        $auth->addChild($god, $updateArticle);
        $auth->addChild($god, $indexArticle);
        $auth->addChild($god, $viewArticle);
        $auth->addChild($god, $deleteArticle);
        # platform
        $auth->addChild($god, $createPlatform);
        $auth->addChild($god, $updatePlatform);
        $auth->addChild($god, $indexPlatform);
        $auth->addChild($god, $viewPlatform);
        $auth->addChild($god, $deletePlatform);
        # category
        $auth->addChild($god, $createCategory);
        $auth->addChild($god, $updateCategory);
        $auth->addChild($god, $indexCategory);
        $auth->addChild($god, $viewCategory);
        $auth->addChild($god, $deleteCategory);
        # account
        $auth->addChild($god, $createAccount);
        $auth->addChild($god, $updateAccount);
        $auth->addChild($god, $indexAccount);
        $auth->addChild($god, $viewAccount);
        $auth->addChild($god, $deleteAccount);
        # content
        $auth->addChild($god, $createContent);
        $auth->addChild($god, $updateContent);
        $auth->addChild($god, $indexContent);
        $auth->addChild($god, $viewContent);
        $auth->addChild($god, $verifyContent);
        $auth->addChild($god, $deleteContent);

        $leader = $auth->createRole('leader');
        $leader->description = 'leader is god\'s shadow in the world';
        $auth->add($leader);
        # staff
        $auth->addChild($leader, $createStaff);
        $auth->addChild($leader, $updateStaff);
        $auth->addChild($leader, $indexStaff);
        $auth->addChild($leader, $viewStaff);
        $auth->addChild($leader, $freezeStaff);
        $auth->addChild($leader, $deleteStaff);
        $auth->addChild($leader, $passwordStaff);
        # article
        $auth->addChild($leader, $createArticle);
        $auth->addChild($leader, $updateArticle);
        $auth->addChild($leader, $indexArticle);
        $auth->addChild($leader, $viewArticle);
        $auth->addChild($leader, $deleteArticle);
        # platform
        $auth->addChild($leader, $createPlatform);
        $auth->addChild($leader, $updatePlatform);
        $auth->addChild($leader, $indexPlatform);
        $auth->addChild($leader, $viewPlatform);
        $auth->addChild($leader, $deletePlatform);
        # category
        $auth->addChild($leader, $createCategory);
        $auth->addChild($leader, $updateCategory);
        $auth->addChild($leader, $indexCategory);
        $auth->addChild($leader, $viewCategory);
        $auth->addChild($leader, $deleteCategory);
        # account
        $auth->addChild($leader, $createAccount);
        $auth->addChild($leader, $updateAccount);
        $auth->addChild($leader, $indexAccount);
        $auth->addChild($leader, $viewAccount);
        $auth->addChild($leader, $deleteAccount);
        # content
        $auth->addChild($leader, $createContent);
        $auth->addChild($leader, $updateContent);
        $auth->addChild($leader, $indexContent);
        $auth->addChild($leader, $viewContent);
        $auth->addChild($leader, $verifyContent);
        $auth->addChild($leader, $deleteContent);

        # editor
        $editor = $auth->createRole('editor');
        $editor->description = 'editor who writing and writing without end day';
        $auth->add($editor);
        $auth->addChild($editor, $createContent);

        # inspector
        $inspector = $auth->createRole('inspector');
        $inspector->description = 'inspector inspect editor if get things done';
        $auth->add($inspector);
        $auth->addChild($inspector, $verifyContent);

        $auth->addChild($god, $leader);
        $auth->addChild($leader, $editor);
        $auth->addChild($leader, $inspector);

        $auth->assign($god, 1);
        $auth->assign($leader, 198);
        $auth->assign($editor, 3);
        $auth->assign($inspector, 4);

    }/*}}}*/

    public function getAuth()
    {/*{{{*/
        if (!$this->_auth)
            $this->_auth =  Yii::$app->authManager;

        return $this->_auth;
    }/*}}}*/

    public function demo()
    {/*{{{*/
        $auth = $this->auth;

        # create Content
        $createContent = $auth->createPermission('createContent');
        $createContent->description = 'Create Content';
        $auth->add($createContent);
        # update Content
        $updateContent = $auth->createPermission('updateContent');
        $updateContent-> description = 'Update Content';
        $auth->add($updateContent);

        # add editor role that can create content
        $editor = $auth->createRole('editor');
        $auth->add($editor);
        $auth->addChild($editor, $createContent);

        # add admin role that can update content and belongs same permission of editor
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $updateContent);
        $auth->addChild($admin, $editor);

        # add rule
        $rule = new \backend\rbac\EditorRule;
        $auth->add($rule);

        $updateOwnContent = $auth->createPermission('updateOwnContent');
        $updateContent->description = 'Update Own Content';
        $updateContent->ruleName = $rule->name;
        $auth->add($updateOwnContent);

        $auth->addChild($updateContent, $updateOwnContent);
        $auth->addChild($editor, $updateOwnContent);

        $auth->assign($editor, 198);
        $auth->assign($admin, 1);


    }/*}}}*/

}
