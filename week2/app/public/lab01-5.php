<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            position: relative;
        }

        content {
            background: #EAEFF3;
        }

        body {
            font-family: sans-serif;
            background: #EAEFF3;
        }


        content .container {
            width: 100%;
            padding-top: 10px;
            background-color: #efefef;
        }

        #content {
            padding: 80px 0;
        }

        .intro,
        .Certifications {
            background-color: #b2cecf;
            margin-left: 20px;
            margin-right: 20px;
        }

        .content {
            padding-bottom: 50px;
            width: 100%;
            border-radius: 5px;
        }

        .intro-img {
            width: 300px;
            margin-top: 20px;
        }

        ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            justify-content: left;
            text-align: none;
            margin-left: 30px;
        }

        .list {
            font-size: 1rem;
            margin-top: 20px;
            padding-left: 0;
            text-align: left;
        }

        .title {
            padding-top: 30px;
            padding-bottom: 50px;
            color: #d02552;
            text-align: center;
        }

        .education .title,
        .Certifications .title,
        .Hobbies .title {
            text-align: left;
            padding-bottom: 10px;
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <content class="content " id="content ">
        <div class="container text-center ">
            <div class="intro ">
                <h1 class="title ">About me</h1>
                <div class="row text-center ">
                    <div class="col-md-6 content ">
                        <img src="https://minio.hisoft.com.vn/quanly-yeucau/5e42235af32ec.jpg" alt=" " class="intro-img">
                    </div>
                    <div class="col-md-6 content ">
                        <ul class="pr ">
                            <li class="list ">Name : Tong Ngoc Anh</li>
                            <li class="list "> Date of Birth ：2000/06/14</li>
                            <li class="list ">Phone : 0369037471</li>
                            <li class="list ">Email: anhtn.dev40@gmail.com</li>
                            <li class="list ">Address: Hisoft Vietnam</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="education">
                <h4 class="title"> Education process</h4>
                <ul class="pr">
                    <li class="list">2011 - 2015 : Cam Thanh Junior hight school</li>
                    <li class="list">2015 - 2018 : Cam Pha High school</li>
                    <li class="list">2018 - 2023 : Hanoi University of Science and Technology</li>
                </ul>
            </div>
            <div class="Certifications">
                <h4 class="title">Certifications</h4>
                <ul class="pr">

                </ul>
            </div>

            <div class="Hobbies">
                <h4 class="title">Hobbies</h4>
                <ul class="pr">
                    <li class="list">Game</li>
                </ul>
            </div>
    </content>
    <footer style="height:50px; color:red"></footer>
</body>

</html>