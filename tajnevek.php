
<div class="row"></div>
<h1>halfajok tájnevei</h1>
    <div class="col-md-6 col-12">
    <select class="custom-select" onchange="show(this)">
        <option value="">válassz egy halfajt..</option>

    </select>
    </div>
    <div class="col-md-6 col-12">
    <ul id="tajnevek"></ul>
    </div>
</div>

<script>
    getData('../server/fajok.php',renderOptions)

    function renderOptions(data){
        console.log(data)
        let str=''
        for(let obj of data){
            str+=` <option value="${obj.halid}">${obj.nev}</option>
        `
        }
        document.querySelector('select').innerHTML+=str
    }
    function show(domobj){
        let id=domobj.value
        console.log(id)
        getData('../server/tajnevek.php?id='+id,renderUI)
    }
    function renderUI(data){
        
        console.log(data)
        if(data.length==0)
        document.querySelector('#tajnevek').innerHTML='Nincs a nyílvántartásban tájnév'
        else{
            let str=''
            for(let obj of data)
            str+=` <li>${obj.tajnev}</li>
        `
                document.querySelector('#tajnevek').innerHTML+=str

        }

    }    
</script>