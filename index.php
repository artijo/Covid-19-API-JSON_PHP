<html>
    <head>
        <title>แสดงข้อมูลผู้ติดเชื้อ Covid-19 ในประเทศไทย</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="fonts.css">
    </head>
    <body>
        <?php 
            $api = file_get_contents("https://corona.lmao.ninja/v2/countries?sort=country");
            $data = json_decode($api,true);
        ?>
        
        <div class="mt-5">
        <div class="container">
                    <div class="text-center">
                        <h2>รายงานสถานการณ์ โควิด-19 ประเทศไทย</h2>
                        <h4>อัพเดทข้อมูลล่าสุด :</h4>
                    </div>
            <div class="row">
                <div class="col-6 mx-auto">
                    <div class="card text-center text-white bg-danger mb-3">
                        <div class="card-header">ติดเชื้อสะสม</div>
                        <div class="card-body">
                          <h5 class="card-title"><?php echo number_format($data[21]["cases"]);?></h5>
                          <p class="card-text text-white">(เพิ่มขึ้น <?php echo number_format($data[21]["todayCases"]);?>)</p>
                        </div>
                      </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="card text-center text-white bg-success mb-3" >
                        <div class="card-header">หายแล้ว
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"><?php echo number_format($data[21]["recovered"]);?></h5>
                          <p class="card-text text-white">(เพิ่มขึ้น <?php echo number_format($data[21]["todayRecovered"]);?>)</p>
                        </div>
                      </div>
                </div>
                <div class="col-4">
                    <div class="card text-center text-white bg-info mb-3" >
                        <div class="card-header">รักษาอยู่ใน รพ.</div>
                        <div class="card-body">
                          <h5 class="card-title"><?php echo number_format($data[21]["active"]);?></h5>
                          <p class="card-text text-white">&nbsp;</p>
                        </div>
                      </div>
                </div>
                <div class="col-4">
                    <div class="card text-center text-white bg-secondary mb-3" >
                        <div class="card-header">เสียชีวิต
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"><?php echo number_format($data[21]["deaths"]);?></h5>
                          <p class="card-text text-white">(เพิ่มขึ้น <?php echo number_format($data[21]["todayDeaths"]);?>)</p>
                        </div>
                      </div>
                </div>
            </div>
                <div class="text-end">
                    <p>API by: https://corona.lmao.ninja/v2/countries?sort=country</p>
                </div>
        </div>
    </div>
    

    
    </body>
</html>