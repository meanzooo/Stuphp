<?php
//JDBC 참조 변수를 담은 클래스
class db_info{
    const DB_URL = "localhost";
    const USER_ID = "meanzoo";
    const PASSWD = "buyby2020!";
    const DB_NAME = "meanzoo";
}

function db_connect() {
    //db_con 변수에 db를 연결시킨 값을 저장해둠
    $db_con = mysqli_connect(db_info::DB_URL, db_info::USER_ID, db_info::PASSWD, db_info::DB_NAME);

    //에러 발생 시 에러를 출력
    if(mysqli_connect_errno($db_con)){ //errno - 에러코드번호를 반환함
        echo "db연결 실패!".mysqli_connect_error(); //error - 에러 메시지를 반환함
    }

    //한글로 db서버로 데이터를 전송하겠다~
    mysqli_set_charset($db_con, 'utf8');
    return $db_con;
}
?>