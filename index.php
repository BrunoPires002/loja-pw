<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lojinha</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="filtro.php">
</head>
<body>

    <div class="container-fluid container">

        <!--NAVBAR-->
        
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                    <h1>Loja DU cria</h1>   
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-dark p-4">
                        <form id="formFiltrar" name="formFiltrar" method="post" action="COOKIE.php">
                            
                            <select name="produto">
                            <option value="">Selecione...</option>
                            <option value="1">Regatas</option>
                            <option value="2">Bermudas</option>
                            <option value="3">Tenis</option>
                            
                            </select>
                          
                            <input type="submit" name="Submit" value="Filtrar" />
                        
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <br>
        <div class="row row-cols-1 row-cols-md-5 ">
            <div class="col mb-4 regata">
                <div class="card">
                <img src="img/regata1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Regata NBA Brooklyn Nets</h5>
                        <p class="card-text">Gola: Gola V<br>
                        Indicado para: Dia a Dia<br>
                        Time/Atleta: Brooklyn Nets</p>
                        <div class="div-comprar">
                        <button class="btn btn-comprar">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 berma">
                <div class="card">
                <img src="img/bermudas/berma1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bermuda Nike Fastebreak</h5>
                        <p class="card-text">Indicado para: Dia a Dia<br>
                        Material: Poliéster<br>
                        Fechamento: Com cordão
                        </p>
                        <div class="div-comprar">
                        <button class="btn btn-comprar">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 tenis">
                <div class="card">
                <img src="img/tenis/tenis1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> Tênis nike KD Trey 5 IX</h5>
                        <p class="card-text">Masculino<br> Cor : Preto/Branco <br> Atleta : Kevin Durant</p>
                        <div class="div-comprar">
                        <button class="btn btn-comprar">Comprar</button>
                        </div>                 
                    </div>
                </div>
            </div>
            <div class="col mb-4 berma">
                <div class="card">
                <img src="img/bermudas/berma2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bermuda Nike Dri-Fit 2.0</h5>
                        <p class="card-text">Indicado para: Dia a Dia<br>
                        Material: Poliéster<br>
                        Composição: 100% poliéster
                        </p>
                        <div class="div-comprar">
                        <button class="btn btn-comprar">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 regata">
                <div class="card">
                <img src="img/regata2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Regata NBA Milwaukee Bucks Giannis Antetokounmpo</h5>
                        <p class="card-text">Gola: Gola V<br>
                        Indicado para: Dia a Dia<br>
                        Time/Atleta: Milwaukee Bucks</p>
                        <div class="div-comprar">
                        <button class="btn btn-comprar">Comprar</button>
                        </div>                
                    </div>
                </div>
            </div>
            <div class="col mb-4 tenis">
                <div class="card">
                <img src="img/tenis/tenis2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tênis Adidas Court Vision 3</h5>
                        <p class="card-text">Indicado para: Dia a Dia<br>
                        Altura do Cano: Cano Baixo<br>
                        Material: Mesh
                        </p>
                        <div class="div-comprar">
                        <button class="btn btn-comprar">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 tenis">
                <div class="card">
                <img src="img/tenis/tenis3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tênis Nike Giannis Immortality Branco-Cinza</h5>
                        <p class="card-text">Indicado para: Dia a Dia<br>
                        Altura do Cano: Cano Baixo<br>
                        Material: Têxtil
                        </p>
                        <div class="div-comprar">
                        <button class="btn btn-comprar">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 berma">
                <div class="card">
                <img src="img/bermudas/berma3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bermuda Adidas Pro Madness - Vermelha</h5>
                        <p class="card-text">Indicado para: Dia a Dia<br>
                        Material: Poliéster<br>
                        Fechamento: Com cordão
                        </p>
                        <div class="div-comprar">
                        <button class="btn btn-comprar">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 regata">
                <div class="card">
                <img src="img/regata3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Regata NBA Philadelphia</h5>
                        <p class="card-text">Gola: Gola Careca<br>
                        Indicado para: Dia a Dia<br>
                        Time/Atleta: Philadelphia 76ers
                        </p>
                        <div class="div-comprar">
                        <button class="btn btn-comprar">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 berma">
                <div class="card">
                <img src="img/bermudas/berma4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bermuda Adidas Pro Madness</h5>
                        <p class="card-text">Indicado para: Dia a Dia
                        Material: Poliéster <br>
                        Composição: 100% poliéster
                        </p>
                        <div class="div-comprar">
                        <button class="btn btn-comprar">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 tenis">
                <div class="card">
                <img src="img/tenis/tenis4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tênis Adidas Harden Stepback</h5>
                        <p class="card-text">Indicado para: Dia a Dia<br>
                        Altura do Cano: Cano Médio<br>
                        Material: Têxtil
                        </p>
                        <div class="div-comprar">
                        <button class="btn btn-comprar">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 regata">
                <div class="card">
                <img src="img/regata4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Regata New Orleans Pelicans Zion Williamson</h5>
                        <p class="card-text">Gola: Gola V<br>
                        Indicado para: Dia a Dia<br>
                        Time/Atleta: New Orleans Pelicans
                        </p>
                        <div class="div-comprar">
                        <button class="btn btn-comprar">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 regata">
                <div class="card">
                <img src="img/regata5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Regata NBA Swingman Los Angeles Lakers nº 3</h5>
                        <p class="card-text">Gola: Gola Careca<br>
                        Indicado para: Dia a Dia<br>
                        Time/Atleta: Los Angeles Lakers</p>
                        <div class="div-comprar">
                        <button class="btn btn-comprar">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 tenis">
                <div class="card">
                <img src="img/tenis/tenis5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tênis Nike Giannis Immortality - Cinza+Azul</h5>
                        <p class="card-text">Indicado para: Dia a Dia<br>
                        Altura do Cano: Cano Baixo<br>
                        Material: Têxtil                      
                        </p>
                        <div class="div-comprar">
                        <button class="btn btn-comprar">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 berma">
                <div class="card">
                <img src="img/bermudas/berma5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bermuda Adidas Big</h5>
                        <p class="card-text">Indicado para: Dia a Dia
                        Material: Poliéster<br>
                        Composição: 100% poliéster
                        </p>
                        <div class="div-comprar">
                        <button class="btn btn-comprar">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>
