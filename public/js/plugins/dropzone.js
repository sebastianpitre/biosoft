Dropzone.autoDiscover = false;
$(document).ready(function () {
    $("#my-dropzone").dropzone({
        maxFiles: 1,
        acceptedFiles: ".png,.jpg,.jpeg,.gif,.bmp",
        dictDefaultMessage: "Arrastra aquí los archivos o haz clic para seleccionar",
        dictFallbackMessage: "Tu navegador no soporta la carga de archivos mediante Drag and Drop",
        dictFallbackText: "Por favor utiliza el formulario de respaldo para cargar tus archivos como en los viejos tiempos",
        dictFileTooBig: "El archivo es muy grande ({{filesize}} MB). Tamaño máximo: {{maxFilesize}} MB.",
        dictInvalidFileType: "No puedes cargar archivos de este tipo.",
        dictResponseError: "Server responded with {{statusCode}} code.",
        dictCancelUpload: "Cancelar carga",
        dictCancelUploadConfirmation: "¿Estás seguro que deseas cancelar esta carga?",
        dictRemoveFile: "Eliminar archivo",
        dictRemoveFileConfirmation: null,
        paramName: "file",
        success: function (file, response) {
            console.log(response);
        },
        error: function (file, response) {
            console.log(response);
        }
    });
});
