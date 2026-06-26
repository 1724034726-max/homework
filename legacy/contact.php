<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>联系我们 · 猫语森林</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* ===== 联系页专属样式（增强毛玻璃感） ===== */
        .contact-wrapper {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 40px;
            margin: 30px 0 50px;
        }
        .contact-info {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border-radius: 32px;
            padding: 35px 30px;
            box-shadow: 0 12px 40px rgba(120, 80, 60, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.6);
        }
        .contact-info h3 {
            color: #4a2c1e;
            font-size: 22px;
            margin-bottom: 20px;
            text-align: center;
        }
        .contact-info .info-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 14px 0;
            border-bottom: 1px solid rgba(200, 180, 168, 0.25);
        }
        .contact-info .info-item:last-child {
            border-bottom: none;
        }
        .contact-info .info-icon {
            font-size: 28px;
            width: 45px;
            text-align: center;
            flex-shrink: 0;
        }
        .contact-info .info-text {
            font-size: 16px;
            color: #4a3a2e;
        }
        .contact-info .info-text strong {
            display: block;
            font-size: 13px;
            color: #8a7a6e;
            font-weight: 500;
        }
        .form-wrapper {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border-radius: 32px;
            padding: 35px 30px;
            box-shadow: 0 12px 40px rgba(120, 80, 60, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.6);
        }
        .form-wrapper h3 {
            color: #4a2c1e;
            font-size: 22px;
            margin-bottom: 6px;
            text-align: center;
        }
        .form-wrapper .form-subtitle {
            text-align: center;
            color: #8a7a6e;
            font-size: 14px;
            margin-bottom: 25px;
        }
        .form-group {
            margin-bottom: 18px;
        }
        .form-group label {
            display: block;
            font-weight: 600;
            font-size: 14px;
            color: #4a2c1e;
            margin-bottom: 5px;
        }
        .form-group label .required {
            color: #d68f6e;
            margin-left: 2px;
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e8ddd5;
            border-radius: 16px;
            font-size: 16px;
            font-family: inherit;
            background: rgba(255, 255, 255, 0.5);
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #c17b5c;
            box-shadow: 0 0 0 4px rgba(193, 123, 92, 0.10);
            background: #fff;
        }
        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }
        .btn-submit {
            width: 100%;
            background: linear-gradient(135deg, #c17b5c, #d68f6e);
            color: #fff;
            border: none;
            padding: 14px;
            border-radius: 30px;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.3s;
            letter-spacing: 1px;
        }
        .btn-submit:hover {
            transform: scale(1.02);
            box-shadow: 0 12px 28px rgba(193, 123, 92, 0.25);
        }
        .btn-submit:active {
            transform: scale(0.98);
        }
        .msg-box {
            background: rgba(255, 248, 244, 0.8);
            backdrop-filter: blur(8px);
            border-radius: 32px;
            padding: 50px 40px;
            text-align: center;
            margin: 30px 0 50px;
            border: 1px solid rgba(255, 255, 255, 0.6);
        }
        .msg-box .msg-icon {
            font-size: 64px;
            margin-bottom: 15px;
        }
        .msg-box h3 {
            color: #4a2c1e;
            font-size: 28px;
            margin-bottom: 10px;
        }
        .msg-box p {
            font-size: 18px;
            color: #6a5a4e;
        }
        .msg-box .btn-back {
            display: inline-block;
            margin-top: 20px;
            background: #c17b5c;
            color: #fff;
            padding: 10px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s;
        }
        .msg-box .btn-back:hover {
            background: #d68f6e;
        }
        @media (max-width: 768px) {
            .contact-wrapper {
                grid-template-columns: 1fr;
                gap: 25px;
            }
            .form-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <!-- 登录保护脚本 -->
    <script src="auth.js" defer></script>
</head>
<body>
    <header>
        <div class="container header-content">
            <div class="logo">
                <a href="index.html">
                    <img src="logo.png" alt="猫语森林">
                    <span class="logo-text">猫语<span>森林</span></span>
                </a>
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="index.html">首页</a></li>
                    <li><a href="cat-guide.html">猫咪图鉴</a></li>
                    <li><a href="rescue-stories.html">救助故事</a></li>
                    <li><a href="cloud-adopt.html">云养猫</a></li>
                    <li><a href="about.html">关于</a></li>
                    <li><a href="contact.php">联系我们</a></li>
                    <!-- 用户状态将渲染到这里 -->
                    <li id="userAreaContainer"></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <h2 class="section-title">📬 联系我们</h2>
        <p style="text-align:center; font-size:18px; color:#6a5a4e; max-width:600px; margin: -10px auto 10px;">
            如有任何疑问、领养意向或合作建议，欢迎随时与我们联系 💌
        </p>

        <?php
        // ===== PHP 表单处理 =====
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name'] ?? '');
            $phone = htmlspecialchars($_POST['phone'] ?? '');
            $email = htmlspecialchars($_POST['email'] ?? '');
            $message = htmlspecialchars($_POST['message'] ?? '');
            
            if (!empty($name)) {
                echo '
                <div class="msg-box">
                    <div class="msg-icon">🐾</div>
                    <h3>谢谢您，' . $name . '！</h3>
                    <p>您的留言已收到，我们会在 <strong>3个工作日内</strong> 与您联系。</p>
                    <p style="margin-top:5px; font-size:15px; color:#8a7a6e;">一起帮助更多流浪猫 ❤️</p>
                    <a href="contact.php" class="btn-back">返回继续填写</a>
                </div>
                ';
            } else {
                echo '
                <div class="msg-box" style="border:2px solid #d68f6e;">
                    <div class="msg-icon">⚠️</div>
                    <h3>请填写您的姓名</h3>
                    <p>方便我们称呼您，谢谢！</p>
                    <a href="contact.php" class="btn-back">返回修改</a>
                </div>
                ';
            }
        } else {
            // ===== 显示联系表单 =====
        ?>

        <div class="contact-wrapper">
            <!-- 左侧：联系信息 -->
            <div class="contact-info">
                <h3>📌 联系方式</h3>
                <div class="info-item">
                    <span class="info-icon">📞</span>
                    <div class="info-text">
                        <strong>联系电话</strong>
                        138-2388-5678
                    </div>
                </div>
                <div class="info-item">
                    <span class="info-icon">📧</span>
                    <div class="info-text">
                        <strong>电子邮箱</strong>
                        catforest@help.com
                    </div>
                </div>
                <div class="info-item">
                    <span class="info-icon">📍</span>
                    <div class="info-text">
                        <strong>办公地址</strong>
                        广东省梅州市嘉应学院 计算机学院
                    </div>
                </div>
                <div class="info-item">
                    <span class="info-icon">🕐</span>
                    <div class="info-text">
                        <strong>工作时间</strong>
                        周一至周五 9:00 – 18:00
                    </div>
                </div>
                <div class="info-item" style="border-bottom:none; padding-bottom:5px;">
                    <span class="info-icon">💬</span>
                    <div class="info-text">
                        <strong>社交媒体</strong>
                        <div style="margin-top:5px; display:flex; gap:12px; flex-wrap:wrap;">
                            <a href="#" style="color:#c17b5c; text-decoration:none; font-weight:500;">微信</a>
                            <a href="#" style="color:#c17b5c; text-decoration:none; font-weight:500;">微博</a>
                            <a href="#" style="color:#c17b5c; text-decoration:none; font-weight:500;">小红书</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 右侧：表单 -->
            <div class="form-wrapper">
                <h3>✉️ 给我们留言</h3>
                <p class="form-subtitle">收到消息后，我们会尽快回复您</p>
                <form method="post" action="contact.php">
                    <div class="form-group">
                        <label for="name">您的姓名 <span class="required">*</span></label>
                        <input type="text" id="name" name="name" placeholder="请输入您的姓名" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">手机号码</label>
                            <input type="text" id="phone" name="phone" placeholder="选填">
                        </div>
                        <div class="form-group">
                            <label for="email">电子邮箱</label>
                            <input type="text" id="email" name="email" placeholder="选填">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">留言内容 <span class="required">*</span></label>
                        <textarea id="message" name="message" placeholder="请告诉我们您的需求或建议…（如：领养咨询、合作意向、问题反馈等）" required></textarea>
                    </div>
                    <button type="submit" class="btn-submit">✉️ 提交留言</button>
                </form>
            </div>
        </div>

        <?php } // end else ?>
    </main>

    <footer>
        <div class="container footer-content">
            <div class="social-links">
                <a href="#">📱 微信</a> | <a href="#">📧 微博</a> | <a href="#">📷 小红书</a>
            </div>
            <p>&copy; 2025 猫语森林. 邓云心 版权所有.</p>
            <p>本网站为课堂实验作品，图片来源于网络，如有侵权请联系删除。</p>
        </div>
    </footer>

    <!-- 登录状态管理与渲染 -->
    <script>
        (function() {
            const userData = localStorage.getItem('catforest_user');
            if (!userData) {
                window.location.href = 'login.html';
                return;
            }
            try {
                const user = JSON.parse(userData);
                const container = document.getElementById('userAreaContainer');
                if (container) {
                    container.innerHTML = `
                        <div class="user-area">
                            <span class="user-avatar">${user.avatar || '🐱'}</span>
                            <span class="user-name">${user.name || '守护者'}</span>
                            <button class="btn-logout" id="logoutBtn">退出</button>
                        </div>
                    `;
                    document.getElementById('logoutBtn').addEventListener('click', function() {
                        localStorage.removeItem('catforest_user');
                        window.location.href = 'login.html';
                    });
                }
            } catch (e) {
                localStorage.removeItem('catforest_user');
                window.location.href = 'login.html';
            }
        })();
    </script>
</body>
</html>