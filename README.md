# I'm studying how to use github

这是我学习做的第一个github项目。

## 项目介绍

这个项目用于学习 Git、GitHub。

## 查看git版本

git --version

## 配置github用户信息

1. git config --global user.name xxx (xxx为用户名称)

2. git config --global uesr.email xxx (xxx为邮箱地址)

*其中config为配置文件，--global为全局配置*

## 查看github用户信息

1. git config --global user.name

2. git config --global user.email

## 初始化项目

git init

*该命令会创建一个.git隐藏文件，这就是本地的git仓库*

## 创建分支

1. git checkout -b 分支名 (创建一个新的分支)

2. git switch -c 分支名 (创建一个新的分支)

*两种方式均可创建分支*

3. git fetch origin (查看远程分支)

4. git checkout -b 分支名 仓库名/远程仓库分支名 (建立一个分支连接远程仓库内的分支)

*主要是连接default的main分支*

5. git brunch (查看本地git分支)

## 远程连接GitHub仓库

1. git remote add origin 仓库连接 (远程连接仓库)

*remote是远程仓库，oringin为仓库名称，可以任意自起*

2. git remote -v (查看仓库信息)

## 提交文件

1. git add . (把当前文件夹目录下的文件均设置为待提交状态，也就是添加到了文件暂存区)
<br>
git add 文件/文件夹名称 (把某个文件/文件夹设置为待提交状态)

2. git commit -m "填写备注"  (上交文件)

3. git log (查看提交历史记录)

4. git push -u origin 分支名称 (上交到github仓库内的某一个分支)

## 下载文件

git clone 仓库链接 (克隆仓库)

git pull 远程仓库名 分支名 (把仓库的项目更新到本地的项目仓库中)

git checkout HEAD 文件名 (把最近一次更新的文件更新到本地的项目仓库中)

## 查看github的状态

1. git status (查看git状态)


