<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoStore</title>
    
    <link rel="icon" href="img/logo.png">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/596c53c91a.js" crossorigin="anonymous"></script>
</head>
<body>
    
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<header>
        <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid ">
            <a class="navbar-brand" href="home">MOTOSTORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="home">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="#">Loja</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="cadastrarMoto">Cadastrar</a>
                </li>
               
            </ul>
           
            </div>
        </div>
        </nav>
    </header>

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<section class="controle-lista">

    <div class="header_fixed">
        <table id="myTable" >

        <div class="pesquisar-lista">
        
        <input type="text" id="myInput" onkeyup='tableSearch()' placeholder="Pesquisar"> 

        </div>
            <thead>
                <tr>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Ano</th>
                    <th>Cor</th>
                    <th>Valor</th>
                    <th>Editar/Excluir</th>
                </tr>
            </thead>
            <tbody>

            
             
                @foreach ($Moto as $cus)
              
                <tr>
                    <td>{{$cus['modelo']}}</td>
                    <td>{{$cus['marca']}}</td>
                    <td>{{$cus['ano']}}</td>
                    <td>{{$cus['cor']}}</td>
                    <td>{{$cus['valor']}}</td>
                    <td>
                        <a href="/editar/{{$cus->id}}"><button><i class="fa-solid fa-pen-to-square"></i></button></a>

                        <form action="/editar/{{$cus->id}}" method="post" class="botao1">
                            @csrf
                            @method('DELETE')
                        <a href="#"><button><i class="fa-solid fa-trash"></i></button></a>
                        </form>
                    </td>
                </tr>
                @endforeach

                
                
               
            </tbody>
        </table>
    </div>



</section>

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<footer>
    <a>Moto<span>Store</span></a>
    <H1>Copyright © Cauan</H1>
    
</footer>

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


    <script type="application/javascript">
        function tableSearch(){
            let input, filter, table, tr, td, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

                for (i = 1; i < tr.length; i++) {
                    td = tr[i];
                        if (td) {
                            txtValue = td.textContent || td.innerText;
                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                                } else {
                                tr[i].style.display = "none";
                                }
                        }
                }
                    
        }

    </script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

</body>
</html>