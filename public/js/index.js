function init(){
    $( "#loading" ).removeClass( "d-none");
    fetch('https://jsonplaceholder.typicode.com/todos')
    .then((response) => response.json())
    .then((json) => 
        cargar_todos(json)
    );
}

function cargar_todos(data){
    
    $.each(data, function(i, item) {
        $content = `
            <tr>
                <th>No</th>
                <th>Titulo</th> 
                <th>Acciones</th>
            </tr>
            `
            data.forEach(dato => {
                $content += `
                    <tr>
                        <td >${dato.id}</td>
                        <td>${dato.title}</td>
                        <td>
                                <a href="/todos/${dato.id}" title="show">
                                    <i class="fas fa-eye text-success  fa-lg"></i>
                                </a>

                                <a href="/todos/${dato.id}/edit">
                                    <i class="fas fa-edit  fa-lg"></i>
                                </a>

                                <a href="javascript:void(0)" class="delete_todo" id="${dato.id}" name="${dato.id}">
                                    <i class="fas fa-trash fa-lg text-danger"></i>
                                </a>
                        </td>  
                    </tr>
                `
            });
            
    });
    $('#table_todos').fadeIn(1000).html($content);
    $(".delete_todo").on('click', function(event){
        delete_todo(this.id);
    });
    $( "#loading" ).addClass( "d-none" );
}

function delete_todo(id){
    fetch('https://jsonplaceholder.typicode.com/todos/'+id, {
        method: 'DELETE',
    }).then((response) => response.json())
    .then((json) => mostar_mensaje());
}


function mostar_mensaje(){
    alert('Archivo eliminado');
}

init();