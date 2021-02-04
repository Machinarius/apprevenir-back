<?php

use Illuminate\Database\Seeder;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert([
            [
                'id' => 1,
                'test_id' => NULL, 
                'lang' => 'es',
                'name' => 'Alcohol',
                'image' => 'ALCOHOL.png',
                'introduction' => '<p>Su nombre científico es etanol, aunque puede que lo conozcas  como alcohol, licor. Si lo consumes, o lo piensas consumir, esta información  puede ser de tu interés.</p>
                <p>  El alcohol en las bebidas alcohólicas es el etanol o alcohol  etílico. Es un líquido incoloro de olor característico y soluble en agua. Hay  dos tipos de alcohol en las bebidas alcohólicas:</p>
                <p><strong>Fermentado</strong>: aquel  que proviene de la fermentación de los azucares de frutas y cereales. Formarían  parte de este grupo la cerveza, el vino. Su graduación, el porcentaje de  alcohol puro, ronda del 5% al 15% aprox.</p>
                <p><strong>Destilado</strong>: el  resultado del proceso de destilación de los alcoholes fermentados. En este  grupo estarían todas aquellas bebidas con una graduación mayor al 20% aprox.</p>
                <h2> <strong>Precauciones</strong></h2>
                <p>  Los&nbsp;<strong>efectos del alcohol dependen</strong>&nbsp;de  varios factores:</p>
                <p><strong>El  sexo</strong>. Las mujeres tardan más en metabolizarlo por lo que  estará presente en su organismo durante más tiempo.</p>
                <p><strong>El  peso corporal</strong>. A menor peso, mayor efecto.</p>
                <p><strong>La  velocidad con la que se consume</strong>. Beber despacio hará que los  niveles de alcoholemia no se disparen reduciendo así la posibilidad de sufrir  consecuencias negativas.</p>
                <p><strong>Tipo  de bebida</strong>. No es lo mismo la cantidad de alcohol de una bebida  fermentada que una destilada. Estas últimas suben antes (llevan más alcohol) y,  si te pasas con ellas, las consecuencias negativas serán mayores que las  positivas.</p>
                <p><strong>Beber  con el estómago vacío</strong>. El alcohol pasará antes a la sangre  incrementando las probabilidades de que te siente mal. Si vas a beber, procura  hacerlo con el estómago lleno.</p>
                <p><strong>La  tolerancia</strong>. Ocurre cuando se bebe de forma repetida. Esto implica  que cada vez que se beba se necesitará más cantidad para conseguir los mismos  efectos que antes se conseguían con menos cantidad. Procura no exceder la dosis  límite para un consumo de riesgo señalada más arriba.</p>
                <p><strong>(Tomado  de </strong><a href="https://energycontrol.org/infodrogas/alcohol.html" target="_blank">https://energycontrol.org/infodrogas/alcohol.html</a><strong>)</strong></p>
                <p align="left">Los  efectos del alcohol varían de persona a persona, según una multiplicidad de  factores, incluso los siguientes:&nbsp;</p>
                
                  <ul>
                    <li>la cantidad que se bebe&nbsp;</li>
                    <li>la frecuencia con que se  bebe&nbsp;</li>
                    <li>la edad&nbsp;</li>
                    <li>el estado de salud&nbsp;</li>
                    <li>los antecedentes  familiares&nbsp;</li>
                  </ul>
                
                <p align="left">(Tomado de <a href="https://www.drugabuse.gov/es/informacion-sobre-drogas/el-alcohol" target="_blank">https://www.drugabuse.gov/es/informacion-sobre-drogas/el-alcohol</a>)</p>',
                'description' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'test_id' => NULL, 
                'lang' => 'es',
                'name' => 'Drogas',
                'image' => 'DROGAS.png',
                'introduction' => '<p>La adicción se define como una enfermedad crónica y  recurrente del cerebro que se caracteriza por la búsqueda y el consumo  compulsivo de drogas, a pesar de sus consecuencias nocivas. Se considera una  enfermedad del cerebro porque las drogas modifican este órgano: su estructura y  funcionamiento se ven afectados. Estos cambios en el cerebro pueden ser de  larga duración, y pueden conducir a comportamientos peligrosos que se observan  en las personas que abusan del consumo de drogas.</p>
                <p>  (Tomado de: <a href="https://www.drugabuse.gov/es/publicaciones/serie-de-reportes/las-drogas-el-cerebro-y-el-comportamiento-la-ciencia-de-la-adiccion/abuso-y-adiccion-las-drogas" target="_blank">https://www.drugabuse.gov/es/publicaciones/serie-de-reportes/las-drogas-el-cerebro-y-el-comportamiento-la-ciencia-de-la-adiccion/abuso-y-adiccion-las-drogas</a> )</p>
                <p>La adicción a las drogas,  que también se conoce como «trastorno por consumo de sustancias», es una  enfermedad que afecta el cerebro y el comportamiento de una persona, y produce  incapacidad de controlar el consumo de medicamentos o drogas legales o  ilegales. Las sustancias como el alcohol, la marihuana y la nicotina también se  consideran drogas. Cuando eres adicto, posiblemente sigas consumiendo la droga  a pesar del daño que causa.</p>
                <p>  La drogadicción puede  empezar con el consumo experimental de una droga recreativa en situaciones  sociales y, en algunas personas, el consumo de la droga se vuelve más frecuente.  En otras personas, en especial con los opioides, la adicción a las drogas  empieza con la exposición a medicamentos recetados, o al recibir medicamentos  de un amigo o un familiar al que se los recetaron.</p>
                <p>  El riesgo de adicción y la  rapidez con que te vuelves adicto varían según la droga. Algunas drogas, como  los analgésicos opioides, conllevan un riesgo mayor y provocan adicción más  rápido que otras.</p>
                <p>  Con el paso del tiempo, es  probable que necesites dosis mayores de la droga para sentir los efectos. En  poco tiempo, es probable que necesites la droga solo para sentirte bien. A  medida que aumenta tu consumo de la droga, encontrarás que es cada vez más  difícil vivir sin ella. Los intentos por suspender el consumo de la droga  pueden causar deseos intensos de consumirla y hacerte sentir físicamente  enfermo (síntomas de abstinencia).</p>
                <p>  Es posible que necesites  ayuda de tu médico, tus familiares, tus amigos, grupos de apoyo y un programa  de tratamiento organizado para superar tu adicción a las drogas y mantenerte  alejado de ellas.<strong></strong></p>
                <h2>Síntomas</h2>
                <p>Los síntomas o las  conductas de la drogadicción incluyen los siguientes:</p>
                <ul>
                  <li>Sentir que tienes que consumir la droga con frecuencia, ya sea  diariamente o incluso varias veces al día</li>
                  <li>Tener una necesidad tan intensa de consumir la droga que no  puedes pensar en otra cosa</li>
                  <li>Con el tiempo, necesitar una dosis mayor de la droga para  obtener el mismo efecto</li>
                  <li>Consumir mayores cantidades de la droga durante un período de  tiempo más largo del que tenías pensado</li>
                  <li>Asegurarte de tener droga disponible</li>
                  <li>Gastar dinero en la droga, incluso cuando no puedes pagarla</li>
                  <li>No cumplir con las obligaciones y responsabilidades laborales, o  reducir el tiempo que dedicas a actividades sociales o recreativas debido al  consumo de la droga</li>
                  <li>Continuar con el consumo de la droga a pesar de que sabes que te  está provocando problemas en tu vida o daños físicos o psicológicos</li>
                  <li>Hacer cosas que normalmente no harías para conseguir la droga,  como robar</li>
                  <li>Conducir o hacer otras actividades peligrosas cuanto estás bajo  los efectos de la droga</li>
                  <li>Dedicar mucho tiempo a intentar obtener la droga, a consumirla o  a recuperarte de sus efectos</li>
                  <li>Fracasar en tus intentos de suspender el consumo de la droga</li>
                  <li>Experimentar síntomas de abstinencia cuando intentas suspender  el consumo de la droga</li>
                </ul>
                <p>(Tomado  de: <a href="https://www.mayoclinic.org/es-es/diseases-conditions/drug-addiction/symptoms-causes/syc-20365112" target="_blank">https://www.mayoclinic.org/es-es/diseases-conditions/drug-addiction/symptoms-causes/syc-20365112</a>)</p>',
                'description' => 'Por favor elija una sustancia que haya consumido a lo largo de su vida',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'test_id' => NULL, 
                'lang' => 'es',
                'name' => 'Tabaco',
                'image' => 'TABACO.png',
                'introduction' => '<p>El tabaquismo es un tipo de adicción que lleva consigo un daño crónico por la inhalación de sustancias tóxicas presentes en los cigarrillos, como la nicotina, principal principio adictivo del tabaco. Según datos de la OMS, fumar provoca la muerte de 6 millones de personas fumadoras al año en todo el mundo, y de hasta 600.000 personas no fumadoras (fumadores pasivos).</p>
                <p>Las  consecuencias negativas y potencialmente fatales del tabaco han sido  corroboradas desde hace décadas: es un factor de riesgo de cáncer de pulmón y  otros tipos de cáncer, como de la cavidad oral, de hígado, de vegija, de  mama... Pese a ello, su consumo está muy extendido y su industria, muy consolidada.</p>
                <p>El resultado del consumo de tabaco se refleja en la tasa anual  de mortalidad: en España mueren cerca de 50.000 personas por enfermedades  derivadas del consumo de tabaco, una cifra mayor que el conjunto de fallecidos  por accidentes de tráfico y consumo de drogas ilegales. Alrededor de <strong>1000 personas mueren cada año  indirectamente por el tabaco </strong>porque son <strong>fumadores pasivos</strong>.</p>
                <p>(Tomado de: <a href="https://www.onmeda.es/adicciones/tabaquismo.html" target="_blank">https://www.onmeda.es/adicciones/tabaquismo.html</a> )</p>',
                'description' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'test_id' => NULL, 
                'lang' => 'es',
                'name' => 'Inhalables',
                'image' => 'INHALABLES.png',
                'introduction' => '<p>Los inhalantes son sustancias volátiles que 
                producen vapores químicos que se pueden inhalar para provocar efectos  psicoactivos o de alteración mental. 
                Si bien hay otras sustancias de abuso que  se pueden inhalar, el término &quot;inhalantes&quot; se utiliza para describir  
                una variedad de sustancias cuya característica principal es que rara vez, o  nunca, son usadas por otra vía que no sea la de 
                la inhalación. Esta definición  abarca una amplia gama de sustancias químicas que pueden tener diversos efectos  farmacológicos 
                y que se encuentran en cientos de productos diferentes. Como  resultado, es difícil lograr una clasificación precisa de los 
                inhalantes. Uno  de los sistemas de clasificación establece cuatro categorías generales de  inhalantes basándose en las formas 
                más comunes en que estos se encuentran en  los productos domésticos, industriales y médicos. Estas cuatro categorías son:  disolventes volátiles, aerosoles, gases y nitritos.</p> <p>  Los&nbsp;<strong>disolventes volátiles</strong>&nbsp;son líquidos que se  vaporizan a temperatura ambiente. Se encuentran en una variedad de productos  económicos que se pueden obtener fácilmente y que son de uso común doméstico e  industrial. Estos incluyen los diluyentes y removedores de pinturas, líquidos  para lavado en seco, quitagrasas, gasolinas, pegamentos, correctores líquidos y  marcadores con punta de fieltro.</p> <p>Los&nbsp;<strong>aerosoles</strong>&nbsp;son rociadores que contienen propulsores  y disolventes. Estos incluyen las pinturas pulverizadas, atomizadores para  desodorantes y fijadores de pelo, rociadores de aceite vegetal para cocinar y  rociadores.</p> <p>Los&nbsp;<strong>gases</strong>&nbsp;incluyen las anestesias de uso médico así  como aquellos gases que se utilizan en productos domésticos o comerciales. Los  gases anestésicos de uso médico incluyen el éter, el cloroformo, el halotano y  el óxido nitroso, comúnmente conocido como &quot;gas hilarante&quot;. Entre  estos, el óxido nitroso es el gas más abusado y se puede encontrar en los  dispensadores de crema batida y los productos que incrementan los octanajes en  los carros de carrera. Otros productos caseros y comerciales que contienen  gases son los encendedores de butano, los tanques de gas propano y los  refrigerantes.</p> 
                <p>  Los&nbsp;<strong>nitritos</strong>&nbsp;a menudo se consideran una clase especial  de inhalantes. A diferencia de la mayoría de los demás inhalantes que actúan  directamente sobre el sistema nervioso central (SNC), los nitritos  principalmente dilatan los vasos sanguíneos y relajan los músculos. Asimismo,  mientras que los demás inhalantes se utilizan para alterar el estado de ánimo,  los nitritos se usan principalmente para intensificar el placer sexual. Los  nitritos, que incluyen el nitrito ciclohexílico, el nitrito isoamílico (amilo)  y el nitrito isobutílico (butilo), comúnmente se conocen como&nbsp;<em>&quot;poppers&quot;</em>&nbsp;(&quot;reventadores&quot;)  o&nbsp;<em>&quot;snappers&quot;</em>&nbsp;(&quot;crujidores&quot;). El  nitrito amílico se utiliza en algunos procedimientos diagnósticos y  anteriormente se recetaba a ciertos pacientes con angina de pecho. La Comisión  para la Seguridad de los Productos de Consumo actualmente prohíbe la  comercialización de los nitritos, pero aún se pueden comprar en pequeñas  botellas que en ocasiones están etiquetadas como &quot;limpiador de  video&quot;, &quot;desodorante ambiental&quot;, &quot;limpiador de cuero&quot;  o &quot;aroma líquido&quot;.</p> <p>Por lo general, las  personas que abusan de los inhalantes usan cualquier sustancia a su alcance.  Sin embargo, como los efectos producidos por los diferentes inhalantes varían,  algunas personas hacen lo imposible para conseguir su inhalante preferido. Por  ejemplo, en ciertas partes del país, uno de los favoritos es el&nbsp;<em>&quot;Texas shoeshine&quot;</em>&nbsp;(&quot;betún  tejano&quot;), un aerosol para lustrar zapatos que contiene la sustancia  química tolueno.</p> <p>(Tomado  de: <a href="https://www.drugabuse.gov/es/publicaciones/serie-de-reportes/abuso-de-inhalantes/que-son-los-inhalantes" target="_blank">https://www.drugabuse.gov/es/publicaciones/serie-de-reportes/abuso-de-inhalantes/que-son-los-inhalantes</a>)</p>',
                'description' => 'Por favor seleccione la sustancia inhalable de uso',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'test_id' => NULL, 
                'lang' => 'es',
                'name' => 'Ludopatía',
                'image' => 'LUDOPATIA.png',
                'introduction' => '<p>La ludopatía es una patología que consiste en la alteración progresiva  del comportamiento por la que el individuo experimenta una<strong> necesidad  incontrolable de jugar</strong>, por encima de cualquier consecuencia negativa. Está  reconocida como enfermedad por la Organización Mundial de la Salud y por la  Asociación Americana de Psiquiatría (APA). La ludopatía se produce en <strong>los  juegos que tienen capacidad adictiva</strong>, que son aquellos en los que  transcurre poco tiempo entre la apuesta y el premio conseguido. Jerónimo Saiz,  miembro del Comité Ejecutivo de la Sociedad Española de Psiquiatría y patrono  de la Fundación Española de Psiquiatría y Salud Mental, explica que el juego  asociado a la ludopatía es el que tiene lugar en bingos casinos y juegos online.  Según el especialista, <strong>el ludópata es como un drogodependiente</strong> que  necesita el juego y hace lo que sea por jugar, es decir, convierte el juego en  una primera necesidad urgente.</p>
                <p>  La Federación española de Jugadores de Azar Rehabilitados (Fejar) añade que  el juego es patológico cuando la persona piensa, vive y actúa en función  del mismo, dejando de lado o en un segundo escalón otros objetivos y  necesidades. Aunque la ludopatía sea una adicción que no tiene como referencia  material una sustancia,<strong> el ludópata presenta los mismos rasgos que un  adicto</strong>:</p>
                <ul>
                  <li>Repetición  de una conducta o<strong> acción que resulta placentera</strong>y aumento de  su frecuencia para obtener los efectos deseados. Diferentes sustancias  químicas, como la<strong> dopamina</strong> y las<strong> endorfinas</strong>,  actúan como estimulantes y refuerzan las conductas patológicas.<br>
                  </li>
                  <li><strong>Pérdida de  control</strong> de la  persona derivada del fallo de los mecanismos cerebrales de inhibición de la  conducta.    </li>
                  <li>Aparición  del&nbsp;<strong>síndrome de abstinencia</strong>&nbsp;si se interrumpe el hábito.</li>
                </ul>
                <p>(Tomado de: <a href="http://www.cuidateplus.com/enfermedades/psiquiatricas/ludopatia.html" target="_blank">http://www.cuidateplus.com/enfermedades/psiquiatricas/ludopatia.html</a>)</p>',
                'description' => 'Indique, por favor, cuál de los siguientes juegos ha practicado usted en su vida, una vez por semana o más:',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'test_id' => NULL, 
                'lang' => 'es',
                'name' => 'Redes Sociales',
                'image' => 'REDES-SOCIALES.png',
                'introduction' => '<p>Es evidente que nuestras vidas han mejorado gracias a las nuevas tecnologías.  Ahora todo es más fácil, rápido e incluso divertido. El problema se presenta  cuando perdemos el equilibrio entre lo virtual y lo real. Según Enrique  Echeburúa y Paz Corral (Adicción a las nuevas tecnologías y a las redes  sociales en jóvenes: un nuevo reto; Adicciones, vol. 22, núm. 2, 2010)<strong> existe un alto porcentaje de adolescente y adultos que, siente un  excesivo placer, ante el uso de nuevas tecnologías y redes sociales</strong>.  El hecho de enfrentarse ante una realidad diferente a la que viven y tener en  su poder la posibilidad de crearse una identidad nueva, hace que los índices de  adrenalina se disparen frente al ordenador o teléfono móvil, aunque también  puede suceder que simplemente se utilice para abstraerse de la cotidianidad o  como forma de continuar conectado con los amigos y reafirmar su identidad ante  el grupo, en el caso de los adolescentes principalmente. En el momento en  que <strong>su uso interfiera en la vida normal de manera clara, debemos  comenzar a preocuparnos</strong>. Pero… ¿Cómo podemos identificar una  adicción en este campo? ¿Cómo distinguir un problema de una simple distracción?  Los cambios en el comportamiento que deben preocuparle son los siguientes:</p>
                <ul>
                  <li>Pérdida de control y dependencia  excesiva, dedica unos tiempos de conexión anormalmente altos, pierden la noción  del tiempo.</li>
                  <li>Aislamiento, irritabilidad.</li>
                  <li>Bajo rendimiento en el trabajo o en  la escuela.</li>
                  <li>Desinterés por otros temas.</li>
                  <li>Trastornos de la conducta,  sedentarismo e incluso obesidad.</li>
                  <li>Sentir una euforia y activación  excesivas ante el ordenador o teléfono móvil.</li>
                  <li>Perder horas de sueño.</li>
                </ul>
                <p>Las  personas con<strong> dependencia a las TIC </strong>(<strong>Tecnologías, información, comunicación</strong>) buscan un  alivio inmediato ante el malestar emocional que están viviendo (aburrimiento,  soledad, ira, problemas en la familia o en el trabajo). Es justo ese placer el  que les convierte en adictos a las redes sociales, con las TIC consiguen  evadirse, entonces los problemas desaparecen y la angustia con ellos. Esta  agradable sensación hará que cada vez el abuso sea mayor, y cuanto más grande  sea más aumentará el aislamiento de la persona, la ansiedad, baja autoestima y  pérdida de su capacidad de control.</p>	
                <p>Tomado de: <a href="http://gabinetedepsicologia.com/adiccion-a-las-redes-sociales-psicologos-madrid-tres-cantos" target="_blank"><strong>http://gabinetedepsicologia.com/adiccion-a-las-redes-sociales-psicologos-madrid-tres-cantos</strong></a></p>',
                'description' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'test_id' => NULL, 
                'lang' => 'es',
                'name' => 'Tecnologías',
                'image' => 'TECNOLOGIA.png',
                'introduction' => '',
                'description' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'test_id' => NULL, 
                'lang' => 'es',
                'name' => 'Dependencia Emocional',
                'image' => 'DEPENDENCIA-EMOCIONAL.png',
                'introduction' => '<p>La dependencia emocional se define como un patrón persistente de  necesidades emocionales insatisfechas que se intentan cubrir de una forma  desadaptativa con otras personas (Castelló, 2000).</p> <p>  Es una necesidad afectiva extrema que una persona siente hacia otra.  Según algunos autores la dependencia emocional afectaría a un 10% de la  población.</p> <p>  Es más frecuente encontrar este trastorno en mujeres que en hombres  (75%). Es posible que esta diferencia se deba tanto a factores culturales (en  el caso de la mujer existe una tendencia a la empatía y la vinculación  afectiva) como biológicos.</p> <p>  En la práctica clínica, la dependencia a la pareja es la que genera más  demanda, pero se puede dar en otras relaciones como con los hijos o con los  progenitores, etc.</p> <h2>Señales de alarma</h2> <p>  No ser capaz de poner fin a una relación de pareja negativa.</p> <p>  Aguantar y justificar a la pareja aun teniendo un comportamiento  violento, poco afectivo, etc.</p> <p>  Pensar en cambiar la forma de actuar o de comportarse de la pareja.</p> <p>  Sentir atracción por hombres distantes, fríos, poco afectivos.</p> <p>  Vivir en una constante ansiedad y cada día esforzarse por conseguir la  aprobación de la pareja.</p> <p>  Pensar que amar es sufrir.</p> <p>Creer  que la culpa de que la pareja actúe de un modo incorrecto es culpa de la  persona que presenta el trastorno de dependencia emocional.</p> <p>  (Tomado  de: <a href="http://www.ais-info.org/dependenciaemocional.html" target="_blank">http://www.ais-info.org/dependenciaemocional.html</a>)</p>',
                'description' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'test_id' => NULL, 
                'lang' => 'es',
                'name' => 'Sexo',
                'image' => 'SEXO.png',
                'introduction' => '<p>La adicción sexual,  también llamada dependencia sexual,&nbsp;<strong>hipersexualidad</strong>,  ninfomanía (en mujeres), satiriasis (en varones) se define como comportamiento  sexual compulsivo o compulsividad sexual, es decir,<strong> los individuos son incapaces de  controlar su comportamiento sexual</strong>.</p> <p>  La dependencia sexual puede implicar  una variedad amplia de conductas. A veces un adicto tiene problemas con una  sola conducta indeseada, a veces con varias.</p> <p>  Un gran número de adictos sexuales  dice que su uso malsano del sexo les ha resultado un proceso progresivo.  Normalmente empieza con un apego a la masturbación, la pornografía (impresa o  electrónica) o con una relación, pero al pasar el tiempo ha progresado para  incluir conductas cada vez más peligrosas.</p> <p>  La esencia de toda dependencia es la  total falta de control sobre una conducta compulsiva que lleva al adicto a una  vida no manejable. La persona adicta no tiene control y siente vergüenza, dolor  y odio hacia sí mismo. Puede que esa persona quiera parar, pero repetidas veces  no logra hacerlo. La falta de capacidad para manejar su propia vida puede evidenciarse  en las consecuencias que sufren los adictos: relaciones perdidas, dificultades  en el trabajo, arrestos/detenciones, problemas económicos, pérdida de interés  en asuntos no sexuales, falta de autoestima y un sentimiento de desesperación.</p> <p>(Tomado de: <a href="https://www.psicoactiva.com/blog/adiccion-al-sexo-causas-sintomas/" target="_blank">https://www.psicoactiva.com/blog/adiccion-al-sexo-causas-sintomas/</a>)</p>',
                'description' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'test_id' => NULL, 
                'lang' => 'es',
                'name' => 'Trabajo',
                'image' => 'TRABAJO.png',
                'introduction' => '<p>La <strong>adicción al trabajo</strong> (también  denominada con el término anglosajón <strong><em>workaholics</em></strong><strong> o <em>trabajólicos</em></strong>)  se caracteriza por una necesidad excesiva e incontrolable de trabajar de forma  constante. Este comportamiento puede interferir en nuestra salud física y  emocional, así como en nuestras relaciones sociales.</p> <p>  Las personas con adicción  al trabajo suelen trabajar sin obligación explícita ni implícita fuera de  horas, dedicando un tiempo excesivo a su labor profesional y sintiéndose mal si  no lo hacen. Este hecho hace que muestren desinterés por otras facetas de su  vida como hobbies o relaciones personales.</p> <h2>Causas  de la adicción al trabajo</h2> <ul>   <li>Ambición excesiva por el dinero y poder.</li>   <li>La incapacidad para delegar tareas o  no saber decir que no a las demandas del jefe o compañeros.</li>   <li>Problemas económicos y alta  competitividad</li>   <li>Rasgos de personalidad tipo A;  personas involucradas en diferentes tareas, con elevados niveles de hostilidad  y estrés.</li>   <li>La <strong>falta de organización</strong>,  que permite la acumulación y sobresaturación del trabajo.</li>   <li>Ausencia de estrategias  para organizar el  tiempo.</li>   <li>Problemas familiares que pueden hacer  que el trabajador posponga acudir a casa.</li>   <li>Manejo ineducado de los retos que en  vez de suponer una forma de crecer llevan al trabajador a meterse en una  espiral de trabajo de la que no sabe cómo salir.</li> </ul> <p>(Tomado de: <a href="https://www.webconsultas.com/mente-y-emociones/trabajo-y-tiempo-libre/que-es-un-workaholic" target="_blank">https://www.webconsultas.com/mente-y-emociones/trabajo-y-tiempo-libre/que-es-un-workaholic</a>)</p>',
                'description' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11,
                'test_id' => NULL, 
                'lang' => 'es',
                'name' => 'Compras Compulsivas',
                'image' => 'COMPRAS-COMPULSIVAS.png',
                'introduction' => '<p>La  compra compulsiva consiste en el afán desmedido, incontrolado y recurrente por  adquirir cosas no es un fenómeno exclusivo de fechas como la Navidad, en las  que la insistencia de la publicidad comercial y la tradición consumista podrían  explicar un cierto aumento de los gastos.</p>
                <p><strong>Es una  adicción en toda regla </strong>que, si bien en su máxima expresión  afecta a poca gente, es más común de lo que pudiera pensarse. Es la  consecuencia de un impulso irreprimible, un acto poco consciente del que  después nos arrepentimos, porque compramos cosas poco útiles o gastamos más de  lo que podemos.</p>
                <p><strong>La  compra genera en la persona adicta una satisfacción inmediata,</strong> con  la que cree llenar su vida de sentido y con la que consigue borrar  temporalmente los problemas.</p>	
                <p>(Tomado de: <a href="https://www.centroadiccionesbarcelona.com/adiccion-a-las-compras-compras-compulsivas/" target="_blank">https://www.centroadiccionesbarcelona.com/adiccion-a-las-compras-compras-compulsivas/</a>)</p>',
                'description' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 12,
                'test_id' => NULL, 
                'lang' => 'es',
                'name' => 'Ansiedad',
                'image' => 'ANSIEDAD.png',
                'introduction' => '<p>Las  manifestaciones sintomatológicas de la ansiedad son muy variadas y pueden  clasificarse en diferentes grupos:</p> <p>  <strong>Físicos:</strong> Taquicardia, palpitaciones, opresión en el pecho, falta de aire, temblores,  sudoración, molestias digestivas, náuseas, vómitos, nudo en el estómago,  alteraciones de la alimentación, tensión y rigidez muscular, cansancio,  hormigueo, sensación de mareo e inestabilidad. Si la activación  neurofisiológica es muy alta pueden aparecer alteraciones del sueño, la  alimentación y la respuesta sexual.</p> <p>  <strong>Psicológicos:</strong> Inquietud, agobio, sensación de amenaza o peligro, ganas de huir o atacar,  inseguridad, sensación de vacío, sensación de extrañeza o despersonalización,  temor a perder el control, recelos, sospechas, incertidumbre, dificultad para  tomar decisiones. En casos más extremos, temor a la muerte, a la locura, o al  suicidio.</p> <p>  <strong>De  conducta:</strong> Estado de alerta e hipervigilancia, bloqueos, torpeza o dificultad  para actuar, impulsividad, inquietud motora, dificultad para estarse quieto y  en reposo. Estos síntomas vienen acompañados de cambios en la expresividad  corporal y el lenguaje corporal: posturas cerradas, rigidez, movimientos torpes  de manos y brazos tensión de las mandíbulas, cambios en la voz, expresión  facial de asombro, duda o crispación, etc.</p> <p>  <strong>Intelectuales  o cognitivos</strong>: Dificultades de atención, concentración y memoria, aumento de los  despistes y descuidos, preocupación excesiva, expectativas negativas,  rumiación, pensamientos distorsionados e importunos, incremento de las dudas y  la sensación de confusión, tendencia a recordar sobre todo cosas desagradables,  sobrevalorar pequeños detalles desfavorables, abuso de la prevención y de la  sospecha, interpretaciones inadecuadas, susceptibilidad, etc.</p> <p>  <strong>Sociales:</strong> Irritabilidad, ensimismamiento, dificultades para iniciar o seguir una  conversación, en unos casos, y verborrea en otros, bloquearse o quedarse en  blanco a la hora de preguntar o responder, dificultades para expresar las  propias opiniones o hacer valer los propios derechos, temor excesivo a posibles  conflictos, etc.</p> <p>No  todas las personas tienen los mismos síntomas, ni éstos la misma intensidad en  todos los casos. Cada persona, según su predisposición biológica y/ o  psicológica, se muestra más vulnerable o susceptible a unos u otros síntomas.</p> <p>  (Tomado  de: <a href="https://clinicadeansiedad.com/soluciones-y-recursos/preguntas-mas-frecuentes/cuales-son-los-sintomas-de-la-ansiedad/" target="_blank">https://clinicadeansiedad.com/soluciones-y-recursos/preguntas-mas-frecuentes/cuales-son-los-sintomas-de-la-ansiedad/</a>)</p>',
                'description' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 13,
                'test_id' => NULL, 
                'lang' => 'es',
                'name' => 'Depresión',
                'image' => 'DEPRESION.png',
                'introduction' => '<p>La depresión clínica, es una enfermedad grave y común que nos  afecta física y mentalmente en nuestro modo de sentir y de pensar. La  depresión nos puede provocar deseos de alejarnos de nuestra familia, amigos,  trabajo, y escuela. Puede además causarnos ansiedad, pérdida del sueño, del  apetito, y falta de interés o placer en realizar diferentes actividades.</p> <p>  (Tomado de: <a href="http://www.mentalhealthamerica.net/conditions/%C2%BFqu%C3%A9-es-la-depresi%C3%B3n" target="_blank">http://www.mentalhealthamerica.net/conditions/%C2%BFqu%C3%A9-es-la-depresi%C3%B3n</a></p> <h2>Síntomas</h2> <ul>   <li>Sentimientos persistentes de  tristeza, ansiedad, o vacío</li>   <li>Sentimientos de desesperanza y/o  pesimismo</li>   <li>Sentimientos de culpa, inutilidad,  y/o impotencia</li>   <li>Irritabilidad, inquietud</li>   <li>Pérdida de interés en las actividades  o pasatiempos que antes disfrutaba, incluso las relaciones sexuales</li>   <li>Fatiga y falta de energía</li>   <li>Dificultad para concentrarse,  recordar detalles, y para tomar decisiones</li>   <li>Insomnio, despertar muy temprano, o  dormir demasiado</li>   <li>Comer excesivamente o pérder el  apetito</li>   <li>Pensamientos suicidas o intentos de  suicidio</li>   <li>Dolores y malestares persistentes,  dolores de cabeza, cólicos, o problemas digestivos que no se alivian incluso  con tratamiento</li> </ul> <p>(Tomado  de: <a href="https://www.nimh.nih.gov/health/publications/espanol/depresion/index.shtml" target="_blank">https://www.nimh.nih.gov/health/publications/espanol/depresion/index.shtml</a>)</p>',
                'description' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 14,
                'test_id' => NULL, 
                'lang' => 'es',
                'name' => 'Riesgo',
                'image' => 'RIESGO.png',
                'introduction' => '<p>Hoy en día, nuestros hijos  pueden estar expuestos a las drogas desde una edad muy temprana. <br>   El abuso de drogas es un  comportamiento que se puede prevenir. Sin embargo, los efectos prolongados de  las drogas en el cerebro pueden llevar a la drogadicción, que es una enfermedad  crónica y recurrente del cerebro. Para cualquier persona adicta a las drogas,  la necesidad compulsiva de consumir drogas puede ser abrumadora, afectando  todos los aspectos de su vida y la de su familia.</p> <p>  El consumo de drogas puede  tener serias consecuencias para el futuro, tanto de un joven como de un adulto,  porque las drogas pueden alterar la manera cómo funciona el cerebro y causar  otras consecuencias médicas graves. El abuso de drogas puede impedir que su  hijo se desempeñe bien en la escuela. Más adelante, puede dificultar su  capacidad para encontrar y mantener un empleo, aún después de haberse graduado.  Las investigaciones científicas han demostrado que la comunicación con los  hijos es una manera eficaz de prevenir que consuman drogas. Nunca es demasiado  temprano ni demasiado tarde para hablar con nuestros hijos sobre los riesgos  asociados con el abuso de drogas.</p> <h2><strong>Debemos  observar y supervisar a nuestros hijos.</strong></h2> <p>  Aun cuando no deseáramos  que fuese así, nuestros hijos pueden tener acceso a drogas en muchos lugares.  Aunque resulte difícil, es muy importante que usted hable con sus hijos sobre  las consecuencias del uso de drogas, y le urge hacerlo si usted sospecha que ya  están usándolas. Usted conoce a sus hijos mejor que nadie. La mayoría de los  padres desarrollan un sexto sentido sobre sus hijos que les ayuda a intuir  hasta los cambios más pequeños en ellos. Pueden existir otras razones que  expliquen los cambios que usted observe, pero en general, cuando un niño o un  joven experimenta con o consume drogas, puede mostrar alteraciones en:</p> <ul>   <li>El desempeño escolar: si obtiene  malas calificaciones, falta a clases o desarrolla un mal comportamiento;</li>   <li>El interés en actividades: si pierde  interés en sus pasatiempos habituales, deportes o actividades favoritas;</li>   <li>Las rutinas cotidianas: si come  demasiado o deja de comer; si duerme demasiado o deja de dormir;</li>   <li>La selección de amigos: si cambia de  amigos, o si se junta con muchachos que se sabe que utilizan drogas;</li>   <li>Su personalidad: si muestra mal  humor, nerviosismo, agresividad o rebeldía persistente;</li>   <li>El comportamiento: si cierra con  llave su cuarto, gavetas o cajas.</li> </ul> <p>Existen ciertas cosas que  usted puede encontrar en su casa, o en posesión de sus hijos que pueden indicar  que están usando drogas. Por ejemplo:</p> <ul>   <li>Papeles para enrollar o liar  cigarrillos, o pipas que se usan para consumir marihuana;</li>   <li>Frascos de medicinas, espejos, o  cuadritos pequeños de vidrio que se usan para consumir cocaína;</li>   <li>Calcetines que huelen a spray para el  pelo, así como latas o recipientes vacíos de pegamento o de spray para el pelo;  los mismos podrían ser lo que sobra después de haber usado inhalantes.</li> </ul> <p><em>Johnston, L.D., O Malley,  P.M., Backman, J.G. &amp; Schulenberg, J.E. (2005)Demographic subgroup trends for various licit  and illicit drugs, 1975-2004. (Monitoring the Future Occasional  Paper No. 61) [On-line] Ann Arbor, MI: Institute for Social Research.  Disponible en línea en inglés</em>.<a href="http://monitoringthefuture.org/" target="_blank">http://monitoringthefuture.org</a><strong> </strong></p> <p align="left">Tomado de: <a href="https://www.drugabuse.gov/es/publicaciones/juventud-latina/los-riesgos-del-abuso-de-drogas" target="_blank">https://www.drugabuse.gov/es/publicaciones/juventud-latina/los-riesgos-del-abuso-de-drogas</a></p>',
                'description' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 15,
                'test_id' => NULL, 
                'lang' => 'es',
                'name' => 'Etapas de Cambio',
                'image' => 'ETAPAS-DE-CAMBIO.png',
                'introduction' => '<p>Los estadios representan la dimensión temporal, es decir, cuándo cambia la gente. Al  ayudar a alguien se debe considerar el momento particular en el que se  encuentra. Se postula que para lograr el cambio, una persona debe pasar por  etapas bien definidas y predecibles, las cuales deben ser respetadas para  facilitar el proceso.</p> <p>Para alcanzar  el éxito en el cambio, resulta fundamental saber en qué etapa se encuentra la  persona con relación a su problema, con el fin de diseñar procedimientos  específicos que se adecuen a cada sujeto. En otras palabras, lo que se busca es  la relación terapéutica y el tipo de intervención adecuados para cada persona  dependiendo del estadio en que se encuentre.</p> <p><strong>Precontemplación:</strong> es  probable que el paciente concurra por constricción externa (orden judicial,  familiares, etc.), manifestando negación del problema y sin considerar  realmente el cambio.  El riesgo de  abandono aquí varía entre un 40% y un 60%, e incluso a un 80% en casos  relacionados con el consumo de sustancias.</p> <p><strong>Contemplación: </strong>el sujeto  reconoce tener un problema, se muestra más receptivo a la información en cuanto  a su problema y las posibles soluciones, aunque vacila en cuanto al momento de  iniciar el cambio, dudando aún sobre sus beneficios.</p> <p><strong>Preparación:</strong> en esta  etapa la persona se halla lista para la actuación, habiendo dado algunos pasos  en pos del objetivo.</p> <p><strong>Acción:</strong> se  refiere al momento en que se hacen más evidentes los pasos que se toman para  lograr el cambio. Su duración es de 6 meses.</p> <p><strong>Mantenimiento:</strong> sigue a  la acción y dura otros 6 meses, el propósito en este estadio radica en sostener  los cambios logrados a través de la modificación del estilo de vida y la  prevención de recaídas.</p> <p><strong>Finalización:</strong> el  cliente ya no necesita de la utilización de ningún proceso de cambio a fin de  impedir la recaída o el regreso al problema.</p> <p>Es  importante destacar que, al intentar cambiar un problema, gran parte de los  sujetos recaen al menos una vez en el proceso, pero la mayoría de ellos suele  volver a empezarlo desde la etapa de contemplación o preparación, para luego  pasar a la acción. Es por esto que se dice que el cambio no sigue un patrón  lineal, sino más bien uno en espiral. La mayoría de los sujetos incorporan  nuevas estrategias y conocimientos a partir de lo experimentado en las  recaídas. También es  primordial que el terapeuta recuerde que los estadios del cambio son  específicos para cada conducta-problema.</p> <p>(Tomado  de: <a href="https://www.psyciencia.com/el-modelo-de-prochaska-y-diclemente-un-modelo-de-cambio/" target="_blank">https://www.psyciencia.com/el-modelo-de-prochaska-y-diclemente-un-modelo-de-cambio/</a>)</p>',
                'description' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 16,
                'test_id' => NULL, 
                'lang' => 'es',
                'name' => 'Coadicción',
                'image' => 'COADICCION.png',
                'introduction' => '<p>La codependencia se define como el ciclo de patrones de conducta,  y pensamientos disfuncionales, que producen dolor, y que se repiten de manera  compulsiva, como respuesta a una relación enferma y alienante, con un adicto  activo o en una situación de toxicidad relacional.</p> 	 <h2>¿Quiénes desarrollan Codependencia?</h2> 	 <p>La  codependencia puede ocurrir en cualquier persona que está en contacto con la  adicción de otra persona, ya sea un familiar, amigo, compañero, pareja o  cliente que sufra de adicción. Además existen otros desordenes de conducta y  enfermedades que pueden generar codependencia, tales como la esquizofrenia, la  violencia, el maltrato y las neurosis. Toda persona expuesta a estos  desórdenes, puede desarrollar codependencia.</p> 	 <p> Muchas veces alguien que ha desarrollado codependencia por crecer en una  ambiente disfuncional adictivo, no manifiesta grandes síntomas hasta que se  casa o forma una relación de pareja. Por otro lado, con mucha regularidad las  hijas de adictos, terminan casándose con otros adictos, aún sin que esto sea  una decisión conciente.</p> <h2>¿Cuáles son los síntomas de la Codependencia?</h2> 	 <p>La  codependencia se caracteriza por una serie de síntomas tales como:</p> <ol>   <li>Dificultad para establecer y mantener relaciones íntimas sanas</li>   <li>Congelamiento emocional</li>   <li>Perfeccionismo</li>   <li>Necesidad obsesiva de controlar la conducta de otros</li>   <li>Conductas compulsivas</li>   <li>Sentirse sobreresponsables por las conductas de otros</li>   <li>Profundos sentimientos de incapacidad</li>   <li>Vergüenza tóxica</li>   <li>Autoimagen negativa</li>   <li>Dependencia de la aprobación externa</li>   <li>Dolores de cabeza y espalda crónicos</li>   <li>Gastritis y diarrea crónicas</li>   <li>Depresión   </li> </ol> <p>(Tomado de: <a href="http://www.adicciones.org/familia/codependencia.html" target="_blank">http://www.adicciones.org/familia/codependencia.html</a> )</p>',
                'description' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
