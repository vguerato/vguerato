<?php

$skillsCategories = [
    'technologies' => 'Technologies',
    'tools' => 'Tools',
    'logical' => 'Logical'
];

$skills = [
    'technologies' => [
        ['PHP', 'Advanced', '7y'],
        ['Laravel', 'Advanced', '2y'],
        ['Python', 'Basic', '1y'],
        ['Java', 'Intermediate', '2y'],
        ['Android', 'Basic', '1y'],
        ['Javascript', 'Advanced', '5y'],
        ['Vue JS', 'Advanced', '1y'],
        ['Quasar', 'Advanced', '1y'],
        ['Flutter', 'Intermediate', '1y'],
        ['Bash', 'Intemediário', '1y'],
        ['Redis', 'Advanced', '2y'],
        ['MySQL', 'Advanced', '6y'],
        ['MariaDB', 'Advanced', '3y'],
        ['Postgres', 'Intermediate', '1y'],
    ],
    'tools' => [
        ['Linux', 'Advanced', '5y'],
        ['Git', 'Advanced', '3y'],
        ['Docker', 'Advanced', '1y'],
        ['RabbitMQ', 'Intermediate', '1y'],
        ['Google Cloud', 'Intermediate', '2y'],
        ['Canonical MAAS', 'Intermediate', '1y'],
    ],
    'logical' => [
        ['Test Unit'],
        ['Clean Code'],
        ['Solid'],
        ['PSR'],
        ['Design Patterns'],
        ['Software Architeture'],
        ['Microservices'],
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
    'title' => 'Information Technology',
    'emissor' => 'SENAI Alvares Romi',
    'period' => ['01/2014', '01/2016']
], [
    'logo' => 'https://media-exp1.licdn.com/dms/image/C510BAQFY5ofEWj40xw/company-logo_100_100/0/1519882239211?e=1674691200&v=beta&t=ictBwE1Zjzh-vOAnv0AWenAtuZ26vTrPaW-8nMNBDH0',
    'title' => 'Technologist in Systems Analisys and Development',
    'emissor' => 'UNIDERP - Anhanguera',
    'period' => ['06/2018', 'Interrupted']
]];

