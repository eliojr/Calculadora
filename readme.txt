htdocs/
├── public/              # Única pasta acessível pelo navegador
│   ├── css/             # Arquivos .css
│   ├── js/              # Arquivos .js
│   ├── img/             # Imagens e ícones
│   └── index.php        # O "coração" que inicia tudo
├── src/                 # "Source" - Onde fica sua lógica (Privado)
│   ├── Models/          # Classes que lidam com SQL
│   ├── Views/           # Arquivos de template HTML
│   └── Controllers/     # Lógica que une Model e View
├── config/              # Configurações (Banco de dados, senhas)
├── includes/            # Trechos repetidos (header.php, footer.php)
├── storage/             # Uploads de usuários ou Logs
└── .htaccess            # Configurações do Servidor (Apache)
