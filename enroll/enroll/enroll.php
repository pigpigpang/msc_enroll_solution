<?php
    $InputName = $InputEmail = $InputQQ = $InputPersonal ='';
    $adjustment=$skill=$gui=$smart=$flag=0;
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
       if(empty($_POST['InputName']))
       {
        echo "<script> alert('姓名不能为空');parent.location.href='enroll.html'; </script>";
       exit();
       }
       if(empty($_POST['InputClass']))
       {
        echo "<script> alert('班级不能为空');parent.location.href='enroll.html'; </script>";
       exit();
       }
       if(empty($_POST['InputQQ']))
       {
        echo "<script> alert('QQ不能为空');parent.location.href='enroll.html'; </script>";
	exit();
       }
       if(empty($_POST['InputEmail']))
       {
        echo "<script> alert('邮箱不能为空');parent.location.href='enroll.html'; </script>";
        exit();
       }
       if(count($_POST['checkbox'])==0)
       {
        echo "<script> alert('请选择你想要去的部门吧');parent.location.href='enroll.html'; </script>";
        exit();
       }
       if(count($_POST['checkbox'])==3)
       {
        echo "<script> alert('太贪心了，最多选择两个想去的部门哦');parent.location.href='enroll.html'; </script>";
        exit();
       }
       if(!isset($_POST['adjustment']))
       {
        echo "<script> alert('请选择是否愿意接受调剂');parent.location.href='enroll.html'; </script>";
        exit();
       }
       if (!preg_match("/^[0-9]*$/",$_POST['InputQQ']))
       {
        echo "<script> alert('QQ只能为数字');parent.location.href='enroll.html'; </script>";
        exit();
        }
       if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$_POST['InputEmail']))
	{
	echo "<script> alert('邮箱格式错误,请注意邮箱格式');parent.location.href='enroll.html'; </script>";
        exit();  
       }
       $InputName=$_POST['InputName'];
       $InputClass=$_POST['InputClass'];
       $InputQQ=$_POST['InputQQ'];
       $InputEmail=$_POST['InputEmail'];
       $InputPersonal=$_POST['InputPersonal'];
       for($count_t=0;$count_t<count($_POST['checkbox']);$count_t++)
       {
            if($_POST['checkbox'][$count_t]=='skill') $skill=1;
            if($_POST['checkbox'][$count_t]=='gui') $gui=1;
            if($_POST['checkbox'][$count_t]=='smart') $smart=1;
       }
       if($_POST['adjustment']==True) $adjustment=1;
       else $adjustment=0;
        if($_POST['InputPersonal']=="太阳太阳,燃烧自己,照亮他人")
        {
            $flag=1;
            echo "<script> alert('恭喜你发现第一个彩蛋');parent.location.href='enroll.html'; </script>";
            exit();
        } 
        if(isset($_POST['pass']))
        {
            if($_POST['pass']!="2019msc")
            {
                $flag=3;
                echo "<script> alert('可能，发生了点小错误，彩蛋爆炸了');parent.location.href='enroll.html'; </script>";
                exit();
            }
            else
            {
                $flag=4;
            }
        }
        if ( $flag==0) {
            echo "<script> alert('报名表的提交已经截止，有问题私聊管理员'); parent.location.href='index.html';</script>";
        } else if( $flag==1){
            echo "<script> alert('彩蛋已经被找完了，不如去找找其他彩蛋吧'); parent.location.href='enroll.html';</script>";
        } else if( $flag==3){
            echo "<script> alert('可能，发生了点小错误，彩蛋爆炸了');parent.location.href='enroll.html'; </script>";
        }  else if( $flag==4){
            echo "<script> alert('恭喜你，找到第二个彩蛋！ 666'); parent.location.href='enroll.html'; </script>";
        }  else {
            echo "<script> alert('发生错误,重试仍有错误，请联系 太阳☀');parent.location.href='index.html'; </script>";
        }
    }
    else
    {
        echo "<script> alert('此页面仅供报名表提交，不如去报名表网页找找彩蛋吧!');parent.location.href='enroll.html'; </script>";
    }
?>
