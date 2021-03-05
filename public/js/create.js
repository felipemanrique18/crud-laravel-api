$( "#form_create_todo" ).submit(function( event ) {
    fetch('https://jsonplaceholder.typicode.com/todos', {
    method: 'POST',
    body: JSON.stringify({
        title: $("#title").val(),
        userId: $("#userId").val(),
    }),
    headers: {
        'Content-type': 'application/json; charset=UTF-8',
    },
    })
  .then((response) => response.json())
  .then((json) => mostrar_mensaje());
    event.preventDefault();
});

function mostrar_mensaje(){
    $("#form_create_todo")[0].reset();
    alert('Creado con exito');
}
