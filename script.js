fetch('https://app.sheetlabs.com/RAPI/Top100movieslist')
    .then(response => response.json())
    .then(data => {
        // REST API veri çekme işlemleri
        const moviesContainer = document.getElementById("movies-container");

        // İlk 10 filmi listele
        for (let i = 0; i < 10; i++) {
            const movie = data[i];
            const movieElement = document.createElement("div");
            movieElement.classList.add("movie");

            const titleElement = document.createElement("h2");
            titleElement.textContent = movie.title;
            movieElement.appendChild(titleElement);

            const descriptionElement = document.createElement("p");
            descriptionElement.textContent = movie.description;
            movieElement.appendChild(descriptionElement);

            const imageElement = document.createElement("img");
            imageElement.src = movie.image;
            imageElement.alt = movie.title;
            movieElement.appendChild(imageElement);

            moviesContainer.appendChild(movieElement);
        }
    })
    .catch(error => {
        
        console.error('Hata veriler çekilemiyor:', error);
    });