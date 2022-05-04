<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style type="text/css">
        .wrapper{
            display: flex;
            flex-wrap: nowrap;
            height: 38em;
            overflow-y: hidden;
        }
        .bg-nav{
            background-image: url("<?= base_url(); ?>/assets/bg-nav.png");
        }
        .btn-outline-primary:hover,.bg-secondary{
            background-color: #797EF6 !important;
            color: white;
        }
        nav li a:hover, .bg-primary{
            background-color: #1E2F97 !important;
            color: white;
        }
        .btn-outline-primary{
            color: #1E2F97 !important;
            border-color: #1E2F97 !important;
        }
        nav li a{
            color: white;
        }
        nav{
            flex: 10%;
        }
        section{
            width: 100%;
        }
        #multiCollapse li:hover{
            border-bottom: 1px solid white;
        }
        @media only screen and (max-width: 786px){
            .wrapper{
                flex-direction: column;
                height: fit-content;
            }
        }
    </style>
    <title> Admin 
