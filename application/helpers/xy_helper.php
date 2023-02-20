<?php
function access_menu_s1(){
    $ci = get_instance();
    $role_id = $ci->session->userdata('role');
    $menuS1 = $ci->uri->segment(1);

    $queryMenu = $ci->db->get_where('menu',['nama' => $menuS1])->row_array();
    $menu_id = $queryMenu['id'];
    $userAccess = $ci->db->get_where('menu_akses',[
        'role_id' => $role_id,
        'menu_id' => $menu_id
    ]);
    if ($userAccess->num_rows() < 1){
        redirect('blocked');
    }
}

function access_menu_s2(){
    $ci = get_instance();
    $role_id = $ci->session->userdata('role');
    $menuS2 = $ci->uri->segment(2);

    $queryMenu = $ci->db->get_where('menu',['nama' => $menuS2])->row_array();
    $menu_id = $queryMenu['id'];
    $userAccess = $ci->db->get_where('menu_akses',[
        'role_id' => $role_id,
        'menu_id' => $menu_id
    ]);

    if ($userAccess->num_rows() < 1){
        redirect('blocked');
    }
}

function is_login(){
    $ci = get_instance();
    if(!$ci->session->userdata('role')){
        redirect('auth/login');
    }
}
