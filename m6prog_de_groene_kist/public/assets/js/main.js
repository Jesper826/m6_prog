async function hashPassword(password) {
    const enc = new TextEncoder();
    const data = enc.encode(password);
    const hashBuffer = await crypto.subtle.digest('SHA-256', data);
    const hashArray = Array.from(new Uint8Array(hashBuffer));
    const hashHex = hashArray.map(b => b.toString(16).padStart(2, '0')).join('');
    return hashHex;
}

function showMessage(message, type = 'info') {
    const messageEl = document.getElementById('login-message');
    if (!messageEl) return;
    
    messageEl.textContent = message;
    messageEl.className = 'message ' + type;
    messageEl.style.display = 'block';
    
    if (type === 'info') {
        setTimeout(() => {
            messageEl.style.display = 'none';
        }, 5000);
    }
}

async function handleLoginSubmit(event) {
    event.preventDefault();
    
    const userEl = document.getElementById('username');
    const passEl = document.getElementById('password');
    const loginBtn = document.getElementById('loginBtn');
    
    const username = userEl ? userEl.value.trim() : '';
    const password = passEl ? passEl.value : '';
    
    // Validation
    if (!username) {
        showMessage(' Vul alstublieft een gebruikersnaam in', 'error');
        userEl.focus();
        return;
    }
    
    if (!password) {
        showMessage(' Vul alstublieft een wachtwoord in', 'error');
        passEl.focus();
        return;
    }
    
    loginBtn.disabled = true;
    loginBtn.textContent = 'Bezig met inloggen...';
    
    try {
        showMessage('⏳ Wachtwoord wordt verwerkt...', 'info');
        const passwordHash = await hashPassword(password);
        
        showMessage('⏳ Verbinding met server...', 'info');
        const resp = await fetch('login.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ username: username, password: passwordHash })
        });
        
        const text = await resp.text();
        
        if (resp.ok) {
            showMessage(`✅ Welkom ${text}! Je bent nu ingelogd.`, 'success');
            userEl.value = '';
            passEl.value = '';
        } else {
            switch (resp.status) {
                case 404:
                    showMessage(` ${text || 'Gebruiker niet gevonden of wachtwoord onjuist'}`, 'error');
                    break;
                case 400:
                    showMessage(' Ongeldige aanvraag. Probeer opnieuw.', 'error');
                    break;
                case 500:
                    showMessage(` Serverfout: ${text}`, 'error');
                    break;
                default:
                    showMessage(` Fout: ${text}`, 'error');
            }
        }
    } catch (err) {
        showMessage(` Netwerkfout: ${err.message}. Controleer je verbinding.`, 'error');
    } finally {
        loginBtn.disabled = false;
        loginBtn.textContent = 'Inloggen';
    }
}

async function login() {
    const form = document.getElementById('loginForm');
    if (form) {
        handleLoginSubmit({ preventDefault: () => {} });
    }
}
