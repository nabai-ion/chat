<?php
session_start();

// 如果已登录（通过session或cookie），直接跳转到聊天页面
if (isset($_SESSION['username']) || isset($_COOKIE['user_data'])) {
    header("Location: chat.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <h2>欢迎进入聊天室</h2>
        
        <!-- 头像上传 -->
        <div class="avatar-upload">
            <div class="avatar-preview" id="avatarPreview">
                <img id="avatarImage" src="ions/default-avatar.png" alt="头像预览">
            </div>
            <div class="upload-btn-wrapper">
                <button class="upload-btn">上传头像</button>
                <input type="file" id="avatarInput" accept="image/*" onchange="previewAvatar(event)">
            </div>
        </div>
        
        <input type="text" id="username" class="input-field" placeholder="设置您的用户名">
        
        <button class="submit-btn" onclick="login()">登录</button>
    </div>

    <script src="login.js"></script>
</body>
</html>