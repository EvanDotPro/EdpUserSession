<?php
return array(
    'di' => array(
        'instance' => array(
            'orm_driver_chain' => array(
                'parameters' => array(
                    'drivers' => array(
                        'edpusersession_annotationdriver' => array(
                            'class'     => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                            'namespace' => 'EdpUserSession\Entity',
                            'paths'     => array(dirname(__DIR__) . '/src/EdpUserSession/Entity'),
                        ),
                    ),
                ),
            ),
        ),
    ),
);
