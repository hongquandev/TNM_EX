<?php
function jsonOutput($data)
{
    header('Content-Type: application/json');
    echo json_encode($data);
    exit();
}

// Yêu Cầu: 
// Prepares: git clone https://github.com/hongquandev/TNM_EX.git, localhost, mysql
// 1. Tạo table user trong user.script.sql, thiết lập localhost và database
// 2. Sử dụng Mysql Adapter bất kỳ để xử lý trên DB vd (mysql_connect, PDO, mysqli....)
// 3. Tạo các functions tương ứng với các API yêu cầu dưới đây :

/**
 * @api POST TNM_Ex/user.php?action=createUser 
 * @method createUser()
 * @param string $user_id (required)
 * @param string $first_name (required)
 * @param string $last_name (required)
 * @param string $email (required)
 * @param string $phone (optional)
 * @param string $status (optional)
 * @return array
 */

/**
 * ex: http://localhost/TNM_Ex/user.php?action=getUserDetail
 * @api GET TNM_Ex/user.php?action=getUserDetail
 * @method getUserDetail()
 * @param string $user_id (required)
 * @return array
 */

/**
 * @api GET TNM_Ex/user.php?action=getUserList
 * @method getUserList()
 * @param string $user_id (optional)
 * @param string $status (optional)
 * @param string $page (optional)
 * @param string $limit (optional)
 * @return array Users
 */

/**
 * @api POST TNM_Ex/user.php?action=updateUser
 * @method updateUser()
 * @param string $user_id (required)
 * @param string $first_name (required)
 * @param string $last_name (required)
 * @param string $email (required)
 * @param string $phone (optional)
 * @param string $status (optional)
 * @return array
 */

/**
 * @api POST TNM_Ex/user.php?action=removeUser
 * @method removeUser()
 * @param string $user_id (required)
 * @return array
 */

/**
 * @api POST TNM_Ex/user.php?action=searchUser
 * @method searchUser()
 * @param string $first_name (required)
 * @param string $email (optional)
 * @param string $phone (optional)
 * @param string $page (optional)
 * @param string $limit (optional)
 * @return array
 */

// BEGIN CODE HERE
//.....
//.....

function getUserDetail()
{
    //.....
    var_dump($_GET['user_id']);
    // Example Json Success
    $result = [
        'success' => 1,
        'message' => '',
        'data' => [
            'user_id' => 1,
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'test@gmail.com',
            'status' => 'active',
            'phone' => null,
        ],
    ];

    // Example Json Error
    $result = [
        'success' => 0,
        'message' => 'User not found.',
        'data' => null
    ];

    jsonOutput($result);
}
//.....
// END CODE

//
if(!empty($_GET['action']) && function_exists($_GET['action'])){
    $_GET['action']();
}else{
    echo "This function is not exist.";
}
