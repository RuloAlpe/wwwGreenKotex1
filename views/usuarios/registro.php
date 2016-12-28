<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$this->registerJsFile ( '@web/webAssets/js/registro.js', [
		'depends' => [
				\app\assets\AppAsset::className ()
		]
] );

?>

<!-- .ur1 -->
<div class="ur1">

	<a href="" class="logo">
		<img src="<?=Url::base()?>/webAssets/images/logo.png" alt="Kotex">
	</a>

	<img src="<?=Url::base()?>/webAssets/images/avion.png" class="avion" alt="Avion">

	<!-- <div class="pavimento"></div> -->
	
	<img src="<?=Url::base()?>/webAssets/images/pavimento.png" class="pavimento" alt="Pavimento">

	<img src="<?=Url::base()?>/webAssets/images/premios.png" class="premios" alt="Premios">

	<h2 class="title"><span class="title-kotex">Kotex</span> te lleva <span class="title-purple">al mejor concierto</span> <span class="title-uppercase">CDMX 19 de Febrero</span></h2>

	<!-- .ur1-cont -->
	<div class="ur1-cont">

		<h3>Compra productos Kotex</h3>

		<p>
			Registra tus tickets, entre más registres más oportunidades tienes de ganar
		</p>

		<p>
			Elige la cadena o sucursal donde realizaste tu compra.
		</p>

		<span class="incluye">*Incluye vuelos y hospedaje.</span>

		<?php
		$form = ActiveForm::begin ( [
		'options' => [
		'enctype' => 'multipart/form-data'
		],
		"action" => Yii::$app->urlManager->createAbsoluteUrl ( ['usuarios/registro-usuarios'] ),
		] );
		?>

		<a id="ready" class="btn btn-primary ladda-button" href="<?= Yii::$app->urlManager->createAbsoluteUrl ( ['/usuarios/abrir-sesion'] ) ?>" data-style="zoom-out"><span class="ladda-label">Ya tengo registro</span></a>

		<?= Html::submitButton('<span class="ladda-label">Registrate</span>', ['id'=>'registro-btn','class'=>'btn btn-primary ladda-button', 'data-style'=>'zoom-out'])?>

		<?php
		ActiveForm::end ();
		?>

	</div>
	<!-- end - .ur1-cont -->
	
	<!-- .acepto-terminos-condiciones -->
	<div class="acepto-terminos-condiciones">
		<span id="modal-agregar-post-open">Términos y condiciones</span>
	</div>
	<!-- end - .acepto-terminos-condiciones -->

	<!-- .modal -->
	<div id="modal-agregar-post" class="modal modal-aviso-privacidad">

		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
				<span id="modal-agregar-post-close" class="modal-close">×</span>
				<h2>Términos y Condiciones</h2>
			</div>
			<div class="modal-body">
				<div class="terminos-condiciones-colum">
					<p>
						<strong>IMPULSORA DE VACACIONES FIESTA SA DE CV</strong>  GOP0112128B4 (que en lo sucesivo será denominado <strong>FIESTA AMERICANA)</strong> con domicilio en Prolongación Paseo de Reforma #1015 Piso 9, Col. Santa Fe, Del. Álvaro Obregón, C.P. 01210, Ciudad de México y <strong>PUBLICIDAD Y SOLUCIONES GREEN SA DE CV</strong> (que en los sucesivo de será denominada P.GREEN) con domicilio en Santa Brígida 19, Jardines de Santa Mónica, C.P. 54055, Tlalnepantla de Baz Estado de México. Ponen a disposición del público en general los siguientes términos y condiciones de la promoción <strong>“MASTER EXPERIENCE”</strong> (que en lo sucesivo será denominada LA PROMOCIÓN). 
					</p>
					
					<h4>I. ACEPTACIÓN DE LOS TÉRMINOS Y CONDICIONES. </h4>

					<p>
						Los presentes términos y condiciones rigen LA PROMOCIÓN. La participación del público consumidor en LA PROMOCIÓN, implica el conocimiento y aceptación de los presentes términos y condiciones.
					</p>

					<p>
						Al participar en LA PROMOCIÓN, el consumidor acepta quedar obligado por las reglas y decisiones del organizador, las cuales tendrán carácter definitivo y vinculante respecto de todos los asuntos relacionados con LA PROMOCIÓN. Cualquier violación a los presentes términos y condiciones, a las reglas de la PROMOCIÓN, así como a los procedimientos o sistemas establecidos, implicará la inmediata descalificación y exclusión del participante y/o la revocación de cualquiera de los incentivos. 
					</p>

					<h4>II. NATURALEZA DE LA PROMOCIÓN. </h4>

					<p>
						LA PROMOCIÓN se lleva a cabo en términos del artículo 46 de la Ley Federal de Protección al Consumidor. La PROMOCION cuenta con el Aviso de promoción PROFECO <strong>PFC.C.A.-004397/16</strong>
					</p>

					<h4>III. RESPONSABLE DE LA PROMOCIÓN. </h4>

					<p>
						El organizador responsable y encargado de la promoción es PUBLICIDAD Y SOLUCIONES GREEN S.A DE C.V (denominado P.GREEN, para los efectos de LA PROMOCIÓN) con domicilio en Santa Brígida 19, Jardines de Santa Mónica, C.P. 54055, Tlalnepantla de Baz Estado de México.
					</p>

					<h4>IV. DENOMINACIÓN Y VIGENCIA DE LA PROMOCIÓN.</h4>

					<p>
						La PROMOCIÓN tendrá una vigencia del 3 al 15 de octubre de 2016.
					</p>

					<h4>V. PERSONAS PARTICIPANTES.</h4>

					<p>
						En LA PROMOCIÓN únicamente podrán participar personas físicas mayores de edad que tengan nacionalidad mexicana (o con FM2 vigente) y residan en Monterrey Nuevo León o en su defecto puedan viajar al lugar del evento. 
					</p>

					<p>
						Quedan fuera de la promoción los accionistas, familiares de los accionistas y personal de FIESTA AMERICANA, P.GREEN y ATP MTY 2016, personal y cualquier otra persona que haya intervenido en la organización de la promoción. 
					</p>

					<h4>VI. ESTABLECIMIENTOS PARTICIPANTES.</h4>

					<p>
						La mecánica se realizara por medio del sitio web <a class="link" href="www.participagana.com.mx/abiertomonterrey" target="_blank">www.participagana.com.mx/abiertomonterrey</a>
					</p>

					<h4>
						VII. MECÁNICA DE LA PROMOCIÓN. 
					</h4>

					<p>
						Participan personas mayores de 18 años, que ingresen al sitio web <a class="link" href="www.participagana.com.mx/abiertomonterrey" target="_blank">www.participagana.com.mx/abiertomonterrey</a>  cada registro obtendrá una oportunidad de participar en el juego de “ping pong”. Participan para ganar un pase doble para las finales del ATP 2016. 
					</p>

					<ol type="1">
						<li>
							<h4>Registro</h4>
							<p>
								El participante deberá aportar los siguientes datos, para registrarse y en caso de  resultar ganador poder contactarlo: NOMBRE COMPLETO, TELÉFONO DE CASA Y/O TELÉFONO CELULAR, MAIL, CODIGO POSTAL.
							</p>
						</li>
						<li>
							<h4>Mecánica</h4>
							<p>
								Los participantes, podrán jugar en el sitio web <a href="www.participagana.com.mx/abiertomonterrey" class="link">www.participagana.com.mx/abiertomonterrey</a> “ping pong” para acumular puntos y participar por un pase doble para la final del ATP 2016, el juego en automático guardara el puntaje así como el registro tomando en cuenta fecha y hora, al terminar le indicarán la puntuación acumulada y horario de participación. 
							</p>
							<p>
								La vigencia para participar será del 3 de octubre al 13 de octubre. A las 15:00 hrs. Del 13 de octubre de 2016, se publicara el nombre y puntaje ganador en el sitio web <a href="" class="link">www.participagana.com.mx/abiertomonterrey</a> así como en la página <a href="" class="link">www.facebook.com/ParticipaGanaOficial</a>
							</p>
							<p>
								En caso de contar con dos o más participantes con la misma puntuación se tomará en cuenta al participante que  haya registrado primero en fecha y horario su participación.
							</p>
							<p>
								Se enviará a todos los participantes un certificado de segunda noche gratis.
							</p>
						</li>
						<li>
							<h4>Premios</h4>
							<p>
								FIESTA AMERICANA ha dispuesto para esta PROMOCIÓN certificados de regalo <strong>sin valor nominal</strong> distribuidos de la siguiente manera: 
							</p>

							<table>
								<tr>
									<th class="table-score">SCORE + ALTO</th>
									<th>1 pase doble para las finales del ATP 2016</th>
								</tr>
								<tr>
									<td>Todos ganan certificado 2x1 Fiesta Americana</td>
									<td>Una noche gratis en la compra mínima de una en los Hoteles Fiesta Americana participantes, (para consultar destinos y hoteles participantes marcar a los números 01 800 504 5000 al 5326 6900).</td> 
								</tr>
							</table>
						</li>
						<li>
							<h4>
								Restricciones para la entrega del pase doble  a las finales de ATP 2016
							</h4>
							<p>
								El 13 de octubre de 2016 se dará a conocer al ganador de este incentivo, a través del sitio web, así como en la página <a href="www.facebook.com/ParticipaGanaOficial" class="link">www.facebook.com/ParticipaGanaOficial</a>
							</p>
							<p>
								Al ganador se  le contactará a los números que proporciono en su registro. Contará con 24 horas para enviar al correo electrónico <a href="mailto:promociones@participagana.com.mx" class="link">promociones@participagana.com.mx</a>  la siguiente documentación:
							</p>
							<ul>
								<li>
									Copia simple por los dos lados IFE/INE o cualquier otra identificación oficial con firma autógrafa (para extranjeros FM2 vigente).
								</li>
								<li>
									Comprobante de domicilio. ( ya que el ganador deberá residir en Monterrey Nuevo León o poderse trasladar al lugar del evento)
								</li>
							</ul>
							<p>
								El canje del incentivo se entrega vía correo electrónico una vez PGREEN haya constatado la entrega en su totalidad la documentación solicitada al ganador y firme la carta de aceptación de premio.
							</p>
							<p>
								La fecha de disfrute del incentivo es el 15 de octubre de 2016 en el Abierto de Monterrey que se llevará a cabo en el Deportivo Alpino Chipinque, Av. San Ángel Sur 118, Residencial Chipinque, 66297 Monterrey, N.L.
							</p>
							<p>
								El incentivo no incluye transportación al evento, por lo que el ganador deberá contemplar los gastos y tiempo de traslado al mismo.
							</p>
							<p>
								El incentivo no podrá ser canjeado por dinero en efectivo y no será de ninguna manera extendido. El incentivo no es transferible. El canje del certificado está sujeto a disponibilidad.
							</p>
						</li>
						<li>
							<h4>
								Restricciones para la entrega de certificados 2x1 en hoteles Fiesta Americana
							</h4>
							<p>
								Al participante que se le otorgue este incentivo, se hace acreedor a un Certificado 2x1, que se refiere a una noche gratis en la compra mínima de una en Hoteles participantes de la Cadena Fiesta Americana. Para hacer valido su descuento y realizar la reservación, llamar al 01800 5045000 para toda la República, o al 59550306 para el Distrito Federal.
							</p>
							<p>
								El incentivo no incluye: Transportación aérea o terrestre bebidas, alimentos, propinas, cargos hechos al hotel, espectáculos ni atracciones, no incluye seguro de viajero a favor del ganador y sus acompañantes, por lo que todos ellos aceptan viajar por su propia responsabilidad. El incentivo no podrá ser canjeado por dinero en efectivo y no será de ninguna manera extendido. 
							</p>
							<p>
								Todo lo no previsto en este apartado será considerado como excluido.
							</p>
						</li>
					</ol>

					<h4>
						VIII. PIRAMIDE DE INCENTIVOS DE LA PROMOCION.
					</h4>

					<p>
						FIESTA AMERICANA ha dispuesto para fines de LA PROMOCIÓN los siguientes incentivos:
					</p>
							
					<table>
						<tr>
							<th class="table-score">SCORE + ALTO</th>
							<th>1 pase doble para las finales del ATP 2016</th>
						</tr>
						<tr>
							<td>Todos ganan certificado 2x1 Fiesta Americana</td>
							<td>Una noche gratis en la compra mínima de una en los Hoteles Fiesta Americana participantes, (para consultar destinos y hoteles participantes marcar a los números 01 800 504 5000 al 5326 6900).</td> 
						</tr>
					</table>

					<h4>IX. AUTORIZACIÓN.</h4>

					<p>
						El participante que resulte ganador de LA PROMOCIÓN, autoriza expresa e irrevocablemente a PUBLICIDAD Y SOLUCIONES GREEN S.A. de C.V. y/o IMPULSORA DE VACACIONES FIESTA S.A. DE .CV., y/o cualquier otra empresa que ésta determine, a difundir en los medios que estimen conveniente, su nombre y apellido completo, país y ciudad de origen, fotografías y uso de imagen o retrato, videos y en general todos aquellos datos que pudieran requerirse con motivo de la difusión de esta promoción, renunciando expresa e irrevocablemente, desde la aceptación de las bases, a cualquier tipo de compensación económica, remuneración, regalía o retribución alguna por dicho uso.
					</p>

					<p>
						El participante ganador cuyos datos, imagen, retrato, video y/o alguno de los señalados  anteriormente, entiende y acepta que el uso de dicha imagen no se lleva acabo con fines de lucro directo ni indirecto, sino para dar claridad y transparencia sobre los resultados de la presente promoción.
					</p>

					<h4>
						X.LIMITACIONES DE RESPONSABILIDAD / INTERNET
					</h4>

					<p>
						IMPULSORA DE VACACIONES FIESTA S.A. DE .CV. y PUBLICIDAD Y SOLUCIONES GREEN S.A. de C.V., y demás personas involucrados en la Promoción no son responsables por ilegibilidades, pérdidas, retardos o por cualquier mal funcionamiento de la computadora, teléfono, satélite, cable, red, hardware o software, Internet, fallas, conexiones, disponibilidad o transmisiones distorsionadas, sitio web del proveedor de servicios/ Internet / web / accesibilidad, disponibilidad, o congestión de tráfico, o cualquier error técnico o intervención humana no autorizada, o la captura incorrecta o inexacta de información de registro, o el fracaso en la captura, o la pérdida de dicha información.
					</p>

					<p>
						GRUPO POSADAS y P.GREEN, no son responsables por los errores tipográficos, errores técnicos, tecnológicos, mecánicos o de la información incorrecta o inexacta, ya sea causada por cualquier usuario del sitio Web, manipulación, piratería informática, o por cualquiera de los equipos o programas asociados y utilizados en la Promoción. No asumirán ninguna responsabilidad por cualquier omisión, interrupción, eliminación, defecto, retraso en la operación o transmisión, falla de comunicaciones técnicas, errores tecnológico, mecánicos o robos, destrucción o accesos no autorizado a cualquier sitio web.
					</p>

					<p>
						Además, no se hacen responsable por los actos de fuerza mayor u otros actos que interfieren con la buena administración prevista, el funcionamiento y el cumplimiento de esta Promoción. Cualquiera de las personas involucradas en la organización de la promoción no son responsables por lesiones o daños, ya sean personales o de propiedad, de la computadora de los participantes o de cualquier persona relacionada o que resulte de la participación de esta Promoción.
					</p>

					<p>
						El Organizador se reserva el derecho de cancelar o modificar el Concurso en caso de fraude, dificultades técnicas, o cualquier otra causa ajena a P.GREEN que pueda comprometer la integridad del Concurso conforme lo determine P.GREEN a su sola discreción.
					</p>

					<p>
						En ningún caso, se otorgarán más premios en la promoción de los que se establecen en las reglas oficiales de la misma.
					</p>

					<p>
						En caso de existir cualquier error técnico, tecnológico, mecánico en el que resulten más ganadores o participantes de los establecidos en las reglas oficiales de la promoción, se realizará una selección entre los ganadores y/o participantes acreedores a los premios por un jurado que GRUPO POSADAS determine en su momento.
					</p>

					<p>
						En caso de controversia en cuanto a la identidad de un ganador basándose en una dirección de correo electrónico, la obra ganadora será declarada hecha por el titular autorizado de la dirección de correo electrónico presentado al momento de participar. "Titular autorizado de la cuenta" se define como la persona natural asignada a una dirección de correo electrónico por un proveedor de acceso a Internet, proveedor de servicio de internet u otra organización (por ejemplo, negocio, institución educativa, etc.) que es responsable de asignar direcciones de correo electrónico para el dominio asociado con la dirección de correo electrónico enviada. En el caso de un dominio de propiedad individual, el propietario del nombre de dominio se considerará que el "titular autorizado de la cuenta."
					</p>

					<p>
						GRUPO POSADAS y P.GREEN, se reservan el derecho, de descalificar a cualquier participante, a su sola opinión, que manipule o intente manipular la operación de la Promoción; que actúe en violación de las Reglas Oficiales; o actúe con la intención de perturbar el funcionamiento normal de esta Promoción. Se anulará cualquier intento de participación robotizada o programada.
					</p>

					<p>
						Cualquier uso robotizado, automático, macro programados, de terceros o parecido para participar en la Promoción, se anulará cualquier intento de participación efectuada por tales métodos y la descalificación de la persona que utiliza el mismo.
					</p>

					<h4>ADVERTENCIA:</h4>

					<p>
						CUALQUIER INTENTO DE DAÑAR DELIBERADAMENTE LA PROMOCIÓN O EL MICROSITIO DE LA PROMOCIÓN O DE PERJUDICAR EL FUNCIONAMIENTO LEGÍTIMO DE LA MISMA ES UNA VIOLACIÓN DE LEYES PENALES Y CIVILES. SI DICHO INTENTO EXISTIESE, EL ADMINISTRADOR, ORGANIZADOR Y/O PATROCINADOR DE LA PROMOCIÓN SE RESERVA EL DERECHO DE RECLAMAR DAÑOS Y PERJUICIOS DE CUALQUIER PERSONA(S) RESPONSABLE DEL INTENTO EN LA MEDIDA MÁXIMA PERMITIDA POR LA LEY.
					</p>

					<p>
						El Organizador, P.GREEN no serán responsables de ningún tipo de daños o lesiones a las personas o bienes que surjan, directa o indirectamente, total o parcialmente, como consecuencia de la participación en el Concurso, la recepción y/o uso del premio y/o de la utilización de material de la página respuestas.
					</p>

					<h4>
						NOTA:
					</h4>

					<p>
						TODOS LOS PREMIOS SE ENTREGAN “TAL CUAL SON” Y EL ADMINISTRADOR, ORGANIZADOR Y/O PATROCINADOR DE LA PROMOCIÓN NO OFRECEN NINGUNA GARANTÍA DE NINGÚN TIPO, YA SEA EXPRESA O IMPLÍCITA, INCLUYENDO, PERO NO LIMITADO LAS GARANTÍAS IMPLÍCITAS DE COMERCIALIZACIÓN, IDONEIDAD PARA UN PROPÓSITO PARTICULAR O DE NO INFRACCIÓN EN LO REFERENTE A CUALQUIER PREMIO O CUALQUIER COMPONENTE DE CUALQUIER PREMIO.
					</p>

					<p>
						DEJANDO ESTABLECIDO QUE ALGUNAS JURISDICCIONES NO PERMITEN LIMITACIONES DE EXCLUSIÓN DE RESPONSABILIDAD POR DAÑOS O EXCLUSIÓN DE GARANTÍAS IMPLÍCITAS INCIDENTALES O INDIRECTOS. CONSULTE LAS LEYES LOCALES PARA SABER SI ALGUNA DE LAS LIMITACIONES O EXCLUSIONES ANTERIORES SON O NO APLICABLES.
					</p>

					<p>
						Asimismo, al aceptar un premio del Concurso, el ganador exime de toda responsabilidad presente o futura GRUPO POSADAS,  P.GREEN, a sus empresas controlantes, controladas, subsidiarias, afiliadas, a sus respectivos oficiales, directores, empleados, consultores y agentes, de toda y cualquier demanda o acción de responsabilidad legal de cualquier naturaleza que pudiera resultar de su participación en el Concurso o de la aceptación o uso del premio al igual que todas las costas, reclamos, daños, o cualquier otra lesión, sea por negligencia o hacia una persona o sus bienes (incluyendo, pero no limitado a muerte o violación los derechos personales, tal como la violación a los derechos de publicidad, privacidad, imagen, difamación, calumnia) debido en su totalidad o en parte, directa o indirectamente, a la participación en el Concurso, aceptación o uso de un premio, que surja de la participación en cualquier actividad relacionada con el Concurso o el premio, sea administrado por el Organizador o un tercero.
					</p>

					<p>
						En caso de existir premios no adjudicados, los mismos serán de propiedad de GRUPO POSADAS.
					</p>

					<h4>
						XI. PRIVACIDAD Y PROTECCIÓN DE DATOS PERSONALES.
					</h4>

					<p>
						IMPULSORA DE VACACIONES FIESTA SA DE CV, pone a disposición de los consumidores y participantes de LA PROMOCIÓN su aviso de privacidad, que puede ser consultado íntegramente en la página web: <a href="www.posadas.com/es/privacidad" class="link">www.posadas.com/es/privacidad</a>
					</p>

					<p>
						Además, FIESTA AMERICANA manifiesta que ha adoptado los niveles de seguridad de protección de datos personales legalmente requeridos y procura instalar aquellos otros medios y medidas técnicas adicionales a su alcance para evitar la pérdida, mal uso, alteración, acceso no autorizado y robo.
					</p>

					<p>
						PUBLICIDAD Y SOLUCIONES GREEN S.A. DE C.V. con domicilio en Santa Brígida 19, Jardines de Santa Mónica, C.P. 54055, Tlalnepantla de Baz Estado de México, es el responsable del tratamiento de sus datos personales, y se han adoptado los niveles de seguridad de protección de datos personales legalmente requeridos y procuran instalar aquellos otros medios y medidas técnicas adicionales a su alcance para evitar la pérdida, mal uso, alteración, acceso no autorizado y robo de los mismos. 
					</p>

					<p>
						Usted podrá consultar el Aviso de Privacidad completo publicado en la página de internet, <a href="" class="link">www.participagana.com.mx</a>
					</p>

					<h4>XII. MODIFICACIONES A LOS TÉRMINOS Y CONDICIONES.</h4>

					<p>
						FIESTA AMERICANA  se reservan el derecho de ampliar o modificar en cualquier momento los presentes términos y condiciones, por lo que el participante deberá consultar las bases y condiciones constantemente y hasta el término de la promoción.
					</p>

					<h4>XIII. MEDIOS DE DIFUSIÓN DE LA PROMOCIÓN.</h4>

					<p>
						Para la difusión de la información relacionada con LA PROMOCIÓN, los únicos medios autorizados por FIESTA AMERICANA son: google adwords, banners en Facebook,  Impresos dentro del evento como volantes, posters, Prensa, Radio.
					</p>

					<h4>XIV. PUBLICACIÓN DE LOS GANADORES.</h4>

					<p>
						La publicación del ganador se realizará el día 13 de octubre en el sitio web <a href="www.participagana.com.mx/abiertomonterrey" class="link">www.participagana.com.mx/abiertomonterrey</a> y  en la Página de Internet <a href="www.facebook.com/ParticipaGanaOficial" class="link">www.facebook.com/ParticipaGanaOficial</a>
					</p>

					<p>
						En donde el participante podrá consultar ganador, así como el Aviso de promoción.
					</p>

					<h4>XV. CONTACTO.</h4>

					<p>
						Para cualquier aclaración o información relacionada con LA PROMOCIÓN, los únicos medios autorizados por FIESTA AMERICANA son <a href="mailto:promociones@participagana.com.mx" class="link">promociones@participagana.com.mx</a> y el sistema telefónico de información 01-800-467187 de cobertura nacional.
					</p>

					<h4>XVI.QUEJAS.</h4>

					<p>
						En caso de queja derivada de LA PROMOCIÓN, favor de acudir a la Procuraduría Federal del Consumidor (PROFECO) ubicada en Av. José Vasconcelos No. 208, Piso 9, Col. Condesa, Del. Cuauhtémoc, C.P. 06140, México, D.F. o bien comunicarse a los teléfonos: (55) 5256 0854 y 5256 1284 de lunes a viernes de 09:00 a 18:00 horas.
					</p>

				</div>

			</div>
			<!-- <div class="modal-footer">
					<h3>Modal Footer</h3>
				</div> -->

		</div>
		<!-- end - .modal-cont -->

	</div>
	<!-- end - .modal -->



</div>
<!-- end - .ur1 -->