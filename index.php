<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body{
        font-family:sans-serif;
        font-size: 11pt;
        background-attachment:fixed;

      }
      table{
        width: 80%;
      }
      table, th,td{
        border: 1px solid black;
        border-collapse: collapse;
        opacity: 0.75;
      }

      th, td {
        padding:10px;
        text-align:center;
      }

      tr:nth-child(even){
        background-color: #e8e8e8;
      }
      tr:nth-child(odd){
        background-color:white;
      }
  </style>
</head>
<body>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="custom.js"></script>
    <center>

<div id="capture" style="padding: 10px;">
<form id="myForm" method="post" action="userInfo.php">

<div class="canvas_div_pdf">
    <table>

        <tr>
        
        <th colspan="3"> Federacija Bosne i Hercegovine
         <br> Federalno ministarstvo <br>
    finansija/financija Porezna uprava</th>
          <th colspan="3">Obrazac JS3100<br>Prijava/Promjena/Odjava osiguranja</th>
            <th colspan="2">Bar kod</th>  
        
        </tr>
        <tr>
            <td>1</td>
            <td>JIB/JMB</td>
            <td colspan="7"><input style="color:blue;" type="number" name="brojfirme" required></td></td>
          
        </tr>
        <tr>
            <td>2</td>
            <td>Naziv obveznika uplate doprinosa:</td>
            <td colspan="7"><input style="color:blue;" type="text" name="nazivfirme" required></td>
       
        </tr>
        <tr>
            <td>3</td>
            <td>Adresa obveznika uplate doprinosa:</td>
            <td colspan="7"><input style="color:blue;" type="text" name="adresafirme" required></td>
        </tr>
        <tr>
            <td>4</td>
            <td colspan="7">Grad i poštanski broj:
            <input style="color:blue;" type="text" name="gradfirme" >
             <input style="color:blue;" type="number" name="postanskibrojfirme" required></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Šifra opcine:</td>
            <td colspan="7"><input type="password" name="sifraopcine" required></td></td>
        </tr>
        <tr>
            <td>6</td>
            <td colspan="7">Vrsta prijave
            Prijava osiguranja:
            <input type="radio" name="gender" value="PO" >
            Odjava osiguranja:
                <input type="radio" name="gender" value="OO" >
            Promjena podataka o osiguranju: 
                <input type="radio" name="gender" value="POOS" ></td>
        </tr>
        <tr>
            <td>7</td>
            <td>Telefon:</td>
            <td colspan="7"><input style="color:blue;" type="tel" name="telefonfirme" required></td>
        </tr>
        <tr>
            <td>8</td>
            <td>Email:</td>
            <td colspan="7"><input style="color:blue;" type="email" name="emailfirme" required></td>
        </tr>
        <td colspan="7"><h2 align="center;">Drugi dio-podaci osiguranika</h2></td>
        <tr>
            <td>1</td>
            <td>JMB ili lični identifikacioni broj(za strance)</td>
            <td colspan="7"><input type="number" name="licnibroj" required></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Prezime i ime osiguranika:</td>
            <td colspan="7"><input type="username" name="imeiprezimekorisnika" required></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Djevojacko prezime:</td>
            <td colspan="7"><input type="text" name="djevojackoprezime" required></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Datum rođenja</td>
            <td colspan="7"><input type="date" name="datumrodjenjakorisnika" required></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Spol:</td>
            <td colspan="4"> Ženski: <input type="radio" name="gender1" value="Muško" id="" > </td>
          <td>Muški: <input type="radio" name="gender1" value="Žensko" id="" > </td>
        </tr>
        <tr>
            <td>6</td>
            <td>Adresa prebivališta:</td>
            <td colspan="7"><input style="color:blue;" type="text" name="licnaadresa" id="" required></td>
        </tr>
        <tr>
            <td>7</td>
            <td>Općina prebivališta:</td>
            <td colspan="7"><input style="color:blue;" type="text" name="opcinaprebivalista" id="" required ></td>
        </tr>
        <tr>
            <td>8</td>
            <td>Kontakt adresa-ulica i broj</td>
            <td colspan="7"><input type="text" name="kontaktadresa" required></td>
        </tr>
        <tr>
            <td>9</td>
            <td>Kontakt adresa - postanski broj i mjesto</td>
            <td colspan="4">poštanski broj: <input type="number" name="licnipostanskibroj" required></td>
            <td colspan="7">Mjesto:<input type="text" name="mjesto" ></td>
        </tr>
        <tr>
            <td>10</td>
            <td>E-mail adresa</td>
            <td colspan="7"><input style="color:blue;" type="email" name="licniemail" id="" required></td>
        </tr>
        <tr>
            <td>11</td>
            <td>Stručna sprema:</td>
            <td colspan="7">
                DR <input type="radio" name="gender2" value="DR"> MR <input type="radio" name="gender2" value="MR"> VSS <input type="radio" name="gender2" value="VSS"> VŠS <input type="radio" name="gender2" value="VŠS"> SSS <input type="radio" name="gender2" value="SSS"> NIŽA <input type="radio" name="gender2" value="NIŽA"> VKV <input type="radio" name="gender2" value="VKV"> KV <input type="radio" name="gender2" value="KV"> PK <input type="radio" name="gender2" value="PK"> NK <input type="radio" name="gender2" value="NK"></td>
        </tr>
        <td colspan="7"><h2 align="center;">Treći dio-podaci o osiguranju</h2></td>
        <tr>
            <td>1</td>
            <td>Dnevno radno vrijeme </td>
            <td colspan="7">Sati: <input style="color:blue;" type="time" name="sati" >Minuta: <input style="color:blue;" type="time" 
                        name="minute" required></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Osnov osiguranja</td>
            <td colspan="7"><input type="text" name="osnovosiguranja" required></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Zanimanje:</td>
            <td colspan="7"><input type="text" name="zanimanje" required></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Stručna sprema koja se traži na radnom mjestu
            </td>
            <td colspan="7">  DR <input type="radio" name="gender3" value="DR"> MR <input type="radio" name="gender3" value="MR"> VSS <input type="radio" name="gender3" value="VSS"> VŠS <input type="radio" name="gender3" value="VŠS"> SSS <input type="radio" name="gender3" value="SSS"> NIŽA <input type="radio" name="gender3" value="NIŽA"> VKV <input type="radio" name="gender3" value="VKV"> KV <input type="radio" name="gender3" value="KV"> PK <input type="radio" name="gender3" value="PK"> NK <input type="radio" name="gender3" value="NK"></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Datum prijave/odajve/promjene osiguranja</td>
            <td colspan="7"><input type="date" name="datumprijave" required></td>
        </tr>
        <tr>
            <td>6</td>
            <td>Osnov za uplatu doprinosa</td>
            <td colspan="7"><input type="text" name="osnovuplate" required></td>

        </tr>
        <tr>
            <td>7</td>
            <td>Staž za uvećanim trajanjem</td>
            <td>Šifra radnog mjesta
                <input type="password" name="sifraradnogmjesta" required>
            </td>
            <td colspan="7">Stepen uvećanja
            <input type="text" name="stepenuvecanja" required></td>
        </tr>
        <th colspan="7"><h2>Cetvrti dio - potvrda i prijem</h2></th>
        <tr>
        
        <th colspan="2"> Ovjera predstavnika obveznika uplate doprinosa<br>
    finansija/financija Porezna uprava</th>
          <th colspan="5">Ovjera prijema u poreznoj upravi</th>
          
        </tr>
        <td colspan="3">Potpis podnosioca prijave:
        <input type="text" name="potpispodnosioca" ></td>
        <td colspan="3">Datum: <input type="date" name="datumpodnosioca" required></td>
        <td>Ime i prezime službenika Porezne uprave:
            <input type="text" name="imeiprezimesluzbenikaporezneuprave" required>
        </td>

        </tr>
        <tr>
        <td colspan="3">Ime i prezime lica koje je popunilo prijavu: <input type="text" name="imeiprezimelicakojejepopuniloprijavu" required></td>
        <td colspan="3">Potpis lica koje je popunilo prijavu
            <input type="text" name="potpislicakojejepopuniloprijavu" required>
        </td>
        <td>Potpis službenika Porezne prijave:
            <input type="text" name="potpissluzbenikaporezneprijave" required>
        </td>
        </tr>
        <tr>
            <td colspan="3"><b>Odgovornost lica koje je popunilo prijavu: Izjavljujem da saam pregledao/la ou prijavu i da su uneseni podaci, po mom najboljem znanju i vjerovanju, vjerodostojni, tacni i potpuni</b></td>
            <td></td>
            <td colspan="3">
                Datum prijema prijave:
                <input type="date" name="datumprijemaprijave" required>
            </td>
        </tr>
        <tr>
            <td><input type="radio" name="" id="" ></td>
        </tr>
    </table>

    <button onclick="getPDF()" id="sub">save</button>
    </form>
    </div>
