<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>Document</title>
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
                <p class="mt-6 mb-8 text-lg sm:mb-12">Dictum aliquam porta in condimentum ac integer
                    <br class="hidden md:inline lg:hidden">turpis pulvinar, est scelerisque ligula sem
                </p>
                <div class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
                    <a rel="noopener noreferrer" href="#" class="px-8 py-3 text-lg font-semibold rounded bg-gradient-to-r from-green-500 to-lime-400 text-gray-50 hover:bg-blue-700 transition-all duration-200 ease-in-out">Ver Dicas</a>
                    <a rel="noopener noreferrer" href="#" class="px-8 py-3 text-lg font-semibold border rounded border-gray-800 hover:bg-gray-200 transition-all duration-100 ease-in-out">Conheça o Nosso trabalho</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Posts -->

    <section>
        <div class="relative px-4 py-12 sm:px-6 lg:py-16 lg:px-8 bg-gradient-to-r from-green-500 to-lime-400 rounded-t-3xl">
            <!-- <div class="relative px-4 py-12 sm:px-6 lg:py-16 lg:px-8 rounded-t-3xl"> -->

            <h1 class="text-white text-center w-full mx-auto text-2xl font-bold leading-none sm:text-4xl mb-14">Dicas da Semana</h1>

            <div class="relative mx-auto max-w-7xl">
                <div class="grid max-w-lg gap-12 mx-auto lg:grid-cols-3 lg:max-w-none">
                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg shadow-green-500/40">
                        <div class="flex-shrink-0">
                            <img class="object-cover w-full h-48" src="./assets/img/horta-organica.jpg" alt="">
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <a href="#" class="block mt-2">
                                    <p class="text-xl font-semibold text-neutral-600">Como fazer uma horta em casa?</p>
                                    <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.</p>
                                </a>
                            </div>
                            <div class="flex items-center mt-6">
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-neutral-600">
                                        <a href="#" class="hover:underline">Fabiana Texeira</a>
                                    </p>
                                    <div class="flex space-x-1 text-sm text-gray-500">
                                        <time datetime="2020-03-16"> Mar 16, 2020 </time>
                                        <span aria-hidden="true"> · </span>
                                        <span> 6 min read </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg shadow-green-500/40">
                        <div class="flex-shrink-0">
                            <img class="object-cover w-full h-48" src="./assets/img/horta-organica-2.jpg" alt="">
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <a href="#" class="block mt-2">
                                    <p class="text-xl font-semibold text-neutral-600">Principais cuidados para horta</p>
                                    <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit facilis asperiores porro quaerat doloribus, eveniet dolore. Adipisci tempora aut inventore optio animi., tempore temporibus quo laudantium.</p>
                                </a>
                            </div>
                            <div class="flex items-center mt-6">

                                <div class="ml-3">
                                    <p class="text-sm font-medium text-neutral-600">
                                        <a href="#" class="hover:underline">Maurício Linhares</a>
                                    </p>
                                    <div class="flex space-x-1 text-sm text-gray-500">
                                        <time datetime="2020-03-10"> Mar 10, 2020 </time>
                                        <span aria-hidden="true"> · </span>
                                        <span> 4 min read </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg shadow-green-500/40">
                        <div class="flex-shrink-0">
                            <img class="object-cover w-full h-48" src="./assets/img/horta-organica-3.jpeg" alt="">
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <a href="#" class="block mt-2">
                                    <p class="text-xl font-semibold text-neutral-600">Cuidados com a horta</p>
                                    <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint harum rerum voluptatem quo recusandae magni placeat saepe molestiae, sed excepturi cumque corporis perferendis hic.</p>
                                </a>
                            </div>
                            <div class="flex items-center mt-6">
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-neutral-600">
                                        <a href="#" class="hover:underline">Fabiana Teixeira</a>
                                    </p>
                                    <div class="flex space-x-1 text-sm text-gray-500">
                                        <time datetime="2020-02-12"> Feb 12, 2020 </time>
                                        <span aria-hidden="true"> · </span>
                                        <span> 11 min read </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('./components/footer.php'); ?>

</body>

</html>