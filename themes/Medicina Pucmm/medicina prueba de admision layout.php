<?php 
/*
* Template Name: medicina prueba de admision layout
*/
get_header(); ?>


    <div class="container bg-white" style="padding: 45px 45px 60px 45px !important;">
        <div class="top-breadcrumb-container">
        <?php custom_breadcrumbs(); ?>
        </div>
                        
        <div class="row row-reverse-mobile">
            <div class="col-md-3 col-sm-12">
                <div class="secondary-navigation-bar-implementation">
                    <?php if ( is_page() ) { ?>

                    <?php
                    if($post->post_parent)
                    $children = wp_list_pages('title_li=&child_of='.$post->post_parent.'&echo=0'); else
                    $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
                    if ($children) { ?>

                    <ul>
                        <?php echo $children; ?>
                    </ul>

                    <?php } } ?>
                </div>
        </div>

            <div class="col-sm-12 col-md-9">




                <div class="custom-prueba-admision-row">

                <h1>Prueba de Admisión</h1>
                <h2>Fecha para la prueba</h2>

                <table>
                    <tr>
                        <th>Fecha límite para<br>depositar documentos</th>
                        <th>Fecha prueba de Admisión<br>para ingresar en enero de 2020</th>
                    </tr>
                    <tr>
                        <td>Viernes 15 de noviembre</td>
                        <td>Sábado 23 de noviembre</td>
                    </tr>
                </table>

                <h2>​​1. Prueba de Aptitud Académica (PAA) del College Board</h2>
                <p>
                Esta prueba se aplica durante el período previo al ingreso del estudiante a la Universidad. Se hace en diferentes convocatorias para que el solicitante elija la fecha más conveniente.
                </p>
                <p>
                La Prueba de Aptitud Académica, es un instrumento de evaluación utilizado en la sistematización de los procesos de admisión y en la selección de nuevos alumnos. Evalúa el potencial académico del estudiante para proseguir estudios universitarios. Se utiliza en prestigiosas instituciones de educación superior, tanto públicas como privadas y consta de los siguientes componentes:
                </p>

                <ul>
                <li>Razonamiento Verbal</li>
                <li>Razonamiento Matemático</li>
                <li>Redacción Indirecta</li>
                </ul>



                <h2>Guía de estudios para la prueba PAA</h2>
                <p>
                La guía de estudios para esta prueba provee información esencial que ayuda al estudiante a prepararse con un mayor grado de confianza para presentar la PAA. La guía contiene información general, la descripción de sus partes y presenta explicaciones sobre los diferentes tipos de ejercicios con sugerencias sobre cómo prepararse para contestarlos. Además, encontrará una prueba de práctica, la hoja de respuestas y las respuestas correctas.​
                </p>

                <a class="admisiones-button" href="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/guia-estudios-paa.pdf">Descargar Guía de Estudios PAA</a>



                <h2>2. Examen de nivel de idioma extranjero</h2>
                <p>
                Posterior a la prueba PAA se debe tomar el examen de idioma extranjero, que varía de acuerdo con la carrera elegida por el estudiante; siendo francés para los solicitantes a la carrera de Derecho y el inglés para las otras carreras. Esta prueba es de nivel y sus resultados son utilizados para ubicar al estudiante en el curso que le corresponde, de acuerdo con sus conocimientos.
                </p>
                <p>
                Los resultados de la prueba de idioma extranjero, no se computan en el cálculo del índice que se requiere para aprobar la prueba de admisión y el ingreso a la PUCMM.
                </p>



                <h2>3. POMA</h2>
                <p>
                La Prueba de Orientación y Medición Académica (POMA) del Ministerio de Educación Superior, Ciencia y Tecnología (MESCyT) debe ser aplicada a todos los candidatos a carreras de grado y/o técnico superior a nivel nacional de acuerdo a lo establecido en la Ley 139-01 de Educación Superior. Esta prueba diagnóstica proporciona a las universidades información sobre las habilidades tanto académicas como no académicas de sus aspirantes, a través de contenidos verbal, matemático, espacio-estructural, ciencias naturales, ciencias sociales, así como también de valoración de comportamientos humanos.
                </p>

                <h4>Libros de nivelación para POMA</h4>
                <li><a href="https://drive.google.com/file/d/1qhxW4SHA2A3N9dpo-ERa1_8iDU5XnAly/view">Libro Matemática</a></li>




                <h2>4. Resultados en Plataforma Digital</h2>
                <p>
                Desde el primer contacto formal con la Institución, el estudiante cuenta con un código de acceso y las facilidades que ofrece la tecnología a través de la Web. Los resultados de la prueba de admisión se pueden visualizar desde cualquier entorno digital. Una vez registrado en la PUCMM, con el simple uso de su código privado, el estudiante puede realizar todos sus procesos a través de la Web. Entre ellos, calificaciones, oferta académica personalizada, estados de cuenta, pagos, etc.
                </p>



                </div><!-- row -->




                
                <br><br>  
            </div>
        </div><!----row--->
    </div><!---container fluid--->


<?php get_footer(); ?>
