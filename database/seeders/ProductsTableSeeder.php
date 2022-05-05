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
            'image_path' => 'iphone-11-pro.png'
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
            'stock' => 3,
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
            'stock' => 3,          
            'category_id' => 7,
            'image_path' => 'switch.png'
        ]);

    }
}
