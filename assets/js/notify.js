document.addEventListener('DOMContentLoaded', function () {
  if (Notification.permission !== "granted")
    Notification.requestPermission();
});

function notifyMe(lol) {
var tem=lol;
var test=true;
  if (!Notification) {
    alert('Notifiche desktop non disponibili su questo browser,aggiornalo.'); 
    return;
  }

 if (Notification.permission !== "granted")
    Notification.requestPermission();
  else {
    var notification = new Notification('Notifica da myOrto', {
      icon: 'http://www.iconj.com/ico/a/d/adbwmdihrp.ico',
      body: "temperatura="+tem,   //    body: "Ciao! Benvenuto su myOrto", 
    });

    notification.onclick = function () {
      window.open("http://project0101.altervista.org/profiloUtente.php");      
    };

  }

 

}