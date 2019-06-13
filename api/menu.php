<?php

$listList = [
    'homeInfo'   => [
        'title' => '首页',
        'icon'  => '&#xe634;',
        'href'  => 'page/welcome.html?t=1',
    ],
    'moduleInfo' => [
        'ceshi'   => [
            'title' => '测试管理',
            'icon'  => '&#xe634;',
            'list'  => [
                [
                    'title'  => '按钮列表',
                    'href'   => 'page/button.html?t=2',
                    'icon'   => '&#xe634;',
                    'target' => '_self',
                ],
                [
                    'title'    => 'UI管理',
                    'href'     => '',
                    'icon'     => '&#xe634;',
                    'target'   => '',
                    'child' => [
                        [
                            'title'  => '按钮',
                            'href'   => 'page/button.html?t=3',
                            'icon'   => '&#xe634;',
                            'target' => '_self',
                        ],
                        [
                            'title'  => '表单',
                            'href'   => 'page/form.html?t=4',
                            'icon'   => '&#xe634;',
                            'target' => '_self',
                        ],
                        [
                            'title'  => '弹出层',
                            'href'   => 'page/layer.html?t=5',
                            'icon'   => '&#xe634;',
                            'target' => '_self',
                        ],
                        [
                            'title'  => '静态表格',
                            'href'   => 'page/table.html?t=6',
                            'icon'   => '&#xe634;',
                            'target' => '_self',
                        ],
                    ],
                ],
                [
                    'title'    => '测试无限层',
                    'href'     => '',
                    'icon'     => '&#xe634;',
                    'target'   => '',
                    'child' => [
                        [
                            'title'    => '按钮1',
                            'href'     => 'page/button.html?t=7',
                            'icon'     => '&#xe634;',
                            'target'   => '_self',
                            'child' => [
                                [
                                    'title'    => '按钮2',
                                    'href'     => 'page/button.html?t=8',
                                    'icon'     => '&#xe634;',
                                    'target'   => '_self',
                                    'child' => [
                                        [
                                            'title'  => '按钮3',
                                            'href'   => 'page/button.html?t=9',
                                            'icon'   => '&#xe634;',
                                            'target' => '_self',
                                        ],
                                        [
                                            'title'  => '表单4',
                                            'href'   => 'page/form.html?t=10',
                                            'icon'   => '&#xe634;',
                                            'target' => '_self',
                                        ],
                                    ],
                                ],
                                [
                                    'title'  => '表单5',
                                    'href'   => 'page/form.html?t=11',
                                    'icon'   => '&#xe634;',
                                    'target' => '_self',
                                ],
                            ],
                        ],
                        [
                            'title'  => '表单6',
                            'href'   => 'page/form.html?t=12',
                            'icon'   => '&#xe634;',
                            'target' => '_self',
                        ],
                    ],
                ],
            ],
        ],
        'setting' => [
            'title' => '设置管理',
            'icon'  => '&#xe634;',
            'list'  => [
                [
                    'title'  => '按钮列表【setting】',
                    'href'   => 'page/button.html?t=13',
                    'icon'   => '&#xe634;',
                    'target' => '_self',
                ],
                [
                    'title'    => 'UI管理【setting】',
                    'href'     => '',
                    'icon'     => '&#xe634;',
                    'target'   => '',
                    'child' => [
                        [
                            'title'  => '按钮',
                            'href'   => 'page/button.html?t=14',
                            'icon'   => '&#xe634;',
                            'target' => '_self',
                        ],
                        [
                            'title'  => '表单',
                            'href'   => 'page/form.html?t=15',
                            'icon'   => '&#xe634;',
                            'target' => '_self',
                        ],
                        [
                            'title'  => '弹出层',
                            'href'   => 'page/layer.html?t=16',
                            'icon'   => '&#xe634;',
                            'target' => '_self',
                        ],
                        [
                            'title'  => '静态表格',
                            'href'   => 'page/table.html?t=17',
                            'icon'   => '&#xe634;',
                            'target' => '_self',
                        ],
                    ],
                ],
                [
                    'title'    => '测试无限层【setting】',
                    'href'     => '',
                    'icon'     => '&#xe634;',
                    'target'   => '',
                    'child' => [
                        [
                            'title'    => '按钮1',
                            'href'     => 'page/button.html?t=18',
                            'icon'     => '&#xe634;',
                            'target'   => '_self',
                            'child' => [
                                [
                                    'title'    => '按钮2',
                                    'href'     => 'page/button.html?t=19',
                                    'icon'     => '&#xe634;',
                                    'target'   => '_self',
                                    'child' => [
                                        [
                                            'title'  => '按钮3',
                                            'href'   => 'page/button.html?t=20',
                                            'icon'   => '&#xe634;',
                                            'target' => '_self',
                                        ],
                                        [
                                            'title'  => '表单4',
                                            'href'   => 'page/form.html?t=21',
                                            'icon'   => '&#xe634;',
                                            'target' => '_self',
                                        ],
                                    ],
                                ],
                                [
                                    'title'  => '表单5',
                                    'href'   => 'page/form.html?t=22',
                                    'icon'   => '&#xe634;',
                                    'target' => '_self',
                                ],
                            ],
                        ],
                        [
                            'title'  => '表单6',
                            'href'   => 'page/form.html?t=23',
                            'icon'   => '&#xe634;',
                            'target' => '_self',
                        ],
                    ],
                ],
            ],
        ],
    ],
];

die(json_encode($listList, JSON_UNESCAPED_UNICODE));