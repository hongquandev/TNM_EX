<?php
function jsonOutput($data)
{
    header('Content-Type: application/json');
    echo json_encode($data);
    exit();
}

// Yêu Cầu:
// 1. Tạo table user trong user.script.sql, thiết lập localhost và database
// 2. Sử dụng Mysql Adapter bất kỳ để xử lý trên DB vd (mysql_connect, PDO, mysqli....)
// 3. Tạo các functions tương ứng với các API yêu cầu dưới đây :

/**
 * @api POST localhost/TNM_Ex/user.php?action=createUser
 * @method createUser()
 * @param string $user_id
 * @param string $first_name
 * @param string $last_name
 * @param string $email
 * @param string $phone
 * @param string $status
 * @return array
 */

/**
 * @api GET localhost/TNM_Ex/user.php?action=getUserDetail
 * @method getUserDetail()
 * @param string $user_id
 * @return array
 */

/**
 * @api GET /user.php
 * @method getUserList()
 * @param string $user_id
 * @param string $status
 * @param string $page
 * @param string $limit
 * @return array Users
 */

/**
 * @api POST /user.php
 * @method updateUser()
 * @param string $user_id
 * @param string $first_name
 * @param string $last_name
 * @param string $email
 * @param string $phone
 * @param string $status
 * @return array
 */

/**
 * @api POST /user.php
 * @method removeUser()
 * @param string $user_id
 * @return array
 */

// BEGIN CODE HERE
//.....
//.....

function getUserDetail()
{
    //.....

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
!empty($_GET['action']) && $_GET['action']();