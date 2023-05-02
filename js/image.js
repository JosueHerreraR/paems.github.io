// Usado en el Lightbox de las imagenes de cada escuela

const fulImgBox = document.getElementById("fulImgBox"),
fulImg = document.getElementById("fulImg");

const openFulImg = (reference) =>{
    if (typeof reference !== 'string') {
        throw new Error('Reference must be a string');
    }
    fulImgBox.style.display = "flex";
    fulImg.src = reference
}

const closeImg = () => {
    fulImgBox.style.display = "none";
}