$experiences = [[
    'logo' => 'https://media-exp1.licdn.com/dms/image/C4E0BAQFFVMhKzmuvwA/company-logo_100_100/0/1629377354541?e=1674691200&v=beta&t=uNKXBEUnDPSVw3vxEPGeLe7inlkOE5caBH7JtFmkZUM',
    'title' => 'Web Developer',
    'company' => 'Hybriun Systems',
    'activities' => 'Websites prototyping and development.',
    'period' => ['01/2016', '01/2017'],
    'stacks' => ['PHP', 'Javascript', 'Java SE']
], [
    'logo' => 'https://media-exp1.licdn.com/dms/image/C4E0BAQG-TUD7y0veYw/company-logo_100_100/0/1649968620578?e=1674691200&v=beta&t=1ALh6S3kf01tmuS8gNODTKdjeOjAVTDxjtBytclraUQ',
    'title' => 'Systems Analyst',
    'company' => 'Byteweb Telecom',
    'activities' => 'Mobile and web applications development. Data extraction and processing. Third-party active support for internals.',
    'period' => ['04/2017', '11/2017'],
    'stacks' => ['PHP', 'Javascript', 'Android', 'Postgres']
], [
    'logo' => 'https://media-exp1.licdn.com/dms/image/C4D0BAQF4XUSH2k9QGQ/company-logo_100_100/0/1609875979406?e=1674691200&v=beta&t=gRxf83IRtT2uENRiApq7yZr3jE1i-OcP1l2PSvyRKbA',
    'title' => 'Web Designer',
    'company' => 'Humann Inteligência Digital',
    'activities' => 'Websites and visual-aids development.',
    'period' => ['11/2017', '11/2018'],
    'stacks' => ['PHP', 'Javascript', 'CodeIgniter', 'WordPress', 'MySQL']
], [
    'logo' => 'https://media-exp1.licdn.com/dms/image/C4D0BAQF5uWxCjw1oBQ/company-logo_100_100/0/1609158914522?e=1674691200&v=beta&t=X47gG0tNKHmTyLZ3qYb5hRIVlwiu4Yz7U1zmvnz9ARE',
    'title' => 'Web Developer',
    'company' => 'Tamtex Tecnologias de Proteção',
    'activities' => 'Development and maintenance of ERP modules. Processing financial data.',
    'period' => ['03/2020', '11/2020'],
    'stacks' => ['PHP', 'Laravel', 'Javascript', 'Canonical MAAS', 'MariaDB']
], [
    'logo' => 'https://media-exp1.licdn.com/dms/image/C4E0BAQGBEg3xldY9Yg/company-logo_100_100/0/1607612691304?e=1674691200&v=beta&t=LaKmTW-5CJXnjxe-ztsAbQljyOWm0kVkXFrtNRsl960',
    'title' => 'Web Developer',
    'company' => 'VALG Digital',
    'activities' => 'Architecture and development of APIs, API Gateways and highly complex data processing services. Data processing. Reviewing, refactoring and maintaining legacy or obsolete code against best practices.',
    'period' => ['11/2020', 'Current'],
    'stacks' => ['PHP', 'Laravel', 'Javascript', 'Zend', 'MariaDB', 'MySQL', 'Redis', 'Memcached', 'Docker', 'GCP']
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
                <img src="vguerato.png" alt="Vinicius Guerato" width="100px" height="100px" class="rounded">
            </div>

            <div class="col">
                <h1>Vinicius Guerato</h1>

                <div class="about mb-2">
                    <span>Senior PHP Developer</span>
                    <span>24y</span>
                    <span>Santa Barbara D'Oeste - SP, Brazil</span>
                </div>

                <div class="social-media">
                    <a href="mailto:vguerato@gmail.com" title="Contact me from E-mail">
                        <i class="fa-sharp fa-solid fa-at"></i>
                    </a>
                    <a href="https://web.whatsapp.com/send?1=pt_BR&phone=5519993061800" title="Contact me from WhatsApp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/vinicius-guerato/" title="See my Linkedin">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="https://github.com/vguerato" title="See my Repos">
                        <i class="fa-brands fa-github-alt"></i>
                    </a>
                    <a href="https://stackoverflow.com/users/10059876/vinicius-guerato" title="See my contributions in Stackoverflow">
                        <i class="fa-brands fa-stack-overflow"></i>
                    </a>
                    <a href="https://pt.stackoverflow.com/users/87556/vinicius-guerato" title="See my contributions in Stackoverflow BR">
                        <i class="fa-brands fa-stack-overflow"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <p class="px-5 py-3">
        Developer from 2015y, i started my experience in development area when i have 16y old,
        creating and modifying virtual games servers. Currently, i work with a big respect,
        architecting and developing robust and sophisticated services and applications,
        researching to reduce processes, giving maximum performance.
    </p>

    <section id="skills" class="px-5 py-3">
        <h2>Habilities</h2>
        <p>Extensive knowledge in architecture and development of APIs, API Gateways, Micros and high performance service data processing services.</p>
        <div class="sks mt-3">
            <?php foreach ($skills as $k => $v) : ?>
                <h3 class="my-4"><?= $skillsCategories[$k] ?></h3>
                <?php foreach ($v as $s) : ?>
                    <div class="sk">
                        <span class="sk-name"><?= $s[0] ?></span>

                        <?php if (isset($s[1])) : ?>
                            <span class="sk-stage"><?= $s[1] ?></span>
                        <?php endif; ?>

                        <?php if (isset($s[2])) : ?>
                            <span class="sk-age"><?= $s[2] ?></span>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="dge px-5 py-3">
        <h2 class="mb-4">Degree</h2>
        <?php foreach ($degrees as $dg) : ?>
            <div class="dg row mb-3">
                <div class="col-auto">
                    <img src="<?= $dg['logo'] ?>" width="50px" height="50px" title="<?= $dg['emissor'] ?>" class="rounded">
                </div>
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

    <section class="jbs px-5 py-3">
        <h2 class="mb-4">Experiences</h2>
        <?php foreach ($experiences as $exp) : ?>
            <div class="job-card mb-4 row">
                <div class="col-auto">
                    <img src="<?= $exp['logo'] ?>" width="50px" height="50px" title="<?= $exp['company'] ?>" class="rounded">
                </div>
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
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</body>

</html>
