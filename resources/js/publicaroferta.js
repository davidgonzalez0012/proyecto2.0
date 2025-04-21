document.addEventListener('DOMContentLoaded', function() {
    // Referencias a elementos del DOM
    const habilidadesInput = document.getElementById('jp-otrasHabilidades');
    const habilidadesContainer = document.getElementById('jp-habilidadesSeleccionadas');
    const habilidadesFinal = document.getElementById('jp-habilidadesFinal');
    const form = document.getElementById('jp-jobPostingForm');
    
    // Arreglo para almacenar habilidades
    let habilidades = [];
    
    // Función para añadir habilidades
    function agregarHabilidad(habilidad) {
      if (habilidad && !habilidades.includes(habilidad)) {
        habilidades.push(habilidad);
        actualizarHabilidades();
      }
    }
    
    // Función para eliminar habilidades
    function eliminarHabilidad(habilidad) {
      habilidades = habilidades.filter(h => h !== habilidad);
      actualizarHabilidades();
    }
    
    // Función para actualizar la visualización de habilidades
    function actualizarHabilidades() {
      // Actualizar el contenedor visual
      habilidadesContainer.innerHTML = '';
      
      habilidades.forEach(habilidad => {
        const badge = document.createElement('span');
        badge.className = 'jp-badge';
        badge.innerHTML = `${habilidad} <span class="jp-badge-close" data-habilidad="${habilidad}">&times;</span>`;
        habilidadesContainer.appendChild(badge);
      });
      
      // Actualizar el campo oculto
      habilidadesFinal.value = habilidades.join(',');
      
      // Añadir eventos para eliminar badges
      document.querySelectorAll('.jp-badge-close').forEach(btn => {
        btn.addEventListener('click', function() {
          eliminarHabilidad(this.getAttribute('data-habilidad'));
        });
      });
    }
    
    // Evento para añadir habilidades al presionar Enter
    habilidadesInput.addEventListener('keydown', function(e) {
      if (e.key === 'Enter' || e.key === ',') {
        e.preventDefault();
        const habilidad = this.value.trim();
        if (habilidad) {
          agregarHabilidad(habilidad);
          this.value = '';
        }
      }
    });
    
    // Añadir habilidad al perder el foco
    habilidadesInput.addEventListener('blur', function() {
      const habilidad = this.value.trim();
      if (habilidad) {
        agregarHabilidad(habilidad);
        this.value = '';
      }
    });
    
    // Validación básica del formulario
    form.addEventListener('submit', function(e) {
      let isValid = true;
      
      // Validar campos requeridos
      form.querySelectorAll('[required]').forEach(field => {
        if (!field.value.trim()) {
          isValid = false;
          field.classList.add('jp-is-invalid');
        } else {
          field.classList.remove('jp-is-invalid');
          field.classList.add('jp-is-valid');
        }
      });
      
      if (!isValid) {
        e.preventDefault();
        alert('Por favor, completa todos los campos obligatorios.');
      }
    });
    
    // Validación en tiempo real
    form.querySelectorAll('.jp-form-control, .jp-form-select').forEach(field => {
      field.addEventListener('input', function() {
        if (this.hasAttribute('required')) {
          if (!this.value.trim()) {
            this.classList.add('jp-is-invalid');
            this.classList.remove('jp-is-valid');
          } else {
            this.classList.remove('jp-is-invalid');
            this.classList.add('jp-is-valid');
          }
        }
      });
    });
    
    // Añadir algunos estilos adicionales para el badge close
    const style = document.createElement('style');
    style.textContent = `
      .jp-badge-close {
        display: inline-block;
        margin-left: 6px;
        cursor: pointer;
        font-weight: bold;
      }
      .jp-badge-close:hover {
        color: #e53e3e;
      }
    `;
    document.head.appendChild(style);
  });