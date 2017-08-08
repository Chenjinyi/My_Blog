# My_Blog

----

## 简介

#### 本项目是基于Laravel和bootstrap开发的个人博客

## 更新记录

### Beta 0.1    

#### 更细日期 2017.7.29

#### 前台展示HTML
#### 后台基础HTML
#### 添加删除文章功能部分完成



### Beta 0.2  

#### 更细日期 2017.8.1

####  前台添加分页功能
#### 添加支持Markdown
#### 功能部分轻微优化



### Beta 0.3 

#### 更细日期 2017.8.2

#### 后台添加更改个人信息
#### 后台添加 添加用户功能
#### 后台添加用户列表功能



### Bate 0.3.1 

#### 更细日期 2017.8.7

#### 添加推荐/置顶文章功能

#### 轻微细节优化

----

## 使用方法

#### 请参考Laravel框架文件部署

#### 管理员可使用数据库管理工具添加



### Server为虚拟主机文件

#### 已改好文件路径

#### 使用前请更改Laravel Key

#### 打开/local/config/app.php(之前的/config/app.php)

#### 找到

#### 'key' => env('APP_KEY', '1234567890qwerty'),

#### 'cipher' => 'AES-128-CBC',

#### 把

#### 'key' => env('APP_KEY', '1234567890qwerty'),

#### 后面16位字符串更改



#### 生成数据库请采用laravel数据库迁移

----

## 开发详细

#### 后端使用 Laravel框架 

[https://laravel.com/](https://laravel.com/)

#### 前端使用 Bootstrap 框架

[http://getbootstrap.com/](http://getbootstrap.com/)

#### 开发环境 Ubuntu 17.04 + PHP7.0 + MySQL5.6