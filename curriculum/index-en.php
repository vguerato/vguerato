<?php

$skillsCategories = [
    'technologies' => 'Technologies',
    'tools' => 'Tools',
    'logical' => 'Logical'
];

$skills = [
    'technologies' => [
        ['PHP', 'Avançado', '7y'],
        ['Laravel', 'Avançado', '2y'],
        ['Vue JS', 'Avançado', '1y'],
        ['Quasar', 'Avançado', '1y'],
        ['Bash', 'Intemediário', '1y'],
        ['Redis', 'Avançado', '2y'],
        ['MySQL', 'Avançado', '6y'],
        ['MariaDB', 'Avançado', '3y'],
        ['Postgres', 'Intermediário', '1y'],
        ['Elastic Search', 'Intermediário', '1y'],
    ],
    'tools' => [
        ['Linux', 'Avançado', '5y'],
        ['Git', 'Avançado', '3y'],
        ['Docker', 'Avançado', '1y'],
        ['GCP', 'Intermediário', '2y']
    ],
    'logical' => [
        ['API Rest'],
        ['Solid/Clean'],
        ['PSR'],
        ['Refactoring and Analysis'],
        ['Design Patterns'],
        ['Software Architeture'],
        ['Microservices'],
        ['Queues']
    ],/*
    'Hab' => [
        ['Autodidata'],
        ['Criativo'],
        ['Perfeccionisita'],
        ['Calmo'],
        ['Resiliente']
    ],*/
];

$degrees = [[
    'logo' => 'https://media-exp1.licdn.com/dms/image/C4D0BAQGUhXT3PmD-kA/company-logo_100_100/0/1661182130984?e=1674691200&v=beta&t=9BSejkd939JD9KZetSLOTqLPaJV_YBCbo21h507J9Uk',
    'title' => 'Technical Internet Information Technology',
    'emissor' => 'SENAI Alvares Romi',
    'period' => ['01/2014', '01/2016']
], [
    'logo' => 'https://media-exp1.licdn.com/dms/image/C510BAQFY5ofEWj40xw/company-logo_100_100/0/1519882239211?e=1674691200&v=beta&t=ictBwE1Zjzh-vOAnv0AWenAtuZ26vTrPaW-8nMNBDH0',
    'title' => 'Technologist in Systems Analysis and Development',
    'emissor' => 'UNIDERP - Anhanguera',
    'period' => ['06/2018', 'Discontinued']
]];

$experiences = [[
    'logo' => 'https://media-exp1.licdn.com/dms/image/C4E0BAQFFVMhKzmuvwA/company-logo_100_100/0/1629377354541?e=1674691200&v=beta&t=uNKXBEUnDPSVw3vxEPGeLe7inlkOE5caBH7JtFmkZUM',
    'title' => 'Web Developer',
    'company' => 'Hybriun Systems',
    'activities' => 'Prototyping and Website Development.',
    'period' => ['01/2016', '12/2016'],
    'stacks' => ['HTML', 'PHP', 'Java']
], [
    'logo' => 'https://media-exp1.licdn.com/dms/image/C4E0BAQG-TUD7y0veYw/company-logo_100_100/0/1649968620578?e=1674691200&v=beta&t=1ALh6S3kf01tmuS8gNODTKdjeOjAVTDxjtBytclraUQ',
    'title' => 'Analista de Sistemas',
    'company' => 'Byteweb Telecom',
    'activities' => 'Web and Mobile (Android) Application Development. Data Extraction. Web Cloud Management. Internal Support.',
    'period' => ['04/2017', '11/2017'],
    'stacks' => ['PHP', 'Android', 'PostgreSQL', 'VMWare']
], [
    'logo' => 'https://media-exp1.licdn.com/dms/image/C4D0BAQF4XUSH2k9QGQ/company-logo_100_100/0/1609875979406?e=1674691200&v=beta&t=gRxf83IRtT2uENRiApq7yZr3jE1i-OcP1l2PSvyRKbA',
    'title' => 'Web Designer',
    'company' => 'Humann Inteligência Digital',
    'activities' => 'Development and Maintenance of Websites and Commercial Campaigns.',
    'period' => ['12/2017', '11/2018'],
    'stacks' => ['PHP', 'Javascript', 'WordPress', 'MariaDB']
], [
    'logo' => 'https://media-exp1.licdn.com/dms/image/C4D0BAQF5uWxCjw1oBQ/company-logo_100_100/0/1609158914522?e=1674691200&v=beta&t=X47gG0tNKHmTyLZ3qYb5hRIVlwiu4Yz7U1zmvnz9ARE',
    'title' => 'Desenvolvedor Web',
    'company' => 'Tamtex Tecnologias de Proteção',
    'activities' => 'Maintenance and Development of Internal ERP functionalities.',
    'period' => ['05/2020', '11/2020'],
    'stacks' => ['Git', 'PHP', 'Laravel', 'VueJS', 'Quasar', 'MariaDB']
], [
    'logo' => 'https://media-exp1.licdn.com/dms/image/C4E0BAQGBEg3xldY9Yg/company-logo_100_100/0/1607612691304?e=1674691200&v=beta&t=LaKmTW-5CJXnjxe-ztsAbQljyOWm0kVkXFrtNRsl960',
    'title' => 'Desenvolvedor Web',
    'company' => 'VALG Digital',
    'activities' => 'Architecture and Development of Microservices and APIs for Payment Gateways and Fleet Management Systems.',
    'period' => ['11/2020', 'Atualmente'],
    'stacks' => ['PHP', 'Laravel', 'Javascript', 'Zend', 'MariaDB', 'MySQL', 'Redis', 'VueJS', 'Quasar', 'Docker', 'GCP']
]];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinicius Guerato</title>
    <script src="https://kit.fontawesome.com/7cb473a112.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        <?= file_get_contents('./style.css') ?>
    </style>
