<h1>védett fajok</h1>
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
        <th>Név</th>
        <th>Feljegyzés</th>
        <th>Gyakoriság</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

<script src="getData.js"></script>

<script>
  getData('../server/vedett.php',rendertbl)
  
  function rendertbl(data){
    console.log(data)
    let strtbl=""
    for(let obj of data){
    let gyakorisagnev
    if(obj.gyakorisag=='A')
        gyakorisagnev='gyakori'
    if(obj.gyakorisag=='B')
        gyakorisagnev='közönséges'
    if(obj.gyakorisag=='C')
        gyakorisagnev='ritka'
        strtbl+= `
        <tr>
        <td>${obj.nev}</td>
        <td>${obj.feljegy}</td>
        <td>${gyakorisagnev}</td>
        
        </tr>
        `
    }
    document.querySelector('tbody').innerHTML=strtbl
  }
</script>