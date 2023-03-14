<div class="row">
    <div class="col-md-6 col-12">
    <h2>védett fajok statisztikája</h2>
    <table class="table table-striped">
    <thead class="thead-dark">
        <tr>
        <th>Előfordulás</th>
     <th> Fajták száma  </th>
          </tr>
    </thead>
    <tbody id=vedett></tbody>
    
</table>

    </div>
    <div class="col-md-6 col-12">

    <h2>nem védett fajok statisztikája</h2>
    <table class="table table-striped">
    <thead class="thead-dark">
        <tr>
        <th>Előfordulás</th>
     <th> Fajták száma  </th>
          </tr>
    </thead>
    <tbody id=nemvedett></tbody>
</table>

    </div>
</div>
<script>
    
    getData('../server/statisztika.php',renderVedett)
    getData('../server/stnemvedett.php',renderNemVedett)


    function renderVedett(data){
        console.log(data)
        let str=''
        for(let obj of data){
            str+=`
            <tr>
    <td>${leiras (obj.gyakorisag)}</td>
    <td>${obj.nr}</td>
            </tr>
            `
        }
        document.getElementById('vedett').innerHTML=str
    }
    function renderNemVedett(data){
        console.log(data)
        let str=''
        for(let obj of data){
            str+=`
            <tr>
    <td>${leiras (obj.gyakorisag)}</td>
    <td>${obj.nr}</td>
            </tr>
            `
        }
        document.getElementById('nemvedett').innerHTML=str
    }

    function leiras(str){
        if(str=='A')
        return 'gyakori'
      else  if(str=='B')
        return 'közönséges'
    else    if(str=='C')
        return 'ritka'

        else return ''
    }
</script>
