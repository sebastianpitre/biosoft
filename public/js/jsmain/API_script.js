const searchForm = document.getElementById('search-form');
const searchResults = document.getElementById('search-results');

searchForm.addEventListener('submit', (event) => {
  event.preventDefault();
  
  const birdName = document.getElementById('bird-name').value;
  const apiUrl = `https://xeno-canto.org/api/2/recordings?query=${encodeURIComponent(birdName)}`;

  fetch(apiUrl)
    .then(response => response.json())
    .then(data => {
      const recordings = data.recordings;
      searchResults.innerHTML = '';
      if (recordings.length === 0) {
        searchResults.innerHTML = '<p>No se encontraron grabaciones.</p>';
      } else {
        recordings.forEach((recording) => {
          const recordingElement = document.createElement('div');
          recordingElement.innerHTML = `
            <h2>${recording.en}</h2>
            <p>${recording.gen}</p>
            <audio controls>
              <source src="${recording.file}">
            </audio>
          `;
          searchResults.appendChild(recordingElement);
        });
      }
    })
    .catch(error => {
      searchResults.innerHTML = `<p>Error al buscar grabaciones: ${error.message}</p>`;
    });
});
