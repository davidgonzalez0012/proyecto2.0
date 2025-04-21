

// filtros busqueda de empleos
document.addEventListener('DOMContentLoaded', () => {
    const categoriaSelect = document.querySelector('.filtros select:first-child');
    const ubicacionSelect = document.querySelector('.filtros select:last-child');
    const empleos = document.querySelectorAll('.empleo');

    function filtrarEmpleos() {
        const categoriaSeleccionada = categoriaSelect.value;
        const ubicacionSeleccionada = ubicacionSelect.value;

        empleos.forEach(empleo => {
            const mostrar = (categoriaSeleccionada === 'Todas las categorías' || 
                             empleo.textContent.includes(categoriaSeleccionada)) &&
                            (ubicacionSeleccionada === 'Todas las ubicaciones' || 
                             empleo.textContent.includes(ubicacionSeleccionada));
            
            empleo.style.display = mostrar ? 'block' : 'none';
        });
    }

    categoriaSelect.addEventListener('change', filtrarEmpleos);
    ubicacionSelect.addEventListener('change', filtrarEmpleos);
});
            
            
            const jobPostings = [
                {
                    id: 1,
                    title: "Ayudante de Construcción",
                    employer: "Constructora Moderna",
                    category: "construccion",
                    location: "cdmx",
                    description: "Buscamos personal para trabajo en nueva obra. Requiere buena condición física.",
                    salary: "$200-250 por día",
                    requirements: [
                        "Experiencia en construcción",
                        "Disponibilidad inmediata",
                        "Buena condición física"
                    ]
                },
                {
                    id: 2,
                    title: "Mozo de Eventos",
                    employer: "Eventos Express",
                    category: "eventos",
                    location: "guadalajara",
                    description: "Se necesita personal para servicio en eventos sociales y corporativos.",
                    salary: "$150-200 por evento",
                    requirements: [
                        "Buena presentación",
                        "Disponibilidad de fin de semana",
                        "Trabajo en equipo"
                    ]
                },
                {
                    id: 3,
                    title: "Repartidor",
                    employer: "Delivery Rápido",
                    category: "reparto",
                    location: "monterrey",
                    description: "Entrega de paquetes y pedidos. Requiere moto propia.",
                    salary: "$250-300 por semana",
                    requirements: [
                        "Licencia de conducir vigente",
                        "Moto propia",
                        "Conocimiento de la ciudad"
                    ]
                },
                {
                    id: 4,
                    title: "Limpieza de Oficinas",
                    employer: "Limpiezas Profesionales",
                    category: "limpieza",
                    location: "puebla",
                    description: "Limpieza y mantenimiento de espacios corporativos.",
                    salary: "$100-150 por jornada",
                    requirements: [
                        "Disponibilidad de horario",
                        "Experiencia en limpieza",
                        "Responsabilidad"
                    ]
                },
                {
                    id: 5,
                    title: "Ayudante de Cocina",
                    employer: "Restaurante Central",
                    category: "cocina",
                    location: "cdmx",
                    description: "Preparación y apoyo en cocina de restaurante de alta cocina.",
                    salary: "$180-220 por día",
                    requirements: [
                        "Experiencia en cocina",
                        "Disponibilidad de turnos",
                        "Trabajo bajo presión"
                    ]
                }
            ];
    
            const searchInput = document.getElementById('searchInput');
            const categoryFilter = document.getElementById('categoryFilter');
            const locationFilter = document.getElementById('locationFilter');
            const searchButton = document.getElementById('searchButton');
            const jobListings = document.getElementById('jobListings');
    
         
            function renderJobCards(jobs) {
                jobListings.innerHTML = '';
    
                if (jobs.length === 0) {
                    jobListings.innerHTML = `
                        <div class="no-results">
                            <h3>No se encontraron empleos</h3>
                            <p>Intenta modificar tus criterios de búsqueda</p>
                        </div>
                    `;
                    return;
                }
    
                jobs.forEach(job => {
                    const jobCard = document.createElement('div');
                    jobCard.classList.add('job-card');
                    jobCard.innerHTML = `
                        <div class="job-details">
                            <h3>
                                <span class="employer-tag">${job.employer}</span>
                                ${job.title}
                            </h3>
                            <p><strong>Ubicación:</strong> ${job.location.toUpperCase()}</p>
                            <p><strong>Categoría:</strong> ${job.category.charAt(0).toUpperCase() + job.category.slice(1)}</p>
                            <p>${job.description}</p>
                            <p><strong>Salario:</strong> ${job.salary}</p>
                            <details>
                                <summary>Requisitos</summary>
                                <ul>
                                    ${job.requirements.map(req => `<li>${req}</li>`).join('')}
                                </ul>
                            </details>
                        </div>
                        <div class="job-actions">
                            <button class="btn btn-details" onclick="showJobDetails(${job.id})">Ver Detalles</button>
                            <button class="btn btn-apply" onclick="applyForJob(${job.id})">Aplicar</button>
                        </div>
                    `;
                    jobListings.appendChild(jobCard);
                });
            }
    


            
            
            function searchJobs() {
                const searchTerm = searchInput.value.toLowerCase();
                const category = categoryFilter.value;
                const location = locationFilter.value;
    
                const filteredJobs = jobPostings.filter(job => {
                    const matchesSearch = 
                        job.title.toLowerCase().includes(searchTerm) ||
                        job.description.toLowerCase().includes(searchTerm) ||
                        job.employer.toLowerCase().includes(searchTerm);
                    
                    const matchesCategory = category === '' || job.category === category;
                    const matchesLocation = location === '' || job.location === location;
    
                    return matchesSearch && matchesCategory && matchesLocation;
                });
    
                renderJobCards(filteredJobs);
            }
    
            function showJobDetails(jobId) {
                const job = jobPostings.find(j => j.id === jobId);
                alert(`Detalles del Trabajo:\n\nTítulo: ${job.title}\nEmpleador: ${job.employer}\n\nRequisitos completos:\n${job.requirements.join('\n')}`);
            }
    
            function applyForJob(jobId) {
                const job = jobPostings.find(j => j.id === jobId);
                alert(`¡Gracias por tu interés en el trabajo de ${job.employer}!\n\nPróximamente: Implementaremos el proceso de solicitud.`);
            }

            searchButton.addEventListener('click', searchJobs);
            searchInput.addEventListener('keyup', (e) => {
                if (e.key === 'Enter') searchJobs();
            });
            categoryFilter.addEventListener('change', searchJobs);
            locationFilter.addEventListener('change', searchJobs);
    
          
            renderJobCards(jobPostings);














