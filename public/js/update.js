$( "#form_update_todo" ).submit(function( event ) {
    console.log(todo);
    fetch('https://jsonplaceholder.typicode.com/todos/'+todo['id'], {
    method: 'PUT',
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
    alert('Actualizado con exito');
}
