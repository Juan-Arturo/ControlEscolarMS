// Declarar variables globales
const modal = document.getElementById('semester-modal');
const addSemesterBtn = document.getElementById('add-semester-btn');
const cancelModalBtn = document.getElementById('cancel-modal');
const closeModal = document.getElementById('close-modal');

// Obtener la URL de acción del botón "Agregar Semestre"
const form = document.getElementById('semester-form');
const addSemesterUrl = addSemesterBtn.dataset.action; // Usando dataset para obtener el atributo data-action

// Evento para mostrar el modal de agregar semestre
addSemesterBtn.addEventListener('click', () => {
    modal.classList.remove('hidden');
    document.getElementById('modal-title').textContent = 'Agregar Semestre';

    // Restablecer la acción del formulario para agregar
    form.action = addSemesterUrl; // Establecer la ruta dinámica usando el atributo data-action

    // Limpiar los campos del formulario
    document.getElementById('semester-semester').value = '';
    document.getElementById('semester-name').value = '';
    document.getElementById('semester-description').value = '';
    document.getElementById('start-date').value = '';
    document.getElementById('end-date').value = '';

    // Eliminar el campo _method si existe
    const methodInput = document.querySelector('input[name="_method"]');
    if (methodInput) {
        methodInput.remove();
    }
});


// Edición de Semestres
function openEditModal(id, semestre, nombre,descripcion, fecha_inicio, fecha_fin) {
    // Mostrar el modal
    modal.classList.remove('hidden');

    // Cambiar el título del modal
    document.getElementById('modal-title').textContent = 'Editar Semestre';

    // Cambiar la acción del formulario para que apunte a la ruta de actualización
    form.action = `/semestres/${id}`;

    // Rellenar los campos del formulario con los datos del semestre
    document.getElementById('semester-semester').value = semestre;
    document.getElementById('semester-name').value = nombre;
    document.getElementById('semester-description').value = descripcion;
    document.getElementById('start-date').value = fecha_inicio;
    document.getElementById('end-date').value = fecha_fin;

    // Asegurarse de que el formulario tenga el método PUT
    let methodInput = document.querySelector('input[name="_method"]');
    if (methodInput) {
        methodInput.remove();
    }

    // Crear y añadir el campo _method con valor PUT
    methodInput = document.createElement('input');
    methodInput.setAttribute('type', 'hidden');
    methodInput.setAttribute('name', '_method');
    methodInput.setAttribute('value', 'PUT');
    form.appendChild(methodInput);
}


// Función para cerrar el modal
function closeModalFunction() {
    modal.classList.add('hidden');
}

// Evento para el botón "Cerrar" en el modal
closeModal.addEventListener('click', closeModalFunction);

// Evento para el botón "Cancelar" en el modal
cancelModalBtn.addEventListener('click', closeModalFunction);



function openDeleteModal(id) {
    const deleteForm = document.getElementById('delete-form');
    deleteForm.action = `/semestres/${id}`; // Cambia la acción a la ruta correcta
    document.getElementById('delete-modal').classList.remove('hidden'); // Muestra el modal
}

function closeDeleteModal() {
    document.getElementById('delete-modal').classList.add('hidden'); // Oculta el modal
}
