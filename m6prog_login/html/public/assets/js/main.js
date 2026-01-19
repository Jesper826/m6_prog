async function hashPassword(password) {
    const enc = new TextEncoder();
    const data = enc.encode(password);
    const hashBuffer = await crypto.subtle.digest('SHA-256', data);
    const hashArray = Array.from(new Uint8Array(hashBuffer));
    const hashHex = hashArray.map(b => b.toString(16).padStart(2, '0')).join('');
    return hashHex;
}

async function login() {
    const userEl = document.getElementById('username');
    const passEl = document.getElementById('password');
    const resultEl = document.getElementById('result');

    const username = userEl ? userEl.value.trim() : '';
    const password = passEl ? passEl.value : '';

    if (!username) {
        resultEl.textContent = 'Vul een username in';
        return;
    }

    const passwordHash = await hashPassword(password);

    try {
        const resp = await fetch('login.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ username: username, password: passwordHash })
        });

        const text = await resp.text();
        resultEl.textContent = text;
    } catch (err) {
        resultEl.textContent = 'Fout bij verzenden: ' + err;
    }
}
