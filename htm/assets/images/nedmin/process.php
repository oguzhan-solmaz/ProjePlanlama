<?php
include 'connect.php';
ob_start();
session_start();

//admin kayit
if(isset($_POST['signup'])){
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    //şifre kontrolü
    if($password_1===$password_2){
        //echo 'şifreler aynı';

        //şifre uzunluk kontrolü
        if(strlen($password_1) >= 6){
            //echo 'başarılı';

            $admin_control = $db->prepare("SELECT * FROM user");
            $admin_control -> execute();

            $has_admin = $admin_control -> rowCount();

            if($has_admin == 0){
                $pass = crc32($password_2);

                $admin_signup = $db -> prepare("INSERT INTO user  SET 
                    user_name='$user_name',
                    email='$email',
                    password='$pass'
                ");
                $insert = $admin_signup -> execute();

                if($insert){
                   //echo 'başarılı';
                   header("Location: login.php?status=ok&user_name=$user_name");

                }else{
                   // echo 'başarısız';
                    header("Location: register.php?register=no");

                }
            }else{
                //echo 'kayıtlı admin mevcut';
                header("Location: register.php?register=hasadmin");
            }
        }else{
            //echo 'şifre 6 karakterden az';
            header("Location: register.php?register=lowchar");
        }
    }else{
        //echo 'şifreler farklı';
        header("Location: register.php?register=inequal");
    }
}

if(isset($_POST['login'])){
    $user_name = $_POST['user_name'];
    $pass = crc32($_POST['password']);

    $login = $db-> prepare("SELECT * FROM user WHERE user_name='$user_name' and password='$pass'");
    $login -> execute();

    $count = $login -> rowCount();

    if($count == 1){
        $_SESSION['user_name'] = $user_name;
        header("Location: index.php");

    }else{
        header("Location: login.php?login=no");
    }
}

//updade and insert

//skill insert
if(isset($_POST['insert_skills'])){
    $title = $_POST['title'];
    $first_skill = $_POST['first_skill'];
    $second_skill = $_POST['second_skill'];
    $third_skill = $_POST['third_skill'];
    $forth_skill = $_POST['forth_skill'];
    $fifth_skill = $_POST['fifth_skill'];
    $sixth_skill = $_POST['sixth_skill'];
    $first_counter = $_POST['first_counter'];
    $second_counter = $_POST['second_counter'];
    $third_counter = $_POST['third_counter'];
    $forth_counter = $_POST['forth_counter'];
    $fifth_counter = $_POST['fifth_counter'];
    $sixth_counter = $_POST['sixth_counter'];

    $insert_skill = $db -> prepare("INSERT INTO skills SET 
        title = '$title',
        first_skill = '$first_skill',
        second_skill = '$second_skill',
        third_skill = '$third_skill',
        forth_skill = '$forth_skill',
        fifth_skill = '$fifth_skill',
        sixth_skill = '$sixth_skill',
        first_counter = '$first_counter',
        second_counter = '$second_counter',
        third_counter = '$third_counter',
        forth_counter = '$forth_counter',
        fifth_counter = '$fifth_counter',
        sixth_counter = '$sixth_counter'

    ");
    $insert = $insert_skill->execute();

    if($insert){
        header("Location: skill.php?insert=ok");
    }else{
        header("Location: skill.php?insert=no");
    }
}

    //skill update
    if(isset($_POST['update_skills'])){
        $title = $_POST['title'];
        $first_skill = $_POST['first_skill'];
        $second_skill = $_POST['second_skill'];
        $third_skill = $_POST['third_skill'];
        $forth_skill = $_POST['forth_skill'];
        $fifth_skill = $_POST['fifth_skill'];
        $sixth_skill = $_POST['sixth_skill'];
        $first_counter = $_POST['first_counter'];
        $second_counter = $_POST['second_counter'];
        $third_counter = $_POST['third_counter'];
        $forth_counter = $_POST['forth_counter'];
        $fifth_counter = $_POST['fifth_counter'];
        $sixth_counter = $_POST['sixth_counter'];


        $update_skill = $db -> prepare("UPDATE skills SET 
            title = '$title',
            first_skill = '$first_skill',
            second_skill = '$second_skill',
            third_skill = '$third_skill',
            forth_skill = '$forth_skill',
            fifth_skill = '$fifth_skill',
            sixth_skill = '$sixth_skill',
            first_counter = '$first_counter',
            second_counter = '$second_counter',
            third_counter = '$third_counter',
            forth_counter = '$forth_counter',
            fifth_counter = '$fifth_counter',
            sixth_counter = '$sixth_counter' WHERE skill_id=1
        ");
        $update = $update_skill -> execute();

        if($update){
            header("Location: skill.php?update=ok");
        }else{
            header("Location: skill.php?update=no");
        }
    



}

    //update and insert for info
    if(isset($_POST['insert_info'])){
        $edu_title = $_POST['edu_title'];
        $high_school = $_POST['high_school'];
        $universty = $_POST['universty'];
   

        $insert_info = $db -> prepare("INSERT INTO education_info SET 
            edu_title = '$edu_title',
            high_school = '$high_school',
            universty = '$universty'
       

        ");
        $insertinfo = $insert_info->execute();

        if($insertinfo){
            header("Location: info.php?insertinfo=ok");
        }else{
            header("Location: info.php?insertinfo=no");
        }
    }

    //info update

    if(isset($_POST['update_info'])){
        $edu_title = $_POST['edu_title'];
        $high_school = $_POST['high_school'];
        $universty = $_POST['universty'];
   


        $update_info = $db -> prepare("UPDATE education_info SET 
            edu_title = '$edu_title',
            high_school = '$high_school',
            universty = '$universty' WHERE edu_id=1
            ");
        $updateinfo = $update_info -> execute();

        if($updateinfo){
            header("Location: info.php?updateinfo=ok");
        }else{
            header("Location: info.php?updateinfo=no");
        }
    }

    //update and insert for contact

    //contact insert
    if(isset($_POST['insert_contact'])){
        $content = $_POST['content'];
        $email = $_POST['email'];
        $copyright = $_POST['copyright'];
        $gsm = $_POST['gsm'];
        $address = $_POST['address'];
   

        $insert_contact = $db -> prepare("INSERT INTO contact_info SET 
            content = '$content',
            email = '$email',
            copyright = '$copyright',
            gsm = '$gsm',
            adress = '$adress'
       

        ");
        $insertcontact = $insert_contact->execute();

        if($insertcontact){
            header("Location: contact.php?insertcontact=ok");
        }else{
            header("Location: contact.php?insertcontact=no");
        }
    }

    //contact update
    if(isset($_POST['update_contact'])){
        $content = $_POST['content'];
        $email = $_POST['email'];
        $copyright = $_POST['copyright'];
        $gsm = $_POST['gsm'];
        $adress = $_POST['adress'];
   


        $update_contact = $db -> prepare("UPDATE contact_info SET 
            content = '$content',
            email = '$email',
            copyright = '$copyright',
            gsm = '$gsm',
            adress = '$adress' WHERE contact_id=1
            ");
        $updatecontact = $update_contact -> execute();

        if($updatecontact){
            header("Location: contact.php?updatecontact=ok");
        }else{
            header("Location: contact.php?updatecontact=no");
        }
    }

    //update and insert for about

    //about insert
    if(isset($_POST['insert_about'])){
        $about_title = $_POST['about_title'];
        $github = $_POST['github'];
        $twitter = $_POST['twitter'];
        $youtube = $_POST['youtube'];
        $instagram = $_POST['instagram'];
        $facebook = $_POST['facebook'];
        $twitch = $_POST['twitch'];
        $biyografi = $_POST['biyografi'];
   

        $insert_about = $db -> prepare("INSERT INTO about_me SET 
            about_title = '$about_title',
            github = '$github',
            twitter = '$twitter',
            youtube = '$youtube',
            instagram = '$instagram',
            facebook = '$facebook',
            twitch = '$twitch',
            biyografi = '$biyografi'
       

        ");
        $insertabout = $insert_about->execute();

        if($insertabout){
            header("Location: about_us.php?insertabout=ok");
        }else{
            header("Location: about_us.php?insertabout=no");
        }
    }

    //about update
    if(isset($_POST['update_about'])){
        $about_title = $_POST['about_title'];
        $github = $_POST['github'];
        $twitter = $_POST['twitter'];
        $youtube = $_POST['youtube'];
        $instagram = $_POST['instagram'];
        $facebook = $_POST['facebook'];
        $twitch = $_POST['twitch'];
        $biyografi = $_POST['biyografi'];


        $update_about = $db -> prepare("UPDATE about_me SET 
            about_title = '$about_title',
            github = '$github',
            twitter = '$twitter',
            youtube = '$youtube',
            instagram = '$instagram',
            facebook = '$facebook',
            twitch = '$twitch',
            biyografi = '$biyografi' WHERE about_id=1
            ");
        $updateabout = $update_about -> execute();

        if($updateabout){
            header("Location: about_us.php?updateabout=ok");
        }else{
            header("Location: about_us.php?updateabout=no");
        }
    }

    //update and insert for settings

    //settings insert
    if(isset($_POST['insert_settings'])){
        $site_title = $_POST['site_title'];
        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        
        
   

        $insert_settings = $db -> prepare("INSERT INTO site_settings SET 
            site_title = '$site_title',
            title = '$title',
            subtitle = '$subtitle'
            

        ");
        $insertsettings = $insert_settings->execute();

        if($insertsettings){
            header("Location: settings.php?insertsettings=ok");
        }else{
            header("Location: settings.php?insertsettings=no");
        }
    }

    //settings update
    if(isset($_POST['update_settings'])){
        $site_title = $_POST['site_title'];
        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        


        $update_settings = $db -> prepare("UPDATE site_settings SET 
            site_title = '$site_title',
            title = '$title',
            subtitle = '$subtitle' WHERE settings_id=1
            ");
        $updatesettings = $update_settings -> execute();

        if($updateabout){
            header("Location: settings.php?updatesettings=ok");
        }else{
            header("Location: settings.php?updatesettings=no");
        }
    }


