<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depot</title>
</head>
<body>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
          }
      
          header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
          }
      
          main {
            padding: 10px;
          }
      
          .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
          }
      
          table {
            width: 100%;
            border-collapse: collapse;
          }
      
          th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
          }
      
          th {
            background-color: #f0f0f0;
          }
      
          input[type="text"], input[type="number"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
          }
      
          button {
            padding: 8px 15px;
            background-color: #111311;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
          }
    </style>
</head>
<body>
    <header>
        <marquee behavior="" direction=""><h2>PASSE AU DEPOT</h2></marquee>
    </header>
    <main>      
        <div class="contenair">
            <table id="TB">
                <h2><caption>DEPOSE VOTRE ARGENT</caption></h2>
                <thead>
                    <tr>
                        <th>Montant a deposer</th>
                        <th>Devise</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <button id="ajt">Passer au depot</button>
        </div>
        
        <div class="container" id="formulaire" style="display: none;">
            <form id="formulaire">
                <label for="a">Montant a deposer</label>
                <input type="number" id="w" name="w" required>
                <br>
                <label for="p">Devise</label>
                <input type="text" id="x" name="x" required>
                <br>
                <button type="submit">Ajouter</button>
            </form>
        </div>
    </main>

    <script>
        function myfonction(){
            const base2donnees=JSON.parse(localStorage.getItem('david')) || [];
            affichescreen(base2donnees)
        }
        function affichescreen(base2donnees){
            const tb1=document.querySelector("#TB tbody");
            tb1.innerHTML='';

            base2donnees.forEach((p,i)=>{
                const chainetableau= tb1.insertRow();
                chainetableau.insertCell().textContent=p.a;
                chainetableau.insertCell().textContent=p.p;
    
                
                const acte=chainetableau.insertCell();

                //modifier
                
            })
        }
        function V(a,p){
            const base2donnees=JSON.parse(localStorage.getItem('david')) || [];
            base2donnees.push({a,p})
            localStorage.setItem('david' , JSON.stringify(base2donnees))
            myfonction()
        }

        //evenement1
        const ajoutbtn1=document.getElementById("ajt");
        ajoutbtn1.addEventListener('click',()=>{
            document.getElementById("formulaire").style.display="block";
        })
        const resultat=document.getElementById("formulaire")
        resultat.addEventListener('submit',(e)=>{
            e.preventDefault()
             const a1=document.getElementById("w").value;
             const p1=document.getElementById("x").value;

             V(a1, p1)
             resultat.style.display="none"
        })
        myfonction()

    </script>
</body>
</html>
</body>
</html>