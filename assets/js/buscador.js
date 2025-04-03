document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("search-input");
    const searchButton = document.getElementById("search-button");
    const resultsContainer = document.getElementById("results-container");

    searchButton.addEventListener("click", function () {
        const query = searchInput.value.trim();
        if (query === "") return;

        fetch(`buscador.php?query=${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(data => {
                resultsContainer.innerHTML = ""; // Limpiar resultados anteriores

                if (data.error || data.mensaje) {
                    resultsContainer.innerHTML = `<p class="text-danger">${data.error || data.mensaje}</p>`;
                    return;
                }

                if (data.length === 0) {
                    resultsContainer.innerHTML = `<p class="text-warning">No se encontraron resultados.</p>`;
                    return;
                }

                let carouselHTML = `
                <div id="resultsCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                `;

                data.forEach((item, index) => {
                    carouselHTML += `
                    <div class="carousel-item ${index === 0 ? "active" : ""}">
                        <div class="d-flex flex-column align-items-center">
                            <img src="${item.imagen}" class="d-block img-fluid rounded" style="max-width: 300px; max-height: 300px;" alt="${item.nombre}">
                            <h5 class="mt-2">${item.nombre}</h5>
                            <p>${item.descripcion}</p>
                        </div>
                    </div>`;
                });

                carouselHTML += `
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#resultsCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#resultsCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>`;

                resultsContainer.innerHTML = carouselHTML;
            })
            .catch(error => {
                resultsContainer.innerHTML = `<p class="text-danger">Error al buscar: ${error.message}</p>`;
            });
    });
});
