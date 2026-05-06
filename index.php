<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>code/claude_code用ssh连接虚拟机</title>
</head>
<body>
    <h1>code/claude_code用ssh连接虚拟机</h1>
    <h2>ssh连接虚拟机需要公钥和私钥</h2>
    <h2>本机有SSH客户端，VM虚拟机需要有SSH服务端</h2>

    <ol>
        <li>公钥放在VM上，相当于一把锁，私钥放在本机，相当于钥匙</li>
        <li>检查本机有没有密钥：ls -la ~/.ssh/</li>
        <p>如果有<b>id_rsa(公钥)</b>和<b>id_rsa.pub(私钥)</b>说明已有密钥对，如果没有，用ssh-keygen -t ed25519生成</p>
        <li>要确认VM的ip地址和用户名</li>
        <p>ip addr/ifconfig查看虚拟机ip，命令行前面的xxx@ <u>主机名</u></p>
        <li>在VM上安装SSH服务端</li>
        <h3>若虚拟机连接互联网：</h3>
        <p>安装：<b>sudo apt install openssh-server -y</b></p><br>
        <p>启动：<b>sudo systemctl start ssh</b></p><br>
        <p>设为开机自启:<b>sudo systemctl enable ssh</b></p> <br>
        <p>确认启动：<b>sudo systemctl status ssh</b></p>
        <h3>若虚拟机以仅主机方式连接：</h3>
        <h4>在windows上(Git Bash)</h4>
        <ol>
            <li>创建一个文件夹存放要传的文件</li>
            <p><b>mkdir -p /d/CCSwitch/share</b>(-p 是创建多层目录)</p><br>
            <p><b>cd /d/CSSwitch/share</b></p>
            <li>下载对应版本的deb包</li>
            <p><b>curl -L -o 文件名 http://某个网址/文件 (其中-L是不跳转页面 -o是重新命名 -O是原文件名)</b></p>
            <li>启动HTTP服务</li>
            <p>python3 -m http.server 8899</p>
            <li>切换成VM，从本机下载文件</li>
            <p><b>curl -O http://192.168.8.1:8899/文件名</b></p>
            <li>安装包</li>
            <p><b>sudo dpkg -i *.deb</b></p>

        </ol>
        <li>删除已保存的远程主机指纹和添加远程主机指纹</li>
        <p>删除：<b>ssh-keygen -R 192.168.8.xxx</b></p>
        <p>添加免密登录：<b>ssh-copy-id xxx@192.168.8.xxx</b></p>        
    </ol>
    
</body>
</html>