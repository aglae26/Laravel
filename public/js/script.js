/* document.getElementById('menu-toggle').addEventListener('click', function () {
  const sidebar = document.getElementById('sidebar');
  const mainContent = document.getElementById('main-content');

  // Toggle sidebar visibility
  sidebar.classList.toggle('hidden');

  // Adjust main content margin based on sidebar visibility
  if (sidebar.classList.contains('hidden')) {
    mainContent.classList.add('shifted');
  } else {
    mainContent.classList.remove('shifted');
  }
});*/

const menuToggle = document.getElementById('menu-toggle');
if (menuToggle) {
    menuToggle.addEventListener('click', function () {
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');

        if (sidebar && mainContent) {
            sidebar.classList.toggle('hidden');
            mainContent.classList.toggle('shifted', sidebar.classList.contains('hidden'));
        }
    });
}


document.querySelectorAll('.sidebar-item').forEach(item => {
  item.addEventListener('click', function () {
    // Close other submenus
    document.querySelectorAll('.sidebar-item').forEach(i => {
      if (i !== this) {
        i.classList.remove('active');
      }
    });
    this.classList.toggle('active');
  });
});

/*document.getElementById('user-photo').addEventListener('click', function () {
  const dropdown = document.getElementById('dropdown');
  dropdown.classList.toggle('show');
});*/

document.addEventListener('DOMContentLoaded', function () {
  const userPhoto = document.getElementById('user-photo');
  if (userPhoto) {
      userPhoto.addEventListener('click', function () {
          const dropdown = document.getElementById('dropdown');
          dropdown?.classList.toggle('show');
      });
  }
});


// Close dropdown if clicked outside
document.addEventListener('click', function (event) {
  const userPhoto = document.getElementById('user-photo');
  const dropdown = document.getElementById('dropdown');

  if (!userPhoto.contains(event.target) && !dropdown.contains(event.target)) {
    dropdown.classList.remove('show');
  }
});


// Selecciona todos los elementos que disparan el modal
document.querySelectorAll('.submenu-item').forEach(item => {
  if (item.textContent === 'Crear') {
    item.addEventListener('click', function () {
      document.getElementById('modal').style.display = 'flex';
    });
  }
});

/*
document.getElementById('close-btn-crear').addEventListener('click', function () {
  document.getElementById('modal').style.display = 'none';
});*/

document.addEventListener('DOMContentLoaded', function () {
  const closeBtnCrear = document.getElementById('close-btn-crear');
  if (closeBtnCrear) {
      closeBtnCrear.addEventListener('click', function () {
          document.getElementById('modal').style.display = 'none';
      });
  }
});


// Cierra el modal al hacer clic fuera del contenido del modal
window.addEventListener('click', function (event) {
  if (event.target.className === 'modal-crear') {
    document.getElementById('modal').style.display = 'none';
  }
});

const currentPath = window.location.pathname;

if (currentPath === '/users') {

  document.querySelectorAll('.edit-btn').forEach(button => {
    button.addEventListener('click', function () {
      const card = this.closest('.user-card');
      const nombreCompleto = card.querySelector('h3').innerText.split(":")[1];
      const username = card.querySelector('p:nth-child(2)').innerText.split(":")[1];
      const rol = card.querySelector('p:nth-child(3)').innerText.split(":")[1];
      const email = card.querySelector('p:nth-child(4)').innerText.split(":")[1];
      const id = card.querySelector('p:nth-child(5)').innerText.split(":")[1];

      document.getElementById('edit_nombre_completo').value = nombreCompleto;
      document.getElementById('edit_username').value = username;
      document.getElementById('edit_rol').value = rol;
      document.getElementById('edit_email').value = email;
      document.getElementById('edit_id').value = id;

      const baseUrl = document.getElementById('editForm').getAttribute('data-action-base');
      document.getElementById('editForm').action = `${baseUrl}/${id}`;
 
      document.getElementById('editModal').style.display = 'flex';
    });
  });

}

/*document.querySelector('.close-btn-actualizar').addEventListener('click', function () {
  document.getElementById('editModal').style.display = 'none';
  console.log('click');
});*/

document.addEventListener('DOMContentLoaded', function () {
  const closeBtnActualizar = document.querySelector('.close-btn-actualizar');
  if (closeBtnActualizar) {
      closeBtnActualizar.addEventListener('click', function () {
          document.getElementById('editModal').style.display = 'none';
          console.log('click');
      });
  }
});


/*document.querySelector('.cancel-btn').addEventListener('click', function () {
  document.getElementById('editModal').style.display = 'none';
});*/

document.addEventListener('DOMContentLoaded', function () {
  const cancelBtn = document.querySelector('.cancel-btn');
  if (cancelBtn) {
      cancelBtn.addEventListener('click', function () {
          document.getElementById('editModal').style.display = 'none';
      });
  }
});


window.addEventListener('click', function (event) {
  const modal = document.getElementById('editModal');
  if (event.target == modal) {
    modal.style.display = 'none';
  }
});