</head>

<body>
    <section class="py-5 px-5 mt-2 mb-4 rounded">
        <div class="row">
            <div class="col-auto">
                <img src="vguerato.png" alt="Vinicius Guerato" width="140px" height="140px" class="rounded">
            </div>

            <div class="col">
                <h1>Vinicius Guerato</h1>

                <div class="about mb-2">
                    <span>Senior Software Developer</span>
                    <span>25y</span>
                    <span>Santa Barbara D'Oeste - SP, Brazil</span>
                </div>

                <div class="social-media">
                    <a href="mailto:vguerato@gmail.com" title="Fale comigo via E-mail">
                        <i class="fa-sharp fa-solid fa-at"></i>
                    </a>
                    <a href="https://web.whatsapp.com/send?1=pt_BR&phone=5519993061800" title="Fale comigo via WhatsApp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/vinicius-guerato/" title="Acesse meu Linkedin">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="https://github.com/vguerato" title="Acesse meus repositórios">
                        <i class="fa-brands fa-github-alt"></i>
                    </a>
                    <a href="https://stackoverflow.com/users/10059876/vinicius-guerato" title="Veja minhas contribuições no Stackoverflow">
                        <i class="fa-brands fa-stack-overflow"></i>
                    </a>
                    <a href="https://pt.stackoverflow.com/users/87556/vinicius-guerato" title="Veja minhas contribuições no Stackoverflow BR">
                        <i class="fa-brands fa-stack-overflow"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <p class="px-5 py-3">
    I've been a developer since 2015, starting my studies and experience in the field due to my hobby with digital games and interest in understanding how they worked and how they could be improved. Currently, I work as a senior software developer mainly working on the PHP/Laravel stack, also performing microservices and API architecture, with extensive knowledge in financial solutions (Gateways) and logistics (Vehicle fleet management).
    </p>

    <section id="skills" class="px-5 py-2">
        <h2>Habilities</h2>
        <p>Extensive knowledge in API, API Gateway, Microservices, and high-performance data processing services architecture and development.</p>
        <div class="sks mt-3">
            <?php foreach ($skills as $k => $v) : ?>
                <?php foreach ($v as $s) : ?>
                    <div class="sk">
                        <span class="sk-name"><?= $s[0] ?></span>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="dge px-5 py-2">
        <h2 class="mb-4">Formação</h2>
        <?php foreach ($degrees as $dg) : ?>
            <div class="dg row mb-3">
                <!--<div class="col-auto">
                    <img src="<?= $dg['logo'] ?>" width="50px" height="50px" title="<?= $dg['emissor'] ?>" class="rounded">
                </div>-->
                <div class="col">
                    <p class="dg-name"><?= $dg['title'] ?></p>
                    <p class="dg-emissor"><?= $dg['emissor'] ?></p>
                    <p class="period">
                        <span class="period-in"><?= $dg['period'][0] ?></span>
                        <i class="fa-solid fa-arrows-left-right"></i>
                        <span class="period-fi"><?= $dg['period'][1] ?></span>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <section class="jbs px-5 py-2">
        <h2 class="mb-4">Experiências</h2>
        <?php foreach ($experiences as $exp) : ?>
            <div class="job-card mb-4 row">
                <!--<div class="col-auto">
                    <img src="<?= $exp['logo'] ?>" width="50px" height="50px" title="<?= $exp['company'] ?>" class="rounded">
                </div>-->
                <div class="col">
                    <p>
                        <span class="jb-name"><?= $exp['title'] ?></span>
                        <span class="jb-company"><?= $exp['company'] ?></span>
                    </p>
                    <p class="jb-activities my-1"><?= $exp['activities'] ?></p>
                    <p class="period">
                        <span class="period-in"><?= $exp['period'][0] ?></span>
                        <i class="fa-solid fa-arrows-left-right"></i>
                        <span class="period-fi"><?= $exp['period'][1] ?></span>
                    </p>
                    <div class="sks mt-3">
            <?php foreach ($exp['stacks'] as $v) : ?>
                <div class="sk">
                        <span class="sk-name"><?= $v ?></span>
                    </div>
            <?php endforeach; ?>
        </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</body>

</html>
