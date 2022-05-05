<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'MacBook Pro',
            'details' => '13 pulgadas, 1TB SDD, 16GB RAM',
            'description' => 'La MacBook Pro de 13 pulgadas trae un procesador Intel de 4 núcleos de décima generación 
                              con Turbo Boost de hasta 3,8 GHz e Intel Iris Plus Graphics. También viene con una increíble y colorida pantalla 
                              Retina con tecnología True Tone para que todo se vea más natural. Y cuenta con teclado Magic Keyboard retroiluminado, 
                              Touch ID y el versátil Touch Bar para que seas más productivo que nunca. Mucho poder en una notebook de 13 pulgadas.',
            'price' => 470000,
            'stock' => 3,          
            'category_id' => 2,
            'image_path' => 'macbook-pro.png'
        ]);

        Product::create([
            'name' => 'Dell Vostro 3405',
            'details' => '14 pulgadas, 256GB SDD, 8GB RAM ',
            'description' => 'Notebook DELL Vostro 3405 AMD Ryzen 5 3450u
                              Modelo: V3405_R58GB256
                              Procesador: AMD Ryzen 5 3450U Mobile Processor with Radeon Vega 8 Graphics
                              Memoria: 8GB DDR4
                              Almacenamiento Primario: 256GB M.2 PCIE
                              Almacenamiento secundario: Slot Libre (SATA)
                              Gráfica: Radeon Vega 8 Graphics
                              Teclado: Español, con Ñ Física
                              Pantalla: 14" HD Anti-Glare
                              Wireless Driver: Wi-Fi 5 (802.11ac)
                              Cámara: Web-Cam HD - fixed focus
                              Batería primaria: 42 WHr, 3-Cell Battery (Integrada)
                              Dimensiones: Ancho: 328 mm / Profundidad: 239 mm / Altura: 19,9 mm
                              Peso: 1,7 Kg
                              Sistema Operativo: No posee
                              Garantía: 1 año de fabrica',
            'price' => 87999,
            'stock' => 2,
            'category_id' => 2,
            'image_path' => 'dell-v3557.png'
        ]);

        Product::create([
            'name' => 'iPhone 12 Pro - Azul pacífico',
            'details' => '6.1 pulgadas, 256GB 6GB RAM',
            'description' => 'El iPhone 12 Pro tiene una espectacular pantalla Super Retina XDR de 6.1 pulgadas (1). 
                              Con el nuevo Ceramic Shield, es cuatro veces más resistente a las caídas (2). 
                              Y te permite tomar fotos increíbles con poca luz gracias a un nuevo sistema de cámaras Pro y un rango de zoom óptico de 4x. 
                              También puedes grabar, editar y reproducir video en Dolby Vision con calidad cinematográfica, tomar retratos con modo Noche y disfrutar experiencias de realidad aumentada de última generación con el escáner LiDAR. El iPhone 12 Pro viene con el potente chip A14 Bionic y es compatible con los nuevos accesorios MagSafe que se adhieren magnéticamente a tu iPhone y brindan una carga inalámbrica más rápida (3). Una infinidad de posibilidades que no dejarán de sorprenderte.',
            'price' => 316000,
            'stock' => 4,   
            'category_id' => 3,
            'image_path' => 'iphone-12-pro.png'
        ]);

        Product::create([
            'name' => 'Auriculares gamer Redragon Chroma Lamia 2 black con luz rgb LED',
            'details' => 'Auricualres Gamer Redragon con microfono , Sonido Superior',
            'description' => '¡Experimentá la adrenalina de sumergirte en la escena de otra manera! Tener auriculares específicos para jugar cambia completamente tu experiencia en cada partida. Con los Redragon Lamia 2 no te perdés ningún detalle y escuchás el audio tal y como fue diseñado por los creadores.
                               El formato perfecto para vos El diseño over-ear brinda una comodidad insuperable gracias a sus suaves almohadillas. 
                               Al mismo tiempo, su sonido envolvente del más alto nivel se convierte en el protagonista de la escena.',
            'price' => 6230,
            'stock' => 10,
            'category_id' => 4,      
            'image_path' => 'AuricularesReddragon.jpg'
        ]);

        Product::create([
            'name' => 'Samsung LED TV',
            'details' => '24 pulgadas, LED Display, Resolución 1366 x 768',
            'description' => 'Samsung es reconocida a nivel mundial como una empresa líder en la industria tecnológica. Todos sus productos son diseñados con una calidad superior y pensados para contribuir a un futuro mejor. 
                              Por eso, va a hacer que disfrutes de una experiencia visual incomparable.',
            'price' => 15000,
            'stock' => 3,
            'category_id' => 6,
            'image_path' => 'samsung-led-24.png'
        ]);

        Product::create([
            'name' => 'Cámara Canon Dsrl Eos Rebel Sl3 Ef-s 18-55mm Is Stm Entrega',
            'details' => 'Camara de 24.1MP, 20x Optical Zoom',
            'description' => 'La cámara DSLR más liviana. Captura tus recuerdos. Graba los recuerdos de tus vacaciones y momentos familiares con la cámara compacta EOS Rebel SL3.
                              Ideal para entusiastas que buscan revivir momentos con increíbles imágenes y videos. Captura con detalle, conéctate y comparte.',
            'price' => 206990,
            'stock' => 2,
            'category_id' => 5,
            'image_path' => 'CamaraCanon.png'
        ]);

        Product::create([
            'name' => 'Huawei P30 Pro',
            'details' => 'Huawei P30 Pro 256 GB black 8 GB RAM',
            'description' => 'Fotografía profesional en tu bolsillo
                              Descubrí infinitas posibilidades para tus fotos con las 4 cámaras principales de tu equipo. Poné a prueba tu creatividad y jugá con la iluminación, diferentes planos y efectos para obtener grandes resultados.
            
                              Perfecta para los amantes del plano detalle. Su zoom óptico te ofrecerá la posibilidad de realizar acercamientos sin que tus capturas pierdan calidad.
            
                              Capacidad y eficiencia
                              Con su potente procesador y memoria RAM de 8 GB tu equipo alcanzará un alto rendimiento con gran velocidad de transmisión de contenidos y ejecutará múltiples aplicaciones a la vez sin demoras.
            
                              Desbloqueo facial y dactilar
                              Máxima seguridad para que solo vos puedas acceder al equipo. Podrás elegir entre el sensor de huella dactilar para habilitar el teléfono en un toque, o el reconocimiento facial que permite un desbloqueo hasta un 30% más rápido.
            
                              Batería de duración superior
                              ¡Desenchufate! Con la súper batería de 4200 mAh tendrás energía por mucho más tiempo para jugar, ver series o trabajar sin necesidad de realizar recargas.',
            'price' => 398999,
            'stock' => 1,
            'category_id' => 3,
            'image_path' => 'gr5-2017.jpg'
        ]);

        Product::create([
            'name' => 'PlayStation 5',
            'details' => 'Sony PlayStation 5 825GB Standard color blanco y negro',
            'description' => 'Con tu consola PlayStation 5 tendrás entretenimiento asegurado todos los días. 
                              Su tecnología fue creada para poner nuevos retos tanto a jugadores principiantes como expertos. 
                              Guardá tus apps, fotos, videos y mucho más en el disco duro, que cuenta con una capacidad de 825 GB.
                              Al contar con un procesador de 8 núcleos y uno gráfico, brinda una experiencia dinámica, respuestas ágiles, y transiciones fluidas de imágenes en alta definición.
                              Por otro lado, tiene puerto USB y salida HDMI, que permiten conectar accesorios y cargar la batería de tu control mientras jugás.',
            'price' => 172000,
            'stock' => 3,          
            'category_id' => 7,
            'image_path' => 'play5.png'
        ]);

        Product::create([
            'name' => 'Nintendo Switch',
            'details' => 'Nintendo Switch 32GB Standard color rojo neón, azul neón y negro',
            'description' => 'Nintendo Switch es una consola desmontable, que puede usarse en modo portátil, 
                              sobremesa o en la TV; esto te brindará la posibilidad de utilizarla donde quieras y compartir sus controles.',
            'price' => 76000,
            'stock' => 10,          
            'category_id' => 7,
            'image_path' => 'switch.png'
        ]);

        Product::create([
            'name' => 'Nintendo 64',
            'details' => 'Consola retro Nintendo 64',
            'description' => 'Con la Nintendo 64 podras disfrutar los mejores titulos de la historia como Super Mario 64
                              Legend of Zelda Ocarina of time, Mario Kart entre otras grandes entregas.Que esperas? no te
                              podes perder esta gran oportunidad de tener unas de las consolas mas miticas de la historia!.',
            'price' => 40000,
            'stock' => 3,          
            'category_id' => 7,
            'image_path' => 'nintendo64.jpg'
        ]);

        Product::create([
            'name' => 'Xbox Series X',
            'details' => 'Microsoft Xbox Series X 1TB Standard color negro',
            'description' => 'La nueva generación de consolas está comandada por la Xbox Series que llegó al mercado para sorprender a todos. 
                              Su potencia y alto rendimiento te permitirá reducir las horas de descarga de juegos y contenido de manera considerable en comparación con otras consolas. 
                              Además, vas a poder jugar durante horas mientras te divertís con jugadores de todo el mundo.',
            'price' => 169999,
            'stock' => 6,          
            'category_id' => 7,
            'image_path' => 'xbox.png'
        ]);

        Product::create([
            'name' => 'Super Nintendo ',
            'details' => 'Consola retro Super Nintendo ',
            'description' => ' La Super Nintendoes la segunda videoconsola de sobremesa de Nintendo y la sucesora de Nintendo Entertainment System (NES) en América y Europa.
                               Mantuvo una gran rivalidad en todo el mundo con la Sega Mega Drive (o Sega Genesis) durante la era de 16 bits.',
            'price' => 10000,
            'stock' => 2,          
            'category_id' => 7,
            'image_path' => 'super nintendo.png'
        ]);

        Product::create([
            'name' => 'Pc armada gamer 1 ',
            'details' => 'Pc Armada Gamer Amd Ryzen 5 5600g 6/12 Nucleos 16gb Ssd 480 ',
            'description' => '  MICRO PROCESADOR: AMD Ryzen 5 5600G 6/12 NUCLEOS 4.4GHZ...
                                - PLACA DE VIDEO INCORPORADA RADEON VEGA RX...
                                - MOTHER: MSI A520M PRO PCI 3.0 USB 3.1...
                                - DISCO SSD: 480GB SATA3 ADATA 500MBs...
                                - MEMORIA RAM: 16GB DDR4 2666 EXPANDIBLE HASTA 64GB
                                - GABINETE: ATX SENTEY F10 - FUENTE BCP500W
                                - SISTEMA OPERATIVO: WINDOWS 10 64BITS TRIAL',
            'price' => 88999,
            'stock' => 4,          
            'category_id' => 2,
            'image_path' => 'pc1.png'
        ]);

        Product::create([
            'name' => 'Notebook HP 15 ',
            'details' => 'Notebook HP 15-ef2126wm spruce blue 15.6", AMD Ryzen 5 5500U 8GB de RAM 256GB SSD, AMD Radeon RX Vega 7 1920x1080px Windows 10 Home ',
            'description' => 'La notebook HP 15-ef2126wm es una solución tanto para trabajar y estudiar como para entretenerte. Al ser portátil, el escritorio dejará de ser tu único espacio de uso para abrirte las puertas a otros ambientes ya sea en tu casa o en la oficina. ',
            'price' => 98990,
            'stock' => 4,          
            'category_id' => 2,
            'image_path' => 'hp15.png'
        ]);

        Product::create([
            'name' => 'Pc armada gamer 2 ',
            'details' => 'Pc Armada Gamer Amd Ryzen 7 5700g Ram 32gb 960g Ssd Wifi',
            'description' => '  - MICRO AMD RYZEN 7 5700G 3.8GHZ
                                - VIDEO AMD RADEON VEGA INTEGRADO
                                - MOTHER A520M-A AM4
                                - DISCO SOLIDO SSD 960GB
                                - MEMORIA RAM: 32GB DDR4 2X16
                                - GABINETE GAMER 6 COOLER INCLUIDOS!!!
                                - FUENTE 650W
                                - ADAPTADOR USB WIFI',
            'price' => 170000,
            'stock' => 2,          
            'category_id' => 2,
            'image_path' => 'pc2.png'
        ]);

        Product::create([
            'name' => 'Pc armada gamer 3 ',
            'details' => 'Pc Gamer Amd Ryzen 7 2700 16gb 1tb Gtx 1650 4gb Rgb 80 Plus ',
            'description' => '  - AMD Ryzen 5 3600 4.2 GHz AM4 Box
                                - Motherboard A320 (Gigabyte, Asus, Msi, Asrock)
                                - Gabinete MAtx F10 Sin KIT - Con Tira Rgb Frontal (usb 3.0)
                                - Disco de estado Sólido 480Gb Sata3
                                - Memoria 16Gb 2400MHz DDR4 Crucial
                                - Placa de Video NVIDIA GTX 1050ti 4Gb Gddr5 Box
                                - Fuente Sentey 80 Plus 550 Real',
            'price' => 10000,
            'stock' => 2,          
            'category_id' => 2,
            'image_path' => 'pc3.png'
        ]);

        Product::create([
            'name' => 'PlayStation 4',
            'details' => 'Sony PlayStation 4 Slim 1TB Standard color negro azabache',
            'description' => 'Con tu consola PlayStation 4 tendrás entretenimiento asegurado todos los días. 
                              Su tecnología fue creada para poner nuevos retos tanto a jugadores principiantes como expertos. 
                              Guardá tus apps, fotos, videos y mucho más en el disco duro, que cuenta con una capacidad de 1TB GB.
                              Al contar con un procesador de 8 núcleos y uno gráfico, brinda una experiencia dinámica, respuestas ágiles, y transiciones fluidas de imágenes en alta definición.
                              Por otro lado, tiene puerto USB y salida HDMI, que permiten conectar accesorios y cargar la batería de tu control mientras jugás.',
            'price' => 120000,
            'stock' => 3,          
            'category_id' => 7,
            'image_path' => 'play4.png'
        ]);

        Product::create([
            'name' => 'Nintendo Wii',
            'details' => 'Nintendo Wii 512MB Standard color blanco',
            'description' => 'Con tu consola Wii tendrás entretenimiento asegurado todos los días. Su tecnología fue creada para poner nuevos retos tanto a jugadores principiantes como expertos.
                              El control Wii Remote se destaca por su capacidad de detectar movimientos en un determinado espacio lo que te permite una mayor interacción y dinamismo.
                              Adaptada a tus necesidades
                              Guardá tus apps, fotos, videos y mucho más en el disco duro, que cuenta con una capacidad de 512 MB.
                              Vas a poder reproducir música, ver tus películas y series favoritas a través de las aplicaciones descargables.',
            'price' => 20000,
            'stock' => 10,          
            'category_id' => 7,
            'image_path' => 'wii.png'
        ]);

    }
}
