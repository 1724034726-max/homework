// auth.js —— 全局登录状态管理
(function() {
    const userData = localStorage.getItem('catforest_user');
    if (!userData) {
        // 未登录，跳转登录页
        window.location.href = 'login.html';
        return;
    }

    // 尝试解析用户数据
    try {
        const user = JSON.parse(userData);
        // 可选：检查登录时效（7天自动过期）
        const maxAge = 7 * 24 * 60 * 60 * 1000;
        if (Date.now() - user.loginTime > maxAge) {
            localStorage.removeItem('catforest_user');
            window.location.href = 'login.html';
            return;
        }
        // 将用户数据挂载到全局，方便其他脚本使用
        window.__catforest_user = user;
    } catch (e) {
        localStorage.removeItem('catforest_user');
        window.location.href = 'login.html';
    }
})();

// 渲染用户状态栏（在页面中调用）
function renderUserArea(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;
    const user = window.__catforest_user;
    if (!user) {
        container.innerHTML = `<a href="login.html" class="btn" style="padding:4px 18px;font-size:14px;">登录</a>`;
        return;
    }
    container.innerHTML = `
        <div class="user-area">
            <span class="user-avatar">${user.avatar || '🐱'}</span>
            <span class="user-name">${user.name || '守护者'}</span>
            <button class="btn-logout" id="globalLogoutBtn">退出</button>
        </div>
    `;
    const logoutBtn = document.getElementById('globalLogoutBtn');
    if (logoutBtn) {
        logoutBtn.addEventListener('click', function() {
            localStorage.removeItem('catforest_user');
            window.location.href = 'login.html';
        });
    }
}