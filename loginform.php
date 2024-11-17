<?php
ob_start();
session_start();
include __DIR__ . "/ketnoi/connect.php";
//     if(isset($_SESSION["Login"])){
//     header("location:index.php");
//   }
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Login'])) {
    $user_name = trim($_POST['user_name']);
    $password = trim($_POST['password']);
    if (!empty($user_name) && !empty($password)) {
        
        $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user_name = ? AND password = ?");
        $stmt->bind_param("ss", $user_name, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $rowlogin = $result->fetch_assoc();
            $_SESSION["Login"] = $rowlogin;
            header("location: index1.php");
        } else {
            $txt_erro = "Tên đăng nhập hoặc mật khẩu không đúng!";
        }
        $stmt->close();
    } else {
        $txt_erro = "Vui lòng nhập đầy đủ thông tin!";
    }
}

$conn->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Moderustic:wght@300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <h1>Đăng nhập</h1>
            <div class="formcontrol">
                <input id="user_name" name="user_name" type="text" placeholder="Tên đăng nhập" required>
                <small></small>
                <span></span>
            </div>
            <div class="formcontrol">
                <input id="password" name="password" type="password" placeholder="Mật khẩu" required>
                <small></small>
                <span></span>
            </div>
            <button type="submit" class="btnLogin" name="Login">Đăng nhập</button>
            <div class="signuplink">
                Bạn chưa có tài khoản? <a href="register.php">Đăng ký</a>
            </div>
            <?php
            if (isset($txt_erro) && ($txt_erro != "")) {
                echo "<font color='red'>" . htmlspecialchars($txt_erro) . "</font>";
            }
            ?>
        </form>
    </div>
</body>

</html>

<style>
:root {
    --success-color: #2691d9;
    --error-color: #e74c3c;
    --font-main: 'Poppins', sans-serif;
    --font-secondary: 'Roboto', sans-serif;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: linear-gradient(120deg, #3ca7ee, #9b488f);
    height: 100vh;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: var(--font-main);
}

h1 {
    font-family: var(--font-secondary);
    font-weight: 300;
}

.container {
    width: 90%;
    max-width: 400px;
    background: white;
    border-radius: 10px;
    padding: 40px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.container h1 {
    text-align: center;
    margin-bottom: 20px;
}

.formcontrol {
    width: 100%;
    display: flex;
    flex-direction: column;
    position: relative;
    margin-top: 30px;
}

.formcontrol input {
    border: none;
    outline: none;
    border-bottom: 1px solid #adadad;
    padding: 10px;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

.formcontrol input:focus {
    border-color: var(--success-color);
}

.formcontrol small {
    margin-left: 10px;
    margin-top: 5px;
    color: var(--error-color);
    font-size: 12px;
}

.formcontrol span {
    position: absolute;
    border-bottom: 3px solid var(--success-color);
    left: 0;
    top: 35px;
    width: 0%;
    transition: width 0.3s ease;
}

.formcontrol input:focus ~ span {
    width: 100%;
}

.formcontrol.error input {
    border-color: var(--error-color);
}

.btnLogin {
    width: 100%;
    height: 50px;
    border-radius: 25px;
    border: none;
    background: var(--success-color);
    color: white;
    font-size: 18px;
    margin-top: 20px;
    font-weight: bold;
    cursor: pointer;
    transition: transform 0.3s ease, opacity 0.3s ease;
}

.btnLogin:hover {
    transform: scale(0.95);
    opacity: 0.9;
}

.signuplink {
    text-align: center;
    margin-top: 20px;
    font-family: var(--font-secondary);
    font-weight: 300;
    font-size: 14px;
}

.signuplink a {
    color: var(--success-color);
    text-decoration: none;
    transition: color 0.3s ease;
}

.signuplink a:hover {
    color: #1b7db5;
}
@media (max-width: 768px) {
    .container {
        padding: 20px;
    }

    .btnLogin {
        font-size: 16px;
    }
}
</style>


<script>
var user_name = document.querySelector('#user_name');
var password = document.querySelector('#password');
var form = document.querySelector('form');

function showError(input, message) {
    if (!input) return; // Đảm bảo input tồn tại
    let parent = input.parentElement;
    let small = parent.querySelector('small');
    parent.classList.add('error');
    small.innerText = message;
}

function showSuccess(input) {
    if (!input) return; // Đảm bảo input tồn tại
    let parent = input.parentElement;
    let small = parent.querySelector('small');
    parent.classList.remove('error');
    small.innerText = '';
}

function checkEmptyError(listInput) {
    let isEmptyError = false;
    listInput.forEach(input => {
        if (!input || !input.value.trim()) {
            isEmptyError = true;
            showError(input, 'Không được để trống');
        } else {
            showSuccess(input);
        }
    });
    return isEmptyError;
}

function checkLength(input, min, max) {
    if (!input) return true; // Tránh lỗi nếu input không tồn tại
    input.value = input.value.trim();
    if (input.value.length < min) {
        showError(input, `Phải từ ${min} ký tự trở lên`);
        return true;
    } else if (input.value.length > max) {
        showError(input, `Không được vượt quá ${max} ký tự`);
        return true;
    }
    showSuccess(input); // Xác nhận hợp lệ
    return false;
}

form.addEventListener('submit', function (e) {
    let isEmptyError = checkEmptyError([user_name, password]);
    let isuser_nameError = checkLength(user_name, 3, 15);
    let ispasswordError = checkLength(password, 3, 23);

    if (isEmptyError || isuser_nameError || ispasswordError) {
        console.error('Có lỗi xảy ra. Vui lòng kiểm tra lại!');
    } else {
        console.log('Đăng nhập thành công!');
        // Nếu cần, gửi dữ liệu form bằng cách kích hoạt sự kiện submit hoặc gửi qua Ajax
    }
});

</script>
