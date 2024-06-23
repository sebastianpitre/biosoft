const formBusqueda = document.getElementById("form-busqueda");
const resultadosDiv = document.getElementById("resultados");

formBusqueda.addEventListener("submit", async (event) => {
  event.preventDefault();
  resultadosDiv.innerHTML = "";

  const nombreAve = event.target.elements["nombre-ave"].value;
  const apiUrl = `https://xeno-canto.org/api/2/recordings?query=${encodeURIComponent(nombreAve)}`;

  try {
    const response = await fetch(apiUrl);
    if (response.ok) {
      const data = await response.json();
      const grabaciones = data.recordings;
      if (grabaciones.length > 0) {
        grabaciones.forEach((grabacion) => {
          const divGrabacion = document.createElement("div");
          const h2Titulo = document.createElement("h2");
          const audioElement = document.createElement("audio");
          const sourceElement = document.createElement("source");
          const ulListaDatos = document.createElement("ul");
          const liEspecie = document.createElement("li");
          const liPais = document.createElement("li");
          const liFecha = document.createElement("li");
          const liDuracion = document.createElement("li");

          h2Titulo.textContent = grabacion.en;
          sourceElement.setAttribute("src", grabacion.file);
          audioElement.appendChild(sourceElement);
          audioElement.setAttribute("controls", "");
          liEspecie.textContent = `Especie: ${grabacion.en}`;
          liPais.textContent = `País: ${grabacion.cnt}`;
          liFecha.textContent = `Fecha: ${grabacion.date}`;
          liDuracion.textContent = `Duración: ${grabacion.duration}`;

          ulListaDatos.appendChild(liEspecie);
          ulListaDatos.appendChild(liPais);
          ulListaDatos.appendChild(liFecha);
          ulListaDatos.appendChild(liDuracion);
          divGrabacion.appendChild(h2Titulo);
          divGrabacion.appendChild(audioElement);
          divGrabacion.appendChild(ulListaDatos);
          resultadosDiv.appendChild(divGrabacion);
        });
      } else {
        resultadosDiv.textContent = "No se encontraron grabaciones de esa especie de ave.";
      }
    } else {
      resultadosDiv.textContent = "Hubo un problema al conectar con la API.";
    }
  } catch (error) {
    resultadosDiv.textContent = "Hubo un error al procesar la respuesta de la API.";
    console.error(error);
  }
});
