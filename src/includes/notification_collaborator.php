  <style>
    #notification {
      display: none;
      position: fixed;
      z-index: 10;
      top: 0;
      right: 0;
      left: 0;
      background-color: #25d366;
      color: #ffffff;
      text-align: center;
      padding: 15px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      animation: slideIn 0.5s ease-out forwards;
      border-radius: 0% 100% 37% 63% / 68% 0% 100% 32%;
    }

    @keyframes slideIn {
      from {
        transform: translateY(-100%);
      }
      to {
        transform: translateY(0);
      }
    }

    @keyframes slideOut {
      from {
        transform: translateY(0);
      }
      to {
        transform: translateY(-100%);
      }
    }
  </style>


<div id="notification">
  <strong>Peña el arrastre</strong><br>
    <p class="p-2 px-5">Muchas gracias, pronto nos pondremos en contacto contigo</p>
</div>

<script>
  // Simula el comportamiento de mostrar y ocultar la notificación
  function showNotification() {
    var notification = document.getElementById('notification');
    notification.style.display = 'block';

    // Oculta la notificación después de 5 segundos
    setTimeout(function() {
      notification.style.animation = 'slideOut 0.5s ease-out forwards';
      setTimeout(function() {
        notification.style.display = 'none';
        notification.style.animation = '';
      }, 500);
    }, 5000);
  }

  // Llama a la función showNotification cuando la página carga
  window.onload = function() {
    showNotification();
  };
</script>