</center>
</div>
</body>
<script>

html2canvas(document.querySelector("#capture")).then(canvas => {
    document.body.appendChild(canvas)
});
function getPDF(){

var HTML_Width = $(".canvas_div_pdf").width();
var HTML_Height = $(".canvas_div_pdf").height();
var top_left_margin = 15;
var PDF_Width = HTML_Width+(top_left_margin*2);
var PDF_Height = (PDF_Width*1.5)+(top_left_margin*2);
var canvas_image_width = HTML_Width;
var canvas_image_height = HTML_Height;

var totalPDFPages = Math.ceil(HTML_Height/PDF_Height)-1;


html2canvas($(".canvas_div_pdf")[0],{allowTaint:true}).then(function(canvas) {
  canvas.getContext('2d');
  
  console.log(canvas.height+"  "+canvas.width);
  
  
  var imgData = canvas.toDataURL("image/jpeg", 1.0);
  var pdf = new jsPDF('p', 'pt',  [PDF_Width, PDF_Height]);
    pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin,canvas_image_width,canvas_image_height);
  
  
  for (var i = 1; i <= totalPDFPages; i++) { 
    pdf.addPage(PDF_Width, PDF_Height);
    pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
  }
  
    pdf.save("HTML-Document.pdf");
    });
};
</script>
</html>
