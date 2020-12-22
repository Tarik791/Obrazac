<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
       table {
           
    border-collapse: collapse;

  }

  
  td, th{
    border-style: solid;

      }
      
  
  
   </style>
</head>
<body>
<center>

    <table>
    
        <tr>
            <th>Federacija Bosne i Hercegovine
                <br>
            Federalno ministarstvo finansija/financija 
                <br>
            Porezna uprava
            </th>
            <th>
            Obrazac JS3100
                <br>
            Prijava/Promjena/Odjava osiguranja
            </th>
            <th>
                Bar kod
            </th> 
        </tr>

        <th>Prvi dio-Podaci o obvezniku uplate doprinosa</th>
        <tbody id="data">
        <tr class="naslov">
        <form id="myForm" action="UserInfo.php" method="post">
            <td>
                1) JIB/JMB 
                <input style="color:blue;" type="number" name="brojfirme" >
            </td>
            <td>
                2) Naziv obvezniku uplate doprinosa: 
                <input style="color:blue;" type="text" name="nazivfirme" >
            </td>
            
            <td>
                3) Adresa obveznika uplate doprinosa:
                <input style="color:blue;" type="text" name="adresafirme" >
            </td>
             

            <td>
                4) Grad i poštanski broj:
                <input style="color:blue;" type="text" name="gradfirme" required>
                <input style="color:blue;" type="number" name="postanskibrojfirme" >
            </td>
             

            <td>
            5)  Šifra općine
        
            <input type="password" name="sifraopcine" >
            </td>
            
            
            <td>
            6) Vrsta prijave:
            <br>
            Prijava osiguranja:
            <input type="radio" name="gender" value="PO">
            <br>
            Odjava osiguranja:
            <input type="radio" name="gender" value="OO">
            <br>
            Promjena podataka o osiguranju: 
            <input type="radio" name="gender" value="POOS">
            </td>
            
        
            
            <td>
            <label>7) Telefon:</label>
            <input style="color:blue;" type="tel" name="telefonfirme" >
            <br>
            <label>8) E-mail:</label>
            <input style="color:blue;" type="email" name="emailfirme" >
            
            </td>
            
        </tr>
        <th>Drugi dio - Podaci o osiguraniku</th>

        <tr class="naslov">
            <td>
                1 JMB ili licni identifikacioni broj(za strance)
                <input style="color:blue;" type="number" name="licnibroj" >

            </td>
            <td>2 Prezime i ime osiguranika
            <input style="color:blue;" type="username" name="imeiprezimekorisnika">
            </td>
            <td>
                3 Datum rođenja
                <input style="color:blue;" type="date" name="datumrodjenjakorisnika">

            </td>
            
            <td>
                4 Spol 
                Ženski: <input type="radio" name="gender1" value="Muško" id="">
                Muški: <input type="radio" name="gender1" value="Žensko" id="">
            </td>
        
            <td>
                5 Adresa prebivalista 
                <input style="color:blue;" type="text" name="licnaadresa" id="">
            </td>
            <td>
                6 E-mail adresa
                <input style="color:blue;" type="email" name="licniemail" id="">
            </td>
            <td>

            7 Strucna sprema
            DR <input type="radio" name="gender2" value="DR"> MR <input type="radio" name="gender2" value="MR"> VSS <input type="radio" name="gender2" value="VSS"> VŠS <input type="radio" name="gender2" value="VŠS"> SSS <input type="radio" name="gender2" value="SSS"> NIŽA <input type="radio" name="gender2" value="NIŽA"> VKV <input type="radio" name="gender2" value="VKV"> KV <input type="radio" name="gender2" value="KV"> PK <input type="radio" name="gender2" value="PK"> NK <input type="radio" name="gender2" value="NK">
            
            
        </td>        
        

        </tr>
            <th>Treći dio – Podaci o osiguranju</th>
        <tr>
            <td>
            1 Dnevno radno  
            </td>
            <td>
                Sati: <input style="color:blue;" type="time" name="sati">
                <br>
                 Minuta: <input style="color:blue;" type="time" 
                    name="minute">
            </td>
              <!--
            <td>2 Stručna sprema koja se traži na radnom 
                      DR <input type="radio" name="gender3" value="DR"> MR <input type="radio" name="gender3" value="MR"> VSS <input type="radio" name="gender3" value="VSS"> VŠS <input type="radio" name="gender3" value="VŠS"> SSS <input type="radio" name="gender3" value="SSS"> NIŽA <input type="radio" name="gender3" value="NIŽA"> VKV <input type="radio" name="gender3" value="VKV"> KV <input type="radio" name="gender3" value="KV"> PK <input type="radio" name="gender3" value="PK"> NK <input type="radio" name="gender3" value="NK">
            
            
            </td>
            
            <td>
                3 Datum prijave/odjave/promjene osiguranja
                <input type="text" name="datumprijave">
            </td>
            -->
            </tr>
            
        </tr>

            
        <input type="submit" name="btn" id="sub" value="SEND">

        </tbody>
    </form>
    <span id="result"></span>

    </table>
</center>

<script src="script/jquery-1.8.1.min.js" type="text/javascript"></script>
<script src="script/my_script.js" type="text/javascript"></script>
</body>
</html>