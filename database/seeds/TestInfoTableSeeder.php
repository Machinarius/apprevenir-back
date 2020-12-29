<?php

use Illuminate\Database\Seeder;

class TestInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test_informations')->insert([
            [
                'id' => 1,
                'test_id' => 1, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => 'XCrxcjkoWrM',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="http://www.cooperativa.cl/noticias/sociedad/salud/sepa-como-aplicar-bien-el-consumo-controlado-de-alcohol/2012-09-15/182305.html">
                http://www.cooperativa.cl/noticias/sociedad/salud/sepa-como-aplicar-bien-el-consumo-controlado-de-alcohol/2012-09-15/182305.html
                </a></li></ul>',
                'min' => '0',
                'max' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'test_id' => 1, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => 'XopySxDNQCA',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="http://www.narconon.org/es/consumo-de-drogas/abuso-de-alcohol-signos.html">
                http://www.narconon.org/es/consumo-de-drogas/abuso-de-alcohol-signos.html
                </a></li></ul>
                ',
                'min' => '8',
                'max' => '19',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'test_id' => 1, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'xK-6ycQjYYY',
                'professional_help' => '<h2><strong>Fundación la LUZ</strong></h2>
                En una Institución Prestadora de Servicios de Salud - I.P.S. de carácter privado, sin ánimo de lucro, con más de 19 años de experiencia exitosa en el tratamiento y rehabilitación de jóvenes y personas adultas con problemas de adicción de ambos sexos, con tres (3) sedes debidamente habilitadas ante las direcciones departamentales de salud y con registro especial de prestación de servicios de salud REPSS que atiende a pacientes particulares y asegurados en las diferentes E.P.S. del país.
                
                <h3>Teléfonos: +57 (4) 418 6728 - (4) 418 8392</h3>
                <h3>Celular: (+57) 314 677 9629</h3>
                Sitio web: <a href="http://www.fundacionlaluz.co/" target="_blank" rel="noopener"><strong>www.fundacionlaluz.co</strong></a>
                
                <hr />
                
                <h2><strong>Fundación Hogares Claret</strong></h2>
                Una institución social, ofrece acompañamiento terapéutico a niños, niñas, adolescentes y adultos, afectados por la marginalidad, la violencia, el consumo de sustancias psicoactivas y/o problemas de conducta asociados a ello, para favorecerles la inclusión social, el restablecimiento de sus derechos y la construcción de un proyecto de vida. Adicionalmente contamos con servicios de Bienestar para el cuerpo y la mente.
                
                <h3>Tel: (57-4) 284 43 04 – (57-4) 448 43 04</h3>
                <h3>Fax :(57-4) 284 96 12 | Línea nacional: 01 8000 51 68 68</h3>
                Sitio web: <a href="http://www.fundacionhogaresclaret.org/" target="_blank" rel="noopener"><strong>www.fundacionhogaresclaret.org</strong></a>
                ',
                'url_interest' => '
                <ul><li>
                <a href="https://medlineplus.gov/spanish/ency/article/000944.htm">
                https://medlineplus.gov/spanish/ency/article/000944.htm
                </a></li></ul>
                ',
                'min' => '20',
                'max' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'test_id' => 2, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => 'MtSvEmLt5aM',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href=" https://www.drugabuse.gov/es/informacion-sobre-drogas">
                 https://www.drugabuse.gov/es/informacion-sobre-drogas
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'test_id' => 2, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => '6a5m2GdQDYA',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="  https://www.drugabuse.gov/es/publicaciones/juventud-latina/los-riesgos-del-abuso-de-drogas">
                  https://www.drugabuse.gov/es/publicaciones/juventud-latina/los-riesgos-del-abuso-de-drogas
                </a></li></ul>
               ',
                'min' => '4',
                'max' => '26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'test_id' => 2, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'pYwgTSw5UOs',
                'professional_help' => '<h2><strong>E.S.E. CARISMA </strong></h2>
                <strong>Centro de Atención y Rehabilitación Integral en Salud Mental de Antioquia</strong>
                
                La Empresa Social del Estado Carisma, Centro de Atención y Rehabilitación Integral en Salud Mental de Antioquia, nació mediante la Ordenanza de la Asamblea Departamental de Antioquia, número 43 del 16 de diciembre de 1994, donde se desarrolla el servicio de farmacodependencia para el departamento de Antioquia.
                
                <h3><strong>Teléfonos:</strong></h3>
                <strong>Sede Principal:</strong> 492 40 00
                <strong>Sede Ambulatoria:</strong> 234 06 25
                
                Sitio web: <a href="http://www.esecarisma.gov.co/" target="_blank" rel="noopener"><strong>www.esecarisma.gov.co</strong></a>
                
                <hr />
                
                <h2><strong>Centro Cita Salud Mental</strong></h2>
                La Corporación Centro CITA- Salud Mental, es una IPS privada del subsector salud y entidad sin ánimo de lucro con Personería Jurídica Otorgada por la Dirección Seccional de Salud de Antioquia mediante Resolución No. 5326 el 15 de marzo de 2006.
                
                Tiene habilitados los siguientes servicios ante la Dirección Seccional de Salud de Antioquia: CAD Centro de Atención en Drogodependencias Ambulatorio de baja complejidad Medicina, Psiquiatría, Nutrición y Dietética, Psicología y Promoción y prevención y centro Residencial de Media complejidad.
                
                <h3>Teléfono: 422 55 25</h3>
                Sitio web: <a href="http://www.centrocita.org/"><strong>www.centrocita.org</strong></a>',
                'url_interest' => '
                <ul><li>
                <a href="  https://www.drugabuse.gov/es/publicaciones/serie-de-reportes/las-drogas-el-cerebro-y-el-comportamiento-la-ciencia-de-la-adiccion/abuso-y-adiccion-las-drogas">
                  https://www.drugabuse.gov/es/publicaciones/serie-de-reportes/las-drogas-el-cerebro-y-el-comportamiento-la-ciencia-de-la-adiccion/abuso-y-adiccion-las-drogas
                </a></li></ul>
                ',
                'min' => '27',
                'max' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'test_id' => 2, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => 'MtSvEmLt5aM',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="  https://www.drugabuse.gov/es/informacion-sobre-drogas">
                  https://www.drugabuse.gov/es/informacion-sobre-drogas
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'test_id' => 2, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => '6a5m2GdQDYA',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="  https://www.drugabuse.gov/es/publicaciones/juventud-latina/los-riesgos-del-abuso-de-drogas">
                  https://www.drugabuse.gov/es/publicaciones/juventud-latina/los-riesgos-del-abuso-de-drogas
                </a></li></ul>
                ',
                'min' => '11',
                'max' => '26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
                'test_id' => 2, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'pYwgTSw5UOs',
                'professional_help' => '<h2><strong>E.S.E. CARISMA </strong></h2>
                <strong>Centro de Atención y Rehabilitación Integral en Salud Mental de Antioquia</strong>
                
                La Empresa Social del Estado Carisma, Centro de Atención y Rehabilitación Integral en Salud Mental de Antioquia, nació mediante la Ordenanza de la Asamblea Departamental de Antioquia, número 43 del 16 de diciembre de 1994, donde se desarrolla el servicio de farmacodependencia para el departamento de Antioquia.
                
                <h3><strong>Teléfonos:</strong></h3>
                <strong>Sede Principal:</strong> 492 40 00
                <strong>Sede Ambulatoria:</strong> 234 06 25
                
                Sitio web: <a href="http://www.esecarisma.gov.co/" target="_blank" rel="noopener"><strong>www.esecarisma.gov.co</strong></a>
                
                <hr />
                
                <h2><strong>Centro Cita Salud Mental</strong></h2>
                La Corporación Centro CITA- Salud Mental, es una IPS privada del subsector salud y entidad sin ánimo de lucro con Personería Jurídica Otorgada por la Dirección Seccional de Salud de Antioquia mediante Resolución No. 5326 el 15 de marzo de 2006.
                
                Tiene habilitados los siguientes servicios ante la Dirección Seccional de Salud de Antioquia: CAD Centro de Atención en Drogodependencias Ambulatorio de baja complejidad Medicina, Psiquiatría, Nutrición y Dietética, Psicología y Promoción y prevención y centro Residencial de Media complejidad.
                
                <h3>Teléfono: 422 55 25</h3>
                Sitio web: <a href="http://www.centrocita.org/"><strong>www.centrocita.org</strong></a>',
                'url_interest' => '
                <ul><li>
                <a href="  https://www.drugabuse.gov/es/publicaciones/serie-de-reportes/las-drogas-el-cerebro-y-el-comportamiento-la-ciencia-de-la-adiccion/abuso-y-adiccion-las-drogas">
                  https://www.drugabuse.gov/es/publicaciones/serie-de-reportes/las-drogas-el-cerebro-y-el-comportamiento-la-ciencia-de-la-adiccion/abuso-y-adiccion-las-drogas
                </a></li></ul>
                ',
                'min' => '27',
                'max' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 10,
                'test_id' => 2, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => '0gAvtL7C564',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="  http://www.clinicanovo.es/jovenes-tabaco-riesgos-y-consecuencias/">
                  http://www.clinicanovo.es/jovenes-tabaco-riesgos-y-consecuencias/
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 11,
                'test_id' => 2, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => 'J3_BCug97_4',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="  http://habitosysalud.com/tabaco-y-enfermedades-asociadas/">
                  http://habitosysalud.com/tabaco-y-enfermedades-asociadas/
                </a></li></ul>
                ',
                'min' => '4',
                'max' => '26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 12,
                'test_id' => 2, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'KqAEFYbCDpY',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://www.neumologica.org/exfumaireLanding/?utm_source=SEM&utm_medium=cpc&utm_term=Antitabaquismo-clics-Awareness-CO&utm_content=Antitabaquismo-Consecuencias&utm_campaign=Pfizer_Category_Antitabaquismo">
                   http://www.neumologica.org/exfumaireLanding/?utm_source=SEM&utm_medium=cpc&utm_term=Antitabaquismo-clics-Awareness-CO&utm_content=Antitabaquismo-Consecuencias&utm_campaign=Pfizer_Category_Antitabaquismo
                </a></li></ul>
               ',
                'min' => '27',
                'max' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 13,
                'test_id' => 2, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => 'xYM5xABXbxM',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.drugabuse.gov/es/publicaciones/serie-de-reportes/abuso-de-inhalantes/que-son-los-inhalantes">
                   https://www.drugabuse.gov/es/publicaciones/serie-de-reportes/abuso-de-inhalantes/que-son-los-inhalantes
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 14,
                'test_id' => 2, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => 'dMvailKHH_M',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://adiccionyciencia.info/uso-de-inhalantes-y-riesgos-del-consumo-en-adolescentes">
                   http://adiccionyciencia.info/uso-de-inhalantes-y-riesgos-del-consumo-en-adolescentes
                </a></li></ul>
                ',
                'min' => '4',
                'max' => '26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 15,
                'test_id' => 2, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'JbQfCKrPonY',
                'professional_help' => '<h2><strong>Samein salud mental integral S.A.S.</strong></h2> SAMEIN Salud Mental Integral SAS, es una Institución Privada, que se encuentra liderada por brillantes profesionales de la Medicina, que se han especializado en la Psicología y la Psiquiatría, ofreciendo servicios integrales para la salud física y mental de sus pacientes.  <h3>Teléfono: 444 48 91</h3> Sitio web: <a href="https://www.samein.com.co/" target="_blank" rel="noopener"><strong>www.samein.com.co</strong></a>  <hr />  <h2><strong>Fundación Hogares Claret</strong></h2> Una institución social, ofrece acompañamiento terapéutico a niños, niñas, adolescentes y adultos, afectados por la marginalidad, la violencia, el consumo de sustancias psicoactivas y/o problemas de conducta asociados a ello, para favorecerles la inclusión social, el restablecimiento de sus derechos y la construcción de un proyecto de vida. Adicionalmente contamos con servicios de Bienestar para el cuerpo y la mente.  <h3>Tel: (57-4) 284 43 04 – (57-4) 448 43 04</h3> <h3>Fax :(57-4) 284 96 12 | Línea nacional: 01 8000 51 68 68</h3> Sitio web: <a href="http://www.fundacionhogaresclaret.org/" target="_blank" rel="noopener"><strong>www.fundacionhogaresclaret.org</strong></a>',
                'url_interest' => '
                <ul><li>
                <a href="   https://medlineplus.gov/spanish/ency/patientinstructions/000794.htm">
                   https://medlineplus.gov/spanish/ency/patientinstructions/000794.htm
                </a></li></ul>
                ',
                'min' => '27',
                'max' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 16,
                'test_id' => 2, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => 'MtSvEmLt5aM',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.drugabuse.gov/es/informacion-sobre-drogas">
                   https://www.drugabuse.gov/es/informacion-sobre-drogas
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 17,
                'test_id' => 2, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => '6a5m2GdQDYA',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.drugabuse.gov/es/publicaciones/juventud-latina/los-riesgos-del-abuso-de-drogas">
                   https://www.drugabuse.gov/es/publicaciones/juventud-latina/los-riesgos-del-abuso-de-drogas
                </a></li></ul>
                ',
                'min' => '4',
                'max' => '26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 18,
                'test_id' => 2, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'pYwgTSw5UOs',
                'professional_help' => '<h2><strong>E.S.E. CARISMA </strong></h2>
                <strong>Centro de Atención y Rehabilitación Integral en Salud Mental de Antioquia</strong>
                
                La Empresa Social del Estado Carisma, Centro de Atención y Rehabilitación Integral en Salud Mental de Antioquia, nació mediante la Ordenanza de la Asamblea Departamental de Antioquia, número 43 del 16 de diciembre de 1994, donde se desarrolla el servicio de farmacodependencia para el departamento de Antioquia.
                
                <h3><strong>Teléfonos:</strong></h3>
                <strong>Sede Principal:</strong> 492 40 00
                <strong>Sede Ambulatoria:</strong> 234 06 25
                
                Sitio web: <a href="http://www.esecarisma.gov.co/" target="_blank" rel="noopener"><strong>www.esecarisma.gov.co</strong></a>
                
                <hr />
                
                <h2><strong>Centro Cita Salud Mental</strong></h2>
                La Corporación Centro CITA- Salud Mental, es una IPS privada del subsector salud y entidad sin ánimo de lucro con Personería Jurídica Otorgada por la Dirección Seccional de Salud de Antioquia mediante Resolución No. 5326 el 15 de marzo de 2006.
                
                Tiene habilitados los siguientes servicios ante la Dirección Seccional de Salud de Antioquia: CAD Centro de Atención en Drogodependencias Ambulatorio de baja complejidad Medicina, Psiquiatría, Nutrición y Dietética, Psicología y Promoción y prevención y centro Residencial de Media complejidad.
                
                <h3>Teléfono: 422 55 25</h3>
                Sitio web: <a href="http://www.centrocita.org/"><strong>www.centrocita.org</strong></a>',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.drugabuse.gov/es/publicaciones/serie-de-reportes/las-drogas-el-cerebro-y-el-comportamiento-la-ciencia-de-la-adiccion/abuso-y-adiccion-las-drogas">
                   https://www.drugabuse.gov/es/publicaciones/serie-de-reportes/las-drogas-el-cerebro-y-el-comportamiento-la-ciencia-de-la-adiccion/abuso-y-adiccion-las-drogas
                </a></li></ul>
                ',
                'min' => '27',
                'max' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 19,
                'test_id' => 2, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => 'MtSvEmLt5aM',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.drugabuse.gov/es/informacion-sobre-drogas">
                   https://www.drugabuse.gov/es/informacion-sobre-drogas
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 20,
                'test_id' => 2, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => '6a5m2GdQDYA',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.drugabuse.gov/es/publicaciones/juventud-latina/los-riesgos-del-abuso-de-drogas">
                   https://www.drugabuse.gov/es/publicaciones/juventud-latina/los-riesgos-del-abuso-de-drogas
                </a></li></ul>
                ',
                'min' => '4',
                'max' => '26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 21,
                'test_id' => 2, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'pYwgTSw5UOs',
                'professional_help' => '<h2><strong>E.S.E. CARISMA </strong></h2>
                <strong>Centro de Atención y Rehabilitación Integral en Salud Mental de Antioquia</strong>
                
                La Empresa Social del Estado Carisma, Centro de Atención y Rehabilitación Integral en Salud Mental de Antioquia, nació mediante la Ordenanza de la Asamblea Departamental de Antioquia, número 43 del 16 de diciembre de 1994, donde se desarrolla el servicio de farmacodependencia para el departamento de Antioquia.
                
                <h3><strong>Teléfonos:</strong></h3>
                <strong>Sede Principal:</strong> 492 40 00
                <strong>Sede Ambulatoria:</strong> 234 06 25
                
                Sitio web: <a href="http://www.esecarisma.gov.co/" target="_blank" rel="noopener"><strong>www.esecarisma.gov.co</strong></a>
                
                <hr />
                
                <h2><strong>Centro Cita Salud Mental</strong></h2>
                La Corporación Centro CITA- Salud Mental, es una IPS privada del subsector salud y entidad sin ánimo de lucro con Personería Jurídica Otorgada por la Dirección Seccional de Salud de Antioquia mediante Resolución No. 5326 el 15 de marzo de 2006.
                
                Tiene habilitados los siguientes servicios ante la Dirección Seccional de Salud de Antioquia: CAD Centro de Atención en Drogodependencias Ambulatorio de baja complejidad Medicina, Psiquiatría, Nutrición y Dietética, Psicología y Promoción y prevención y centro Residencial de Media complejidad.
                
                <h3>Teléfono: 422 55 25</h3>
                Sitio web: <a href="http://www.centrocita.org/"><strong>www.centrocita.org</strong></a>',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.drugabuse.gov/es/publicaciones/serie-de-reportes/las-drogas-el-cerebro-y-el-comportamiento-la-ciencia-de-la-adiccion/abuso-y-adiccion-las-drogas">
                   https://www.drugabuse.gov/es/publicaciones/serie-de-reportes/las-drogas-el-cerebro-y-el-comportamiento-la-ciencia-de-la-adiccion/abuso-y-adiccion-las-drogas
                </a></li></ul>
                ',
                'min' => '27',
                'max' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 22,
                'test_id' => 2, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => 'MtSvEmLt5aM',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.drugabuse.gov/es/informacion-sobre-drogas">
                   https://www.drugabuse.gov/es/informacion-sobre-drogas
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 23,
                'test_id' => 2, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => '6a5m2GdQDYA',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.drugabuse.gov/es/publicaciones/juventud-latina/los-riesgos-del-abuso-de-drogas">
                   https://www.drugabuse.gov/es/publicaciones/juventud-latina/los-riesgos-del-abuso-de-drogas
                </a></li></ul>
                ',
                'min' => '4',
                'max' => '26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 24,
                'test_id' => 2, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'pYwgTSw5UOs',
                'professional_help' => '<h2><strong>E.S.E. CARISMA </strong></h2>
                <strong>Centro de Atención y Rehabilitación Integral en Salud Mental de Antioquia</strong>
                
                La Empresa Social del Estado Carisma, Centro de Atención y Rehabilitación Integral en Salud Mental de Antioquia, nació mediante la Ordenanza de la Asamblea Departamental de Antioquia, número 43 del 16 de diciembre de 1994, donde se desarrolla el servicio de farmacodependencia para el departamento de Antioquia.
                
                <h3><strong>Teléfonos:</strong></h3>
                <strong>Sede Principal:</strong> 492 40 00
                <strong>Sede Ambulatoria:</strong> 234 06 25
                
                Sitio web: <a href="http://www.esecarisma.gov.co/" target="_blank" rel="noopener"><strong>www.esecarisma.gov.co</strong></a>
                
                <hr />
                
                <h2><strong>Centro Cita Salud Mental</strong></h2>
                La Corporación Centro CITA- Salud Mental, es una IPS privada del subsector salud y entidad sin ánimo de lucro con Personería Jurídica Otorgada por la Dirección Seccional de Salud de Antioquia mediante Resolución No. 5326 el 15 de marzo de 2006.
                
                Tiene habilitados los siguientes servicios ante la Dirección Seccional de Salud de Antioquia: CAD Centro de Atención en Drogodependencias Ambulatorio de baja complejidad Medicina, Psiquiatría, Nutrición y Dietética, Psicología y Promoción y prevención y centro Residencial de Media complejidad.
                
                <h3>Teléfono: 422 55 25</h3>
                Sitio web: <a href="http://www.centrocita.org/"><strong>www.centrocita.org</strong></a>',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.drugabuse.gov/es/publicaciones/serie-de-reportes/las-drogas-el-cerebro-y-el-comportamiento-la-ciencia-de-la-adiccion/abuso-y-adiccion-las-drogas">
                   https://www.drugabuse.gov/es/publicaciones/serie-de-reportes/las-drogas-el-cerebro-y-el-comportamiento-la-ciencia-de-la-adiccion/abuso-y-adiccion-las-drogas
                </a></li></ul>
                ',
                'min' => '27',
                'max' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 25,
                'test_id' => 2, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => 'XCrxcjkoWrM',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://www.cooperativa.cl/noticias/sociedad/salud/sepa-como-aplicar-bien-el-consumo-controlado-de-alcohol/2012-09-15/182305.html">
                   http://www.cooperativa.cl/noticias/sociedad/salud/sepa-como-aplicar-bien-el-consumo-controlado-de-alcohol/2012-09-15/182305.html
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 26,
                'test_id' => 2, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => 'XopySxDNQCA',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://www.narconon.org/es/consumo-de-drogas/abuso-de-alcohol-signos.html">
                   http://www.narconon.org/es/consumo-de-drogas/abuso-de-alcohol-signos.html
                </a></li></ul>
                ',
                'min' => '4',
                'max' => '26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 27,
                'test_id' => 2, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'xK-6ycQjYYY',
                'professional_help' => '<h2><strong>Fundación la LUZ</strong></h2> En una Institución Prestadora de Servicios de Salud - I.P.S. de carácter privado, sin ánimo de lucro, con más de 19 años de experiencia exitosa en el tratamiento y rehabilitación de jóvenes y personas adultas con problemas de adicción de ambos sexos, con tres (3) sedes debidamente habilitadas ante las direcciones departamentales de salud y con registro especial de prestación de servicios de salud REPSS que atiende a pacientes particulares y asegurados en las diferentes E.P.S. del país.  <h3>Teléfonos: +57 (4) 418 6728 - (4) 418 8392</h3> <h3>Celular: (+57) 314 677 9629</h3> Sitio web: <a href="http://www.fundacionlaluz.co/" target="_blank" rel="noopener"><strong>www.fundacionlaluz.co</strong></a>  <hr />  <h2><strong>Fundación Hogares Claret</strong></h2> Una institución social, ofrece acompañamiento terapéutico a niños, niñas, adolescentes y adultos, afectados por la marginalidad, la violencia, el consumo de sustancias psicoactivas y/o problemas de conducta asociados a ello, para favorecerles la inclusión social, el restablecimiento de sus derechos y la construcción de un proyecto de vida. Adicionalmente contamos con servicios de Bienestar para el cuerpo y la mente.  <h3>Tel: (57-4) 284 43 04 – (57-4) 448 43 04</h3> <h3>Fax :(57-4) 284 96 12 | Línea nacional: 01 8000 51 68 68</h3> Sitio web: <a href="http://www.fundacionhogaresclaret.org/" target="_blank" rel="noopener"><strong>www.fundacionhogaresclaret.org</strong></a>',
                'url_interest' => '
                <ul><li>
                <a href="   https://medlineplus.gov/spanish/ency/article/000944.htm">
                   https://medlineplus.gov/spanish/ency/article/000944.htm
                </a></li></ul>
                ',
                'min' => '27',
                'max' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 28,
                'test_id' => 2, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => 'MtSvEmLt5aM',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.drugabuse.gov/es/informacion-sobre-drogas">
                   https://www.drugabuse.gov/es/informacion-sobre-drogas
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 29,
                'test_id' => 2, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => '6a5m2GdQDYA',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.drugabuse.gov/es/publicaciones/juventud-latina/los-riesgos-del-abuso-de-drogas">
                   https://www.drugabuse.gov/es/publicaciones/juventud-latina/los-riesgos-del-abuso-de-drogas
                </a></li></ul>
                ',
                'min' => '4',
                'max' => '26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 30,
                'test_id' => 2, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'pYwgTSw5UOs',
                'professional_help' => '<h2><strong>E.S.E. CARISMA </strong></h2>
                <strong>Centro de Atención y Rehabilitación Integral en Salud Mental de Antioquia</strong>
                
                La Empresa Social del Estado Carisma, Centro de Atención y Rehabilitación Integral en Salud Mental de Antioquia, nació mediante la Ordenanza de la Asamblea Departamental de Antioquia, número 43 del 16 de diciembre de 1994, donde se desarrolla el servicio de farmacodependencia para el departamento de Antioquia.
                
                <h3><strong>Teléfonos:</strong></h3>
                <strong>Sede Principal:</strong> 492 40 00
                <strong>Sede Ambulatoria:</strong> 234 06 25
                
                Sitio web: <a href="http://www.esecarisma.gov.co/" target="_blank" rel="noopener"><strong>www.esecarisma.gov.co</strong></a>
                
                <hr />
                
                <h2><strong>Centro Cita Salud Mental</strong></h2>
                La Corporación Centro CITA- Salud Mental, es una IPS privada del subsector salud y entidad sin ánimo de lucro con Personería Jurídica Otorgada por la Dirección Seccional de Salud de Antioquia mediante Resolución No. 5326 el 15 de marzo de 2006.
                
                Tiene habilitados los siguientes servicios ante la Dirección Seccional de Salud de Antioquia: CAD Centro de Atención en Drogodependencias Ambulatorio de baja complejidad Medicina, Psiquiatría, Nutrición y Dietética, Psicología y Promoción y prevención y centro Residencial de Media complejidad.
                
                <h3>Teléfono: 422 55 25</h3>
                Sitio web: <a href="http://www.centrocita.org/"><strong>www.centrocita.org</strong></a>',
                'url_interest' => 'https://www.drugabuse.gov/es/publicaciones/serie-de-reportes/las-drogas-el-cerebro-y-el-comportamiento-la-ciencia-de-la-adiccion/abuso-y-adiccion-las-drogas',
                'min' => '27',
                'max' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 31,
                'test_id' => 3, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => '0gAvtL7C564',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://www.clinicanovo.es/jovenes-tabaco-riesgos-y-consecuencias/">
                   http://www.clinicanovo.es/jovenes-tabaco-riesgos-y-consecuencias/
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 32,
                'test_id' => 3, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => 'J3_BCug97_4',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://habitosysalud.com/tabaco-y-enfermedades-asociadas/">
                   http://habitosysalud.com/tabaco-y-enfermedades-asociadas/
                </a></li></ul>
                ',
                'min' => '4',
                'max' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 33,
                'test_id' => 3, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'KqAEFYbCDpY',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://www.neumologica.org/exfumaireLanding/?utm_source=SEM&utm_medium=cpc&utm_term=Antitabaquismo-clics-Awareness-CO&utm_content=Antitabaquismo-Consecuencias&utm_campaign=Pfizer_Category_Antitabaquismo">
                   http://www.neumologica.org/exfumaireLanding/?utm_source=SEM&utm_medium=cpc&utm_term=Antitabaquismo-clics-Awareness-CO&utm_content=Antitabaquismo-Consecuencias&utm_campaign=Pfizer_Category_Antitabaquismo
                </a></li></ul>
                ',
                'min' => '8',
                'max' => '30',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 34,
                'test_id' => 4, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => 'xYM5xABXbxM',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.drugabuse.gov/es/publicaciones/serie-de-reportes/abuso-de-inhalantes/que-son-los-inhalantes">
                   https://www.drugabuse.gov/es/publicaciones/serie-de-reportes/abuso-de-inhalantes/que-son-los-inhalantes
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 35,
                'test_id' => 4, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => 'dMvailKHH_M',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://adiccionyciencia.info/uso-de-inhalantes-y-riesgos-del-consumo-en-adolescentes">
                   http://adiccionyciencia.info/uso-de-inhalantes-y-riesgos-del-consumo-en-adolescentes
                </a></li></ul>
                ',
                'min' => '6',
                'max' => '13',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 36,
                'test_id' => 4, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'JbQfCKrPonY',
                'professional_help' => '<h2><strong>Samein salud mental integral S.A.S.</strong></h2>
                SAMEIN Salud Mental Integral SAS, es una Institución Privada, que se encuentra liderada por brillantes profesionales de la Medicina, que se han especializado en la Psicología y la Psiquiatría, ofreciendo servicios integrales para la salud física y mental de sus pacientes.
                
                <h3>Teléfono: 444 48 91</h3>
                Sitio web: <a href="https://www.samein.com.co/" target="_blank" rel="noopener"><strong>www.samein.com.co</strong></a>
                
                <hr />
                
                <h2><strong>Fundación Hogares Claret</strong></h2>
                Una institución social, ofrece acompañamiento terapéutico a niños, niñas, adolescentes y adultos, afectados por la marginalidad, la violencia, el consumo de sustancias psicoactivas y/o problemas de conducta asociados a ello, para favorecerles la inclusión social, el restablecimiento de sus derechos y la construcción de un proyecto de vida. Adicionalmente contamos con servicios de Bienestar para el cuerpo y la mente.
                
                <h3>Tel: (57-4) 284 43 04 – (57-4) 448 43 04</h3>
                <h3>Fax :(57-4) 284 96 12 | Línea nacional: 01 8000 51 68 68</h3>
                Sitio web: <a href="http://www.fundacionhogaresclaret.org/" target="_blank" rel="noopener"><strong>www.fundacionhogaresclaret.org</strong></a>',
                'url_interest' => 'https://medlineplus.gov/spanish/ency/patientinstructions/000794.htm',
                'min' => '14',
                'max' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 37,
                'test_id' => 5, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => 'tsJMXzCmfw4',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.psyciencia.com/ludopatia-caracteristicas-y-tratamiento/">
                   https://www.psyciencia.com/ludopatia-caracteristicas-y-tratamiento/
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 38,
                'test_id' => 5, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => 'TX_ioW_hx4w',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://www.webconsultas.com/mente-y-emociones/adicciones/como-saber-si-se-es-ludopata">
                   http://www.webconsultas.com/mente-y-emociones/adicciones/como-saber-si-se-es-ludopata
                </a></li></ul>
                ',
                'min' => '5',
                'max' => '11',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 39,
                'test_id' => 5, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'M6vY8so1dE8',
                'professional_help' => '<h2><strong>Centro Cita Salud Mental</strong></h2>
                La Corporación Centro CITA- Salud Mental, es una IPS privada del subsector salud y entidad sin ánimo de lucro con Personería Jurídica Otorgada por la Dirección Seccional de Salud de Antioquia mediante Resolución No. 5326 el 15 de marzo de 2006.
                
                Tiene habilitados los siguientes servicios ante la Dirección Seccional de Salud de Antioquia: CAD Centro de Atención en Drogodependencias Ambulatorio de baja complejidad Medicina, Psiquiatría, Nutrición y Dietética, Psicología y Promoción y prevención y centro Residencial de Media complejidad.
                
                <h3>Teléfono: 422 55 25</h3>
                Sitio web: <a href="http://www.centrocita.org/"><strong>www.centrocita.org</strong></a>
                
                <hr />
                
                <h2><strong>Samein salud mental integral S.A.S.</strong></h2>
                SAMEIN Salud Mental Integral SAS, es una Institución Privada, que se encuentra liderada por brillantes profesionales de la Medicina, que se han especializado en la Psicología y la Psiquiatría, ofreciendo servicios integrales para la salud física y mental de sus pacientes.
                
                La atención especializada de sus servicios de salud, permiten poder tratar diferentes patologías que reflejan alteraciones en la personalidad y procesos difíciles de adaptación e interacción con nuestro entorno familiar, social, laboral.
                
                <h3>Teléfono: 444 48 91</h3>
                Sitio web: <a href="https://www.samein.com.co/" target="_blank" rel="noopener"><strong>www.samein.com.co</strong></a>
                
                ',
                'url_interest' => '
                <ul><li>
                <a href="   http://www.sindrome-adicciones.es/7-consecuencias-de-la-ludopatia/">
                   http://www.sindrome-adicciones.es/7-consecuencias-de-la-ludopatia/
                </a></li></ul>
                ',
                'min' => '12',
                'max' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 40,
                'test_id' => 6, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => 'wJRwUHPJnpA',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://www.unilibre.edu.co/bogota/ul/noticias/noticias-universitarias/2349-redes-sociales-el-us-y-el-abuso">
                   http://www.unilibre.edu.co/bogota/ul/noticias/noticias-universitarias/2349-redes-sociales-el-us-y-el-abuso
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 41,
                'test_id' => 6, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => 'XC-z8cfVNSg',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://www.grupodoctoroliveros.com/adiccion-al-whatsapp">
                   http://www.grupodoctoroliveros.com/adiccion-al-whatsapp
                </a></li></ul>
                ',
                'min' => '25',
                'max' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 42,
                'test_id' => 6, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'sFn1e5clvDI',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://www.comie.org.mx/congreso/memoriaelectronica/v11/docs/area_07/0295.pdf">
                   http://www.comie.org.mx/congreso/memoriaelectronica/v11/docs/area_07/0295.pdf
                </a></li></ul>
                ',
                'min' => '61',
                'max' => '96',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 43,
                'test_id' => 7, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => 'wJRwUHPJnpA',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.sura.com/blogs/calidad-de-vida/riesgos-tecnologia-salud.aspx">
                   https://www.sura.com/blogs/calidad-de-vida/riesgos-tecnologia-salud.aspx
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 44,
                'test_id' => 7, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => 'XC-z8cfVNSg',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.infobae.com/2015/02/16/1626651-como-reconocer-un-adicto-la-tecnologia/">
                   https://www.infobae.com/2015/02/16/1626651-como-reconocer-un-adicto-la-tecnologia/
                </a></li></ul>
                ',
                'min' => '50',
                'max' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 45,
                'test_id' => 7, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'sFn1e5clvDI',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://www.webconsultas.com/mente-y-emociones/adicciones/adiccion-a-internet-sintomas-y-soluciones">
                   http://www.webconsultas.com/mente-y-emociones/adicciones/adiccion-a-internet-sintomas-y-soluciones
                </a></li></ul>
                ',
                'min' => '80',
                'max' => '100',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 46,
                'test_id' => 8, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => 'B_QInKl4XZQ',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://mejorconsalud.com/5-riesgos-de-la-dependencia-emocional-en-pareja/">
                   https://mejorconsalud.com/5-riesgos-de-la-dependencia-emocional-en-pareja/
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 47,
                'test_id' => 8, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => 'GXirLXrW9Lc',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://www.el-nacional.com/noticias/historico/conozca-los-riesgos-dependencia-emocional_45049">
                   http://www.el-nacional.com/noticias/historico/conozca-los-riesgos-dependencia-emocional_45049
                </a></li></ul>
                ',
                'min' => '47',
                'max' => '92',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 48,
                'test_id' => 8, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'U0ze7gLmQj4',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.psicologiamadrid.es/blog/articulos/problemas-psicologicos/la-dependencia-emocional-conoce-sus-caracteristicas-y-consecuencias">
                   https://www.psicologiamadrid.es/blog/articulos/problemas-psicologicos/la-dependencia-emocional-conoce-sus-caracteristicas-y-consecuencias
                </a></li></ul>
                ',
                'min' => '93',
                'max' => '183',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 49,
                'test_id' => 9, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => 'tsJMXzCmfw4',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.ecured.cu/Sexualidad_sana">
                   https://www.ecured.cu/Sexualidad_sana
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 50,
                'test_id' => 9, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => 'TX_ioW_hx4w',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://www.bbc.com/mundo/noticias/2014/07/140714_salud_cerebro_adictos_sexo_ar">
                   http://www.bbc.com/mundo/noticias/2014/07/140714_salud_cerebro_adictos_sexo_ar
                </a></li></ul>
                ',
                'min' => '2',
                'max' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 51,
                'test_id' => 9, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'M6vY8so1dE8',
                'professional_help' => '<h2><strong>E.S.E. CARISMA </strong></h2>
                <strong>Centro de Atención y Rehabilitación Integral en Salud Mental de Antioquia</strong>
                
                La Empresa Social del Estado Carisma, Centro de Atención y Rehabilitación Integral en Salud Mental de Antioquia, nació mediante la Ordenanza de la Asamblea Departamental de Antioquia, número 43 del 16 de diciembre de 1994, donde se desarrolla el servicio de farmacodependencia para el departamento de Antioquia.
                
                <h3><strong>Teléfonos:</strong></h3>
                <strong>Sede Principal:</strong> 492 40 00
                <strong>Sede Ambulatoria:</strong> 234 06 25
                
                Sitio web: <a href="http://www.esecarisma.gov.co/" target="_blank" rel="noopener"><strong>www.esecarisma.gov.co</strong></a>
                
                <hr />
                
                <h2><strong>Centro Cita Salud Mental</strong></h2>
                La Corporación Centro CITA- Salud Mental, es una IPS privada del subsector salud y entidad sin ánimo de lucro con Personería Jurídica Otorgada por la Dirección Seccional de Salud de Antioquia mediante Resolución No. 5326 el 15 de marzo de 2006.
                
                Tiene habilitados los siguientes servicios ante la Dirección Seccional de Salud de Antioquia: CAD Centro de Atención en Drogodependencias Ambulatorio de baja complejidad Medicina, Psiquiatría, Nutrición y Dietética, Psicología y Promoción y prevención y centro Residencial de Media complejidad.
                
                <h3>Teléfono: 422 55 25</h3>
                Sitio web: <a href="http://www.centrocita.org/"><strong>www.centrocita.org</strong></a>',
                'url_interest' => '
                <ul><li>
                <a href="   http://www.europapress.es/sociedad/noticia-pareja-adicta-sexo-hago-20160915140516.html">
                   http://www.europapress.es/sociedad/noticia-pareja-adicta-sexo-hago-20160915140516.html
                </a></li></ul>
                ',
                'min' => '7',
                'max' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 52,
                'test_id' => 10, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => 'tsJMXzCmfw4',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://polis.revues.org/2687">
                   https://polis.revues.org/2687
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 53,
                'test_id' => 10, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => 'TX_ioW_hx4w',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://psicologiaymente.net/clinica/workaholic-adiccion-al-trabajo">
                   https://psicologiaymente.net/clinica/workaholic-adiccion-al-trabajo
                </a></li></ul>
                ',
                'min' => '5',
                'max' => '8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 54,
                'test_id' => 10, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'M6vY8so1dE8',
                'professional_help' => '<h2><strong>Samein salud mental integral S.A.S.</strong></h2>
                SAMEIN Salud Mental Integral SAS, es una Institución Privada, que se encuentra liderada por brillantes profesionales de la Medicina, que se han especializado en la Psicología y la Psiquiatría, ofreciendo servicios integrales para la salud física y mental de sus pacientes.
                
                <h3>Teléfono: 444 48 91</h3>
                Sitio web: <a href="https://www.samein.com.co/" target="_blank" rel="noopener"><strong>www.samein.com.co</strong></a>
                
                <hr />
                
                <h2><strong>Centro Cita Salud Mental</strong></h2>
                La Corporación Centro CITA- Salud Mental, es una IPS privada del subsector salud y entidad sin ánimo de lucro con Personería Jurídica Otorgada por la Dirección Seccional de Salud de Antioquia mediante Resolución No. 5326 el 15 de marzo de 2006.
                
                Tiene habilitados los siguientes servicios ante la Dirección Seccional de Salud de Antioquia: CAD Centro de Atención en Drogodependencias Ambulatorio de baja complejidad Medicina, Psiquiatría, Nutrición y Dietética, Psicología y Promoción y prevención y centro Residencial de Media complejidad.
                
                <h3>Teléfono: 422 55 25</h3>
                Sitio web: <a href="http://www.centrocita.org/"><strong>www.centrocita.org</strong></a>',
                'url_interest' => '
                <ul><li>
                <a href="   http://www.webconsultas.com/mente-y-emociones/trabajo-y-tiempo-libre/como-prevenir-y-tratar-la-adiccion-al-trabajo">
                   http://www.webconsultas.com/mente-y-emociones/trabajo-y-tiempo-libre/como-prevenir-y-tratar-la-adiccion-al-trabajo
                </a></li></ul>
                ',
                'min' => '9',
                'max' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 55,
                'test_id' => 11, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => 'tsJMXzCmfw4',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://www.codigonuevo.com/los-rasgos-psicologicos-de-un-comprador-compulsivo/">
                   http://www.codigonuevo.com/los-rasgos-psicologicos-de-un-comprador-compulsivo/
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 56,
                'test_id' => 11, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => 'TX_ioW_hx4w',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.psicoactiva.com/blog/la-compra-compulsiva-quien-la-padece-y-por-que/">
                   https://www.psicoactiva.com/blog/la-compra-compulsiva-quien-la-padece-y-por-que/
                </a></li></ul>
                ',
                'min' => '2',
                'max' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 57,
                'test_id' => 11, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'M6vY8so1dE8',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.adiccion.co/adiccion-a-las-compras.html">
                   https://www.adiccion.co/adiccion-a-las-compras.html
                </a></li></ul>
                ',
                'min' => '4',
                'max' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 58,
                'test_id' => 12, 
                'information_level_id' => '6',
                'difficulty_level_id' => '1',
                'url_video' => '7c1aVLf33bY',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://clinicadeansiedad.com/problemas/introduccion/ansiedad-y-personalidad/">
                   https://clinicadeansiedad.com/problemas/introduccion/ansiedad-y-personalidad/
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 59,
                'test_id' => 12, 
                'information_level_id' => '7',
                'difficulty_level_id' => '2',
                'url_video' => 'PgPV4QQzZ88',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.nimh.nih.gov/health/publications/espanol/trastorno-de-ansiedad-generalizada-cuando-no-se-pueden-controlar-las-preocupaciones-new/index.shtml">
                   https://www.nimh.nih.gov/health/publications/espanol/trastorno-de-ansiedad-generalizada-cuando-no-se-pueden-controlar-las-preocupaciones-new/index.shtml
                </a></li></ul>
                ',
                'min' => '46',
                'max' => '100',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 60,
                'test_id' => 13, 
                'information_level_id' => '4',
                'difficulty_level_id' => '1',
                'url_video' => '-ohENCPyxoc',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://www.depresion.psicomag.com/sinto_depre.php">
                   http://www.depresion.psicomag.com/sinto_depre.php
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 61,
                'test_id' => 13, 
                'information_level_id' => '5',
                'difficulty_level_id' => '2',
                'url_video' => 'CbjoJncaczU',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.nimh.nih.gov/health/publications/espanol/depresion/index.shtml">
                   https://www.nimh.nih.gov/health/publications/espanol/depresion/index.shtml
                </a></li></ul>
                ',
                'min' => '46',
                'max' => '100',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 62,
                'test_id' => 14, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => 'Fjs_Ad7jT58',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.drugabuse.gov/es/publicaciones/como-prevenir-el-uso-de-drogas/capitulo-1-los-factores-de-riesgo-y-los-factores-de-proteccion/cuales-son-los-fa">
                   https://www.drugabuse.gov/es/publicaciones/como-prevenir-el-uso-de-drogas/capitulo-1-los-factores-de-riesgo-y-los-factores-de-proteccion/cuales-son-los-fa
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '32',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 63,
                'test_id' => 14, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => '0pPe5MV9nds',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.banmedica.cl/efectos-riesgos-del-consumo-drogas/">
                   https://www.banmedica.cl/efectos-riesgos-del-consumo-drogas/
                </a></li></ul>
                ',
                'min' => '33',
                'max' => '64',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 64,
                'test_id' => 14, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => '3T4SpHj_xio',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.drugabuse.gov/es/publicaciones/juventud-latina/los-riesgos-del-abuso-de-drogas">
                   https://www.drugabuse.gov/es/publicaciones/juventud-latina/los-riesgos-del-abuso-de-drogas
                </a></li></ul>
                ',
                'min' => '65',
                'max' => '98',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 65,
                'test_id' => 15, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => 'KxXPUvhyFvU',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://www.iofc.org/es/abt/ideas/cp">
                   http://www.iofc.org/es/abt/ideas/cp
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 66,
                'test_id' => 15, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => 'KxXPUvhyFvU',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://psicologiaymente.net/psicologia/modelo-transteorico-cambio-prochaska-diclemente">
                   https://psicologiaymente.net/psicologia/modelo-transteorico-cambio-prochaska-diclemente
                </a></li></ul>
                ',
                'min' => '41',
                'max' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 67,
                'test_id' => 15, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'KxXPUvhyFvU',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   https://www.psyciencia.com/el-modelo-de-prochaska-y-diclemente-un-modelo-de-cambio/">
                   https://www.psyciencia.com/el-modelo-de-prochaska-y-diclemente-un-modelo-de-cambio/
                </a></li></ul>
                ',
                'min' => '81',
                'max' => '120',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 68,
                'test_id' => 16, 
                'information_level_id' => '1',
                'difficulty_level_id' => '1',
                'url_video' => 'B_QInKl4XZQ',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://lacodependencia.org/algunas-caracteristicas-de-la-codependencia/">
                   http://lacodependencia.org/algunas-caracteristicas-de-la-codependencia/
                </a></li></ul>
                ',
                'min' => '0',
                'max' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 69,
                'test_id' => 16, 
                'information_level_id' => '2',
                'difficulty_level_id' => '2',
                'url_video' => 'GXirLXrW9Lc',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://www.webconsultas.com/mente-y-emociones/familia-y-pareja/consecuencias-de-la-codependencia">
                   http://www.webconsultas.com/mente-y-emociones/familia-y-pareja/consecuencias-de-la-codependencia
                </a></li></ul>
                ',
                'min' => '44',
                'max' => '86',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 70,
                'test_id' => 16, 
                'information_level_id' => '3',
                'difficulty_level_id' => '3',
                'url_video' => 'U0ze7gLmQj4',
                'professional_help' => '',
                'url_interest' => '
                <ul><li>
                <a href="   http://www.adicciones.org/familia/codependencia.html">
                   http://www.adicciones.org/familia/codependencia.html
                </a></li></ul>
                ',
                'min' => '87',
                'max' => '130',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
