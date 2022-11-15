<?php

$data = json_decode(file_get_contents('../data.json'), true);
$tips = json_decode(file_get_contents('../tips.json'), true);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>Casa Pia</title>
</head>

<body class="bg-gray-50">

    <?php include_once('./components/header.php'); ?>

    <!-- Top Content -->
    <section class=" bg-gray-50 text-gray-800">
        <div class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
            <div class="hidden sm:flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                <img src="./assets/img/mao-plantando-em-horta.jpg" class="contain shadow-lg shadow-green-500/20 rounded-xl sm:h-72 md:h-80 lg:h-96 xl:h-112 2xl:h-128">
            </div>
            <div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
                <h1 class="text-5xl font-bold leading-none sm:text-6xl">Dicas de
                    <span class="text-transparent bg-gradient-to-r from-green-500 to-lime-400 bg-clip-text">horticultura</span>
                    na palma da sua mão
                </h1>
                <p class="mt-6 mb-8 text-lg sm:mb-12">Veja abaixo algumas dicas e conheça um pouco mais da nossa história.</p>
                <div class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
                    <a rel="noopener noreferrer" href="#dicas" class="px-8 py-3 text-lg font-semibold rounded bg-gradient-to-r from-green-500 to-lime-400 text-gray-50 hover:bg-blue-700 transition-all duration-200 ease-in-out">Ver Dicas</a>
                    <a rel="noopener noreferrer" href="#sobre" class="px-8 py-3 text-lg font-semibold border rounded border-gray-800 hover:bg-gray-200 transition-all duration-100 ease-in-out">Conheça o Nosso trabalho</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Posts -->

    <section>
        <div id="dicas" class="relative px-4 py-12 sm:px-6 lg:py-16 lg:px-8 bg-gradient-to-r from-green-500 to-lime-400 rounded-t-3xl">
            <!-- <div class="relative px-4 py-12 sm:px-6 lg:py-16 lg:px-8 rounded-t-3xl"> -->

            <h1 class="text-white text-center w-full mx-auto text-2xl font-bold leading-none sm:text-4xl mb-14">Dicas</h1>

            <div class="relative mx-auto max-w-7xl">
                <div class="flex justify-center flex-wrap max-w-7xl gap-4 mx-auto">

                    <?php
                    foreach ($tips as $key => $tip) {
                    ?>
                        <!-- Post item -->
                        <div class=" w-96 flex flex-col overflow-hidden rounded-lg shadow-lg shadow-green-500/40">
                            <div class="flex-shrink-0">
                                <img class="object-cover w-full h-48" src="<?php echo $tip['image']; ?>" alt="">
                            </div>
                            <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                                <div class="flex-1">
                                    <a href="./artigo.php?id=<?php echo $key ?>" class="block mt-2">
                                        <p class="text-xl font-semibold text-neutral-600"><?php echo $tip['title'] ?></p>
                                        <p class="mt-3 text-base text-gray-500">
                                            <?php echo $tip['description'] ?>
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center mt-6">
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-neutral-600">
                                        <p><?php echo $tip['author'] ?></p>
                                        </p>
                                        <p><?php echo $tip['curse'] ?></p>
                                        <div class="flex space-x-1 text-sm text-gray-500">
                                            <time datetime="2022-03-16"> <?php echo $tip['date'] ?></time>
                                            <span aria-hidden="true"> · </span>
                                            <span> <?php echo $tip['readTime'] ?> de leitura</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- FAQ -->

    <section id="sobre" class="py-6 sm:py-8 lg:py-12">
        <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
            <!-- text - start -->
            <div class="mb-10 md:mb-16">
                <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Sobre Nós</h2>

                <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto mb-6">
                    <?php echo $data['about_description'] ?>
                </p>
            </div>
            <!-- text - end -->

            <div class="w-full max-w-screen-md mx-auto">
                <!-- question - start -->
                <div class="bg-gray-100 rounded-lg relative p-5 pt-8">
                    <!-- <span class="w-8 h-8 inline-flex justify-center items-center bg-lime-500 text-white rounded-full absolute -top-4 left-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                        </svg>
                    </span> -->

                    <h1 class="text-xl font-bold text-gray-800 mb-6">Nossa História</h1>

                    <p class="text-gray-500"><?php echo $data['history'] ?></p>
                </div>
                <!-- question - end -->

            </div>
        </div>
    </section>

    <?php include_once('./components/footer.php'); ?>

</body>

</html>