<?php
class UserController extends UserController
{
public function show()
{
return view('user.show', [
'name' => 'Ксения',
'surname' => 'Радионова',
'title' => 'Профиль пользователя',
'content' => 'Информация о пользователе'
]);
}

public function create()
{
return view('user.create', [
'title' => 'Создание пользователя',
'content' => 'Форма создания нового пользователя'
]);
}

public function edit()
{
return view('user.edit', [
'title' => 'Редактирование профиля',
'content' => 'Форма редактирования профиля'
]);
}
}
?>