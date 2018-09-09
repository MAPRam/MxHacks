var formulario = document.getElementById('form');

formulario.addEventListener('submit', function(e){
    e.preventDefault();

    var datos = new FormData(formulario)

    fetch('saveimg.php',{
        method: 'POST',
        body: datos
    })
    .then( res => res.json())
    .then( data => {

        if (data == 'error')
        {
            alert("Error");
        }
        else
        {
            alert(data);
        }
    })

})
