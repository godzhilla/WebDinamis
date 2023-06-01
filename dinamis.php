<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body .overlay {
			/* width: 100%; height: 850px; */
			background: 
				linear-gradient(
				  rgba(255, 255, 255, 0.597),
				  rgba(255, 255, 255, 0.597)
				),
			    url(Images/pantai.jpeg) no-repeat;
			background-size: cover;
      background-attachment: fixed;
        }

        img{
            width: 10rem;
        }

        h1{
            color: #000000;
            font-size: 40px;
        }

        p{
            color: #000000;
            font-size: 20px;  
            margin-top: 2rem;  
        }

        .melayang {
          background-color: #ffffff;
        }

        iframe {
          padding-top: 2rem;
        }

        .tb { border-collapse: collapse; }
        .tb th, .tb td { padding: 5px; border: solid 1px #777; }
        .tb th { background-color: lightblue; }

    </style>      
</head>
<body></body>
<div class="melayang" style="height: 7rem; margin-top: 0rem;">
        <div class="row" style="margin: 4rem;">
            <div class="col" style="font-size: 40px; color: #000000;">OFFSET YOUR <br> PLASTIC FOOTPRINT</div>
        </div>
        <div class="row" style="margin: 4rem;">
            <div class="col" style="margin-right: 4rem;">
                <h1 style="color: #000000;">ALIGN</h1> <br>
                <p id="your_paragraph" style="color: #000000;">66% of people (73% of Millennials) are willing to pay more for products and services from companies committed to positive social and environmental impact.</p>
                <a href="dinamis.php?page=learn" class="btn" style="background-color: #88888884; color: #000000; border-radius: 50px; width: 10rem; height: 3rem; margin-top: 2rem;">LEARN MORE</a>
            </div>
            <div class="col" style="margin-right: 4rem;">
                <h1 style="color: #000000;">KICKSTART</h1> <br>
                <p style="color: #000000;">Ocean One are a turnkey solution to begin the journey of reducing your business's environmental footprint or going plastic neutral.</p>
                <a href="dinamis.php?page=action" class="btn" style="background-color: #88888884; color: #000000; border-radius: 50px; width: 10rem; height: 3rem; margin-top: 2rem;">START ACTION</a>
            </div>
            <div class="col">
                <h1 style="color: #000000;">AMPLIFY</h1> <br>
                <p style="color: #000000;">Is your actions already making strides in its commitment to sustainability? Measure your action success using IMPACT</p>
                <a href="dinamis.php?page=see" class="btn" style="background-color: #88888884; color: #000000; border-radius: 50px; width: 10rem; height: 3rem; margin-top: 4rem;">SEE HOW</a>
            </div>
        </div>
    </div>
</div>

<div class="overlay">
    <div class="container text-center py-5" style="margin-top: 40rem; border-radius: 0px;">
        <div class="melayang" style="height: fit-content;">
            <div class="row text-center" style="margin-top: 10rem; align-items: center; padding: 1cm;">
                <?php 
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
            
                    switch ($page) {
                        case 'learn':
                            include "halaman/home.php";
                            break;
                        case 'action':
                            include "halaman/tentang.php";
                            break;
                        case 'see':
                            include "halaman/tutorial.php";
                            break;			
                        default:
                            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                            break;
                    }
                } else {
                    echo "<center><h3>A systems change is needed to address the cause of plastic pollution. It combines reducing the most problematic and unnecessary plastic uses with three market shifts – Reuse, Recycle, and Reorient and Diversify – and actions to deal with the plastic pollution legacy.</h3></center>";
                }
 
	            ?>
            </div>
        </div>
    </div>
    <div class="container text-center py-5" style="margin-top: 5rem; border-radius: 0px;">
        <div class="melayang" style="height: fit-content;">
            <div class="row text-center" style="margin-top: 10rem; align-items: center; padding: 1cm;">
                <h2>Plastic Waste Inputs From Land Into The Ocean</h2>
                            <h2></h2>
                            <h2></h2>
                            <table class="tb" style="width:100%;">
                                <tr>
                                    <th>No</th>
                                    <th>Country</th>
                                    <th>Amounts /ton</th>
                                </tr>
                            
                            <?php 
                                include'oceanone.php';
                                $sampah = mysqli_query($conn, "select * from sampah");
                                $no=1;
                                foreach ($sampah as $value) {
                                        echo"
                                    <tr>
                                        <td>$no</td>
                                        <td>".$value['Country']."</td>
                                        <td>".$value['Amounts']."</td>
                                    </tr>
                                    ";
                                    $no++;
                                }
                            ?>
                            </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>