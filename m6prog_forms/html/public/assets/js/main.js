const form = document.querySelector('form');

form.addEventListener('submit', function (event) {
    event.preventDefault();

    const formData = new FormData(form);
    const json = {
        text: formData.get('bericht'),
        sign: formData.get('name')
    };


    console.log(json);
});


let options =
{
    method: "POST",
    cache: "no-cache",
    headers: { "Content-Type": "application/json" }
}