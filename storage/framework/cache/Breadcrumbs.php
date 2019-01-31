<?php
    Breadcrumbs::register("admin.index", function ($breadcrumbs) {
        $breadcrumbs->push("首页", route("admin.index"));
    });
Breadcrumbs::register("admin.user.manage", function ($breadcrumbs){
        $breadcrumbs->push("用户管理", route("admin.user.manage"));
    });Breadcrumbs::register("admin.permission.index", function ($breadcrumbs) {
                        $breadcrumbs->parent("admin.user.manage");
                        $breadcrumbs->push("权限列表", route("admin.permission.index"));
                    });
                    Breadcrumbs::register("admin.user.index", function ($breadcrumbs) {
                        $breadcrumbs->parent("admin.user.manage");
                        $breadcrumbs->push("用户列表", route("admin.user.index"));
                    });
                    Breadcrumbs::register("admin.permission.create", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.permission.index");
                          $breadcrumbs->push("添加权限", route("admin.permission.create"));
                        });
                  Breadcrumbs::register("admin.permission.edit", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.permission.index");
                          $breadcrumbs->push("修改权限", route("admin.permission.edit"));
                        });
                  Breadcrumbs::register("admin.permission.destroy ", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.permission.index");
                          $breadcrumbs->push("删除权限", route("admin.permission.destroy "));
                        });
                  Breadcrumbs::register("admin.user.create", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.user.index");
                          $breadcrumbs->push("添加用户页面", route("admin.user.create"));
                        });
                  Breadcrumbs::register("admin.user.edit", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.user.index");
                          $breadcrumbs->push("编辑用户页面", route("admin.user.edit"));
                        });
                  Breadcrumbs::register("admin.user.destroy", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.user.index");
                          $breadcrumbs->push("删除用户", route("admin.user.destroy"));
                        });
                  Breadcrumbs::register("admin.user.export", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.user.index");
                          $breadcrumbs->push("用户导出", route("admin.user.export"));
                        });
                  Breadcrumbs::register("admin.user.import", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.user.index");
                          $breadcrumbs->push("用户导入", route("admin.user.import"));
                        });
                  Breadcrumbs::register("admin.user.detail", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.user.index");
                          $breadcrumbs->push("用户详情", route("admin.user.detail"));
                        });
                  Breadcrumbs::register("admin.user.store", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.user.index");
                          $breadcrumbs->push("添加用户操作", route("admin.user.store"));
                        });
                  Breadcrumbs::register("admin.user.update", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.user.index");
                          $breadcrumbs->push("编辑用户操作", route("admin.user.update"));
                        });
                  Breadcrumbs::register("admin.info.manage", function ($breadcrumbs){
        $breadcrumbs->push("信息管理", route("admin.info.manage"));
    });Breadcrumbs::register("admin.info.index", function ($breadcrumbs) {
                        $breadcrumbs->parent("admin.info.manage");
                        $breadcrumbs->push("信息列表", route("admin.info.index"));
                    });
                    Breadcrumbs::register("admin.info.edit", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.info.index");
                          $breadcrumbs->push("编辑信息页面", route("admin.info.edit"));
                        });
                  Breadcrumbs::register("admin.info.create", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.info.index");
                          $breadcrumbs->push("添加信息页面", route("admin.info.create"));
                        });
                  Breadcrumbs::register("admin.info.destroy", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.info.index");
                          $breadcrumbs->push("删除信息", route("admin.info.destroy"));
                        });
                  Breadcrumbs::register("admin.info.export", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.info.index");
                          $breadcrumbs->push("信息导出", route("admin.info.export"));
                        });
                  Breadcrumbs::register("admin.info.import", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.info.index");
                          $breadcrumbs->push("信息导入", route("admin.info.import"));
                        });
                  Breadcrumbs::register("admin.info.detail", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.info.index");
                          $breadcrumbs->push("信息查看", route("admin.info.detail"));
                        });
                  Breadcrumbs::register("admin.info.store", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.info.index");
                          $breadcrumbs->push("添加信息操作", route("admin.info.store"));
                        });
                  Breadcrumbs::register("admin.info.update", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.info.index");
                          $breadcrumbs->push("编辑信息操作", route("admin.info.update"));
                        });
                  Breadcrumbs::register("admin.school.manage", function ($breadcrumbs){
        $breadcrumbs->push("院校管理", route("admin.school.manage"));
    });Breadcrumbs::register("admin.school.index", function ($breadcrumbs) {
                        $breadcrumbs->parent("admin.school.manage");
                        $breadcrumbs->push("院校列表", route("admin.school.index"));
                    });
                    Breadcrumbs::register("admin.school.edit", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.school.index");
                          $breadcrumbs->push("编辑院校页面", route("admin.school.edit"));
                        });
                  Breadcrumbs::register("admin.school.create", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.school.index");
                          $breadcrumbs->push("添加院校页面", route("admin.school.create"));
                        });
                  Breadcrumbs::register("admin.school.delete", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.school.index");
                          $breadcrumbs->push("删除院校", route("admin.school.delete"));
                        });
                  Breadcrumbs::register("admin.school.export", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.school.index");
                          $breadcrumbs->push("导出院校", route("admin.school.export"));
                        });
                  Breadcrumbs::register("admin.school.import", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.school.index");
                          $breadcrumbs->push("导入院校", route("admin.school.import"));
                        });
                  Breadcrumbs::register("admin.school.update", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.school.index");
                          $breadcrumbs->push("修改院校操作", route("admin.school.update"));
                        });
                  Breadcrumbs::register("admin.school.store", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.school.index");
                          $breadcrumbs->push("添加院校操作", route("admin.school.store"));
                        });
                  Breadcrumbs::register("admin.operationLog.manage", function ($breadcrumbs){
        $breadcrumbs->push("系统日志", route("admin.operationLog.manage"));
    });Breadcrumbs::register("admin.operationLog.index", function ($breadcrumbs) {
                        $breadcrumbs->parent("admin.operationLog.manage");
                        $breadcrumbs->push("日志列表", route("admin.operationLog.index"));
                    });
                    Breadcrumbs::register("admin.role.manage", function ($breadcrumbs){
        $breadcrumbs->push("角色管理", route("admin.role.manage"));
    });Breadcrumbs::register("admin.role.index", function ($breadcrumbs) {
                        $breadcrumbs->parent("admin.role.manage");
                        $breadcrumbs->push("角色列表", route("admin.role.index"));
                    });
                    Breadcrumbs::register("admin.role.create", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.role.index");
                          $breadcrumbs->push("添加角色页面", route("admin.role.create"));
                        });
                  Breadcrumbs::register("admin.role.edit", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.role.index");
                          $breadcrumbs->push("编辑角色页面", route("admin.role.edit"));
                        });
                  Breadcrumbs::register("admin.role.destroy", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.role.index");
                          $breadcrumbs->push("删除角色", route("admin.role.destroy"));
                        });
                  Breadcrumbs::register("admin.role.update", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.role.index");
                          $breadcrumbs->push("编辑角色操作", route("admin.role.update"));
                        });
                  Breadcrumbs::register("admin.role.store", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.role.index");
                          $breadcrumbs->push("添加角色操作", route("admin.role.store"));
                        });
                  