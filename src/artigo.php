<?php

$tips = json_decode(file_get_contents('../tips.json'), true);

$tip_id = $_GET['id'];
$tip = $tips[$tip_id];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title><?php echo $tip['title'] ?> - Casa Pia</title>
</head>

<body class="bg-gray-50 flex flex-col">

    <?php include_once('./components/header.php'); ?>

    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="max-w-screen-xl px-4 md:px-8 mx-auto">
            <div class="grid gap-8">
                <div>
                    <div class="h-64 md:h-96 bg-gray-100 overflow-hidden rounded-lg shadow-lg">
                        <img src="<?php echo $tip['image'] ?>" loading="lazy" class="w-full h-full object-cover" />
                    </div>
                </div>

                <div class="md:pt-8">

                    <h1 class="text-gray-800 text-2xl sm:text-3xl font-bold text-center md:text-left mb-4 md:mb-6"><?php echo $tip['title'] ?></h1>

                    <?php

                    foreach ($tip['content'] as $content) {
                        if ($content['type'] == 'text') {
                            echo '<p class="text-gray-600 text-lg md:text-xl leading-relaxed mb-6">
                            ' . $content['text'] . '
                            </p>';
                        } else if ($content['type'] == 'subtitle') {
                            echo '
                            <h2 class="text-gray-800 text-xl sm:text-2xl font-semibold text-center md:text-left mb-2 md:mb-4">
                                ' . $content['text'] . '
                            </h2>';
                        }
                    }

                    ?>

                    <!-- <p class="text-gray-500 sm:text-lg mb-6 md:mb-8">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget arcu consequat, lacinia metus in, malesuada dui. In ultricies tortor sed nulla feugiat condimentum. Proin fringilla augue felis, in scelerisque ante rhoncus non. Vestibulum in lacus aliquet, pretium diam vitae, finibus diam. Etiam scelerisque purus a felis scelerisque eleifend. Proin id commodo dui. Suspendisse vestibulum orci lacus, a condimentum dolor lacinia vel. Suspendisse malesuada tempus mi, ac vestibulum lacus porta sit amet. Curabitur efficitur lacus in ultricies tincidunt. Ut placerat finibus libero sit amet iaculis. Etiam vel consectetur justo. Nam vulputate, odio ut pulvinar condimentum, nulla nisl sodales purus, quis feugiat velit urna vel orci. Vivamus at feugiat libero. Vestibulum ac consectetur lectus.
                        <br /><br />

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget arcu consequat, lacinia metus in, malesuada dui. In ultricies tortor sed nulla feugiat condimentum. Proin fringilla augue felis, in scelerisque ante rhoncus non. Vestibulum in lacus aliquet, pretium diam vitae, finibus diam. Etiam scelerisque purus a felis scelerisque eleifend. Proin id commodo dui. Suspendisse vestibulum orci lacus, a condimentum dolor lacinia vel. Suspendisse malesuada tempus mi, ac vestibulum lacus porta sit amet. Curabitur efficitur lacus in ultricies tincidunt. Ut placerat finibus libero sit amet iaculis. Etiam vel consectetur justo. Nam vulputate, odio ut pulvinar condimentum, nulla nisl sodales purus, quis feugiat velit urna vel orci. Vivamus at feugiat libero. Vestibulum ac consectetur lectus.
                    </p>

                    <h2 class="text-gray-800 text-xl sm:text-2xl font-semibold text-center md:text-left mb-2 md:mb-4">Lorem ipsum</h2>

                    <p class="text-gray-500 sm:text-lg mb-6 md:mb-8">Proin id commodo dui. Suspendisse vestibulum orci lacus, a condimentum dolor lacinia vel. Suspendisse malesuada tempus mi, ac vestibulum lacus porta sit amet. Curabitur efficitur lacus in ultricies tincidunt. Ut placerat finibus libero sit amet iaculis. Etiam vel consectetur justo. Nam vulputate, odio ut pulvinar condimentum, nulla nisl sodales purus, quis feugiat velit urna vel orci. Vivamus at feugiat libero. Vestibulum ac consectetur lectus.
                        <br /><br />

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget arcu consequat, lacinia metus in, malesuada dui. In ultricies tortor sed nulla feugiat condimentum. Proin fringilla augue felis, in scelerisque ante rhoncus non. Vestibulum in lacus aliquet, pretium diam vitae, finibus diam. Etiam scelerisque purus a felis scelerisque eleifend. Proin id commodo dui. Suspendisse vestibulum orci lacus, a condimentum dolor lacinia vel. Suspendisse malesuada tempus mi, ac vestibulum lacus porta sit amet. Curabitur efficitur lacus in ultricies tincidunt. Ut placerat finibus libero sit amet iaculis. Etiam vel consectetur justo. Nam vulputate, odio ut pulvinar condimentum, nulla nisl sodales purus, quis feugiat velit urna vel orci. Vivamus at feugiat libero. Vestibulum ac consectetur lectus.

                    </p> -->
                </div>
            </div>
        </div>
    </div>

    <?php include_once('./components/footer.php'); ?>

</body>

</html>