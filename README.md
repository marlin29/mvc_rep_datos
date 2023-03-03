Modelo Vista Controlador
El modelo de representación de datos se refiere a la forma en que se estructuran y organizan los datos en un sistema informático para su almacenamiento, procesamiento y recuperación. 
MVC (Modelo-Vista-Controlador) es un patrón en el diseño de software comúnmente utilizado para implementar interfaces de usuario, datos y lógica de control. Enfatiza una separación entre la lógica de negocios y su visualización. Esta "separación de preocupaciones" proporciona una mejor división del trabajo y una mejora de mantenimiento. Algunos otros patrones de diseño se basan en MVC, como MVVM (Modelo-Vista-modelo de vista), MVP (Modelo-Vista-Presentador) y MVW (Modelo-Vista-Whatever).

Las tres partes del patrón de diseño de software MVC se pueden describir de la siguiente manera:

Modelo: Maneja datos y lógica de negocios.
Vista: Se encarga del diseño y presentación.
Controlador: Enruta comandos a los modelos y vistas.
Modelo
El modelo define qué datos debe contener la aplicación. Si el estado de estos datos cambia, el modelo generalmente notificará a la vista (para que la pantalla pueda cambiar según sea necesario) y, a veces, el controlador (si se necesita una lógica diferente para controlar la vista actualizada).

Volviendo a nuestra aplicación de lista de compras, el modelo especificará qué datos deben contener los artículos de la lista (artículo, precio, etc.) y qué artículos de la lista ya están presentes.

Vista
La vista define cómo se deben mostrar los datos de la aplicación.

En nuestra aplicación de lista de compras, la vista definiría cómo se presenta la lista al usuario y recibiría los datos para mostrar desde el modelo.

Controlador
El controlador contiene una lógica que actualiza el modelo y/o vista en respuesta a las entradas de los usuarios de la aplicación.

Entonces, por ejemplo, nuestra lista de compras podría tener formularios de entrada y botones que nos permitan agregar o eliminar artículos. Estas acciones requieren que se actualice el modelo, por lo que la entrada se envía al controlador, que luego manipula el modelo según corresponda, que luego envía datos actualizados a la vista.

Sin embargo, es posible que también se desee actualizar la vista para mostrar los datos en un formato diferente, por ejemplo, cambiar el orden de los artículos de menor a mayor precio o en orden alfabético. En este caso, el controlador podría manejar esto directamente sin necesidad de actualizar el modelo.
En resumen, el patrón MVC proporciona una gran cantidad de funcionalidades, como la separación de la lógica de negocio, la reutilización de código, la facilidad de mantenimiento, la flexibilidad y la escalabilidad, lo que lo convierte en una de las técnicas más populares para el desarrollo de aplicaciones de software.

Infraestructura para el almacenamiento y recuperación de datos del MVC: La infraestructura para el almacenamiento y recuperación de datos del patrón Modelo-Vista-Controlador (MVC) se refiere a cómo se almacenan y recuperan los datos dentro de la aplicación. En el MVC, los datos se almacenan en la capa de modelo, que es responsable de manejar la lógica de negocio y la interacción con la base de datos.

La infraestructura para el almacenamiento y recuperación de datos en el MVC puede variar según la implementación, pero generalmente incluye los siguientes componentes:

Base de datos: La base de datos es donde se almacenan los datos de la aplicación. La base de datos puede ser relacional o no relacional, dependiendo de las necesidades de la aplicación. La base de datos debe ser capaz de manejar el almacenamiento y la recuperación de datos de manera eficiente y segura.

Modelo de datos: El modelo de datos define la estructura de los datos que se almacenan en la base de datos. El modelo de datos incluye la definición de tablas, campos y relaciones entre las tablas.

Capa de modelo: La capa de modelo es responsable de la interacción con la base de datos. La capa de modelo se comunica con la base de datos para realizar operaciones de inserción, actualización, eliminación y recuperación de datos. La capa de modelo también puede realizar validaciones y cálculos en los datos antes de enviarlos a la capa de controlador.
