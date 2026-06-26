const STORAGE_KEY = 'catforest_user'
const MAX_AGE = 7 * 24 * 60 * 60 * 1000

export function getUser() {
  const userData = localStorage.getItem(STORAGE_KEY)
  if (!userData) return null

  try {
    const user = JSON.parse(userData)
    if (Date.now() - user.loginTime > MAX_AGE) {
      localStorage.removeItem(STORAGE_KEY)
      return null
    }
    return user
  } catch {
    localStorage.removeItem(STORAGE_KEY)
    return null
  }
}

export function login(username, password) {
  if (username === 'catlover' && password === '123456') {
    const userData = {
      name: '猫语守护者',
      username,
      avatar: '🐱',
      loginTime: Date.now(),
    }
    localStorage.setItem(STORAGE_KEY, JSON.stringify(userData))
    return { success: true, user: userData }
  }
  return { success: false }
}

export function logout() {
  localStorage.removeItem(STORAGE_KEY)
}

export function isLoggedIn() {
  return getUser() !== null
}
