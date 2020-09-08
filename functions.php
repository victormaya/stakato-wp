<?php 

function get_field($key, $page_id = 0) {
  $id = $page_id !== 0 ? $page_id : get_the_ID();
  return get_post_meta($id, $key, true);
}

function the_field($key, $page_id = 0) {
  echo get_field($key, $page_id);
}

add_action('cmb2_admin_init', 'cmb2_fields_home');

function cmb2_fields_home() {
  // CAIXAS
  $editaveis_home = new_cmb2_box([
    'id' => 'home_box',
    'title' => 'Home',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ],
  ]);
  $editaveis_cursos = new_cmb2_box([
    'id' => 'cursos_box',
    'title' => 'Cursos',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-cursos.php',
    ],
  ]);
    //repetidor
  $cursos = $editaveis_cursos->add_field([
    'name' => 'Cursos',
    'id' => 'cursos',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Curso {#}',
      'add_button' => 'Adicionar Curso',
      'remove_button' => 'Remover Curso',
      'sortable' => true,
    ],
  ]);
    //campos do repetidor

    $editaveis_cursos->add_group_field($cursos, [
      'name' => 'Foto do Curso',
      'id' => 'foto_curso',
      'type' => 'file',
      'options' => [
      'url' => false,
      ]
    ]);
    $editaveis_cursos->add_group_field($cursos, [
      'name'=>'Nome do Curso',
      'id'=>'nome_curso',
      'type'=>'text',
    ]);
    $editaveis_cursos->add_group_field($cursos, [
      'name'=>'Descrição do Curso',
      'id'=>'desc_curso',
      'type'=>'textarea',
    ]);
    // CAMPOS
  $editaveis_home->add_field([
    'name'=>'Titulo do Site',
    'id'=>'titulo_site',
    'type'=>'text',

  ]);

  $editaveis_home->add_field([
    'name' => 'Foto Curso 1',
    'id' => 'foto_curso_1',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);
  $editaveis_home->add_field([
    'name' => 'Foto Curso 2',
    'id' => 'foto_curso_2',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);
  $editaveis_home->add_field([
    'name' => 'Foto Curso 3',
    'id' => 'foto_curso_3',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);
  $editaveis_home->add_field([
    'name' => 'Foto Curso 4',
    'id' => 'foto_curso_4',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);
  $editaveis_home->add_field([
    'name' => 'Foto Curso 5',
    'id' => 'foto_curso_5',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);
  $editaveis_home->add_field([
    'name' => 'Foto Curso 6',
    'id' => 'foto_curso_6',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);
  $editaveis_home->add_field([
    'name'=>'chamada',
    'id'=>'chamada',
    'type'=>'text',
    'description' => 'texto para chamada do botão cursos'
  ]);
  $editaveis_home->add_field([
    'name'=>'Numero de Contato 1',
    'id'=>'contato1',
    'type'=>'text',
  ]);
  $editaveis_home->add_field([
    'name'=>'Numero de Contato 2',
    'id'=>'contato2',
    'type'=>'text',
  ]);
  $editaveis_home->add_field([
    'name'=>'Rua',
    'id'=>'rua',
    'type'=>'text',
  ]);
  $editaveis_home->add_field([
    'name'=>'Cidade - Estado - País',
    'id'=>'cidade',
    'type'=>'text',
  ]);
  $editaveis_home->add_field([
    'name'=>'Link Do Facebook',
    'id'=>'facebook',
    'type'=>'text',
  ]);
  $editaveis_home->add_field([
    'name'=>'Link Do Instagram',
    'id'=>'instagram',
    'type'=>'text',
  ]);
  $editaveis_home->add_field([
    'name'=>'Link Do Youtube',
    'id'=>'youtube',
    'type'=>'text',
  ]);

  
}

?>

