<div class="grid_12">
	<h2>Conozca su nivel de involucramiento.</h2>

  <div class="introform">
    <p>Escoja las opciones de acuerdo a su condición.</p>
	<p>
		<label for="nino"><input type="radio" id="nino" /> Niño </label>
		<label for="adol"><input type="radio" id="adol" /> Adolescente </label>
		<label for="adul"><input type="radio" id="adul" /> Adulto</label>
	</p>

	<p>
		<label for="mujer"><input type="radio" id="mujer"/> Mujer </label>
		<label for="hombre"><input type="radio" id="hombre" /> Hombre </label>
	</p>
</div>
    <ul class="grid_6 preguntas">
      <li>¿Sientes que tu pareja constantemente te está controlando?
      	<span class="options" ng-init="opt1 = true"><a class="opt-yes" ng-show="opt1" ng-click="aumentar(); opt1=false">Si</a> <a class="opt-no" ng-hide="opt1" ng-click="disminuir(); opt1=true">No</a></span></li>
      <li>¿Te acusa de infidelidad o de que actúas en forma sospechosa?
      	<span class="options" ng-init="opt2 = true"><a class="opt-yes" ng-show="opt2" ng-click="aumentar(); opt2=false">Si</a> <a class="opt-no" ng-hide="opt2" ng-click="disminuir(); opt2=true">No</a></span></li>
      <li>¿Has perdido contacto con amigas, familiares, compañeras/os de trabajo para evitar que tu pareja se moleste?
      	<span class="options" ng-init="opt3 = true"><a class="opt-yes" ng-show="opt3" ng-click="aumentar(); opt3=false">Si</a> <a class="opt-no" ng-hide="opt3" ng-click="disminuir(); opt3=true">No</a></span></li>
      <li>¿Te critica y humilla, en público o en privado, sobre tu apariencia, tu forma de ser, el modo en que haces tus tareas hogareñas?
      	<span class="options" ng-init="opt4 = true"><a class="opt-yes" ng-show="opt4" ng-click="aumentar(); opt4=false">Si</a> <a class="opt-no" ng-hide="opt4" ng-click="disminuir(); opt4=true">No</a></span></li>
      <li>¿Controla estrictamente tus ingresos o el dinero que te entrega, originando discusiones?
      	<span class="options" ng-init="opt5 = true"><a class="opt-yes" ng-show="opt5" ng-click="aumentar(); opt5=false">Si</a> <a class="opt-no" ng-hide="opt5" ng-click="disminuir(); opt5=true">No</a></span></li>
      <li>Cuando quiere que cambies de comportamiento, ¿te presiona con el silencio, con la indiferencia o te priva de dinero?
      	<span class="options" ng-init="opt6 = true"><a class="opt-yes" ng-show="opt6" ng-click="aumentar(); opt6=false">Si</a> <a class="opt-no" ng-hide="opt6" ng-click="disminuir(); opt6=true">No</a></span></li>
    </ul>
    <ul class="grid_6 preguntas">
      <li>¿Tiene tu pareja cambios bruscos de humor o se comporta distinto contigo en público, como si fuera otra persona?
      	<span class="options" ng-init="opt7 = true"><a class="opt-yes" ng-show="opt7" ng-click="aumentar(); opt7=false">Si</a> <a class="opt-no" ng-hide="opt7" ng-click="disminuir(); opt7=true">No</a></span></li>
      <li>¿Sientes que estás en permanente tensión y que, hagas lo que hagas, él se irrita o te culpabiliza?
      	<span class="options" ng-init="opt8 = true"><a class="opt-yes" ng-show="opt8" ng-click="aumentar(); opt8=false">Si</a> <a class="opt-no" ng-hide="opt8" ng-click="disminuir(); opt8=true">No</a></span></li>
      <li>¿Te ha golpeado con sus manos, con un objeto o te ha lanzado cosas cuando se enoja o discuten?
      	<span class="options" ng-init="opt9 = true"><a class="opt-yes" ng-show="opt9" ng-click="aumentar(); opt9=false">Si</a> <a class="opt-no" ng-hide="opt9" ng-click="disminuir(); opt9=true">No</a></span></li>
      <li>¿Te ha amenazado alguna vez con un objeto o arma, o con matarse él, a ti o a algún miembro de la familia?
      	<span class="options" ng-init="opt10 = true"><a class="opt-yes" ng-show="opt10" ng-click="aumentar(); opt10=false">Si</a> <a class="opt-no" ng-hide="opt10" ng-click="disminuir(); opt10=true">No</a></span></li>
      <li>¿Sientes que cedes a sus requerimientos sexuales por temor o te ha forzado a tener relaciones sexuales?
      	<span class="options" ng-init="opt11 = true"><a class="opt-yes" ng-show="opt11" ng-click="aumentar(); opt11=false">Si</a> <a class="opt-no" ng-hide="opt11" ng-click="disminuir(); opt11=true">No</a></span></li>
      <li>Después de un episodio violento, él se muestra cariñoso y atento, te regala cosas y te promete que nunca más volverá a golpearte o insultarte y que "todo cambiará"
      	<span class="options" ng-init="opt12 = true"><a class="opt-yes" ng-show="opt12" ng-click="aumentar(); opt12=false">Si</a> <a class="opt-no" ng-hide="opt12" ng-click="disminuir(); opt12=true">No</a></span></li>
    </ul>
</div>

<div class="grid_12">
	<div ng-show="puntos == 0">
	  	<h2>Riesgo mínimo.</h2>
		<p>La primera manifestación de violencia tiende a ser muy sutil hasta convertirse lentamente en agresión.</p>
	</div>
	<div ng-show="puntos < 6 && puntos > 0">
	  	<h2>Riesgo Moderado</h2>
	  	<p>Seguidamente estos celos se transforman en insultos y burlas que bajan la autoestima de la persona agredida, haciéndola más
      vulnerable.  Lo anterior contribuye a que se incremente el miedo y normalmente la persona agredida se culpabipza de la situación en
      la que se encuentra.</p>
	</div>
	<div ng-show="puntos >= 6">
	  	<h2>Riesgo Alto</h2>
	  	<p>A continuación la violencia evoluciona a la agresión física e incluso agresión sexual y patrimonial. En este punto, la victima se
     encuentra en pleno estado de debiptamiento emocional y físico, sufre de depresión y aislamiento total.</p>
    <p>Finalmente, el perdón y la reconcipación cierran el ciclo de violencia, con la victima retomando la esperanza de que la persona
      agresora cambie.</p>
	</div>
</div>


<div class="grid_12">
	   	<a href="#/respuesta" class="btnvd btnbig">Obtener ayuda</a>
</div>
