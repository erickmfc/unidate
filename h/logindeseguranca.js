// Para salvar informações de login no Local Storage
localStorage.setItem('username', 'seu_nome_de_usuário');
localStorage.setItem('token', 'seu_token_de_autenticação');

// Para recuperar informações de login do Local Storage
const username = localStorage.getItem('username');
const token = localStorage.getItem('token');

// Para remover informações de login do Local Storage
localStorage.removeItem('username');
localStorage.removeItem('token');
