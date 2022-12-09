
<?php
  var_dump($GLOBALS['_GET']);
?>

<form>
  <input type="text" name="zebre"/>
  <button>Valider</button>
</form>

<script>
  document.querySelector('button').addEventListener('click', (event)=>{
    event.preventDefault();
    console.log('hello');
    let p =document.createElement("p");
    p.textContent='test'
    document.body.appendChild(p);
  })
</script>