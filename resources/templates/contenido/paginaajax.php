<script type="text/javascript">
const url = '/contenido_json.php'
const http = new XMLHttpRequest()

http.open("GET", url)
http.setRequestHeader('X_REQUESTED_WITH','xmlhttprequest')
http.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
        var resultado = JSON.parse(this.responseText)
        console.log(resultado.prueba)
        span = document.getElementById('datos')
        span.innerText = resultado.prueba
    }
}
http.send()
</script>

<h1>Pag AJAX</h1>
<div class="">
  Página que realiza una petcición AJAX

  <p>El servidor dice:  </p>
  <h3><span id="datos"></span></h3>
</div>
