<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement</title>
    <style>
        body{
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
            color: white;
        }
        section{
            background-color: rgb(32, 31, 29);
            width: 50%;
            height: 50vh;
            margin-top: 150px;
        }
        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        tr,th{
            border: 1px solid white;
        }
        td{
            border: 1px solid white;
        }
        button{
            width: 150px;
            margin-top: 10px;
        }
        
    
    </style>
</head>

<body>
    
    <section class="b">

    <div class="main2">
        <table width="800" id="main2">
           <thead>
            <tr>
                <th>Nom d'investisseur</th>
                <th>Numero de telephone/compte airtel-money</th>
            </tr>
           </thead>
           <tbody>
            <!-- mes resultat seront afficher ici -->
           </tbody>
        </table>
    </div>
    <div class="formulaire" id="formulaire1">
        <form class="formulaire1">
            <div class="item">
                <label for="c1">Nom de l'investisseur: </label>
                <input type="text"name="c1" id="c1" >
            </div>
            <div class="item">
                <label for="c2">Numero/airtel-money: </label>
                <input type="text" name="c2" id="c2">
            </div>
            <button type="submit" class="btn">Depot</button>
        </form>
    </div>
</section>
    <script>
        
function myfonction(){
    const base2donnees=JSON.parse(localStorage.getItem('dv')) || [];
    affichescreen(base2donnees)
}
function affichescreen(base2donnees){
    const tb1=document.querySelector("#main2 tbody");
    tb1.innerHTML='';

    base2donnees.forEach((p, i)=>{
        const chainetableau= tb1.insertRow();
        chainetableau.insertCell().textContent=p.a;
        chainetableau.insertCell().textContent=p.p;
        
    })
     
}
function V(a,p){
    const base2donnees=JSON.parse(localStorage.getItem('dv')) || [];
    base2donnees.push({a,p})
    localStorage.setItem('dv' , JSON.stringify(base2donnees))
    myfonction()
}

const resultat=document.getElementById("formulaire1")
resultat.addEventListener('submit',(e)=>{
    e.preventDefault()
     const a1=document.getElementById("c1").value;
     const p1=document.getElementById("c2").value;
     V(a1, p1)
     
})
myfonction()



    </script>
</body>
</html>