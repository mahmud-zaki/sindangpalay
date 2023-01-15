<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <div class="logo"><a href="index.html">
                        <!-- <img src="images/logo.png" alt="" /> --><span>Focus</span>
                    </a></div>
                <?php
                $role_id = $this->session->userdata('role_id');
                $queryMenu = "SELECT `user_menu`.`id`, `menu`,`icon` 
                            FROM `user_menu` JOIN `user_access_menu`
                            ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                            WHERE `user_access_menu`.`role_id` = $role_id
                            ORDER BY `user_access_menu`.`menu_id` ASC
                            ";
                $menu = $this->db->query($queryMenu)->result_array();
                ?>
                <?php foreach ($menu as $m) : ?>
                    <ul>
                        <li><a class="sidebar-sub-toggle"><i class="<?= $m['icon'];  ?>"></i><?= $m['menu'];  ?> <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <?php
                                $menuid = $m['id'];
                                $querySubMenu = "SELECT * FROM `user_sub_menu`WHERE `menu_id` = $menuid AND `is_active` = 1";
                                $subMenu = $this->db->query($querySubMenu)->result_array();
                                ?>
                                <?php foreach ($subMenu as $sm) : ?>
                                    <li><a href="<?= base_url($sm['url']); ?>"><?= $sm['nama_menu'];  ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                <?php endforeach; ?>
                <ul>
                    <li>
                        <a href="<?= base_url('auth/logout'); ?>">
                            <i class="ti-power-off"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->