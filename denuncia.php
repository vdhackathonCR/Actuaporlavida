<div class="grid_6">
	<h2>Haz la denuncia solidaria</h2>
	<p>La primera manifestación de violencia tiende a ser muy sutil hasta convertirse lentamente en agresión. </p>
	<div id="name" ng-init="gracias=false" ng-hide="gracias">
	 	<p class="notable mchico">1. Tipo de violencia observada</p>
	 	<select name="" id="">
	 		<option value="">Psicológica</option>
	 		<option value="">Física</option>
	 		<option value="">A niños</option>
	 		<option value="">A adultos mayores</option>
	 		<option value="">No identificada</option>
	 	</select>
	 	<p class="notable mchico">2. ¿Dónde se esta produciendo la violencia?</p>
	 	<div class="mapa">
	 		mapa pequeno
	 	</div>
	 	<p class="notable mchico">3. ¿Cómo deseas ayudar?</p>
	 	<select name="" id="">
	 		<option value="">Envío de información (correo).</option>
	 		<option value="">Envío de personal de acuerdo al tipo de violencia.</option>
	 		<option value="">Alertar a las autoridades.</option>
	 	</select>
	 	<p>Correo a donde enviar la información: <input type="text" name="" value="" id=""/></p>
	 	<p class="notable mchico">4. Aportar más información sobre el caso</p>
	 	<textarea name="Name" rows="8" cols="40"></textarea>
	 	<p class="info">Recuerda la información que nos brinda es de caracter confidencial. Además tu identidad permanecerá sin revelar. (No guardamos accesos, visitas, cookies personales)</p>	  
 		<p><a href="" class="btnvd" ng-click="gracias=true">Enviar</a></p>
	</div>
	<div ng-show="gracias">
	  <h3>Gracias, su aporte ha sido agregado</h3>
	 	<p class="info">Recuerda la información que nos brinda es de caracter confidencial. Además tu identidad permanecerá sin revelar. (No guardamos accesos, visitas, cookies personales)</p>	  
	</div>
</div>
<div class="grid_6">
	<div class="centro"><img src="imgs/nina.png" alt="" /></div>
  <h3>Algunos indicadores que pueden evidenciar violencia doméstica</h3>
  <ul class="bluebox">
    <li>Temen expresar su opinión.</li>
    <li>Son personas nerviosas.</li>
    <li>Niegan que haya violencia contra ellos.</li>
    <li>Posee indicadores físicos como moretones, arañazos o quemaduras.</li>
    <li>Presenta agresividad sin razón.</li>
  </ul>
	<p>Estás interesado en conocer más sobre el tema, ingresa a nuestro portal de información.</p>
	<p><a href="app.php#respuesta/" class="btnvd">Mas información</a></p>
</div>
