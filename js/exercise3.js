const months = [
  {
    name: "enero",
    description: `es el primer mes del año y tiene 31 días. Toma su nombre del
        dios Jano, del latín Janus, representado con dos caras, el espíritu de las
        puertas y del principio y el final, la mirada hacia el pasado y hacia el futuro.`,
  },
  {
    name: "febrero",
    description: `es el segundo mes del año en los calendarios juliano
        y gregoriano. El mes tiene 28 días en los años comunes o 29 en los años
        bisiestos, siendo el día 29 el llamado día bisiesto. Es el primero de
        cinco meses que no tiene 31 días y el único que tiene menos de 30 días.`,
  },
  {
    name: "marzo",
    description: `es el tercer mes del año tanto en el calendario juliano como
        en el gregoriano. Es el segundo de siete meses que tiene una duración
        de 31 días. En el hemisferio norte, el inicio meteorológico de la
        primavera se produce el primer día de marzo.`,
  },
  {
    name: "abril",
    description: `es el cuarto mes del año en los calendarios gregoriano y 
        juliano. Es el primero de cuatro meses que tiene una duración de 30 días,
        y el segundo de cinco meses que tiene una duración de menos de 31 días.`,
  },
  {
    name: "mayo",
    description: `es el quinto mes del año en los calendarios juliano y 
        gregoriano, y es el tercero de siete meses al tener una duración de 31
        días. Mayo es un mes de primavera en el hemisferio norte y otoño en el
        hemisferio sur.`,
  },
  {
    name: "junio",
    description: `es el sexto mes del año en los calendarios juliano y 
        gregoriano y es el segundo de cuatro meses en tener una duración de 30 
        días, y el tercero de cinco meses en tener una duración de menos de 31 días.`,
  },
  {
    name: "julio",
    description: `séptimo mes del año. Debe su nombre a Julio César, que había
        nacido el día 12 de este mes. Según afirmaba una leyenda, el nombre 
        también provenía de Lulo, hijo del legendario Enéas, héroe de Troya, 
        que tras la caída de esta ciudad en manos de los griegos se marchó a 
        Italia con su padre.`,
  },
  {
    name: "agosto",
    description: `octavo mes del año en los calendarios juliano y gregoriano, y
        el quinto de siete meses al tener una duración de 31 días.`,
  },
  {
    name: "septiembre",
    description: `noveno mes del año en los calendarios juliano y gregoriano,
        el tercero de cuatro meses para tener una duración de 30 días, y el
        cuarto de cinco meses para tener una duración de menos de 31 días.
        Septiembre en el hemisferio norte y marzo en el hemisferio sur son
        estacionalmente equivalentes.`,
  },
  {
    name: "octubre",
    description: `décimo mes del año en los calendarios juliano y gregoriano y
        el sexto de siete meses al tener una duración de 31 días.`,
  },
  {
    name: "noviembre",
    description: `undécimo y penúltimo mes del año en los calendarios juliano y
        gregoriano, el cuarto y último de cuatro meses por tener una duración
        de 30 días y el quinto y último de cinco meses por tener una duración
        de menos de 31 días. Noviembre obtuvo su nombre de la palabra latina novem
        porque originalmente era el noveno mes del año en el calendario 
        de Rómulo c. 750 aC, que comenzó en marzo.`,
  },
  {
    name: "diciembre",
    description: `duodécimo y último mes del año en los calendarios juliano y
        gregoriano, y también es el último de siete meses que tiene una 
        duración de 31 días. Diciembre obtuvo su nombre de la palabra latina 
        decem porque originalmente era el décimo mes del año en el calendario 
        de Rómulo c. 750 aC, que comenzó en marzo.`,
  },
];

const showRandomMonthBtn = document.querySelector("#show-random-month");
showRandomMonthBtn.addEventListener("click", displayRandomMonth);
showRandomMonthBtn.addEventListener("click", console.log("hola"));

console.log(showRandomMonthBtn);

function displayRandomMonth() {
  const randomMonthIndex = getRandomNumber(12);
  const month = months[randomMonthIndex].name;
  const monthDescription = months[randomMonthIndex].description;

  const monthContainer = document.querySelector("#month-container");
  const monthImg = document.querySelector("#month-img");
  const monthTitle = document.querySelector(".card-title");
  const monthText = document.querySelector(".card-text");

  monthContainer.classList.remove("d-none");
  monthImg.setAttribute("src", `assets/months/${randomMonthIndex}.webp`);
  monthTitle.textContent = month.charAt(0).toUpperCase().concat(month.slice(1));
  monthText.textContent = monthDescription
    .charAt(0)
    .toUpperCase()
    .concat(monthDescription.slice(1));
}

function getRandomNumber(limit) {
  return Math.floor(Math.random() * limit);
}
