# DigOnions
Script a medida para el seguimiento en vivo de los resultados de las elecciones municipales en Arroyomolinos de León en la web de [#LaSotarrañera](http://lasotarrañera.es "La Sotarrañera - Opinión, arte y cultura de Arroyomolinos de León"). Estos resultados son únicamente provisionales, ya que el recuento en vivo no tiene en cuenta impugnaciones de votos, errores de conteo; y además siempre puede haber algún error humano. La finalidad es obtener un resultado orientativo en directo según evoluciona el conteo en la mesa electoral.

##Motivación e inspiración #agrogeek
De cara a las elecciones municipales quería mostrar los resultados del recuento en vivo a todos los usuarios de la página. Mientras cavaba unas cebollas en mi huerto se me ocurrió el modo de hacerlo sencillo y práctico: un panel de control desde el que pulsar botones con los diferentes partidos, fácilmente desde el móvil; y un visor (al final fueron dos) en el que representar esos datos en directo, con el cálculo de concejales instantáneo.

##Mejoras y evolución
Se podrían hacer muchas mejoras. Las más importantes:
* Implantar medidas básicas de seguridad para evitar hackeos del script o manipulaciones en el resultado.
* Crear panel de configuración y lógica de negocio para el manejo dinámico del número de partidos, número de concejales electos, ...
* Implantar sistema para diferenciar resultados según mesa o colegio electoral (mis requisitos iniciales eran muy básicos: un colegio electoral con una mesa).


##Software de terceros
Para la representación visual en tartas he utilizado [Chart.js](http://chartjs.org) y para el manejo de los datos y la conexión AJAX con el servidor he utilizado [jQuery 2.1.4](https://jquery.com/).
