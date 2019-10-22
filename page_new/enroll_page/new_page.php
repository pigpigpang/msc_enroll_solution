<?php
    @$bot="";
    @$bot=$_GET['bot'];
    if(!isset($bot) && $_SERVER["REQUEST_METHOD"] == "GET")
    {
        echo "<script>alert('这地方可不是随随便便可以进的'); parent.location.href='index.html';</script>";
        exit();
    }
    if($bot=='yes')
    {
        echo " <script>alert('good job ,boy');</script>";
	    exit();
    }
    else if($bot=='no')
    {
        echo "<script>alert('机器人或者非本人操作无效'); parent.location.href='index.html';</script>";
        exit();
    }
    else if(isset($bot))
    {
        echo "<script>alert('请按指令输入正确的验证'); parent.location.href='index.html';</script>";
        exit();
    }
