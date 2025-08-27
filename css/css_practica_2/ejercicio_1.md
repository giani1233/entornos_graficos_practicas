
    1- CSS son las siglas de cascade style sheets (hojas de estilo en cascada).
    Se utilizan para controlar la apariencia de una página web.
    
    2- Las reglas seleccionan un tipo de marca HTML, o una clase definida que combina diversos elementos, o un elemento definido particularmente mediante un id, y aplican los estilos correspondientes.
    
    3- Las reglas se asocian a las marcas HTML, dicha asociación se puede hacer de 3 formas distintas:
        - Directamente en la marca
        - En el Head de la página
        - Agrupar las reglas en un archivo independiente con extensión .CSS
    
    4- Los selectores más usados son:
        - Elemento: Selecciona todos los elementos de ese tipo. Por ejemplo:
            p {
                color: red;
            } 
            aquí, todos los parrafos tendran color rojo
        
        - Clase: Selecciona todos los elementos pertenecientes a una clase definida, se escribe con . adelante. Por ejemplo:
            .titulos {
                color: blue;
            }
            aquí, todos los títulos pertenecientes a la clase titulos, serán color azul
        
        - Id: Selecciona el elemento al que se le asignó dicho id, se escribe con # al principio. Por Ejemplo: 
            #titulo1 {
                color: yellow;
            }
            aquí, el título que tiene asignado dicho id será color amarillo

    5- Una pseudo clase es un selector que se activa cuando un elemento adquiere un cierto estado. Las más utilizadas referidas a vínculos son:
        - :visited el enlace fue visitado
        - :hover el mouse pasa sobre el enlace
        - :active cuando se está clickeando el enlace

    6- En css se produce herencia cuando elementos enlistados dentro de un elemento que contiene estilos, heredan dichos estilos, por ejemplo, si tenemos un div perteneciente a la clase .contenedor con los siguientes estilos:
        .contenedor {
            font: arial;
            color: red;
        }
    los parrafos p pertenecientes al contenedor, heredaran dichos estilos

    7- El proceso cascada es el encargado de decidir que aspecto se aplica a un elemento si el mismo tiene asociados varios estilos.
    