<template>

	<!-- solo puede haber un elemento raiz -->
	<div class="">
		
		<h1>Mi componente</h1>
		<p>Cosas a tener en cuenta:</p>

			<ul>
				<li>El componente está formado por las secciones: template y script</li>
				<li>Además de las secciones anteriores podemos incorporar una más:</li>
				<li>El template debe tener un único elemento raíz</li>
				<li>En la sección script debemos exportar las propiedades y métodos que definamos
				utilizando las palrabas reservadas expor default</li>
				<li>No podemos utilizar código PHP o la sintaxis de las plantilaas de BLADE en el template.</li>
			</ul>
	

	<div class="row">
		<div class="col-sm-2">

			<h3>Password</h3>

			<div class="input-group">
				<input class="form-control"  type="password" name="pass"/>

				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-lock"></i></span>
					
				</div>
			</div>
			

		</div>
		

	</div>

	</div>

</template>

<script>
	export default {
        mounted(){
            console.log('mi compoente se ha montado.')
        }
    }
</script>