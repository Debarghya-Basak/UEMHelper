<?php

    $servername = "localhost";
    $username = "id18279637_debarghyabasak";
    $password = "SNH_qZMgGe%3xmK_";

    $connect = mysqli_connect($servername,$username,$password);

    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
      }


    $sql = "CREATE TABLE `id18279637_uemhelper`.`classnote` ( `course` VARCHAR(500) NOT NULL ,  `year` INT(2) NOT NULL ,  `stream` VARCHAR(500) NOT NULL ,  `subject` VARCHAR(500) NOT NULL ,  `pdf` VARCHAR(500) NOT NULL ,  `name` VARCHAR(500) NOT NULL ,    PRIMARY KEY  (`name`)) ENGINE = InnoDB";
    mysqli_query($connect,$sql);
    
    $sql = "CREATE TABLE `id18279637_uemhelper`.`contact` ( `course` VARCHAR(500) NOT NULL ,  `year` INT(2) NOT NULL ,  `stream` VARCHAR(500) NOT NULL ,  `subject` VARCHAR(500) NOT NULL ,  `teachername` VARCHAR(500) NOT NULL ,  `phno` BIGINT(10) NOT NULL ) ENGINE = InnoDB";
    mysqli_query($connect,$sql);

    $sql = "CREATE TABLE `id18279637_uemhelper`.`feedback` ( `sl no` INT NOT NULL AUTO_INCREMENT ,  `name` VARCHAR(500) NOT NULL ,  `email` VARCHAR(500) NOT NULL ,  `phno` BIGINT(10) NOT NULL ,  `message` VARCHAR(5000) NOT NULL ,    PRIMARY KEY  (`sl no`)) ENGINE = InnoDB";
    mysqli_query($connect,$sql);
    
    $sql = "CREATE TABLE `id18279637_uemhelper`.`questionpaper` ( `course` VARCHAR(500) NOT NULL ,  `year` INT(2) NOT NULL ,  `stream` VARCHAR(500) NOT NULL ,  `subject` VARCHAR(500) NOT NULL ,  `pdf` VARCHAR(500) NOT NULL ,  `name` VARCHAR(500) NOT NULL ,    PRIMARY KEY  (`pdf`)) ENGINE = InnoDB";
    mysqli_query($connect,$sql);
    
    $sql = "CREATE TABLE `id18279637_uemhelper`.`studentlogin` ( `enrollment` BIGINT(14) NOT NULL ,  `registration` BIGINT(15) NOT NULL ,  `name` VARCHAR(100) NOT NULL ,  `present` INT(3) NOT NULL ,    PRIMARY KEY  (`enrollment`, `registration`)) ENGINE = InnoDB";
    mysqli_query($connect,$sql);

    $sql = "ALTER TABLE `id18279637_uemhelper`.`contact`  ADD `slno` INT(10) NOT NULL AUTO_INCREMENT  FIRST,  ADD   PRIMARY KEY  (`slno`)";
    mysqli_query($connect,$sql);

    echo "Tables created successfully... Enjoy running the website";

?>