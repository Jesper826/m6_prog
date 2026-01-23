const form = document.querySelector('form');

form.addEventListener('submit', function (event) {
    event.preventDefault();

    const formData = new FormData(form);
    const json = {
        text: formData.get('bericht'),
        sign: formData.get('name')
    };

    let options = {
        method: "POST",
        cache: "no-cache",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(json)
    };

    fetch('index.php', options)
        .then(response => response.text())
        .then(data => {
            document.getElementById('wall').outerHTML = data;
        });
});