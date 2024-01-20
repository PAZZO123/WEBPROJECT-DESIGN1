<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        #full {
            width: 100%;
            min-height: 100vh;
            background-color: #fff;
        }

        .top {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .top img {
            width: 50px;
            height: 50px;
        }

        .top input {
            width: 70%;
            max-width: 300px;
            height: 35px;
            border-radius: 10px;
            color: blue;
            margin-top: 10px;
        }

        ::placeholder {
            color: blue;
        }

        i {
            color: blue;
            position: relative;
            cursor: pointer;
        }

        .details {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .details>div {
            width: 100%;
            max-width: 300px;
            background-color: #fff;
            margin: 10px;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .details img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            cursor: pointer;
        }

        #footer {
            display: flex;
            justify-content: space-around;
            background-color: #818181;
            padding: 20px;
            color: #fff;
        }

        .lef,
        .centere,
        .right {
            text-align: center;
        }

        .right img {
            width: 20px;
            height: 20px;
            border-radius: 100%;
        }

        div button {
            background-color: blue;
            color: #fff;
            border: none;
            padding: 8px 15px;
            margin-top: 10px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .details>div {
                width: 100%;
            }

            .top input {
                width: 100%;
            }
        }
    </style>
    <script>
        function performSearch() {
            var searchTerm = document.getElementById('searchBox').value.toLowerCase();
            var allDetails = document.querySelectorAll('.details > div');
            var found = false;
            allDetails.forEach(function (detail) {
                var hotelName = detail.querySelector('b').innerText.toLowerCase();

                // Check if the hotel name contains the search term
                if (hotelName.includes(searchTerm)) {
                    detail.style.display = 'block'; // Show the element
                    found = true;
                } else {
                    detail.style.display = 'none'; // Hide the element
                }
            });
        }
    </script>
</head>
<body>
<div id="full">
        <div class="top">
            <img src="d.jpg" alt="" width="50px" height="50px"><b>GET LODGES AND ACCOMMODATIONS EASILY</b><br><b>ESAC</b>
           <center><input type="search" placeholder="search place" name="" id="searchBox"><i class="fa fa-search"onclick="performSearch()"></i></center> 
        </div>
        <div class="first details">
            <div class="left" id="lemigo">
                <img onclick='Lemigo()' id="lemigo-img" src="lemigo.jpg" alt=""><br>
                <b>LEMIGO Hotel Kicukiro-KIgali</b><br>
                <b> price $78 per night</b><br>
                <b>Tel:0788254412/0733789111</b><br>
               <b>For more info<a href="">visit here</a>
               </b> 
               <div id="lemigo-details"></div>
            </div>
            <div class="center" id="marriot">
                <img onclick="L1migo()" id="marriot-img" src="marriot.jpg" alt=""><br>
                <b>KIGALI-MARRIOT Hotel NYARUGENGE</b><br>
                 <b>Include nice bedrooms and swimming poor</b><br>
                <b>price $56 per night</b><br>
                <b>Tel:0788254412/0733789111</b><br>
                <b>For more info<a href="">visit here</a>
                    <div id="marriot-details"></div>
                </div>
                <div class="rigt" id="hill">
                    <img onclick="L2migo()" id="hill-img" src="hill view.jpg" alt=""><br>
                    <b>HILL_VIEW Hotel RUBAVU-GISENYI</b><br>
                     <b>Include nice bedrooms and swimming poor</b><br>
                    <b>price $106 per night</b><br>
                    <b>Tel:0788254412/0733789111</b><br>
                    <b>For more info<a href="">visit here</a>
                        <div id="hill-details"></div>
                    </div>
        </div>
        <div class="second details">
            <div class="left" id="fatima">
                <img onclick="L3migo()" id="fatima-img" src="fatima.jpg" alt=""><br>
                <b>FATIMA Hotel Kinigi-MUSANZE</b><br>
                <b> price $709 per night</b><br>
                <b>Tel:0788254412/0733789111</b><br>
               <b>For more info<a href="">visit here</a>
               </b> 
               <div id="fatima-details"></div>
            </div>
            <div class="center" id="dove">
                <img onclick="L4migo()" id="dove-img" src="dove.jpg" alt=""><br>
                <b>KIGALI-DOVE Hotel GISOZI-GASABO</b><br>
                 <b>Include nice bedrooms and swimming poor</b><br>
                <b>price $46 per night</b><br>
                <b>Tel:0788254412/0733789111</b><br>
                <b>For more info<a href="">visit here</a>
                    <div id="dove-details"></div>
                </div>
                <div class="rigt" id="galileo">
                    <img onclick="L5migo()" id="galileo-img" src="galileo.jpg" alt=""><br>
                    <b>GALILEO Hotel RUKALI_HUYE</b><br>
                     <b>Include nice bedrooms and swimming poor</b><br>
                    <b>price $70 per night</b><br>
                    <b>Tel:0788254412/0733789111</b><br>
                    <b>For more info<a href="">visit here</a>
                        <div id="galileo-details"></div>
                    </div>
        </div>
       
        <div class="third details">
            <div class="left">
                <img src="kanombe.jpg" alt=""><br>
                <b>HOUSE LOCATED AT Kanombe_KIGALI</b><br>
                <b> price $400 per month</b><br>
                <b>Include 3 bedrooms and swimming poor</b><br>
                <b>Tel:0788254412/0733789111</b><br>
               <b>For more info<a href="">visit here</a>
               </b> 
            </div>
            <div class="center">
                <img src="images (2).jpg" alt=""><br>
                <b>HOUSE LOCATED AT GISOZI-GASABO</b><br>
                 <b>Include 3 bedrooms and KICHEN</b><br>
                <b>price $350 per month</b><br>
                <b>Tel:0788254412/0733789111</b><br>
                <b>For more info<a href="">visit here</a>

                </div>
                <div class="rigt">
                    <img src="gisenyi.jpg" alt=""><br>
                    <b>HOUSE LOCATED IN GISENYI_RUBAVU</b><br>
                     <b>Include 4 bedrooms and swimming poor</b><br>
                    <b>price $700 per month</b><br>
                    <b>Tel:0788254412/0733789111</b><br>
                    <b>For more info<a href="">visit here</a>
    
                    </div>
        </div>
        <div class="fourth details">
            <div class="left">
                <img src="gisoz.jpg" alt=""><br>
                <b>HOUSE LOCATED AT NYABUGOGO GASABO_KIGALI</b><br>
                <b> price $600 per month</b><br>
                <b>Include 9 bedrooms and swimming poor</b><br>
                <b>Tel:0788254412/0733789111</b><br>
               <b>For more info<a href="">visit here</a>
               </b> 
            </div>
            <div class="center">
                <img src="rwamagana.jpg" alt=""><br>
                <b>HOUSE LOCATED AT KARENGE-RWAMAGANA</b><br>
                 <b>Include 3 bedrooms and KICHEN</b><br>
                <b>price $150 per month</b><br>
                <b>Tel:0788254412/0733789111</b><br>
                <b>For more info<a href="">visit here</a>

                </div>
                <div class="rigt">
                    <img src="kinamba.jpg" alt=""><br>
                    <b>HOUSE LOCATED IN MUHIMA_GASABO</b><br>
                     <b>Include 10 bedrooms and swimming poor</b><br>
                    <b>price $500 per month</b><br>
                    <b>Tel:0788254412/0733789111</b><br>
                    <b>For more info<a href="">visit here</a>
    
                    </div>
        </div>
        <div class="sixth details">
            <div class="left">
                <img src="kicukiro.jpg" alt=""><br>
                <b>HOUSE LOCATED rwandex KICUKIRO_KIGALI</b><br>
                <b> price $700 per month</b><br>
                <b>Include 9 bedrooms and swimming poor</b><br>
                <b>Tel:0788254412/0733789111</b><br>
               <b>For more info<a href="">visit here</a>
               </b> 
            </div>
            <div class="center">
                <img src="kagugu.jpg" alt=""><br>
                <b>HOUSE LOCATED AT KAGUGU-GASABO</b><br>
                 <b>Include 4 bedrooms and KICHEN</b><br>
                <b>price $350 per month</b><br>
                <b>Tel:0788254412/0733789111</b><br>
                <b>For more info<a href="">visit here</a>

                </div>
                <div class="rigt">
                    <img src="nyarugenge.jpg" alt=""><br>
                    <b>HOUSE LOCATED IN KIYOVU_NYARUGENGE</b><br>
                     <b>Include 10 bedrooms and swimming poor</b><br>
                    <b>price $1210 per month</b><br>
                    <b>Tel:0788254412/0733789111</b><br>
                    <b>For more info<a href="">visit here</a>
    
                    </div>
        </div>
        <div class="fifth details">
            <div class="left" id="kigali">
                <img onclick="L6migo()" id="kigali-img" src="KIGALI.jpg" alt=""><br>
                <b>KIGALI SELENA HOTEL  NYARUGEGE_KIGALI</b><br>
                <b> price $300 per NIGHT</b><br>
                <b>Include nice bedrooms and swimming poors</b><br>
                <b>Tel:0788254412/0733789111</b><br>
               <b>For more info<a href="">visit here</a>
               </b> 
               <div id="kigali-details"></div>
            </div>
            <div class="center">
                <img src="sonatube.jpg" alt=""><br>
                <b>HOUSE LOCATED AT SONATUBE-KICUKIRO</b><br>
                 <b>Include 4 bedrooms and KICHEN</b><br>
                <b>price $450 per month</b><br>
                <b>Tel:0788254412/0733789111</b><br>
                <b>For more info<a href="">visit here</a>

                </div>
                <div class="rigt">
                    <img src="nyamirambo.jpg" alt=""><br>
                    <b>HOUSE LOCATED IN NYAMIRAMBO_NYARUGENGE</b><br>
                     <b>Include 4 bedrooms and swimming poor</b><br>
                    <b>price $421 per month</b><br>
                    <b>Tel:0788254412/0733789111</b><br>
                    <b>For more info<a href="">visit here</a>
    
                    </div>
        </div>
        <div id="footer" display="flex">

            <div class="lef">
                <h3><b>GET IN TOUCH</b></h3>
                <b>phone +250788884407</b><br>
                <b>Location:KIGALI-GISOZI</b><br>
                <em> Email: stayesac@gmail.com</em><br>
                <i class="fa fa-whatsapp">Whatsapp:+250788484407</i>
                
            </div>
            <div class="centere">
                <h3><strong>VISIT OUR WEBSITE</strong></h3>
                <a href=""><i class="fa fa-facebook"></i></a>Facebook:Accomogate official</i><br>
                <a href=""><i class="fa fa-instagram"></i></a>Instragram:Easy Stay Access</i><br>
                <a href=""><i class="fa fa-linkedin"></i></a>Linkedin:Easy Stay Access</i><br>
                <a href=""><i class="fa fa-twitter"></i></a>twitter:ESAC Rwanda</i>
                
            </div>
            <div class="right">
                <h3><b><strong>Easy Stay Access Company ESAC</strong></b></h3>
                <img height="20px" src="d.jpg" alt="">
                
            </div>
        </div>
    </div>
    <script>
        let Sections =[];
        let Savehouse=[];

        function Lemigo()
        {
  
        const newSection=document.createElement('div');
        newSection.innerHTML=
        `<div>
            <button>BOOK</button>
            <button>Like</button>
            <button>Dislike</button>
            <button>Save to dashboard</button
            </div>`
        document.getElementById('lemigo-details').appendChild(newSection);
        Sections.push(newSection);
        document.getElementById('lemigo ').style.width='60%';
            document.getElementById('lemigo').style.heigth='50%';
            document.getElementById('lemigo-img').style.width='100%';
            document.getElementById('lemigo-img').style.height='350px';
      

        }
        function L1migo()
        {
  
        const newSection=document.createElement('div');
        newSection.innerHTML=
        `<div>
            <button>BOOK</button>
            <button>Like</button>
            <button>Dislike</button>
            <button>Save to dashboard</button
            </div>`
        document.getElementById('marriot-details').appendChild(newSection);
        Sections.push(newSection);
        document.getElementById('marriot').style.width='60%';
            document.getElementById('marriot').style.heigth='50%';
            docsument.getElementById('marriot-img').style.width='100%';
            document.getElementById('marriot-img').style.height='350px';
       

        }
        function L2migo()
        {
  
        const newSection=document.createElement('div');
        newSection.innerHTML=
        `<div>
            <button>BOOK</button>
            <button>Like</button>
            <button>Dislike</button>
            <button>Save to dashboard</button
            </div>`
        document.getElementById('hill-details').appendChild(newSection);
        Sections.push(newSection);
        document.getElementById('hill').style.width='60%';
            document.getElementById('hill').style.heigth='50%';
            document.getElementById('hill-img').style.width='1000px';
            document.getElementById('hill-img').style.height='350px';
        
        }
        function L3migo()
        {
  
        const newSection=document.createElement('div');
        newSection.innerHTML=
        `<div>
            <button>BOOK</button>
            <button>Like</button>
            <button>Dislike</button>
            <button>Save to dashboard</button
            </div>`
        document.getElementById('fatima-details').appendChild(newSection);
        Sections.push(newSection);
        document.getElementById('fatima').style.width='60%';
            document.getElementById('fatima').style.heigth='50%';
            document.getElementById('fatima-img').style.width='100%';
            document.getElementById('fatima-img').style.height='350px';
       

        }
        function L4migo()
        {
  
        const newSection=document.createElement('div');
        newSection.innerHTML=
        `<div>
            <button>BOOK</button>
            <button>Like</button>
            <button>Dislike</button>
            <button>Save to dashboard</button
            </div>`
        document.getElementById('dove-details').appendChild(newSection);
        Sections.push(newSection);
        document.getElementById('dove').style.width='60%';
            document.getElementById('dove').style.heigth='50%';
            document.getElementById('dove-img').style.width='100%';
            document.getElementById('dove-img').style.height='350px';
       

        }
        function L5migo()
        {
  
        const newSection=document.createElement('div');
        newSection.innerHTML=
        `<div>
            <button>BOOK</button>
            <button>Like</button>
            <button>Dislike</button>
            <button>Save to dashboard</button
            </div>`
        document.getElementById('galileo-details').appendChild(newSection);
        Sections.push(newSection);
        document.getElementById('galileo').style.width='60%';
            document.getElementById('galileo').style.heigth='50%';
            document.getElementById('galileo-img ').style.width='700px';
            document.getElementById('galileo-img').style.height='350px';
       

        }
        function Book()
        {
            prompt("Please enter deadline");
        }
        function L6migo()
        {
  
        const newSection=document.createElement('div');
        for(var i=0;i<=1;i++)
        {
            if(i===0){
        newSection.innerHTML=
        `<div>
            <button onclick="Book()">BOOK</button>
            <button>Like</button>
            <button>Dislike</button>
            <button>Save to dashboard</button
            </div>`
        document.getElementById('kigali-details').appendChild(newSection);
        Sections.push(newSection);
            }
            else{
                console.log("finish");
            }
        }
        document.getElementById('kigali').style.width='60%';
            document.getElementById('kigali').style.heigth='50%';
            document.getElementById('kigali-img').style.width='100%';
            document.getElementById('kigali-img').style.height='350px';
        

        }
    </script>

    <?php
    $name='pazzo';
    echo"hello ".$name." thank you";?>
    <?php
$ages['Peter'] = "32";
$ages['Quagmire'] = "30";
$ages['Joe'] = "21";
echo "i am " . $ages['Joe'] . " years old.";
?> 

</body>
</html>