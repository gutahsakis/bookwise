<?php 

$livro = (new Database($config['database']))->query("select * from livros where id= :id", Livro::class, ['id' => $_GET['id']])->fetch();

view('livro', compact('livro'));

?>
