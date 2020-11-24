<?php

use Illuminate\Database\Seeder;

class DogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "name"        => 'Trufa',
                "birthdate"   => '2019-09-14',
                "gender"       => 'Macho',
                "breed"      => 'Mestizo',
                "description" => 'Trufa y Trully son hermanos de una camada de embarazos no deseados. En realidad, había tres cachorros, pero uno murió.
							El dueño de la madre de los cachorros, es cliente de nuestro veterinario Antonio. Le pidió ayuda a Alicia y ella trajo a los dos cachorros a Manuel, un hogar de acogida, porque él siempre ayuda.
							Trufa y Trully fueron ubicadas en este hogar de acogida porque eran muy pequeñas.
							Son cachorros muy sociables y tiernos, siempre en busca de la proximidad de los humanos.',
                "photo"       => 'Trufa.png',
            ],
            [
                "name"        => 'Estrella',
                "birthdate"   => '2007-09-30',
                "gender"       => 'Hembra',
                "breed"      => 'Mestizo',
                "description" => 'Estrella es poco sociable, cariñosa a veces... Aunque le gusta que le mimen mucho, no quiere que le den besos pero ella a ti todos los posibles. Le gusta mucho el calor, tomando el sol o debajo de la manta. Es muy inteligente pero solo cuando quiere. Le encanta estar en casa y viajar en el asiento del copiloto en el coche.',
                "photo"       => 'Estrella.png',

            ],
            [
                "name"        => 'Thomas',
                "birthdate"   => '2019-09-14',
                "gender"       => 'Macho',
                "breed"      => 'Mestizo',
                "description" => 'Thomas y Teddy son muy sociables, amorosos, muy gentiles, cuidadosos, curiosos, tranquilos y equilibrados. Su madre fue abandonada por su dueño cuando estaba muy embarazada. En la calle dio a luz a los cachorros, una mujer nativa del pueblo los alimentó. Cuando los cachorros cumplieron un mes de edad, comenzaron a salir del "nido" remoto, que a los aldeanos no les gustaba, y la familia de los perros estaba en peligro. Afortunadamente, la familia fue notada por una mujer que ayudaba a los animales sin hogar. Ella sacaba a los cachorros de la calle y los llevaba al refugio donde ahora viven.',
                "photo"       => 'Thomas.png',

            ],
            [
                "name"        => 'Denny',
                "birthdate"   => '2019-09-14',
                "gender"       => 'Macho',
                "breed"      => 'Mestizo',
                "description" => 'En una aldea detrás de los garajes, una perra ciega de la calle había dado a luz a sus cachorros. A medida que crecieron, comenzaron a salir del nido y a conocer a las personas que no les gustaban mucho, y decidieron eliminar a la familia de los perros. Un activista de los derechos de los animales ha visto un llamado de ayuda en las redes sociales sobre esta familia. Nadie, pero absolutamente nadie se acercó a ayudar. Un activista de los derechos de los animales llevó a la madre (que también buscaba un hogar) y a los cachorros Denny y Dustin a un hogar de acogida. Denny es un cachorro muy hermoso, de buen carácter, inteligente, ágil, ansioso por aprender y a una edad en la que necesita un amigo y mentor. Denny es un cachorro cariñoso y afable, no tan arrogante como su hermano Dustin',
                "photo"       => 'Denny.png',

            ],
            [
                "name"        => 'Dustin',
                "birthdate"   => '2019-09-14',
                "gender"       => 'Macho',
                "breed"      => 'Mestizo',
                "description" => 'En una aldea detrás de los garajes, una perra ciega de la calle había dado a luz a sus cachorros. A medida que crecieron, comenzaron a salir del nido y a conocer a las personas que no les gustaban mucho, y decidieron eliminar a la familia de los perros. Un activista de los derechos de los animales ha visto un llamado de ayuda en las redes sociales sobre esta familia. Nadie, pero absolutamente nadie se acercó a ayudar.
							Un activista de los derechos de los animales llevó a la madre (que también buscaba un hogar) y a los cachorros Dustin y Denny a un hogar de acogida.
							Dustin es un cachorro muy activo, emocional, feliz, hace todo con placer: sale a caminar, juega. Le encanta comer y cuando llega la hora de comer, está ansioso por su comida. Después de comer, a Dustin le gusta relajarse (a diferencia de los cachorros que suelen retozar después de comer). La obediencia, fácil de entrenar, muy orientada a los humanos, entiende lo que quieres de él, responde a las "críticas". Está muy interesado en el mundo que lo rodea, disfruta de un paseo, está feliz de conocer gente. Junto con su hermano, Denny, jugando: él es el líder.',
                "photo"       => 'Dustin.png',

            ],
            [
                "name"        => 'Bala',
                "birthdate"   => '2007-09-30',
                "gender"       => 'Hembra',
                "breed"      => 'Bodeguero ratonero',
                "description" => 'Bala y sus hermanos, Fusil, Polvora, Revolver, Dinamita y Cartucho fueron tirados en una caja fuera del refugio.
								Afortunadamente, a los bribones no les ha pasado nada. Todos son sociables, juguetones, agradables y amorosos.
								Ahora están esperando a una familia, como con los niños, que con amor, paciencia pero de manera constante enseña a los perros.',
                "photo"       => 'Bala.png',

            ],
            [
                "name"        => 'Belier',
                "birthdate"   => '2019-09-14',
                "gender"       => 'Macho',
                "breed"      => 'Mestizo',
                "description" => 'Al principio era tímido, pero rápidamente se hizo amigo de Pepsi.
											Así que el hogar de acogida decidió acogerlo y ahora, como Pepsi, está buscando un hogar en Alemania.
											Belier es amigable, juguetona y curiosa.
											Se lleva bien con todos los perros y es respetuoso al tratar con el perro más viejo de la casa.',
                "photo"       => 'Belier.png',

            ],
            [
                "name"        => 'Pepsi',
                "birthdate"   => '2007-09-30',
                "gender"       => 'Hembra',
                "breed"      => 'Mestizo pastor alemán',
                "description" => 'Un niño se encontró accidentalmente con niños gitanos mientras hacía alboroto y ruido en la calle, aterrorizando a un pequeño perro que constantemente corría de un lado a otro con miedo.
							El niño se acercó a los niños gitanos, los reprendió y se llevó al perrito a casa.
							La familia le pidió a Mi que ayudara a Amigo a encontrar un nuevo hogar en Alemania para Pepsi.
							Pepsi es un cachorro típico, tierno y juguetón, pero tiene el encanto de comunicarse con uno, sus expresiones faciales siempre te hacen reír',
                "photo"       => 'Pepsi.png',

            ],
            [
                "name"        => 'Helsinki',
                "birthdate"   => '2007-09-30',
                "gender"       => 'Hembra',
                "breed"      => 'Mestizo ratonero bodeguero',
                "description" => 'La madre, un pura sangre Ratonero Bodeguero Andaluz, vive en una bodega. El dueño había descuidado castrar a la perra, por lo que llegó al embarazo.
							Cuando trajo a la pandilla de cachorros al refugio, prometió castrar a la madre para que no tuviera más cachorros, de lo cual tenemos que ocuparnos.
							Helsinki y sus hermanos al principio eran muy tímidos y reservados, ya que estaban acostumbrados a vivir en el campo. Después de un corto tiempo tuvieron confianza, jugaron entre ellos y también con otros perros.
							En general, son encantadores, típicos cachorros, juguetones, socialmente aceptables.',
                "photo"       => 'Helsinki.png',

            ],
            [
                "name"        => 'Stefan',
                "birthdate"   => '2019-09-14',
                "gender"       => 'Macho',
                "breed"      => 'Mestizo',
                "description" => 'Stefan es un niño muy dulce, dulce. Un poco tímido Amigable con otros perros, fácil de entrenar.
									Captura todo en un santiamén. Le encantan los diferentes juguetes, le encantan los juegos con los conespecíficos.
									Él es bondadoso, inteligente y ágil, le gusta acurrucarse.
									En una mañana lluviosa muy temprana en Orsk, cuando todavía estaba oscuro, una mujer caminaba con sus perros y escuchó un gemido. Corrió y vio debajo de un auto, un cachorro, mojado, sucio y asustado.
									Cuando el cachorro vio a la mujer y sus perros, lloró más fuerte.
									En tensión, el cachorro corrió de un auto a otro. Pero la mujer logró atraparlo.
									Al tocarse, el pequeño se estremeció y chirrió. Se empujó al suelo, como si quisiera volverse invisible.
									Cuando se calmó un poco, se durmió y durmió mucho tiempo.
									Entonces comenzó una nueva vida y esperamos que encuentre a su familia amorosa.',
                "photo"       => 'Stefan.png',

            ],
            [
                "name"        => 'Tim',
                "birthdate"   => '2019-09-14',
                "gender"       => 'Macho',
                "breed"      => 'Chihuahua mix',
                "description" => 'La "familia" de Tim tiene suficiente de él y ya no quiere tenerlo. Ahora el hermoso joven busca un nuevo hogar en Alemania.
							Tim es un perro joven y tímido que aún no ha aprendido mucho. En una situación que conoce, le encanta jugar y correr. Se orienta muy cerca de su persona, lo mira a los ojos, espera órdenes y comprende mucho.
							Tim necesita personas que puedan darle la seguridad necesaria y estén dispuestos a darle su tiempo para llegar. Él es un verdadero tesoro cuando ha florecido.',
                "photo"       => 'Tim.png',

            ],
            [
                "name"        => 'Nala',
                "birthdate"   => '2007-09-30',
                "gender"       => 'Hembra',
                "breed"      => 'Mestizo',
                "description" => 'Nala fue encontrada en el granero de una granja. La hija del dueño conoce a Alberto y Alicia y les informó. Alberto acordó hacerse cargo del perro, pero solo después
							Bueno, incluso antes de que pudiera castrarse, nacieron sus 8 cachorros.
							Nala es tierno, social y ama mucho a la gente.
							Ella espera las visitas humanas diarias y es obediente.
							También cuida muy bien a su cachorro y podemos imaginar que podría encajar bien en todas las familias.',
                "photo"       => 'Nala.png',

            ],
            [
                "name"        => 'Sena',
                "birthdate"   => '2007-09-30',
                "gender"       => 'Hembra',
                "breed"      => 'Mestizo',
                "description" => 'Dos adolescentes cruzaron el campo en bicicleta cerca de una zanja cuando encontraron dos cajas en la zanja. Las cajas ya estaban mojadas y los cachorros adentro estaban casi ahogados.
							Uno de los niños alertó a su madre, mientras que el otro se hizo cargo de los cachorros.
							La madre vino con su auto y trajo los cachorros a Alicia y Alberto.
							Ahora vive Volga, Sena, Mosa, Elba, Loira y Dangava de forma segura en el refugio y se comporta como un cachorro, generalmente juguetón y tierno.',
                "photo"       => 'Sena.png',

            ],
            [
                "name"        => 'Iris',
                "birthdate"   => '2007-09-30',
                "gender"       => 'Hembra',
                "breed"      => 'Mestizo labrador',
                "description" => 'Iris fue encontrada en una noche lluviosa fuera de la puerta de un bloque de pisos donde buscaba refugio. Una mujer que llegó a casa tarde por la noche se llevó el bulto empapado a su casa.
							Iris estaba llena de energía, juguetona y social mente compatible con los adultos y niños. Es una perrita muy dulce que necesita desesperadamente a su propia familia, con hijos.
							¿Quién quiere darle al hermoso iris un hogar para siempre?',
                "photo"       => 'Iris.png',

            ],
            [
                "name"        => 'Elfo',
                "birthdate"   => '2007-09-30',
                "gender"       => 'Macho',
                "breed"      => 'Mestizo',
                "description" => 'Elfo fue observado por un momento por una mujer que lo había descubierto desviándose entre los olivares. Al principio pensó que era un gato blanco tierno, pero un día descubrió que Elfo era un perro en un estado lamentablemente demacrado.
							Ella podría llevarlo a casa y animarlo.
							Mientras tanto, Elfo también podría ser vacunado, ya que su condición se ha fortalecido.
							Elfo es un perro-perro mágico que todavía es muy tímido con los ruidos fuertes.
							Suponemos que tiene una naturaleza sensible que debe ser recibida con mucha paciencia y amor, luego Elfo pierde su timidez y le encanta acurrucarse de forma segura en el regazo de su ser humano.',
                "photo"       => 'Elfo.png',

            ],
            [
                "name"        => 'Belem',
                "birthdate"   => '2007-09-30',
                "breed"       => 'Mestizo',
                "gender"      => 'Hembra',
                "description" => 'Belem estaba en medio de la carretera cuando uno de nuestros voluntarios la vio.
								Era un milagro que todavía no la hubieran atropellado, así que se detuvo de inmediato, cruzó la peligrosa carretera y tomó a Belem en sus brazos.
								Belem estaba embarazada y tuvo que ser castrada de inmediato.
								Ahora vive con nosotros en el refugio y es una perra llena de encanto.
								Creemos que Belem sería ideal para una familia con niños porque está llena de vitalidad y entusiasmo por la vida.',
                "photo"       => 'Belem.png',

            ],
            [
                "name"        => 'Chelsea',
                "birthdate"   => '2007-09-30',
                "breed"       => 'Mestizo',
                "gender"      => 'Hembra',
                "description" => 'Chelsea fue alimentada por un niño una y otra vez. Pero ella no aceptó la comida hasta que él se fue.
								Después de un tiempo, se volvió más confiada y se dejó tocar. Se llevó a Chelsea a su casa y la llevó al veterinario al día siguiente.
								El veterinario presentó una lesión en el tercer párpado de un ojo. Esto tuvo que ser operado, lo cual es muy costoso y, por lo tanto, nos pidieron apoyo financiero.
								Chelsea se ha sometido a una cirugía (algunas fotos lo muestran), recuperándose bien y aumentando de peso.
								Chelsea, a pesar de su corta edad, es una perra muy tranquila. Ella se lleva bien con todos los otros perros en el refugio.
								Para Chelsea buscamos personas activas, una familia con niños que, debido a su tamaño, sean un poco mayores y más estables.',
                "photo"       => 'Chelsea.png',

            ],
            [
                "name"        => 'Assol',
                "birthdate"   => '2007-09-30',
                "breed"       => 'Mestizo',
                "gender"      => 'Hembra',
                "description" => 'Suecia y sus hermanos, son el "resultado" de un embarazo no deseado.
								La madre, un pura sangre Ratonero Bodeguero Andaluz, vive en una bodega. El dueño había descuidado castrar a la perra, por lo que llegó al embarazo.
								Cuando trajo a la pandilla de cachorros al refugio, prometió castrar a la madre para que no tuviera más cachorros, de lo cual tenemos que ocuparnos. Al principio eran muy tímidos y reservados, ya que estaban acostumbrados a vivir en el campo. Después de un corto tiempo tuvieron confianza, jugaron entre ellos y también con mis otros perros. 
								En general, son encantadores, típicos cachorros, juguetones, socialmente aceptables.',
                "photo"       => 'Assol.png',

            ],
            [
                "name"        => 'Suecia',
                "birthdate"   => '2007-09-30',
                "breed"       => 'Mestizo ratonero bodeguero',
                "gender"      => 'Hembra',
                "description" => 'Suecia y sus hermanos, son el "resultado" de un embarazo no deseado.
								La madre, un pura sangre Ratonero Bodeguero Andaluz, vive en una bodega. El dueño había descuidado castrar a la perra, por lo que llegó al embarazo.
								Cuando trajo a la pandilla de cachorros al refugio, prometió castrar a la madre para que no tuviera más cachorros, de lo cual tenemos que ocuparnos. Al principio eran muy tímidos y reservados, ya que estaban acostumbrados a vivir en el campo. Después de un corto tiempo tuvieron confianza, jugaron entre ellos y también con mis otros perros. 
								En general, son encantadores, típicos cachorros, juguetones, socialmente aceptables.',
                "photo"       => 'Suecia.png',

            ],

        ];

        DB::table('dog')->insert($data);
    }
}
