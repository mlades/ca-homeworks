<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спорт за развој</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pages.css">
    <link rel="stylesheet" href="css/menu.css">

</head>

<body>

    <?php $page = "takt";
    include "./menu.php" ?>
    <div class="container">
        <div class="row" style="height: 58vh;">
            <div class="col-md-12 col-sm-12 head_image partnerships_image">
                <span class="l1"></span>
                <span class="l2"></span>
                <span class="l3"></span>
            </div>
        </div>


        <div class="row context align-items-center p-5">
            <div class="col-md-12 col-sm-12">
                <div>
                    <h1>ЛОКАЛНИ ПАРТНЕРСТВА И ОРГАНИЗАЦИИ</h1>
                    <p class="pt-3 text-justify">Соработката со локалните партнерства и организации е клучен дел од работењето во контекстот на спорт за развој. Креирањето на мрежа на солидарност и соработка се неопходни за вклучување на сите важни актери од полето на спортот. Исто така, соработката значи и поттик за спортскиот сектор во локалните заедници да си помогаат едни со други. Локалните партнерства се воглавно локални партнерски мрежи во кои членуваат: општината, секторите за спорт и образование, училиштата, спортските клубови и организации, младинските организации, организации кои работат со социјално исклучени како и одредени локални установи. Во нашата земја до сега постојат две локални партнерства за спорт за развој во Крива Паланка и во Карпош.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card-body text-center border border-primary rounded" type="button" data-toggle="collapse" data-target="#collapseHome" aria-expanded="false" aria-controls="collapseHome">
                <div class=" no_padding">
                    <img class="img-fluid mx-auto fix_height " src="images/karposh.png">
                    <button style="--delay: 2.2s;" class="btn-rounded btn-rounded--black"></button>
                </div>
            </div>
            <div class="card-body text-center border border-primary rounded" type="button" data-toggle="collapse" data-target="#collapseResume" aria-expanded="false" aria-controls="collapseResume">
                <div class=" no_padding">
                    <img class="img-fluid mx-auto fix_height" src="images/k_palanka.png">
                    <button style="--delay: 2.2s;" class="btn-rounded btn-rounded--black"></button>
                </div>
            </div>

        </div>
        <div class="row" id="myGroup">
            <div class="collapse" id="collapseHome" aria-labelledby="collapseHome" data-parent="#myGroup">
                <div class="text-white p-4 border border-primary rounded">                  
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus reprehenderit blanditiis corporis excepturi vel, optio in quo dolorum quisquam odio ab sequi eum quod alias. Ad accusamus laudantium quos nesciunt.</p>
                </div>               
            </div>

            <div class=collapse " id="collapseResume" aria-labelledby="collapseResume" data-parent="#myGroup">
                <div class="text-white p-4 border border-primary rounded">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus reprehenderit blanditiis corporis excepturi vel, optio in quo dolorum quisquam odio ab sequi eum quod alias. Ad accusamus laudantium quos nesciunt.</p>
                </div>
              
            </div>


        </div>

        <div class="row context align-items-center p-5">
            <div class="col-md-12 col-sm-12">
                <div>
                    <p class="pt-3 text-justify">Силно партнерство и соработка со релевантни организации и институции од областа на С4Д се клучни за добивање на ресурсите што ви требаат за спроведување на квалитетни активности на S4D. Затоа, сите заинтересирани за оваа метода може да не контактираат со цел да ги зголемиме нашите досегашни вмрежувања. Ова ќе ни овозможи да размениме ресурси, да се стекнеме и да обезбедиме квалификации за С4Д. </p>
                </div>
            </div>
        </div>
        <?php include "./footer.php" ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>

</html>