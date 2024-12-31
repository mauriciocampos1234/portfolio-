var form = document.getElementById("formulario");
    
    async function handleSubmit(event) {
    event.preventDefault();
    var status = document.getElementById("my-form-status");
    var data = new FormData(event.target);
    fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
    }).then(response => {
    if (response.ok) {
        status.innerHTML = "Obrigado pela mensagem, logo retornaremos seu contato!";
        form.reset()
    } else {
        response.json().then(data => {
    if (Object.hasOwn(data, 'errors')) {
            status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
    } else {
            status.innerHTML = "Ops! Ocorreu um problema ao enviar seu formulário"
    }
        })
    }
    }).catch(error => {
    status.innerHTML = "Ops! Ocorreu um problema ao enviar seu formulário"
    });
    }
    form.addEventListener("submit", handleSubmit)