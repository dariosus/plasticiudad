var productos = 
[
    {
        "id" : 1,
        "nombre" : "Silla de oficina",
        "foto" : "https://lh4.googleusercontent.com/7n47OM5HexwejVVaVSV8avJ7YQLuN5xOtn20iv9E2L17TsgRcuhH_p7KODLYUtnEXt3XcfaYsBw4u2w=w1366-h647-rw",
        "plasticoins" : 599,
        "descripcion" : "Ergonomía y reutilización del plástico, unas sillas perfectas para tu oficina.",
        "categoria_id" : 1
    },
    {
        "id" : 2,
        "nombre" : "Broches",
        "foto" : "https://lh6.googleusercontent.com/DhkdGZQcoH2LUEtlIXGxFf-Uk3oOtoPrZn51UsrW8fnEYnXnx2OsWan8Gz_n5dlm2wt8R4Os22xJRVo=w1366-h647-rw",
        "plasticoins" : 41,
        "descripcion" : "Un diseño genial que no permite que se caiga tu ropa ni se ensucie, ahorrando ciclos de lavado. Cuidemos el planeta",
        "categoria_id" : 1
    },
    {
        "id" : 3,
        "nombre" : "Dado Ja!",
        "foto" : "https://lh4.googleusercontent.com/eWE2zcuD0PVzE11KK_JuUW-4Mfw25dp6XwqCa5tbRVEtIjgdAGjErHqSCKXnASSwaq-rpneinXIoctA=w1366-h647-rw",
        "plasticoins" : 70,
        "descripcion" : "El dado Ja! es ideal para jugar con tus amigos. Un instructivo de prendas para usarlo cuando quieras.",
        "categoria_id" : 2
    },
    {
        "id" : 4,
        "nombre" : "Tablero de juegos",
        "foto" : "https://lh6.googleusercontent.com/024ok11ak6RA9EHfJ9m3W2ajZWODVKNtWwIZXSnryZFaA391f-uxmcl4-pnmd9HF-PmIXWoOiszpX00=w1366-h647-rw",
        "plasticoins" : 60,
        "descripcion" : "Todos los chicos tienen el derecho a jugar. Creamos los clásicos juegos de mesa para cuando estés en el parque.",
        "categoria_id" : 2
    }
];

$(document).ready(function () {
// productos.forEach( (producto) => {
//     var modal = $("#idModal");
//     modal.find(".modal-body").text(producto.descripcion);
// });

$(".cargarProducto").on("click", function(event){
	$.ajax("").success()
    var id = $(this).attr("data-productoId");
	cargaProducto(id);

	event.preventDefault();
})
function cargaProducto(id){
	var modal = $("#idModal");
	var producto = productos[id];
	 modal.find("#description").text(producto.descripcion);
	 modal.find(".modal-title").text(producto.nombre);
	 modal.find("#plasticoins").text(producto.plasticoins);
	 modal.find("img").attr("src", producto.foto);
};
});