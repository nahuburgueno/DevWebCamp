<main class="registro">
    <h2 class="registro__heading"><?php echo $titulo ?></h2>
    <p class="registro__descripcion">Elige tu plan</p>

    <div class="paquetes__grid">
        <div class="paquete">
            <h3 class="paquete__nombre">Pase gratis</h3>
            <ul class="paquete__lista">

                <li class="paquete__lista">Acceso Virtual o DevWebCamp</li>
                   
          

                <p class="paquete__precio">$0</p>

                <form action="/finalizar-registro/gratis" method="POST">
                    <input class="paquetes__submit" type="submit" value='Inscripción gratis'>
                </form>

            </ul>
        </div>

        <div class="paquete">
            <h3 class="paquete__nombre">Pase Presencial</h3>
            <ul class="paquete__lista">
                <li class="paquete__lista">Acceso presencial a DevWebCamp </li>
                <li class="paquete__lista">Pase por 2 días</li>
                <li class="paquete__lista">Acceso a talleres y conferencias</li>
                <li class="paquete__lista">Acceso a las grabaciones</li>
                <li class="paquete__lista">Remera del evento</li>
                <li class="paquete__lista">Comida y bebida</li>
            </ul>

                <p class="paquete__precio">$199</p>

                    <div id="smart-button-container">
                    <div style="text-align: center;">
                        <div id="paypal-button-container"></div>
                    </div>
                    </div>

        </div>

        <div class="paquete">
            <h3 class="paquete__nombre">Pase Virtual</h3>
            <ul class="paquete__lista">
                <li class="paquete__lista">Acceso virtual a DevWebCamp </li>
                <li class="paquete__lista">Pase por 2 días</li>
                <li class="paquete__lista">Acceso a talleres y conferencias</li>
                <li class="paquete__lista">Acceso a las grabaciones</li>
            </ul>
            <p class="paquete__precio">$49</p>
                  <div id="smart-button-container">
                    <div style="text-align: center;">
                        <div id="paypal-button-container-virtual"></div>
                    </div>
                  </div>
        </div>
    </div>
</main>

<!-- Reemplazar CLIENT_ID por tu client id proporcionado al crear la app desde el developer dashboard) -->
<script src="https://www.paypal.com/sdk/js?client-id=AWdcemED5vU33ORyUaN_YbZ9tFj2F3IQL-0g93w5UznV_CywO-Ux6EmQOm2h_pIV1Fxxv0gKjGvO-vZv&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>

<script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'blue',
          layout: 'vertical',
          label: 'pay',
        },
 
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"1","amount":{"currency_code":"USD","value":199}}]
          });
        },
 
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {

            const datos = new FormData();
            datos.append('paquete_id', orderData.purchase_units[0].description);
            datos.append('pago_id', orderData.purchase_units[0].payments.captures[0].id);

            fetch('/finalizar-registro/pagar',  {
                method: 'POST',
                body: datos
            }).then( respuesta => respuesta.json()).then(resultado => {
                
                if(resultado.resultado) {
                    actions.redirect('http://localhost:3000/finalizar-registro/conferencias');
                }
            })
                

            
          });
        },
 
        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');

      // Pase virutal
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'blue',
          layout: 'vertical',
          label: 'pay',
        },
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"2","amount":{"currency_code":"USD","value":49}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            const datos = new FormData();
            datos.append('paquete_id', orderData.purchase_units[0].description);
            datos.append('pago_id', orderData.purchase_units[0].payments.captures[0].id);

            fetch('/finalizar-registro/pagar',  {
                method: 'POST',
                body: datos
            }).then( respuesta => respuesta.json()).then(resultado => {
                
                if(resultado.resultado) {
                    actions.redirect('http://localhost:3000/finalizar-registro/conferencias');
                }
            })
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container-virtual');

    }
 
  initPayPalButton();
</script>