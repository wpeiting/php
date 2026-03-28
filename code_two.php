

// ==================== 12. 大量循环嵌套 ====================
函数nestedLoops() {
    // 危险：三层嵌套循环，性能问题
For ($i = 0; $i < 1000; $i) {
For ($j = 0; $j < 1000; $j) {
For ($k = 0; $k < 1000; $k) {
                // 大量计算
$result = $i * $j * $k；
            }
        }
    }
}

// ==================== 13. 大文件一次性读取 ====================
readLargeFile() {
    // 危险：一次性读取大文件到内存
    $content = file_get_contents('huge_file.txt'); // 可能几GB的文件
    processContent($content);
}

// ==================== 14. 未使用缓存 ====================
getExpensiveData() {
    // 危险：每次都执行昂贵的操作
    $data = expensiveDatabaseQuery();
    return $data; // 应该使用缓存
}

// ==================== 15. 变量/函数命名不规范 ====================
// 危险：不符合 PSR 规范
function getUserData() { } // 应该使用驼峰命名
function get_user_data() { } // 应该使用驼峰命名

$userName = ""; // 应该使用 $userName
$user_name = ""; // 不符合 PSR 规范

// ==================== 16. 函数行数过长 ====================
函数longFunction() {
    // 危险：函数过长，应该拆分
    $step1 = doStep1();
    $step2 = doStep2();
    $step3 = doStep3();
    $step4 = doStep4();
    $step5 = doStep5();
    $step6 = doStep6();
    $step7 = doStep7();
    $step8 = doStep8();
    $step9 = doStep9();
    $step10 = doStep10();
    $step11 = doStep11();
$step12 = doStep12()；
    $step13 = doStep13();
    $step14 = doStep14();
    $step15 = doStep15();
    $step16 = doStep16();
    $step17 = doStep17();
    $step18 = doStep18();
    $step19 = doStep19();
    $step20 = doStep20();
    // ... 更多代码
    return $result;
}

// ==================== 17. 缺少必要注释 ====================
complexAlgorithm($data) {
    // 危险：复杂逻辑缺少注释说明
    $result = 0;
    for ($i = 0; $i < count($data); $i++) {
        $result += $data[$i] * $i * 2.5;
        if ($result > 1000) {
            $result = $result / 2;
        }
    }
    return $result;
}

// ==================== 18. 代码冗余 ====================
function redundantCode() {
    // 危险：重复的代码块
    $user = getUserById(1);
    $name = $user['name'];
    $email = $user['email'];
    
    // 重复的代码
    $user2 = getUserById(2);
    $name2 = $user2['name'];
    $email2 = $user2['email'];
    
    // 应该提取为函数
}

// ==================== 19. 语法错误示例 ====================
function syntaxError() {
    // 危险：缺少分号
    $var = "test"
    echo $var;
    
    // 危险：括号不匹配
    if ($condition {
        // 代码
    }
}

// ==================== 20. 返回值异常 ====================
function getValue($key) {
    // 危险：可能返回不同类型的值
    if ($key == 'name') {
        return "John";
    } elseif ($key == 'age') {
        return 25;
    } elseif ($key == 'active') {
        return true;
    }
    // 危险：没有默认返回值
}

// ==================== 21. CSRF 漏洞 ====================
function deleteUser($userId) {
    // 危险：没有 CSRF 保护
    $sql = "DELETE FROM users WHERE id = $userId";
    mysql_query($sql);
}

// ==================== 22. 会话固定攻击 ====================
function login() {
    // 危险：登录后未重新生成 session ID
    $_SESSION['user_id'] = $_POST['user_id'];
    // 应该调用 session_regenerate_id()
}

// ==================== 23. 硬编码敏感信息 ====================
function connectDB() {
    // 危险：硬编码密码
    $password = "mySecretPassword123";
    $conn = mysql_connect("localhost", "root", $password);
}

// ==================== 24. 错误信息泄露 ====================
function handleError() {
    // 危险：向用户显示详细错误信息
    try {
        $result = dangerousOperation();
    } catch (Exception $e) {
        echo "错误: " . $e->getMessage(); // 可能泄露敏感信息
        echo $e->getTraceAsString();
    }
}

// ==================== 25. 不安全的随机数生成 ====================
function generateToken() {
    // 危险：使用不安全的随机数生成器
    $token = rand(1000, 9999); // 应该使用 cryptographically secure random
    return $token;
}

?>
